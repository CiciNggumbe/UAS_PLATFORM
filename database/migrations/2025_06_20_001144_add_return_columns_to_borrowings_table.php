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
    Schema::table('borrowings', function (Blueprint $table) {
        $table->string('return_status')->nullable()->default('pending');
        $table->date('returned_date')->nullable();
    });
}

    public function down()
{
    Schema::table('borrowings', function (Blueprint $table) {
        $table->dropColumn('return_status');
        $table->dropColumn('returned_date');
    });
}
};
