<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data =[
           [
            'name'=>'Monir HOsstain',
            'batch_id'=>'WDPF',
            'phone'=>'03214569',
            'address'=>'dhaka',
            'ami'=>'dhaka'
            ],
        [
            'name'=>'Hasib',
            'batch_id'=>'WDPF',
            'phone'=>'01236547',
            'address'=>'Gulsan',
            'ami'=>'Gulsan'

        ]
       
       ];
        DB::table('students')->insert($data);
   }
}
