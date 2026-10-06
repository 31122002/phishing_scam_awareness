<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScamReport extends Model
{
    protected $fillable = ['input_type', 'input_value', 'risk_level', 'score', 'reasons'];

    protected $casts = ['reasons' => 'array'];
}
