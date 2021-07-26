<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school';
    protected $fillable = ['name', 'email', 'website', 'logo' ];

    static function SchoolName($id){
        return School::find($id)->get()[0]->name;
    }
}
