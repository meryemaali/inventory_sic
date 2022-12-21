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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->enum('secteur', ['SECMAR/CENTRE', 'SECMAR/ZN', 'SECMAR/ZS'])->nullable();
            $table->string('base_rattachement')->nullable();
            $table->enum('type', ['ATL', 'BASE', 'BIMAR', 'DIVISION', 'DPM', 'ECOLE ET CENTRE', 'SECTEUR', 'UNIFLOT'])->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('entities');
    }
};
