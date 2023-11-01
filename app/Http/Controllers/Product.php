<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
class Product extends Controller
{
    public function index(){
        $data = productModel::find(1);
        return view('show', ['data'=>$data]);
    }


}
