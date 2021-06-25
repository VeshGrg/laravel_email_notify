<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Dailytransaction extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['company','user_id', 'share_id', 'type', 'op_price','cl_price', 'tot_transaction', 'turnover'];

    public function shares()
    {
        return $this->hasMany(Share::class, 'id', 'share_id');
    }


}
