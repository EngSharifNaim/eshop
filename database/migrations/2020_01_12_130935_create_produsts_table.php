<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdustsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produsts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('seller_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->string('country');
            $table->string('state');
            $table->string('os');
            $table->string('ram');
            $table->string('access');
            $table->string('username');
            $table->string('detected_server');
            $table->string('detected_hosting');
            $table->string('price');
            $table->string('login');
            $table->string('information');
            $table->string('whm');
            $table->string('ltd');
            $table->string('ssl');
            $table->string('webmail');
            $table->string('attached');
            $table->string('email_domain');
            $table->string('contact_count');

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
        Schema::dropIfExists('produsts');
    }
}
