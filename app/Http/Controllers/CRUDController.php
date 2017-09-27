<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CRUDController extends Controller
{
    /**
     * Displays a listing of the resource.
     */
    public function index()
    {
        $cruds = Crud::all()->toArray();
        
        return view('crud.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $crud = new Crud([
          'title' => $request->get('title'),
          'post' => $request->get('post')
        ]);

        $crud->save();
        return redirect('/crud');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $crud = Crud::find($id);
        
        return view('crud.edit', compact('crud','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $crud = Crud::find($id);
        $crud->title = $request->get('title');
        $crud->post = $request->get('post');
        $crud->save();
        return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $crud = Crud::find($id);
		$crud->delete();
		
		return redirect('/crud');
    }
}
