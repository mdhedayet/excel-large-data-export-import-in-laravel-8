<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Imports\UsersImport;
use App\Jobs\SaveExcelUser;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        return view('singleexcel');
    }

    public function exportUser(){
        return Excel::download(new UserExport, 'user.xlsx');
    }
    public function importUser(Request $request){

         //Excel::import(new UsersImport, $request->file('file'));
         $path = Storage::putFile('excelFile', $request->file('file'));

         $file = Storage::path($path);

        //  Excel::import(new UsersImport, $file);

         dispatch(new SaveExcelUser($file))->delay(now()->addSeconds(2));

         echo $file;
    }
}
