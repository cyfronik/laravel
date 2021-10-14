<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Models\Pages;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pages = Pages::select("*")->where('id', '<', '15')->get();
        $pages = Pages::all();
        //return view('pages.index',compact('pages'));
        return view('pages.index',([
          'pages' => $pages
        ]));
    }


    public function create()
    {
        return view('pages.create');
    }

    public function store(PagesRequest $request)
    {
      $validated = $request->validate([
          'title' => 'required|max:10',
          'description' => 'required',
      ]);

      Pages::create($request->all());
      return redirect('/pages');
    }

    public function edit(Pages $page)
    {
        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pages $page)
    {
        $page->update($request->all());
        return redirect('/pages');
    }


    public function delete(Pages $page)
    {
        //dd($page);
        //$page = Pages::findOrFail($id);
        $page->delete();
        return redirect('/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
