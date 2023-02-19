<?php

namespace App\Http\Controllers;

class TestController {
    public function about() {
        // return url('about');


        $name = 'mohammed';
        $age = 29;
        $user = 'mohnaji94';

        // return url('user/'.$name.'/'.$age.'/'.$user);
        return route('userprofile', [$name, $age, $user]);

        // return route('aboutpage');
    }
}
