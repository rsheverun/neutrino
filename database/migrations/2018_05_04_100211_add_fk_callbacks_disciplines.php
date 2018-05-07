<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkCallbacksDisciplines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('callbacks_disciplines', function (Blueprint $table) {
            $table->foreign('callback_id')->references('id')->on('callbacks');
            $table->foreign('discipline_id')->references('id')->on('disciplines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('callbacks_disciplines', function (Blueprint $table) {
            $table->dropForeign('callback_id');
            $table->dropForeign('discipline_id');
            /*$table->dropForeign('callbacks_disciplines_callback_id_foregin');
            $table->dropForeign('callbacks_disciplines_discipline_id_foregin');*/
        });
    }
}
