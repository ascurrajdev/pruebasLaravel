<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function create(){
        return view('archivos.create');
    }

    public function store(Request $request){
        $archivos = collect([]);
        if($request->hasFile('archivos')){
            foreach($request->archivos as $archivo){
                $archivos->push($archivo->path());
            }
        }
        return $archivos;
    }
}
