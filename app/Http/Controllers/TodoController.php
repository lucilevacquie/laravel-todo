<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'todo' => 'required'
        ]);

        Todo::create([
            'todo' => $request->todo,
        ]);

        return back();
    }
}
