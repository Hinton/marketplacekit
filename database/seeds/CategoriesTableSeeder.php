<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 0,
                'name' => 'Volunteers',
                'slug' => '',
                'hash' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 1,
                'order' => 0,
                'name' => 'Food shopping',
                'slug' => '',
                'hash' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 1,
                'order' => 1000,
                'name' => 'Other',
                'slug' => '',
                'hash' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),

            3 => 
            array (
                'id' => 4,
                'parent_id' => 0,
                'order' => 0,
                'name' => 'Donations',
                'slug' => '',
                'hash' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 4,
                'order' => 0,
                'name' => 'Visors',
                'slug' => '',
                'hash' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 4,
                'order' => 1000,
                'name' => 'Other',
                'slug' => '',
                'hash' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            6 =>
            array (
                'id' => 7,
                'parent_id' => 1,
                'order' => 1,
                'name' => 'Medical shopping',
                'slug' => '',
                'hash' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
        ));
        
        
    }
}