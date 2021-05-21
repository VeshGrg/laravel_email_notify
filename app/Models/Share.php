<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;
    protected $fillable = ['name_of_company', 'company_type', 'user_id', 'share_no', 'amt'];
}
