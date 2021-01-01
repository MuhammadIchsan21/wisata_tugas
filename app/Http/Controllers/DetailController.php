<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $id, $slug)
    {
        // $data = TravelPackage::with(['kategories'])
        //         ->where('kategories_id', $kategories_id)
        //         ->firstOrFail();
        $item = TravelPackage::with(['galleries','kategories'])
                ->where('slug', $slug)
                ->firstOrFail();
        $items = Kategori::with(['travel_package'])
                ->firstOrFail();
        // dd($items);

        // $item = TravelPackage::with([
        //     'galleries', 'kategories',
        // ])->get();
        // dd($item);
        return view('pages.detail', [
            'item' => $item,
            'items' => $items
            // 'data' => $data,
            // 'travel_package' => $travel_package
        ]);
    }
}
