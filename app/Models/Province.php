<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'province';
    protected $primaryKey = ['provinceID'];
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['name','countryID'];

    public function country(){
        return $this->belongsTo('App\Models\Country', 'countryID', 'countryID');
    }

    public function divisions(){
        return $this->hasMany('App\Models\Division', 'provinceID', 'provinceID');
    }
}
