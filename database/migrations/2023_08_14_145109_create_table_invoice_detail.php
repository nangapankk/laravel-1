<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInvoiceDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedInteger('quantity');
            $table->integer('discount')->default(0);
            $table->decimal('total', 12, 2);
            $table->timestamps();

            $table->foreign('invoice_id')->references('id')
                ->on('invoice')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('product_id')->references('id')
                ->on('product')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_detail');
    }
}
