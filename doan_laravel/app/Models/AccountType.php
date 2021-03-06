<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountType extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='account_type';

    public function accounts(){
        return $this->hasMany('App\Models\Account');
    }
}
