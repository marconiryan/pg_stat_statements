<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueryStat extends Model
{
    use HasFactory;

    protected $table = 'pg_stat_statements';
}
