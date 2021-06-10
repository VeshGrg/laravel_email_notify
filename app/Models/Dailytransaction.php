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
//        $share = new Share([
//            'name_of_company' => 'required|in:nabil',
//            'share_no' => '100',
//            'amt' => '1000'
//        ]);
//        return $share;
        return $this->belongsTo(Share::class, 'shareName_id', 'id');
    }


}
