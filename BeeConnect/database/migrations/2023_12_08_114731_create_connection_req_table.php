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
        Schema::create('connection_req', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('user_id')->index('user_id');
            $table->integer('connector_id')->index('connector_id');
            $table->enum('status', ['Accepted', 'Rejected', 'Pending']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('connection_req');
    }
};
