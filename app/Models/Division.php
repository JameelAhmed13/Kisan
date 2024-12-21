<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $table = 'division';
    protected $primaryKey = ['divisionID'];
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['name','provinceID'];

    public function province(){
        return $this->belongsTo('App\Models\Province', 'provinceID', 'provinceID');
    }

    public function districts(){
        return $this->hasMany('App\Models\District', 'divisionID', 'divisionID');
    }
}
