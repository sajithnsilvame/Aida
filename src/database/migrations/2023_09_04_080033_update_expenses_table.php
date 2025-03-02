<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('expenses') && Schema::hasColumn('expenses', 'amount')) {
            DB::statement("ALTER TABLE expenses MODIFY amount double(16,2) DEFAULT 0");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('expenses') && Schema::hasColumn('expenses', 'amount')) {
            DB::statement("ALTER TABLE expenses MODIFY amount double(8,2) DEFAULT 0");
        }
    }
};
