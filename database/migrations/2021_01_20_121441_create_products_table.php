<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->nullable()->default('');
            $table->string('description')->nullable()->default('');
            $table->integer('price')->nullable()->default(0);
            $table->integer('quantity')->nullable()->default(0);
            $table->string('excerpt')->nullable()->default('');
            $table->string('image')->nullable()->default('');
            $table->string('faculty')->nullable()->default('');
            $table->string('semester')->nullable()->default('');
            $table->string('publication')->nullable()->default('');
            $table->string('edition')->nullable()->default('');
            $table->string('university')->nullable()->default('');
            $table->string('discount')->nullable()->default('');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
