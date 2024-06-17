<?php


namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\Order;
use App\Models\Student;

class ProductController extends Controller
{
        public function index(){
            $student = Student::find(1);
            $order = Order::find(4);

            dd($student->subjects);
//            dd($client->get_orders);
        }
}
