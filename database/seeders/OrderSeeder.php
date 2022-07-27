<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed all orders
        DB::table('orders')->insert([
            'id' => 1000,
            'amount' => 131,
            'latitude' => 25.274882,
            'longitude' => 51.507095,
            'date' => '2022-06-11',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1001,
            'amount' => 131,
            'latitude' => 25.265234,
            'longitude' => 51.522032,
            'date' => '2022-06-12',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1002,
            'amount' => 131,
            'latitude' => 25.286266,
            'longitude' => 51.476368,
            'date' => '2022-06-13',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1003,
            'amount' => 131,
            'latitude' => 25.299964,
            'longitude' => 51.498987,
            'date' => '2022-06-14',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1004,
            'amount' => 131,
            'latitude' => 25.285687,
            'longitude' => 51.460151,
            'date' => '2022-06-15',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1005,
            'amount' => 131,
            'latitude' => 25.246321,
            'longitude' => 51.527367,
            'date' => '2022-06-16',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1006,
            'amount' => 131,
            'latitude' => 25.312310,
            'longitude' => 51.487037,
            'date' => '2022-06-17',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1007,
            'amount' => 131,
            'latitude' => 25.266423,
            'longitude' => 51.529322,
            'date' => '2022-06-18',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1008,
            'amount' => 131,
            'latitude' => 25.289116,
            'longitude' => 51.457089,
            'date' => '2022-06-19',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1009,
            'amount' => 131,
            'latitude' => 25.276781,
            'longitude' => 51.448141,
            'date' => '2022-06-20',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1010,
            'amount' => 131,
            'latitude' => 25.303836,
            'longitude' => 51.463836,
            'date' => '2022-06-21',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1011,
            'amount' => 131,
            'latitude' => 25.326437,
            'longitude' => 51.533926,
            'date' => '2022-06-22',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1012,
            'amount' => 131,
            'latitude' => 25.324033,
            'longitude' => 51.516902,
            'date' => '2022-06-23',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1013,
            'amount' => 131,
            'latitude' => 25.233100,
            'longitude' => 51.492352,
            'date' => '2022-06-24',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1014,
            'amount' => 131,
            'latitude' => 25.253891,
            'longitude' => 51.519859,
            'date' => '2022-06-25',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1015,
            'amount' => 131,
            'latitude' => 25.363578,
            'longitude' => 51.495743,
            'date' => '2022-06-26',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1016,
            'amount' => 131,
            'latitude' => 25.331908,
            'longitude' => 51.464468,
            'date' => '2022-06-27',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1017,
            'amount' => 131,
            'latitude' => 25.281833,
            'longitude' => 51.542845,
            'date' => '2022-06-28',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1018,
            'amount' => 131,
            'latitude' => 25.281833,
            'longitude' => 51.447512,
            'date' => '2022-06-29',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1019,
            'amount' => 131,
            'latitude' => 25.327140,
            'longitude' => 51.455801,
            'date' => '2022-06-30',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);









        DB::table('orders')->insert([
            'id' => 1020,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-01',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1021,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-02',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1022,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-03',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1023,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-04',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1024,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-05',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1025,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-06',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1026,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-07',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1027,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-08',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1028,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-09',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1029,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-10',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1030,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-11',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1031,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-12',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1032,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-13',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1033,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-14',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1034,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-14',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1035,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-14',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1036,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-15',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1037,
            'amount' => 131,
            'latitude' => 25.341444,
            'longitude' => 51.520990,
            'date' => '2022-06-16',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);




        
        DB::table('orders')->insert([
            'id' => 1038,
            'amount' => 131,
            'latitude' => 25.354044,
            'longitude' => 51.523627,
            'date' => '2022-06-11',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1039,
            'amount' => 131,
            'latitude' => 25.337698,
            'longitude' => 51.475772,
            'date' => '2022-06-12',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1040,
            'amount' => 131,
            'latitude' => 25.319987,
            'longitude' => 51.462207,
            'date' => '2022-06-13',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1041,
            'amount' => 131,
            'latitude' => 25.360854,
            'longitude' => 51.458816,
            'date' => '2022-06-14',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1042,
            'amount' => 131,
            'latitude' => 25.356087,
            'longitude' => 51.515337,
            'date' => '2022-06-15',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1043,
            'amount' => 131,
            'latitude' => 25.367664,
            'longitude' => 51.498381,
            'date' => '2022-06-16',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1044,
            'amount' => 131,
            'latitude' => 25.356427,
            'longitude' => 51.513830,
            'date' => '2022-06-17',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1045,
            'amount' => 131,
            'latitude' => 25.361875,
            'longitude' => 51.488207,
            'date' => '2022-06-18',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1046,
            'amount' => 131,
            'latitude' => 25.366302,
            'longitude' => 51.501396,
            'date' => '2022-06-19',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1047,
            'amount' => 131,
            'latitude' => 25.356768,
            'longitude' => 51.478410,
            'date' => '2022-06-20',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1048,
            'amount' => 131,
            'latitude' => 25.362556,
            'longitude' => 51.565076,
            'date' => '2022-06-21',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1049,
            'amount' => 131,
            'latitude' => 25.309087,
            'longitude' => 51.457309,
            'date' => '2022-06-22',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1050,
            'amount' => 131,
            'latitude' => 25.321690,
            'longitude' => 51.492352,
            'date' => '2022-06-23',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1051,
            'amount' => 131,
            'latitude' => 25.326118,
            'longitude' => 51.475396,
            'date' => '2022-06-24',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1052,
            'amount' => 131,
            'latitude' => 25.316581,
            'longitude' => 51.458439,
            'date' => '2022-06-25',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1053,
            'amount' => 131,
            'latitude' => 25.305402,
            'longitude' => 51.447310,
            'date' => '2022-06-26',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1054,
            'amount' => 131,
            'latitude' => 25.329566,
            'longitude' => 51.424672,
            'date' => '2022-06-27',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1055,
            'amount' => 131,
            'latitude' => 25.357038,
            'longitude' => 51.462000,
            'date' => '2022-06-28',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1056,
            'amount' => 131,
            'latitude' => 25.365435,
            'longitude' => 51.464992,
            'date' => '2022-06-29',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1057,
            'amount' => 131,
            'latitude' => 25.394773,
            'longitude' => 51.484380,
            'date' => '2022-06-30',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);





        DB::table('orders')->insert([
            'id' => 1058,
            'amount' => 131,
            'latitude' => 25.402686,
            'longitude' => 51.443144,
            'date' => '2022-06-01',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1059,
            'amount' => 131,
            'latitude' => 25.341319,
            'longitude' => 51.450151,
            'date' => '2022-06-02',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1060,
            'amount' => 131,
            'latitude' => 25.372615,
            'longitude' => 51.430207,
            'date' => '2022-06-03',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1061,
            'amount' => 131,
            'latitude' => 25.312086,
            'longitude' => 51.450421,
            'date' => '2022-06-04',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('orders')->insert([
            'id' => 1062,
            'amount' => 131,
            'latitude' => 25.326094,
            'longitude' => 51.538282,
            'date' => '2022-06-05',
            'status' => 'delivered',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
