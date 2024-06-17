<?php


namespace App\Http\Controllers;


class CarController extends Controller
{
        public function __invoke()
        {
            $cars = [
                  ['name'=>'toyota',
                   'engine'=>3,
                   'model'=>'camry'],

                  ['name'=>'Nissan',
                    'engine'=>2.5,
                    'model'=>'maxima'],

                  ['name'=>'Kia',
                    'engine'=>1.6,
                    'model'=>'Cerato']
        ];
            return $cars;
        }


}
