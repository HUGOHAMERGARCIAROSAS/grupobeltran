<?php

namespace App\Permission;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'name', 'slug', 'descripcion','full-access'
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }
    public function permissions(){
        return $this->belongsToMany('App\Permission\Permission')->withTimesTamps();
    }
}
