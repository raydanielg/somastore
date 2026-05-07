<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically send an email or save to database
        // For now, we'll just return a success response for the SweetAlert

        return response()->json([
            'status' => 'success',
            'message' => 'Asante kwa kuitafuta Somastore! Tumepokea ujumbe wako na tutakujibu hivi punde.'
        ]);
    }
}
