<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Repository;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageController extends Controller
{
    use RefreshDatabase;
    
    public function home(){
        return view('welcome' , [
            'repositories' => Repository::latest()->get()
        ]);
    }
}
