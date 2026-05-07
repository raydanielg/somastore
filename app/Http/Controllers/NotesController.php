<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        $levels = [
            [
                'name' => 'FORM 6',
                'subjects' => ['ORGANIC CHEMISTRY', 'COMMERCE', 'GEOGRAPHY', 'GENERAL STUDIES', 'HISTORY', 'ENGLISH LANGUAGE', 'ECONOMICS', 'KISWAHILI']
            ],
            [
                'name' => 'FORM 5',
                'subjects' => ['BASIC MATHEMATICS (BAM)', 'ACADEMIC COMMUNICATION', 'CHEMISTRY', 'HISTORY', 'ECONOMICS', 'GENERAL STUDIES', 'PHYSICS', 'ENGLISH LANGUAGE', 'TANZANIA HISTORY AND ETHICS', 'ORGANIC CHEMISTRY', 'GEOGRAPHY', 'BIOLOGY', 'LITERATURE IN ENGLISH', 'KISWAHILI', 'ADVANCED MATHEMATICS']
            ],
            [
                'name' => 'FORM 4',
                'subjects' => ['ENGLISH LANGUAGE', 'PHYSICS', 'BIOLOGY', 'HISTORY', 'CIVICS', 'KISWAHILI', 'COMMERCE']
            ],
            [
                'name' => 'FORM 3',
                'subjects' => ['BIOLOGY', 'CHEMISTRY', 'CIVICS', 'ENGLISH LANGUAGE', 'GEOGRAPHY', 'HISTORY', 'KISWAHILI', 'PHYSICS']
            ],
            [
                'name' => 'FORM 2',
                'subjects' => ['BIOLOGY', 'CHEMISTRY', 'CIVICS', 'ENGLISH LANGUAGE', 'GEOGRAPHY', 'HISTORY', 'KISWAHILI', 'PHYSICS']
            ],
            [
                'name' => 'FORM 1',
                'subjects' => ['BIOLOGY', 'CHEMISTRY', 'CIVICS', 'ENGLISH LANGUAGE', 'GEOGRAPHY', 'HISTORY', 'KISWAHILI', 'PHYSICS']
            ]
        ];

        return view('notes.index', [
            'title' => 'SUBJECT NOTES',
            'levels' => $levels
        ]);
    }
}
