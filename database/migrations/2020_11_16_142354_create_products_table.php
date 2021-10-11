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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('countries')->onDelete('cascade');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->unsignedBigInteger('model_id')->nullable();
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');


            $table->string('sku_prefix');
            $table->string('name');
            $table->float('price');

            $table->string('body_type');
            $table->string('mileage');
            $table->string('transmission');

            $table->string('fuel_type');
            $table->boolean('is_featured')->default(false);
            $table->string('engine_size');

            $table->string('steering_type');
            $table->string('safety_rating');
            $table->string('no_of_seats');
            $table->string('gear_type');

            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            $table->string('phone');

            $table->string('latitude');
            $table->string('longitude');
            $table->string('engine_type');

            $table->string('reg_no');
            $table->string('zip_code');
            $table->string('condition');

            $table->string('address');
            $table->string('brochure');
            $table->text('description');

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->comment('0=Inactive, 1=Active')->default(0);
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
