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
            'status'=>1,
        ]);

        return redirect(url()->previous());
    }

    public function todoToDoing(Request $request)
    {
        foreach($request->todo as $id){
            $todo = Todo::find($id);
            $todo->status = 2;
            $todo->save();
        }
        return redirect(url()->previous());
    }

    public function doingToDone(Request $request)
    {
        foreach($request->todo as $id){
            $todo = Todo::find($id);
            $todo->status = 3;
            $todo->save();
        }

        return redirect(url()->previous());
    }

    public function doingToTodo(Request $request)
    {
        foreach($request->todo as $id){
            $todo = Todo::find($id);
            $todo->status = 1;
            $todo->save();
        }

        return redirect(url()->previous());
    }

    public function doneToDoing(Request $request)
    {
        foreach($request->todo as $id){
            $todo = Todo::find($id);
            $todo->status = 2;
            $todo->save();
        }

        return redirect(url()->previous());
    }

    public function destroy(Request $request)
    {

        foreach($request->todo as $id){
            $todo = Todo::find($id);
            Todo::whereIn($id)->delete();
            $todo->save();
        }

        return redirect(url()->previous());
    }

}
