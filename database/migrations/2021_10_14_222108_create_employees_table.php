<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('header_id')->nullable();
            $table->unsignedBigInteger('admin_created_id');
            $table->unsignedBigInteger('admin_updated_id');
            $table->text('name');
            $table->text('number');
            $table->text('email');
            $table->float('salary');
            $table->timestamp('employment_date',)->useCurrent();
            $table->timestamps();

            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('header_id')->references('id')->on('employees')->onDelete('set null');
            $table->foreign('admin_created_id')->references('id')->on('users');
            $table->foreign('admin_updated_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
