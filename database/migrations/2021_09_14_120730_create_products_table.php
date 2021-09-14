<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('img');
            $table->string('price');

            $table->timestamps();
        });

        $products = [
            [ 'id' => 1 ,
              'title' => 'JR Surfboards The Donny Stoker Yellow/Green Rail Fade' ,
              'img' => 'img/tavola-surf.png',
              'price' => '499'
            ],
            [ 'id' => 2 ,
              'title' => 'CBC California Board Company White/Brown Rail Fade' ,
              'img' => 'img/tavola-surf2.png',
              'price' => '699'
            ],
            [ 'id' => 3 ,
              'title' => 'Soft top surfboard Olan 100 8 Red/Gray Rail Fade' ,
              'img' => 'img/tavola-surf3.png',
              'price' => '1099'
            ]
        ];

        foreach ($products as $product) {
            Product::create([
                'id' => $product['id'],
                'title' => $product['title'],
                'img' => $product['img'],
                'price' => $product['price'],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
