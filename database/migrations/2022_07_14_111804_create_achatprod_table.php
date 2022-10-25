<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatprodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achatprod', function (Blueprint $table) {
            $table->id();

            $table->foreignId('achat_id')->nullable()->constrained('achat')->onDelete('set null');

            $table->foreignId('produit_id')->nullable()->constrained('produit')->onDelete('set null');

            $table->integer('quantite');
            $table->integer('prix');
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
        Schema::dropIfExists('achatprod');
    }
}
