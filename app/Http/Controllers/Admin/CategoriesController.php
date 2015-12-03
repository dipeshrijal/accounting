<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest as Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{
    private $category;
    
    function __construct(Category $category) 
    {
        $this->category = $category;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() 
    {
        $categories = $this->category->all();
        
        return view('admin.categories.index', compact('categories'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() 
    {
        return view('admin.categories.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) 
    {
        $this->category->create($request->all());
        
        return redirect()->route('admin.categories.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) 
    {
        
        //
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) 
    {
        $category = $this->category->findOrFail($id);
        
        return view('admin.categories.edit', compact('category'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) 
    {
        $this->category->find($id)->update($request->all());
        
        return redirect()->route('admin.categories.index');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) 
    {
        
        //
        
    }
}
