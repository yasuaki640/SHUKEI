<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MonthlyReport extends Model
{
    protected $dates = ['created_at', 'updated_at',];
    protected $table = 'monthly_report';

}
