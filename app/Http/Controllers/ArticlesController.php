<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$articles_list = Articles::latest()->get()->toArray();
        
        return view('articles.index', compact('articles_list')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate(request(), [
		  'title' => 'required|min:3',
		  'body' => 'required|min:3',
		  
		]);
        $articles_list = new Article([
          'title' => $request->get('title'),
          'body' => $request->get('body'),
        ]);

        $articles_list->save();
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles_list = Articles::find($id);
		return view('articles.show', compact('articles_list','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles_list = Articles::find($id);
        
        return view('articles.edit', compact('articles_list','id'));
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
        $articles_list = Product::find($id);
        $articles_list->title = $request->get('title');
        $articles_list->body = $request->get('body');
        $articles_list->save();
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $articles_list = Articles::find($id);
      $articles_list->delete();

      return redirect('/articles');
    }
}
