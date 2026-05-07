<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function packages()
    {
        $classes = [
            'FORM 1', 'FORM 2', 'FORM 3', 'FORM 4', 'CLASS 7', 'STANDARD 7', 
            'STANDARD 6', 'CLASS 6', 'STANDARD 5', 'CLASS 5', 'STANDARD 4', 
            'CLASS 4', 'STANDARD 3', 'FORM 5'
        ];

        return view('exams.packages', [
            'title' => 'EXAM PACKAGES',
            'classes' => $classes
        ]);
    }

    public function series()
    {
        $levels = [
            [
                'name' => 'FORM 6',
                'subjects' => ['HISTORY', 'KISWAHILI', 'PHYSICS', 'LITERATURE IN ENGLISH', 'ACCOUNTS', 'ADVANCED MATHEMATICS', 'BASIC MATHEMATICS (BAM)', 'BIOLOGY', 'CHEMISTRY', 'COMMERCE', 'COMPUTER SCIENCE', 'ECONOMICS', 'ENGLISH LANGUAGE', 'GENERAL STUDIES', 'GEOGRAPHY']
            ],
            [
                'name' => 'FORM 5',
                'subjects' => ['TANZANIA HISTORY AND ETHICS', 'KISWAHILI', 'PHYSICS', 'HISTORY', 'GEOGRAPHY', 'LITERATURE IN ENGLISH', 'ENGLISH LANGUAGE', 'ECONOMICS', 'COMPUTER SCIENCE', 'CHEMISTRY', 'BUSINESS STUDIES', 'BIOLOGY', 'BASIC MATHEMATICS (BAM)', 'ADVANCED MATHEMATICS', 'ACADEMIC COMMUNICATION']
            ],
            [
                'name' => 'FORM 4',
                'subjects' => ['LITERATURE IN ENGLISH', 'INFORMATION AND COMPUTER STUDIES (ICS)', 'HISTORY', 'GEOGRAPHY', 'BASIC MATHEMATICS (BAM)', 'ENGLISH LANGUAGE', 'COMMERCE', 'CIVICS', 'CHEMISTRY', 'BOOK KEEPING', 'BIOLOGY', 'BIBLE KNOWLEDGE', 'KISWAHILI', 'PHYSICS']
            ],
            [
                'name' => 'FORM 3',
                'subjects' => ['LITERATURE IN ENGLISH', 'INFORMATION AND COMPUTER STUDIES (ICS)', 'HISTORY', 'GEOGRAPHY', 'BASIC MATHEMATICS (BAM)', 'ENGLISH LANGUAGE', 'COMMERCE', 'CIVICS', 'CHEMISTRY', 'BOOK KEEPING', 'BIOLOGY', 'BIBLE KNOWLEDGE', 'KISWAHILI', 'PHYSICS']
            ],
            [
                'name' => 'FORM 2',
                'subjects' => ['RELIGIOUS EDUCATION', 'LIFE SKILLS', 'SPORTS STUDIES', 'BIBLE KNOWLEDGE', 'BASIC MATHEMATICS (BAM)', 'AGRICULTURE', 'ARABIC LANGUAGE', 'BIOLOGY', 'BOOK KEEPING', 'CHEMISTRY', 'COMPUTER SCIENCE', 'ENGLISH LANGUAGE', 'FOOD AND NUTRITION', 'GEOGRAPHY', 'HISTORY', 'TANZANIA HISTORY AND ETHICS', 'KISWAHILI', 'PHYSICS', 'BUSINESS STUDIES']
            ],
            [
                'name' => 'FORM 1',
                'subjects' => ['RELIGIOUS EDUCATION', 'LIFE SKILLS', 'SPORTS STUDIES', 'FOOD AND NUTRITION', 'TANZANIA HISTORY AND ETHICS', 'KISWAHILI', 'CHEMISTRY', 'ARABIC LANGUAGE', 'BIBLE KNOWLEDGE', 'BIOLOGY', 'AGRICULTURE', 'BOOK KEEPING', 'COMPUTER SCIENCE', 'ENGLISH LANGUAGE', 'THEATRE ARTS', 'BUSINESS STUDIES', 'HISTORY', 'BASIC MATHEMATICS (BAM)', 'PHYSICS', 'GEOGRAPHY']
            ]
        ];

        return view('exams.series', [
            'title' => 'SECONDARY EXAM SERIES',
            'levels' => $levels
        ]);
    }

    public function secondary()
    {
        return view('exams.coming_soon', ['title' => 'SECONDARY EXAMS']);
    }

    public function primary()
    {
        $levels = [
            [
                'name' => 'STANDARD 7',
                'subjects' => ['SOCIAL STUDIES', 'SCIENCE & TECHNOLOGY', 'MATHEMATICS', 'ENGLISH', 'CIVICS & MORALS', 'CIVICS AND ETHICS', 'SOCIAL STUDIES (SWAHILI)', 'KISWAHILI', 'MATHEMATICS (SWAHILI)', 'SCIENCE AND TECHNOLOGY (SWAHILI)']
            ],
            [
                'name' => 'STANDARD 6',
                'subjects' => ['VOCATIONAL STUDIES', 'SOCIAL STUDIES', 'SCIENCE & TECHNOLOGY', 'ENGLISH', 'CIVICS & MORALS', 'MATHEMATICS', 'CIVICS AND ETHICS', 'SOCIAL STUDIES (SWAHILI)', 'KISWAHILI', 'MATHEMATICS (SWAHILI)', 'SCIENCE AND TECHNOLOGY (SWAHILI)', 'VOCATIONAL SKILLS']
            ],
            [
                'name' => 'STANDARD 5',
                'subjects' => ['SCIENCE & TECHNOLOGY', 'GEOGRAPHY & ENVIRONMENT', 'ENGLISH', 'CULTURE, SPORTS & ARTS', 'MATHEMATICS', 'CULTURE, ARTS AND SPORTS', 'SCIENCE AND TECHNOLOGY (SWAHILI)', 'KISWAHILI', 'GEOGRAPHY AND ENVIRONMENT (SWAHILI)', 'HISTORY AND ETHICS', 'MATHEMATICS (SWAHILI)']
            ],
            [
                'name' => 'STANDARD 4',
                'subjects' => ['SOCIAL STUDIES', 'SCIENCE & TECHNOLOGY', 'MATHEMATICS', 'ENGLISH', 'CIVICS & MORALS', 'CIVICS AND ETHICS', 'SOCIAL STUDIES (SWAHILI)', 'KISWAHILI', 'MATHEMATICS (SWAHILI)', 'SCIENCE AND TECHNOLOGY (SWAHILI)']
            ],
            [
                'name' => 'STANDARD 3',
                'subjects' => ['SOCIAL STUDIES', 'SCIENCE & TECHNOLOGY', 'MATHEMATICS', 'ENGLISH', 'CIVICS & MORALS', 'CIVICS AND ETHICS', 'SOCIAL STUDIES (SWAHILI)', 'KISWAHILI', 'MATHEMATICS (SWAHILI)', 'SCIENCE AND TECHNOLOGY (SWAHILI)']
            ]
        ];

        return view('exams.primary', [
            'title' => 'PRIMARY EXAM SERIES',
            'levels' => $levels
        ]);
    }

    public function regional()
    {
        $levels = [
            [
                'name' => 'FORM 6',
                'badge' => '(Mock, Pre national, etc.)',
                'subjects' => ['GEOGRAPHY', 'ECONOMICS', 'CHEMISTRY', 'ACCOUNTS', 'KISWAHILI', 'GENERAL STUDIES', 'ENGLISH LANGUAGE', 'HISTORY', 'ADVANCED MATHEMATICS', 'BASIC MATHEMATICS (BAM)', 'BIOLOGY', 'PHYSICS']
            ],
            [
                'name' => 'FORM 4',
                'badge' => '(Mock, Pre national, etc.)',
                'subjects' => ['COMMERCE', 'BOOK KEEPING', 'LITERATURE IN ENGLISH', 'ENGLISH LANGUAGE', 'KISWAHILI', 'CIVICS', 'HISTORY', 'BASIC MATHEMATICS', 'GEOGRAPHY', 'BIOLOGY', 'CHEMISTRY', 'PHYSICS', 'RELIGIOUS EDUCATION', 'BIBLE KNOWLEDGE', 'INFORMATION AND COMPUTER STUDIES (ICS)']
            ],
            [
                'name' => 'FORM 2',
                'badge' => '(Mock, Pre national, etc.)',
                'subjects' => ['TANZANIA HISTORY AND ETHICS', 'GEOGRAPHY', 'BIOLOGY', 'COMMERCE', 'ENGLISH LANGUAGE', 'RELIGIOUS EDUCATION', 'BOOK KEEPING', 'KISWAHILI', 'CIVICS', 'HISTORY', 'INFORMATION AND COMPUTER STUDIES (ICS)', 'BASIC MATHEMATICS', 'CHEMISTRY', 'PHYSICS']
            ]
        ];

        return view('exams.regional', [
            'title' => 'REGIONAL EXAMS',
            'levels' => $levels
        ]);
    }

    public function topical()
    {
        $levels = [
            [
                'name' => 'FORM 4',
                'subjects' => ['CHEMISTRY', 'PHYSICS', 'KISWAHILI', 'CIVICS', 'GEOGRAPHY', 'BIOLOGY', 'BOOK KEEPING', 'COMMERCE', 'HISTORY']
            ],
            [
                'name' => 'FORM 3',
                'subjects' => ['CIVICS', 'GEOGRAPHY', 'BIOLOGY', 'CHEMISTRY', 'PHYSICS', 'BOOK KEEPING', 'COMMERCE', 'HISTORY']
            ],
            [
                'name' => 'FORM 2',
                'subjects' => ['COMMERCE', 'CIVICS', 'GEOGRAPHY', 'BIOLOGY', 'CHEMISTRY', 'PHYSICS', 'BOOK KEEPING', 'HISTORY']
            ],
            [
                'name' => 'FORM 1',
                'subjects' => ['BOOK KEEPING', 'COMMERCE', 'KISWAHILI', 'GEOGRAPHY', 'CHEMISTRY', 'CIVICS', 'HISTORY', 'BIOLOGY', 'PHYSICS']
            ]
        ];

        return view('exams.topical', [
            'title' => 'TOPICAL EXAMS',
            'levels' => $levels
        ]);
    }

    public function practical()
    {
        $levels = [
            [
                'name' => 'FORM 6',
                'subjects' => ['CHEMISTRY', 'BIOLOGY', 'PHYSICS']
            ],
            [
                'name' => 'FORM 4',
                'subjects' => ['CHEMISTRY', 'BIOLOGY', 'PHYSICS']
            ]
        ];

        return view('exams.practical', [
            'title' => 'PRACTICAL EXAMS',
            'levels' => $levels
        ]);
    }
}
