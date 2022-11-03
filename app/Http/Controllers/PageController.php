<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index() {
        return view('siswa.siswa_edit');
   }

   public function uploadFile(Request $request){

    $data = array();

    $validator = Validator::make($request->all(), [
         'file' => 'required|mimes:png,jpg,jpeg,pdf|max:2048'
    ]);

    if ($validator->fails()) {

        $data['success'] = 0;
        $data['error'] = $validator->errors()->first('file');// Error response

    }else{
         if($request->file('file')) {

             $file = $request->file('file');
             $filename = time().'_'.$file->getClientOriginalName();

              // File upload location
              $location = 'files';

              // Upload file
              $file->move($location,$filename);

              // Response
              $data['success'] = 1;
              $data['message'] = 'Uploaded Successfully!';

         }else{
               // Response
               $data['success'] = 0;
               $data['message'] = 'File not uploaded.'; 
         }
    }

     return response()->json($data);
}
}

