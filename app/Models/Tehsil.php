<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tehsil extends Model
{
    use HasFactory;
    protected $table = 'tehsil';
    protected $primaryKey = 'tehsilID';
    public $incrementing = false;
    protected $fillable = ['name','districtID', 'status', 'deleted_at'];

    public function district(){
        return $this->belongsTo('App\Models\District', 'districtID', 'districtID');
    }

    public function ucs(){
        return $this->hasMany('App\Models\Uc', 'tehsilID', 'tehsilID');
    }
}
