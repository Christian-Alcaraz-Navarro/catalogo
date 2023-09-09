<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_product', function (Blueprint $table) {
            $table->foreignId('license_id')->constrained()->default(1);
            $table->foreignId('product_id')->constrained();
            $table->integer('price')->default(0)->comment('default currency => usd');
            $table->string('package_path')->default(null)->nullable();
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
        Schema::dropIfExists('license_product');
    }
}
