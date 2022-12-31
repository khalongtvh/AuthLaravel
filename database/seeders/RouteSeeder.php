<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('routes')->insert([
            'route_name'=>'landingPage',   
            'route_title' => 'Trang Chủ'
        ]);
        
        DB::table('routes')->insert([
            'route_name'=>'category',   
            'route_title' => 'Xem danh mục'
        ]);
        
        DB::table('routes')->insert([
            'route_name'=>'book',   
            'route_title' => 'Xem sách'
        ]);
        
        DB::table('routes')->insert([
            'route_name'=>'bookCreate',   
            'route_title' => 'Thêm Sách'
        ]);

        DB::table('routes')->insert([
            'route_name'=>'order',   
            'route_title' => 'Đặt Hàng'
        ]);
        
    }
}
