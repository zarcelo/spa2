<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::orderby('order', 'DESC')->first();

        return $promos;
    }
}
