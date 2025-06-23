<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
{
    Schema::table('eleves', function (Blueprint $table) {
        if (!Schema::hasColumn('eleves', 'moyenne_annuelle')) {
            $table->float('moyenne_annuelle')->nullable();
        }
    });
}



    /**
     * Reverse the migrations.
     */
   public function down()
{
    Schema::table('eleves', function (Blueprint $table) {
        if (Schema::hasColumn('eleves', 'moyenne_annuelle')) {
            $table->dropColumn('moyenne_annuelle');
        }
    });
}

};
