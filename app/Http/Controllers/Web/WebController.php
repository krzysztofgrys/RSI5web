<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;


class WebController extends Controller
{
    public function returnBooks(){

        $url = "api/api/v1/books";
        $data = $this->curl($url);

        if($data == null){
            //brak ksiazek
        }

        return view('library', ['books'=>json_decode($data, true)]);
    }



    public function searchBook(){
        return view('library');

    }
}
