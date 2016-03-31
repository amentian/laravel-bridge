<?php

namespace Omr\Bridge\Migration;

use Flarum\Database\AbstractMigration;
use Illuminate\Database\Schema\Blueprint;

class AddNameSurnameAndRememberTokenColumnToRadarUsersTable extends AbstractMigration
{
    /**
     * Run the migrations.
     *
     * @info Called when extension is enabled. Never runs twice.
     */
    public function up()
    {
        $this->schema->table('users', function (Blueprint $table) {
            $table->string('name', 100);
            $table->string('surname', 100);
            //$table->string('remember_token', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @info Called using the uninstall button in the admin.
     */
    public function down()
    {
        $this->schema->table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('surname');
            //$table->dropColumn('remember_token');
        });
    }
}
