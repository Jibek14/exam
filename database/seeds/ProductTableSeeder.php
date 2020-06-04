<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   for($i=1;$i<11;$i++)
        \Illuminate\Support\Facades\DB::table('product')->insert([
            'title' => 'Product '.$i,
            'price' =>rand(5000,35800),
            'in_stock'=>1,
            'description'=>'Вот и наступило долгожданное лето, а значит, и сезон платьев официально объявляется открытым. Соблазнительные мини и облегающие силуэты оставьте для романтических свиданий и вечерних выходов, а вот на каждый день делайте ставку на летящие ткани и свободные модели. '
        ]);
    }
}
