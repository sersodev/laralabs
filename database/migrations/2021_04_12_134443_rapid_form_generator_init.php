<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RapidFormGeneratorInit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfg_form', function (Blueprint $table)
        {
            $table->id();
            $table->string('tablename');
            $table->string('description');
            $table->string('type')->nullable($value = true);
        });

        Schema::create('rfg_form_fields', function (Blueprint $table)
        {
            $table->id();
            $table->int('formID');
            $table->string('htmltype');
            $table->string('type');
            $table->string('name');
            $table->string('value')->nullable($value = true);
            $table->string('id')->nullable($value = true);
            $table->string('placeholder')->nullable($value = true);
            $table->string('options')->nullable($value = true);
        });

        Schema::create('options', function (Blueprint $table)
        {
            $table->id();
            $table->int('inputID');
            $table->string('name');
            $table->string('value');
            $table->string('id')->nullable($value = true);
            $table->string('placeholder')->nullable($value = true);
            $table->string('options')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
