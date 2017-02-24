<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\FileList;
use DB;
use Illuminate\Support\Facades\Input;

class FilesController extends Controller {

    
    public function index() {
        $file_lists = DB::table('file_lists')->latest()->get();
       foreach($file_lists as $file_list){
           $files_play_list = json_decode($file_list->list);
       }

        return view('ourwork', compact('files_play_list'));
    }
    
    public function store() {
        $fileName = Input::file('file')->getClientOriginalName();
        $tmpName =  Input::file('file')->getFilename();
        $fileSize = Input::file('file')->getClientSize();
        $fileType =  Input::file('file')->getClientMimeType();

         Input::file('file')->move('video',Input::file('file')->getClientOriginalName());

        File::create([
            'name' => $fileName,
            'size' => $fileSize,
            'type' => $fileType,
            'version' => 1,
            'branch_id' => request('branch_id')
        ]);

        return back();
    }

}
