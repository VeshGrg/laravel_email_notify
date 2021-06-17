<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailytransaction extends Model
{
    use HasFactory;
    protected $fillable = ['company','user_id', 'share_id', 'type', 'op_price','cl_price', 'tot_transaction', 'turnover'];

    public function shares()
    {
        return $this->hasMany(Share::class, 'id', 'share_id');
    }


}
