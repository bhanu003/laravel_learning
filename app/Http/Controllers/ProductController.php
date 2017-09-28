<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
       $products_list = Product::all()->toArray();
        
        return view('products.index', compact('products_list')); 
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
		$this -> validate(request(), [
		  'name' => 'required|min:3',
		  'description' => 'required|min:3',
		  'price' => 'required|min:1',
		  
		]);
        $products_list = new Product([
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'price' => $request->get('price')
        ]);

        $products_list->save();
        return redirect('/products');
    }
	
	public function edit($id)
    {
        $products_list = Product::find($id);
        
        return view('products.edit', compact('products_list','id'));

    }
	
	public function update(Request $request, $id)
    {
        $products_list = Product::find($id);
        $products_list->name = $request->get('name');
        $products_list->description = $request->get('description');
        $products_list->price = $request->get('price');
        $products_list->save();
        return redirect('/products');
    }
	
	public function destroy($id)
    {
      $products_list = Product::find($id);
      $products_list->delete();

      return redirect('/products');
    }



	
}


