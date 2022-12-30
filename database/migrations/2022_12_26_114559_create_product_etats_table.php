<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_etats', function (Blueprint $table) {
            $table->id();
            $table->string('secteur')->nullable();
            $table->string('base_rattachement')->nullable();
            $table->string('type')->nullable();
            $table->integer('entity_id');
            $table->integer('category_id');
            $table->integer('product_id');
            $table->string('serial_number')->nullable();
            $table->string('service')->nullable();
            $table->string('etat')->nullable();
            $table->string('ref_avarie')->nullable();
            $table->string('ref_irreparable')->nullable();
            $table->string('ref_remise')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('product_etats');
    }
};
