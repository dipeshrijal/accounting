<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    protected $fillable = ['expenditure_source', 'expenditure_amount', 'expenditure_description'];

    public function getTotalExpenditure()
    {
    	$expenditures = Expenditure::all();

    	$totalExpenditure = 0;

        foreach ($expenditures as $expenditure) 
        {
            $totalExpenditure = $totalExpenditure + $expenditure->expenditure_amount;            
        }

        return $totalExpenditure;
    }
}
