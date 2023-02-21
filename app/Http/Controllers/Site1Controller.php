<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Complexity\Complexity;

class Site1Controller extends Controller
{
    public function index()
    {
        $name = 'Alma';
        $collage = 'Math';

        // $users = User::all();

        $users = [
            [
                'name' => 'Mohammed',
                'email' => 'moh@gmail.com',
                'phone' => 123,
                'ee' => 'dddd',
            ],
            [
                'name' => 'Ali',
                'email' => 'ali@gmail.com',
                'phone' => 123
            ],
            [
                'name' => 'Manal',
                'email' => 'manal@gmail.com',
                'phone' => 123
            ]
        ];

        // [
        //     'name' => $name,
        //     'collage' => $collage
        // ]

        // return view('index')->with('name', $name)->with('collage', $collage);
        return view('index', compact('name', 'collage', 'users'));
        // return view('index', [
        //     'aaaaaaa' => $myname,
        //     'collage' => $collage
        // ]);
    }
}
