<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnClasseArbitro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arbitros', function(Blueprint $table) {
            $table->enum('classe', ['A', 'B', 'C', 'D'])->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arbitros', function(Blueprint $table) {
            $table->dropColumn('classe');
        });
    }
}
