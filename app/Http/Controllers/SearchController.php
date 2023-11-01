<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;

class SearchController extends Controller
{
    public function search(Request $request) {
        $search = $request->input('search');
        $result = productModel::where('name', 'like', '%' . $search . '%')->get();
        return view('fontend.layout.search', compact('result'));
    }
}
