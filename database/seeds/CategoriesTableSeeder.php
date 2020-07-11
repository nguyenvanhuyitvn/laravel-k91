<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            ['id'=>1,'name'=>'Áo nam', 'slug'=>'ao-nam','parent_id'=>0],
            ['id'=>2,'name'=>'Áo nữ', 'slug'=>'ao-nu','parent_id'=>0],
            ['id'=>3,'name'=>'Áo phông nam', 'slug'=>'ao-phong-nam','parent_id'=>1],
            ['id'=>4,'name'=>'Áo phông nữ', 'slug'=>'ao-phong-nu','parent_id'=>1],
        ]);
    }
}
