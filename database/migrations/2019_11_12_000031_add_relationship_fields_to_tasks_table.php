<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTasksTable extends Migration
{
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->nullable();

            $table->foreign('status_id', 'status_fk_573641')->references('id')->on('task_statuses');
        });
    }
}
