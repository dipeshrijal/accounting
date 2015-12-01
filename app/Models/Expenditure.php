<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    protected $fillable = ['expenditure_source', 'expenditure_amount', 'expenditure_description'];
}
