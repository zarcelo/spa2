<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statistic;

class StatisticController extends Controller
{
    public function index()
    {
        $statistics = Statistic::get();

        return $statistics;
    }
}
