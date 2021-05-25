<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'トピック１',
            'post_dt' => '2021-05-25 12:30:00'
        ];
        DB::table('topics')->insert($param);

        $param = [
            'title' => 'トピック２',
            'post_dt' => '2021-05-26 13:40:00'
        ];
        DB::table('topics')->insert($param);

        $param = [
            'title' => 'トピック３',
            'post_dt' => '2021-05-27 14:50:00'
        ];
        DB::table('topics')->insert($param);
    }
}
