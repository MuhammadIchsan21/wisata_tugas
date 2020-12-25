<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::with(['galleries'])->get();
        return View('pages.home', [
            'items' => $items
        ]);
    }
}
