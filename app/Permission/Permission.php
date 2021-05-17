<?php

namespace App\Permission;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = [
        'name','descripcion'
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }

    public function roles(){
        return $this->belongsToMany('App\Permission\Role')->withTimesTamps();
    }
}
