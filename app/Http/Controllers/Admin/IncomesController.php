<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\IncomeRequest as Request;
use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\Category;

class IncomesController extends Controller
{
    private $category;
    
    private $income;
    
    function __construct(Category $category, Income $income) 
    {
        $this->category = $category;
        
        $this->income = $income;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() 
    {
        $incomes = $this->income->with('category')->get();
        
        $totalIncome = $this->income->getTotalIncome();
        
        return view('admin.incomes.index', compact('incomes', 'totalIncome'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() 
    {
        $categories = $this->category->lists('category_name', 'id')->toArray();
        
        return view('admin.incomes.create', compact('categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) 
    {
        $category = $this->category->find($request->category_id);
        
        $income = $category->income()->save(new Income($request->all()));
        
        return redirect()->route('admin.incomes.index');
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
        $income = $this->income->findOrFail($id);
        
        $categories = $this->category->lists('category_name', 'id')->toArray();
        
        return view('admin.incomes.edit', compact('income', 'categories'));
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
        $this->income->find($id)->update($request->all());
        
        return redirect()->route('admin.incomes.index');
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
