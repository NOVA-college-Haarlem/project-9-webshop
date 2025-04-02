<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    public function home()
    {
        return view('customerservice.index');
    }

   
    
}
