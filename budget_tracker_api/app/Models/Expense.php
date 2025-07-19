<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //protected $table = 'expenses';
    protected $fillable = ['description', 'category', 'amount', 'date', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
