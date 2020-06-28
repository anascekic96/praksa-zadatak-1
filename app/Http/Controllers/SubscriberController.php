<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function show()
    {
        return view("$first_name + ");
    }


        public function store($first_name, $last_name, $email){
        'first_name'=DB::Subscriber($first_name)->where ('first_name', $first_name)->firstOrFail();
        'last_name'=\\DB::Subscriber( $last_name)->where ('last_name', $last_name)->firstOrFail();
        'email'= \\DB::Subscriber($email)->where ('email', $email)->firstOrFail();
    }


}
