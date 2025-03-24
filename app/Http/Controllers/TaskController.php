<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TaskController extends Controller
{
    private $tasks = [
        [
            'id' => 1,
            'name' => 'Task 1',
            'description' => 'This is Task 1'
        ],
        [
            'id' => 2,
            'name' => 'Task 2',
            'description' => 'This is Task 2'
        ],
        [
            'id' => 3,
            'name' => 'Task 3',
            'description' => 'This is Task 3'
        ],
        [
            'id' => 4,
            'name' => 'Task 4',
            'description' => 'This is Task 4'
        ],
        [
            'id' => 5,
            'name' => 'Task 5',
            'description' => 'This is Task 5'
        ],
        [
            'id' => 6,
            'name' => 'Task 6',
            'description' => 'This is Task 6'
        ],
        [
            'id' => 7,
            'name' => 'Task 7',
            'description' => 'This is Task 7'
        ],
        [
            'id' => 8,
            'name' => 'Task 8',
            'description' => 'This is Task 8'
        ],
        [
            'id' => 9,
            'name' => 'Task 9',
            'description' => 'This is Task 9'
        ],
        [
            'id' => 10,
            'name' => 'Task 10',
            'description' => 'This is Task 10'
        ]

    ];

    function index() {
        return response()->json($this->tasks);
    }

    function show($taskId) {
        $actualTask = $taskId - 1;
        if($taskId <= 0 || $taskId > count($this->tasks)) {
            abort(404);
        }
        $task = $this->tasks[$actualTask];
        return response()->json($task);
    }

    function demo() {
        return response(redirect("/tasks"));
    }
    function download() {
        //return response()->file("rabbilVai1.webp");
        //return response()->download("rabbilVai1.webp");
        return view('demo');
    }




}
