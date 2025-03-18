<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //class ProduitController extends Controller
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = category::All();
        return response()->json(["message", "$categories"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        //
        category::create($request->name);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(category $id)
    {
        //
        $categorie = category::findOrFail($id);
        return response()->json(["message", $categorie]);
    }


     * Update the specified resource in storage.
     */
    public function update( $request)
    {
        //
        $category = category::findOrFail($id);
        $category->update()->all();
        return response()->json(["message", "$categorie"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) 
    {
        $category = category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index');
}
}

