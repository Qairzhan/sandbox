<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'fullname',
        'phone',
        'sex',
    ];


//    public function __construct(array $fillable)
//    {
//        parent::__construct($fillable);
//        $this->fillable = $fillable;
//    }


    public function get_orders(){
        return $this->hasMany(Order::class,'client_id','id');
        // get (client_id) from orders table and search this id in clients table
        //"select * from `orders` where `orders`.`client_id` = ? and `orders`.`client_id` is not null"
    }
}
