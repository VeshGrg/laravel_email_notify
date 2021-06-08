<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailytransaction extends Model
{
    use HasFactory;
    protected $fillable = ['company', 'shareName_id', 'type', 'op_price','cl_price', 'tot_transaction', 'turnover'];

    public function shareDetail()
    {
        return $this->hasOne('App\Models\Share', 'id', 'shareName_id');
    }

}
