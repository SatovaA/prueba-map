<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $table = 'routes';

    protected $primaryKey='idRoute';

    protected $fillable = [
        'idRoute',
        'idCity',
        'latitude',
        'length',
        'status',
    ];
}
