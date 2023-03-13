<?php

namespace App\Http\Controllers;

use App\Models\Product\ProductSet;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function welcome()
    {
        $productSets = ProductSet::query()->limit(5)->get();
        return view('welcome', ['productSets' => $productSets]);
    }

}
