<?php

use App\Models\TrainModel;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    

    public function run()
    {

        $trains = [
            [
            'color' => "red",
            'date' => '12/01/21',
            'wagons' => '10',
            'racing' => 12,
            'status' => false
            ],
        ];

       foreach ($trains as $elem){
            $newTrain = new TrainModel();
            $newTrain->color = $elem['color'];
            $newTrain->date = $elem['date'];
            $newTrain->wagons = $elem['wagons'];
            $newTrain->racing = $elem['racing'];
            $newTrain->status = $elem['status'];
            $newTrain->save();
       }
    }
}
