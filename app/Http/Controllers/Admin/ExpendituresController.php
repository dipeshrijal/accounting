<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Expenditure;
use App\Models\Income;

class ExpendituresController extends Controller
{
    // private $income;

    // function __construct(Income $income) {
    //     $this->income = $income;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Expenditure $expenditure, Income $income)
    {
        $expenditures = $expenditure->all();

        $totalExpenditure = $expenditure->getTotalExpenditure();

        $totalIncome = $income->getTotalIncome();

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
        return view('admin.expenditures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Expenditure::create($request->all());

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
        $expenditure = Expenditure::findOrFail($id);

        return view('admin.expenditures.edit', compact('expenditure'));
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
        Expenditure::find($id)->update($request->all());

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
