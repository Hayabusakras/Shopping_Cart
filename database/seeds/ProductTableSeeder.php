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
    {
        $product = new \App\Product([
            'image' => 'https://www.abebooks.com/images/books/harry-potter/sorcerers-stone.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'image' => 'http://awoiaf.westeros.org/images/thumb/2/24/AStormOfSwords.jpg/200px-AStormOfSwords.jpg',
            'title' => 'A Song of Ice and Fire - A storm of Swords',
            'description' => 'No one is going to survive!',
            'price' => 20
        ]);
        $product->save();
        $product = new \App\Product([
            'image' => 'http://www.isfdb.org/wiki/images/f/fa/THLRDFTHRN2003.jpg',
            'title' => 'Lord of the Rings',
            'description' => 'I found the movies to be better ...',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'image' => 'http://images.gr-assets.com/books/1436732693l/13496.jpg',
            'title' => 'A Song of Ice and Fire - A Game of Thrones',
            'description' => 'No one is going to survive!',
            'price' => 20
        ]);
        $product->save();
        $product = new \App\Product([
            'image' => 'http://awoiaf.westeros.org/images/a/a3/AFeastForCrows.jpg',
            'title' => 'A Song of Ice and Fire - A Feast for Crows',
            'description' => 'Still, no one is going to survive!',
            'price' => 20
        ]);
        $product->save();
    }
}
