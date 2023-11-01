<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request) {
        $search = $request->input('search');
        $result = Product::where('name', 'like', '%' . $search . '%')->get();
        return view('fontend.layout.search', compact('search', $result));
    }
}
