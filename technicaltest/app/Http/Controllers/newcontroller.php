<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class newcontroller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



public function index()
    {
        $data = [
            'M6' => ['overall' => 34,
                'h&s' => 5,
                'customer' => 6,
                'delivery' => 0],

            'M5' => ['overall' => 50,
                'h&s' => 9,
                'customer' => 6,
                'delivery' => 7],

            'M4' => ['overall' => 18,
                'h&s' => 3,
                'customer' => 6,
                'delivery' => 9],

            'M3' => ['overall' => 27,
                'h&s' => 4,
                'customer' => 6,
                'delivery' => 5],

            'M2' => ['overall' => 27,
                'h&s' => 2,
                'customer' => 6,
                'delivery' => 8],

            'M1' => ['overall' => 21,
                'h&s' => 9,
                'customer' => 9,
                'delivery' => 9],
        ];

     return view('index')->with('data', $data);
    }
}

