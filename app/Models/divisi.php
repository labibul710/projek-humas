<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    protected $fillable = ['divisi'];

    public function user(){
        return $this->hasMany(User::class, 'divisi_id');
    }
}
