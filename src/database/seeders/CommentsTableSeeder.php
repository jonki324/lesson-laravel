<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'topic_id' => 1,
            'comment' => 'トピック１コメント１',
            'post_dt' => '2021-05-26 15:00:00'
        ];
        DB::table('comments')->insert($param);

        $param = [
            'topic_id' => 1,
            'comment' => 'トピック１コメント２',
            'post_dt' => '2021-05-26 15:10:00'
        ];
        DB::table('comments')->insert($param);

        $param = [
            'topic_id' => 1,
            'comment' => 'トピック１コメント３',
            'post_dt' => '2021-05-26 15:20:00'
        ];
        DB::table('comments')->insert($param);

        $param = [
            'topic_id' => 2,
            'comment' => 'トピック２コメント１',
            'post_dt' => '2021-05-26 15:30:00'
        ];
        DB::table('comments')->insert($param);

        $param = [
            'topic_id' => 2,
            'comment' => 'トピック２コメント２',
            'post_dt' => '2021-05-26 15:40:00'
        ];
        DB::table('comments')->insert($param);

        $param = [
            'topic_id' => 3,
            'comment' => 'トピック３コメント１',
            'post_dt' => '2021-05-26 15:50:00'
        ];
        DB::table('comments')->insert($param);
    }
}
