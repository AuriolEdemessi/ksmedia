<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/{timestamp}_create_team_members_table.php

public function up()
{
    Schema::create('team_members', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('role');
        $table->text('description')->nullable();
        $table->string('profile_picture')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('team_members');
}

};
