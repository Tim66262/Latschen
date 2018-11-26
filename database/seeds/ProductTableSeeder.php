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
            'name' => 'Yeezy season 1 Turtle Dove',
            'seller_id' => 1,
            'quality' => 'Neu',
            'cardboard' => false,
            'price' => 210,
            'imagePath' => 'https://pmcfootwearnews.files.wordpress.com/2015/11/adidas-yeezy-boost-350-moonrock-1.jpg?w=700&h=437&crop=1',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Yeezy boost season 1 Pirate Black',
            'seller_id' => 1,
            'quality' => 'Leicht gebraucht',
            'cardboard' => true,
            'price' => 140,
            'imagePath' => 'https://www.flightclub.com/media/catalog/product/cache/1/image/1600x1140/9df78eab33525d08d6e5fb8d27136e95/2/0/201122_01.jpg',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Nike Air Max 1',
            'seller_id' => 1,
            'quality' => 'Neu',
            'cardboard' => true,
            'price' => 510,
            'imagePath' => 'https://c.static-nike.com/a/images/t_PDP_1280_v1/f_auto/joweqs6dve6tcp3mxlxz/air-max-1-se-herrenschuh-FWGkxR.jpg',
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Yeezy season 1 Turtle Dove',
            'seller_id' => 1,
            'quality' => 'Defekt',
            'cardboard' => true,
            'price' => 300,
            'imagePath' => 'https://www.flightclub.com/media/catalog/product/cache/1/image/1600x1140/9df78eab33525d08d6e5fb8d27136e95/8/0/800537_1.jpg',
        ]);
        $product->save();
    }
}
