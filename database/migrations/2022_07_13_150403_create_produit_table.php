<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('name');
            $table->float('price');
            $table->text('description');
            $table->integer('unite');
            $table->date('date_exp');

            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->foreign('categorie_id')
                    ->references('id')->on('categorie')->onDelete('cascade');

            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')
                    ->references('id')->on('supplier')->onDelete('cascade');

            $table->unsignedBigInteger('shelf_id');
            $table->foreign('shelf_id')
                    ->references('id')->on('shelf')->onDelete('cascade');

            $table->string('picture');
            $table->integer('stock');
            $table->float('solde');
            $table->integer('barcode');
            $table->string('notes');
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
        Schema::dropIfExists('produit');
    }
}
