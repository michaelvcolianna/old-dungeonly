<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShadowrunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shadowrunners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            foreach(config('shadowrun.fields') as $group)
            {
                foreach($group as $name => $field)
                {
                    $table->{$field['db']}($name)->nullable();
                }
            }

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shadowrunners');
    }
}
