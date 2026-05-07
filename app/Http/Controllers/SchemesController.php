<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchemesController extends Controller
{
    public function secondary()
    {
        $levels = [
            [
                'name' => 'FORM 6',
                'badge' => '',
                'subjects' => ['HISTORY', 'KISWAHILI', 'PHYSICS', 'LITERATURE IN ENGLISH', 'ACCOUNTS', 'ADVANCED MATHEMATICS', 'BASIC MATHEMATICS (BAM)', 'BIOLOGY', 'CHEMISTRY', 'COMMERCE', 'COMPUTER SCIENCE', 'ECONOMICS', 'ENGLISH LANGUAGE', 'GENERAL STUDIES', 'GEOGRAPHY']
            ],
            [
                'name' => 'FORM 5',
                'badge' => '(NEW CURRICULUM)',
                'subjects' => ['ACADEMIC COMMUNICATION', 'ACCOUNTS', 'ADVANCED MATHEMATICS', 'BASIC MATHEMATICS (BAM)', 'BIOLOGY', 'BUSINESS STUDIES', 'CHEMISTRY', 'ECONOMICS', 'ENGLISH LANGUAGE', 'LITERATURE IN ENGLISH', 'KISWAHILI LITERATURE', 'GEOGRAPHY', 'TANZANIA HISTORY AND ETHICS', 'COMPUTER SCIENCE', 'HISTORY', 'KISWAHILI', 'PHYSICS', 'THEATRE ARTS']
            ],
            [
                'name' => 'FORM 4',
                'badge' => '',
                'subjects' => ['BASIC MATHEMATICS (BAM)', 'BIBLE KNOWLEDGE', 'BIOLOGY', 'BOOK KEEPING', 'CHEMISTRY', 'CIVICS', 'COMMERCE', 'ENGLISH LANGUAGE', 'LITERATURE IN ENGLISH', 'GEOGRAPHY', 'HISTORY', 'INFORMATION AND COMPUTER STUDIES (ICS)', 'PHYSICS', 'KISWAHILI']
            ],
            [
                'name' => 'FORM 3',
                'badge' => '',
                'subjects' => ['BASIC MATHEMATICS (BAM)', 'BIBLE KNOWLEDGE', 'BIOLOGY', 'BOOK KEEPING', 'CHEMISTRY', 'CIVICS', 'COMMERCE', 'LITERATURE IN ENGLISH', 'ENGLISH LANGUAGE', 'GEOGRAPHY', 'HISTORY', 'INFORMATION AND COMPUTER STUDIES (ICS)', 'PHYSICS', 'KISWAHILI']
            ],
            [
                'name' => 'FORM 2',
                'badge' => '(NEW CURRICULUM)',
                'subjects' => ['RELIGIOUS EDUCATION', 'LIFE SKILLS', 'SPORTS STUDIES', 'BIBLE KNOWLEDGE', 'BASIC MATHEMATICS (BAM)', 'AGRICULTURE', 'ARABIC LANGUAGE', 'BIOLOGY', 'BOOK KEEPING', 'CHEMISTRY', 'COMPUTER SCIENCE', 'ENGLISH LANGUAGE', 'FOOD AND NUTRITION', 'GEOGRAPHY', 'HISTORY', 'TANZANIA HISTORY AND ETHICS', 'KISWAHILI', 'PHYSICS', 'BUSINESS STUDIES']
            ],
            [
                'name' => 'FORM 1',
                'badge' => '(NEW CURRICULUM)',
                'subjects' => ['RELIGIOUS EDUCATION', 'LIFE SKILLS', 'SPORTS STUDIES', 'FOOD AND NUTRITION', 'TANZANIA HISTORY AND ETHICS', 'KISWAHILI', 'CHEMISTRY', 'ARABIC LANGUAGE', 'BIBLE KNOWLEDGE', 'BIOLOGY', 'AGRICULTURE', 'BOOK KEEPING', 'COMPUTER SCIENCE', 'ENGLISH LANGUAGE', 'THEATRE ARTS', 'BUSINESS STUDIES', 'HISTORY', 'BASIC MATHEMATICS (BAM)', 'PHYSICS', 'GEOGRAPHY']
            ]
        ];
        
        return view('schemes.secondary', [
            'title' => 'SECONDARY SCHOOL SCHEMES OF WORK',
            'levels' => $levels
        ]);
    }

    public function primary()
    {
        $levels = [
            [
                'name' => 'STANDARD 7',
                'badge' => '',
                'subjects' => ['KISWAHILI', 'ENGLISH', 'SOCIAL STUDIES (SWAHILI)', 'SCIENCE AND TECHNOLOGY (SWAHILI)', 'MATHEMATICS (SWAHILI)', 'CIVICS AND ETHICS', 'VOCATIONAL SKILLS (SWAHILI)']
            ],
            [
                'name' => 'STANDARD 6',
                'badge' => '(NEW CURRICULUM)',
                'subjects' => ['KISWAHILI', 'ENGLISH', 'SOCIAL STUDIES', 'SCIENCE AND TECHNOLOGY', 'MATHEMATICS', 'CIVIC AND MORAL', 'VOCATIONAL SKILLS']
            ],
            [
                'name' => 'STANDARD 5',
                'badge' => '',
                'subjects' => ['KISWAHILI', 'ENGLISH', 'SOCIAL STUDIES', 'SCIENCE AND TECHNOLOGY', 'MATHEMATICS', 'CIVIC AND MORAL', 'VOCATIONAL SKILLS']
            ],
            [
                'name' => 'STANDARD 4',
                'badge' => '',
                'subjects' => ['KISWAHILI', 'ENGLISH', 'SOCIAL STUDIES (SWAHILI)', 'SCIENCE AND TECHNOLOGY (SWAHILI)', 'MATHEMATICS (SWAHILI)', 'CIVICS AND ETHICS', 'VOCATIONAL SKILLS (SWAHILI)']
            ],
            [
                'name' => 'STANDARD 3',
                'badge' => '(NEW CURRICULUM)',
                'subjects' => ['KISWAHILI', 'ENGLISH', 'SOCIAL STUDIES', 'SCIENCE AND TECHNOLOGY', 'MATHEMATICS', 'CIVIC AND MORAL', 'VOCATIONAL SKILLS']
            ]
        ];

        return view('schemes.primary', [
            'title' => 'PRIMARY SCHOOL SCHEMES OF WORK',
            'levels' => $levels
        ]);
    }

    public function nursery()
    {
        $levels = [
            [
                'name' => 'KINDERGARTEN 2',
                'badge' => '',
                'subjects' => ['NUMBERS', 'ALPHABETS', 'LANGUAGE SKILLS', 'HEALTH AND HYGIENE', 'GAMES AND SPORTS', 'ARTS AND CRAFTS']
            ],
            [
                'name' => 'KINDERGARTEN 1',
                'badge' => '(NEW CURRICULUM)',
                'subjects' => ['PRE-NUMBERS', 'PRE-READING', 'COLORING', 'SINGING', 'SOCIAL SKILLS']
            ]
        ];

        return view('schemes.nursery', [
            'title' => 'NURSERY SCHOOL SCHEMES OF WORK',
            'levels' => $levels
        ]);
    }
}
