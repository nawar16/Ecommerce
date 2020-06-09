<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\File;
use Storage;

class Upload extends Controller
{
    /*
	'name',
	'size',
	'file',
	'path',
	'full_file',
	'mime_type',
	'file_type',
	'relation_id',
	 */
//$file, $path, $upload_type = 'single', $delete_file = null, $new_name = null, $crud_type = []
     public function upload($data = [])//static for not make new every time we use facade'up'
     {
		 if(array_key_exists('new_name',$data))//in_array()
		 {
			$data['new_name'] = $data['new_name'] === null ? time() : $data['new_name'] ;
		 }
		 if(request()->hasFile($data['file']) && $data['upload_type'] == 'single')
		 {
			//!empty(setting()->logo) ? Storage::delete(setting()->logo) : '';
			//$data['logo'] = request()->file('logo')->store('settings');
			Storage::has($data['delete_file'])?Storage::delete($data['delete_file']):'';
			return request()->file($data['file'])->store($data['path']);
		 }
     }
}
