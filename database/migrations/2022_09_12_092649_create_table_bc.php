<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bon_de_commande', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')
                    ->references('id')->on('supplier')->onDelete('cascade');
            $table->integer('produit')->unsigned();
            $table->unsignedBigInteger('produit_id')->nullable();
            $table->foreign('produit_id')
                    ->references('id')->on('produit')->onDelete('cascade');
            $table->integer('qty');
            $table->date('datec');
            $table->text('client');
            $table->text('paiment');
            $table->integer('echeance');
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
        Schema::table('bon_de_commande', function (Blueprint $table) {
            //
        });
    }
}
