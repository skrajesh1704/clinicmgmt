<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => " Home",

        ];
        
        return view("homeView", $data);
        
    }
    public function about(){
        $data = [
            'page_title' => " About",
        ];

        return view("aboutView", $data);
    }

    public function patients(){
        $data = [
            'page_title' => " Patients List",
        ];

        return view("patientsView", $data);
    }

    public function reports(){
        $data = [
            'page_title' => "Reports List",
        ];
        return view("reportsView", $data);
    }

    public function doctors(){
        $data = [
            'page_title' => "Doctors List",
        ];
        return view("doctorsView", $data);
    }

}
