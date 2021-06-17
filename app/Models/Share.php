<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;
    protected $fillable = ['name_of_company', 'share_no', 'amt'];

    public function user()
    {
        return $this->belongsToMany(User::class, 'share_user')->withTimestamps();
    }

    public function dailytransaction()
    {
        return $this->hasOne(Dailytransaction::class);
    }
}
