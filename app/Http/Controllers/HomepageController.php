<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'HomePage');
        return view('homepage.index', $data);
    }
}
