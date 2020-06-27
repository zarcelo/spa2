<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::get();

        return $works;
    }
}
