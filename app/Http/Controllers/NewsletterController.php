<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters,email',
        ], [
            'email.required' => 'Tafadhali weka barua pepe yako.',
            'email.email' => 'Barua pepe uliyoweka si sahihi.',
            'email.unique' => 'Barua pepe hii tayari imesajiliwa kwenye mfumo wetu.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ], 422);
        }

        Newsletter::create([
            'email' => $request->email
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Asante! Umefanikiwa kujiunga na jarida letu la habari.'
        ]);
    }
}
