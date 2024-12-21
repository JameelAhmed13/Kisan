<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kisan extends Model
{
    use HasFactory;
    protected $table = 'kisan';
    protected $primaryKey = ['kisanID'];
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];
}
