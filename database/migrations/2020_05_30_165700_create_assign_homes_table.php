<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_homes', function (Blueprint $table) {
            $table->id();
            $table->string('house_no');
            // important details
            $table->string('monthly_rent');
            $table->string('tenant_id');
            $table->string('tenant_name');
            $table->string('deposit');
            $table->string('placement_date');
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
        Schema::dropIfExists('assign_homes');
    }
}
