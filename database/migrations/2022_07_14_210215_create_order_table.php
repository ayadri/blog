<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->foreign('categorie_id')
                    ->references('id')->on('categorie')->onDelete('cascade');

                    $table->unsignedBigInteger('produit_id')->nullable();
                    $table->foreign('produit_id')
                            ->references('id')->on('produit')->onDelete('cascade');
            $table->integer('quantity');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
