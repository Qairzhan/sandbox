<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_name'];

    public function get_client(){
        return $this->hasOne(Client::class,'id','client_id');
        // get (client_id) from Model (Order) and search this (Id) in client table;
        // "select * from `clients` where `clients`.`id` = ? and `clients`.`id` is not null"
    }
}
