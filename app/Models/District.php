<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = 'district';
    protected $primaryKey = 'districtID';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['name','divisionID'];

    public function division(){
        return $this->belongsTo('App\Models\Division', 'divisionID', 'divisionID');
    }

    public function tehsils(){
        return $this->hasMany('App\Models\Tehsil', 'districtID', 'districtID');
    }


}
