<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonPlansController extends Controller
{
    public function secondary()
    {
        $levels = [
            [
                'name' => 'FORM 6',
                'badge' => '',
                'subjects' => ['BIOLOGY', 'CHEMISTRY', 'COMMERCE', 'GEOGRAPHY', 'ECONOMICS', 'ENGLISH LANGUAGE', 'PHYSICS', 'HISTORY', 'KISWAHILI', 'GENERAL STUDIES', 'MATHEMATICS']
            ],
            [
                'name' => 'FORM 5',
                'badge' => '(NEW CURRICULUM)',
                'subjects' => ['BIOLOGY', 'CHEMISTRY', 'COMMERCE', 'GEOGRAPHY', 'ECONOMICS', 'ENGLISH LANGUAGE', 'PHYSICS', 'HISTORY', 'KISWAHILI', 'GENERAL STUDIES', 'MATHEMATICS']
            ],
            [
                'name' => 'FORM 4',
                'badge' => '',
                'subjects' => ['BIOLOGY', 'CHEMISTRY', 'COMMERCE', 'GEOGRAPHY', 'CIVICS', 'ENGLISH LANGUAGE', 'PHYSICS', 'HISTORY', 'KISWAHILI', 'BASIC MATHEMATICS']
            ],
            [
                'name' => 'FORM 3',
                'badge' => '',
                'subjects' => ['BIOLOGY', 'CHEMISTRY', 'COMMERCE', 'GEOGRAPHY', 'CIVICS', 'ENGLISH LANGUAGE', 'PHYSICS', 'HISTORY', 'KISWAHILI', 'BASIC MATHEMATICS']
            ],
            [
                'name' => 'FORM 2',
                'badge' => '(NEW CURRICULUM)',
                'subjects' => ['BIOLOGY', 'CHEMISTRY', 'COMMERCE', 'GEOGRAPHY', 'CIVICS', 'ENGLISH LANGUAGE', 'PHYSICS', 'HISTORY', 'KISWAHILI', 'BASIC MATHEMATICS']
            ],
            [
                'name' => 'FORM 1',
                'badge' => '(NEW CURRICULUM)',
                'subjects' => ['BIOLOGY', 'CHEMISTRY', 'COMMERCE', 'GEOGRAPHY', 'CIVICS', 'ENGLISH LANGUAGE', 'PHYSICS', 'HISTORY', 'KISWAHILI', 'BASIC MATHEMATICS']
            ]
        ];

        return view('lesson_plans.secondary', [
            'title' => 'SECONDARY SCHOOL LESSON PLANS',
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

        return view('lesson_plans.primary', [
            'title' => 'PRIMARY SCHOOL LESSON PLANS',
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

        return view('lesson_plans.nursery', [
            'title' => 'NURSERY SCHOOL LESSON PLANS',
            'levels' => $levels
        ]);
    }
}
