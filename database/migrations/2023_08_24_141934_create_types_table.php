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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            //SUPPORTI 
            $table->boolean('mobile');
            $table->boolean('tablet');
            $table->boolean('pc');
            $table->boolean('smart_tv');
            //FINE SUPPORTI
            //SISTEMI OPERATIVI
            $table->boolean('android');
            $table->boolean('ios');
            $table->boolean('windows');
            $table->boolean('mac');
            $table->boolean('linux');
            //FINE SISTEMI OPERATIVI
            $table->boolean('age_protection');
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
        Schema::dropIfExists('types');
    }
};
