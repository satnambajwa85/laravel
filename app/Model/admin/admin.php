<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public function roles()
    {
        return $this->belongsToMany('App\Model\admin\role','admin_roles')->withTimestamps();
    }
}
