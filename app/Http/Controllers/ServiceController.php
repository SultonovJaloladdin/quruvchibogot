<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'DESC')
                        ->limit(6)
                        ->get();

        return view('service', compact('services'));   
    }
}
