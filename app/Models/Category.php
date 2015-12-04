<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name', 'category_description'];
    
    public function income() 
    {
        return $this->hasMany('App\Models\Income');
    }

    public function expenditure() 
    {
        return $this->hasMany('App\Models\Expenditure');
    }
}

