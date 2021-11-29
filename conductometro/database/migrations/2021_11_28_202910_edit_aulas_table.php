<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class EditAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE aulas DROP momento_aula;");
        DB::statement("ALTER TABLE aulas ADD diaDaAula date;");
        DB::statement("ALTER TABLE aulas ADD horas time;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE aulas ADD momento_aula;");
        DB::statement("ALTER TABLE aulas DROP diaDaAula;");
        DB::statement("ALTER TABLE aulas DROP horas ;");

    }
}
