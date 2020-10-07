<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
   
public function index()
{
   $users = Todo::all();
   return view('todos.index')->with('listsubject',$users);
}

public function create()
{
   return view('todos.create');
}
public function store(Request $request)
    {
        $request->validate([
                'subject' => 'required'
            ], [
                'subject.required' => 'subject is required'
            ]);
   
        $input = $request->all();
        $user = Todo::create($input);
    
        return back()->with('success', 'Subject created successfully.');
    }

    public function edit($id)
    {
        $item=Todo::find($id);
        return view('todos.edit')->with('items',$item);

    }
    public function update(Request $request,$id)
    {
        //

        $request->validate([
            'subject'=>'required'
           
        ]);


        $Todo = Todo::find($id);
        $Todo->Subject = $request->get('subject');
        $Todo->update();

        return redirect('/')->with('success', 'Subject updated successfully');
    }
    public function destroy(Request $request,$id)
    {
        $contact = Todo::find($id);
        $contact->delete();
  
        return redirect('/')
                        ->with('success','Subject deleted successfully');
    }
}
