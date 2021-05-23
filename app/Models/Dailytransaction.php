<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailytransaction extends Model
{
    use HasFactory;
    protected $fillable = ['company', 'type', 'share_id', 'op_price','cl_price', 'tot_transaction', 'turnover'];

    public function shares()
    {
        return $this->hasOne('App\Models\Share', 'id', 'share_id');
    }

}
