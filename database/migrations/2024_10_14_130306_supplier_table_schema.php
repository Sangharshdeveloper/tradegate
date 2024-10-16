<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $sourceTable = 'sellers';
            $columns = Schema::getColumnListing($sourceTable);

            foreach ($columns as $column) {
                $type = DB::connection()->getDoctrineColumn($sourceTable, $column)->getType()->getName();
                $table->$type($column)->nullable(); // Adjust based on column type
            }
        });
    }

    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
};
