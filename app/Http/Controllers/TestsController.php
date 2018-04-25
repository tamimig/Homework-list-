<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Session; 

class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tests.index', ['tests' => Test::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate ($request, [

      'title' => 'required',

      'content' => 'required',

      ]) ;

     $test = Test::create([

      'title' => $request->title,

      'content' => $request->content

      ]);

     Session::flash('success', 'Homework created successfully');

     //dd($request->all());

     return redirect()->route('test.create');

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
      $test = Test::find($id);

      return view('tests.edit', ['test'=> Test::find($id) ]);
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
      $this->validate($request, [

              'title' => 'required',

              'content' =>'required'

          ]);


      $test = test::find($id);

      $test->title = $request->title;

      $test->content = $request->content;

      $test->save();

      Session::flash('success', 'Homework Updated successfully');

      return redirect()->route('tests');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $test = Test::find($id);

      $test->delete();

      Session::flash('success', 'The Homework was just deleted');

      return redirect()->back();
    }
}
