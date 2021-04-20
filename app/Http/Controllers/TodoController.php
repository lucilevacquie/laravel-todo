<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'todo' => 'max:100'
        ]);

        Todo::create([
            'todo' => $request->todo,
        ]);

        return redirect(url()->previous());
    }
}
