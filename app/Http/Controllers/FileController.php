<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function countryList(){
        return response()->download(public_path('avatar.png'), 'User Image');
    }

    public function countrySave(Request $request){

        $file_name = 'user.png';
        $path = $request->file('photo')->move(public_path('/'), $file_name);
        $photoUrl = url('/'.$file_name);
        return response()->json(['url' => $photoUrl], 200);

    }
}
