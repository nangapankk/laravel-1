<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description');
            $table->string('category');
            $table->decimal('buy', 12, 2)->default(0);
            $table->decimal('sell', 12, 2)->default(0);
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedBigInteger('supllier_id');
            $table->string('image_url');
            $table->timestamps();

            $table->foreign('supllier_id')->references('id')
                ->on('supllier')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
