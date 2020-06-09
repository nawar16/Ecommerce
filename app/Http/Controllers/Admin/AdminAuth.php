<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Mail\AdminResetPassword;
use Auth;
use DB;
use Mail;
use Carbon\Carbon;
//use Illuminate\Support\Facades\Request;

use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function doLogin(){

        $rememberME = request('rememberme') == 1 ? true : false ;
        if(helAdmin()->attempt(['email' => request('email') , 'password' => request('password')], $rememberME))
        {
            return redirect('admin');
        }else{
            session()->flash('error',trans('admin_incorrect_information_login'));
            return redirect(aurl('login'));
        }
    }
    public function logout(){
        helAdmin()->logout();
        return redirect(aurl('login'));
    }


    //////////////////////////////////////////////////---RESET PW---//////////////////////////////////////////////////
    public function forgot_password(){
        return view('admin/forget_password');
    }
    public function forgot_password_post(){
        $admin = Admin::where('email',request('email'))->first();
        if(!empty($admin))
        {
            $token = app('auth.password.broker')->createToken($admin);
            $data = DB::table('password_resets')->insert([
                'email' => $admin->email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);
            //return new AdminResetPassword(['data' =>$admin, 'token' =>$token]);
            Mail::to($admin->email)->send(new AdminResetPassword(['data' =>$admin, 'token' =>$token]));
            Session()->flash('success',trans('admin.the_link_reset_sent'));
            return back();
        }
        return back();
    }
    public function reset_password($token){
        //scan the token 
        $check_token = DB::table('password_resets')->where('token',$token)
        ->where('created_at', '>', Carbon::now()->subHours(2))->first();
        //dd($check_token);
        if(!empty($check_token))
        {
            return view('admin.reset_password',['data' => $check_token]);

        }
        else
        { 
            return redirect(aurl('forgot/password'));

        }
    }
    public function reset_password_post($token){
        //return request();
        $this->validate(request(), [
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
        ], [], [ //nice name, to show when we alert user in case the input does not validate 
            'password'              => 'Password',
            'password_confirmation' => 'Confirmation Password',
        ]);
        $check_token = DB::table('password_resets')->where('token',$token)
        ->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if(!empty($check_token))
        {
            $admin = Admin::where('email',$check_token->email)
            ->update(['email' => $check_token->email,'password' => bcrypt(request('password'))]);
            DB::table('password_resets')->where('email', request('email'))->delete();//all op related to that email
			helAdmin()->attempt(['email' => $check_token->email, 'password' => request('password')], true);
			return redirect(aurl());
        }else{
            return redirect(aurl('forgot/password'));
        }
    }

}
