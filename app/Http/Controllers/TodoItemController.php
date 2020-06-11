<?php

namespace App\Http\Controllers;

use App\TodoItem;
use Illuminate\Http\Request;

class TodoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todoItems = TodoItem::all();

        return $todoItems;
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            ]);

        $todoItem = TodoItem::create($request->all());
        
        return ['success' => true, 'message' => 'todo item created'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function show(TodoItem $todoItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoItem $todoItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoItem $todoItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoItem $todoItem)
    {
        //
    }
}
