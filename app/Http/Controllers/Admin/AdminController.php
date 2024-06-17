<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Client;
use App\Models\Image;
use App\Models\Order;
use App\Models\People;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class AdminController extends Controller
{
        public function index()
        {
            $student = Student::find(1);
//            dd($student->subjects()->toSql())
//            /*
//                 if database is null we create new record, otherwise get first record from database
//            */
//
//              $status = Client::all()->isEmpty();
//
//                if( $status === true )
//                {
//                    $arr = ['fullname' => 'ESENOVA DANA',
//                            'phone'    =>  777777777777,
//                            'sex'      =>  'male'];
//
//                    Client::create($arr);
//
//                }elseif( $status === false )
//                {
//                    $first =  Client::first();
//                    dd($first);
//                }


//            $order = Order::find(1);
//            dd($order->get_client()->toSql());

//           $client = Client::find(8);
//           dd($client->get_orders()->toSql());


//            Client::create($arr);
//
//
//
//                dd($first);
//            DefaultUser::create(['username'    =>  $request->username, 'city'  =>  $request->city, 'profile_image' =>  $request->profile_image]);
//            $order = Order::find(1);
//            dd($order->get_client);

//            $client = Client::find(1);
//            dd($client->get_orders);

//            $order = Order::find(1);
//            dd($order->get_client);
//            $video = Video::find(1);
//            $video->polyLikes()->create([
//                'product_name'=> "7777777",
//            ]);

//            $image = Image::find(1);
////            $image->polyLikes()->create([
////                'product_name'=> "7777777",
////            ]);
//            dd($image->polyLikes()->toSql())
            ;

//            $obj = new Animal();
//            $obj->destroy();
//            $all_clients = Client::all();
//
//            foreach ($all_clients as $client){
//                dump($client->get_orders);
//            }

//              $certain_subject = Subject::find(1);
////              dd($certain_subject->students()->toSql());
//            $arr = ['title'=> '111',
//                   'number'=> 12];
//            if (request()->has('age')){
//                $query = People::query()->where('age',request()->age);
//            }
//
//            if (request()->has('job')){
//                $query = People::query()->where('job','like',request()->job);
//            }
//            return $students = $query->get();

            return view('admin.main.index');
        }

        public function oneToMany(){
            return view('admin.main.laravel.one-to-many');
        }

        public function manyToMany(){
            return view('admin.main.laravel.many-to-many');
        }

    public function js(){
        return view('admin.main.js.index');
    }
}
