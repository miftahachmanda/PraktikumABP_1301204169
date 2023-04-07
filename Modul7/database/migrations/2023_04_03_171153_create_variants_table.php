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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('processor');
            $table->string('memory');
            $table->string('storage');
            $table->foreignId('product_id')->constrained();
            $table->timestamps();

            $table->integer('product_id');
            $table->foreign('product_id')->references('id_product')->on('product');
        });
    }
    public function product() 
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variants');
    }
};
