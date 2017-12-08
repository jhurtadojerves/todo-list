<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::where('user_id', Auth::user()->id)
            ->orderBy('updated_at', 'DESC')
            ->paginate(10);
        return view('todos.home', compact('todos'));
    }

    public function show(Todo $todo, $slug)
    {
        return view('todos.show');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $todo = new Todo($request->all());

        auth()->user()->todos()->save($todo);

        return $this->redirect($todo->url);


    }

    public function redirect()
    {
        return redirect('/', 301);
    }
}
