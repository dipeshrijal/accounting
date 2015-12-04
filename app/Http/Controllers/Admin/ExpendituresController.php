<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\ExpenditureRequest as Request;
use App\Http\Controllers\Controller;
use App\Models\Expenditure;
use App\Models\Income;
use App\Models\Category;

class ExpendituresController extends Controller
{
    private $income;
    
    private $expenditure;
    
    private $category;
    
    function __construct(Income $income, Expenditure $expenditure, Category $category) 
    {
        $this->income = $income;
        
        $this->expenditure = $expenditure;
        
        $this->category = $category;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() 
    {
        $expenditures = $this->expenditure->with('category')->get();
        
        $totalExpenditure = $this->expenditure->getTotalExpenditure();
        
        $totalIncome = $this->income->getTotalIncome();
        
        $remainingBalance = $totalIncome - $totalExpenditure;
        
        return view('admin.expenditures.index', compact('expenditures', 'totalExpenditure', 'remainingBalance', 'totalIncome'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() 
    {
        $categories = $this->category->lists('category_name', 'id')->toArray();
        
        return view('admin.expenditures.create', compact('categories'));
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
        
        $expenditure = $category->expenditure()->save(new Expenditure($request->all()));
        
        return redirect()->route('admin.expenditures.index');
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
        $expenditure = $this->expenditure->findOrFail($id);
        
        $categories = $this->category->lists('category_name', 'id')->toArray();
        
        return view('admin.expenditures.edit', compact('expenditure', 'categories'));
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
        $this->expenditure->find($id)->update($request->all());
        
        $expenditure = $this->expenditure->find($id);
        
        $expenditure->update($request->all());
        
        $category = $this->category->find($request->category_id);
        
        $expenditure->category()->associate($category);
        
        $expenditure->save();
        
        return redirect()->route('admin.expenditures.index');
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
