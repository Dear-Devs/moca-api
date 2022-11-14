<?php

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->foreignIdFor(User::class)
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignIdFor(Role::class)
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['user_id', 'role_id']);

            $table->softDeletes();
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
        Schema::dropIfExists('user_role');
    }
}
