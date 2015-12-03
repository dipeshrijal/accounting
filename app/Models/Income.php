<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['income_amount', 'income_description'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function getTotalIncome()
    {
    	$incomes = Income::all();

    	$totalIncome = 0;

        foreach ($incomes as $income) 
        {
            $totalIncome = $totalIncome + $income->income_amount;            
        }

        return $totalIncome;
    }


}
