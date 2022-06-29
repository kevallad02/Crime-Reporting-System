<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Todocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos=Todo::all();
        return view('todo_list',compact(['todos']));
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->is_admin) 
        {
        $todo=new Todo();
        $todo->fname=$request->fname;
        $todo->lname=$request->lname;
        $todo->email=$request->email;
        $todo->phone=$request->phone;
        $todo->save();
        return redirect()->back();
        }
        else
        {
            return redirect()->back()->with(['msg'=>'This User Is Not Admin']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->is_admin)
        {
        $todo=Todo::find($id);
        return view('edit',compact(['todo']));
        }
        else
        {
            return redirect()->back()->with(['msg'=>'This User Is Not Admin']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::user()->is_admin)
        {
        $todo=Todo::find($id);
        $todo->fname=$request->fname;
        $todo->lname=$request->lname;
        $todo->email=$request->email;
        $todo->phone=$request->phone;
        $todo->update();
        return redirect()->route('todo.index');
        }
        else
        {
            return redirect()->back()->with(['msg'=>'This User Is Not Admin']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->is_admin)
        { 
        $todo=Todo::find($id);
        $todo->delete();
        return redirect()->route('todo.index');
        }
        else
        {
            return redirect()->back()->with(['msg'=>'This User Is Not Admin']);
        }
    }
}
