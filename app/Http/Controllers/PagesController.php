<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'hello to index';
        return view('pages.index',compact('title'));
    }
    public function about(){
        return view('pages.about');
    }
    public function ana(){
        return view('pages.ana');
    }
    public function services() {

        $data = [
            'title' => ' The following services are provided: ',
            'services' => [
                'programming','automation',' web desing'
            ]
            ];
        return view('pages.services')->with($data);
    }
}
