<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'role_id',
        'route_id',
        'status'
    ];
    protected $primarykey = ['role_id','route_id'];
    protected $table = 'permission';
}
