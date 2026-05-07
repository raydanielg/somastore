<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        return view('seller.materials.index');
    }

    public function create()
    {
        return view('seller.materials.upload');
    }
}
