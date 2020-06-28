<?php

namespace App\Http\Controllers;

class FormController extends Controller{

    public function store( )
    {
        $validatedfn = $first_name->validate([
            'body' => 'required|unique:posts|max:255',
        ]);
        $validatedln = $last_name->validate([
            'body' => 'required|unique:posts|max:255',
        ]);
        $validatedemail = $email->validate([
            'body' => 'required|unique:posts|max:255',
            'email' => 'email:rfc,dns',
        ]);
    }
        /*public function create($first_name, $last_name, $email){
        'first_name'=\DB::Subscriber($first_name)->where ('first_name', $first_name)->firstOrFail();
        'last_name'=\DB::Subscriber( $last_name)->where ('last_name', $last_name)->firstOrFail();
        'email'= \DB::Subscriber($email)->where ('email', $email)->firstOrFail();
}*/

}
