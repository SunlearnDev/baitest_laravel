<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\productModel;

class Product extends Controller
{
    public function index()
    {
        $data = productModel::all();
        return view("fontend.layout.product", ['data' => $data]);
    }

    public function show($id)
    {
        $data = productModel::find($id);
        return view("fontend.layout.showproduct", ['data' => $data]);
    }
}
