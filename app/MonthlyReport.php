<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonthlyReport extends Model
{
    use SoftDeletes;
    protected $dates = ['created_at', 'updated_at',];
    protected $table = 'monthly_report';
}
