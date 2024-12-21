<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uc extends Model
{
    use HasFactory;
    protected $table = 'uc';
    protected $primaryKey = 'ucID';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['name','tehsilID'];

    public function tehsil(){
        return $this->belongsTo('App\Models\Tehsil', 'tehsilID', 'tehsilID');
    }

}
