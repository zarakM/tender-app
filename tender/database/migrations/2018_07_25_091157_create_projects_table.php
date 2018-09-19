<?php
        
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Client_ref');
            $table->string('assignment');

            $table->integer('country_id');
            $table->integer('province_id');
            $table->integer('c_ities_id');
            $table->integer('staff_id');
            $table->integer('client_id');
            $table->integer('associate_id');
            
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('approx_value_source');
            $table->integer('project_cost');
            $table->string('narrative');
            $table->string('service_staff');
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
        Schema::dropIfExists('projects');
    }
}
