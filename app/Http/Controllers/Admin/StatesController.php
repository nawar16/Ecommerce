<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\StateDatatable;
use Yajra\Datatables\Datatables;
use App\Model\State;


class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StateDatatable $state)
    {
        return $state->render('admin.states.index',['title' => 'State Control']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.states.create', ['title' => trans('admin.create_states')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return request();
            $data = $this->validate(request(),[
                'state_name_ar' => 'required',
                'state_name_en' => 'required',
                'city_id' => 'required|numeric',
                'country_id' => 'required|numeric'
            ],[],[
                'state_name_ar' => trans('admin.state_name_ar'),
                'state_name_en' => trans('admin.state_name_en'),
                'city_id' => trans('admin.city_id'),
                'country_id' => trans('admin.country_id')
            ]);
            State::create($data);
            session()->flash('success',trans('admin.record_added'));
        
        return redirect(aurl('states'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state = State::find($id);
        $title = trans('admin.edit');
        return view('admin.states.edit',compact('state','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $data = $this->validate(request(),[
                'state_name_ar' => 'required',
                'state_name_en' => 'required',
                'city_id' => 'required|numeric',
                'country_id' => 'required|numeric'
            ],[],[
                'state_name_ar' => trans('admin.state_name_ar'),
                'state_name_en' => trans('admin.state_name_en'),
                'city_id' => trans('admin.city_id'),
                'country_id' => trans('admin.country_id')
            ]);
            State::where('id',$id)->update($data);
            session()->flash('success',trans('admin.updated_record'));
        
        return redirect(aurl('states'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        State::find($id)->delete();
        session()->flash('success',trans('admin.deleted_record'));
        return redirect(aurl('states'));
    }

    public function multi_delete()
    {
        if(is_array(request('item')))
        {
            state::destroy(request('item'));
        }else{
            state::find(request('item'))->delete();
        }
        session()->flash('success',trans('admin.deleted_record'));
        
        return redirect(aurl('states'));
    }
}
