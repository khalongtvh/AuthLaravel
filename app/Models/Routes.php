<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'route_name',
        'route_title',
    ];

    protected $table = 'routes';
}
