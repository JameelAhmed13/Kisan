<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'country';
    protected $primaryKey = ['countryID'];
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['userID','roleID'];

    public function provinces(){
        return $this->hasMany('App\Models\Province', 'countryID', 'countryID');
    }

}
