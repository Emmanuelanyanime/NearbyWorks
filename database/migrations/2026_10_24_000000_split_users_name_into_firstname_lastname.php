<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * The app stores first and last names in `firstname` / `lastname`, but the original users migration created a single
 * `name` column. A database that was edited by hand already has the new columns, so this does nothing there.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasColumn('users', 'firstname') && Schema::hasColumn('users', 'lastname')) {
            return;
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname')->default('')->after('id');
            $table->string('lastname')->default('')->after('firstname');
        });

        if (Schema::hasColumn('users', 'name')) {
            DB::table('users')->select(['id', 'name'])->orderBy('id')->each(function ($user) {
                [$first, $last] = array_pad(explode(' ', trim($user->name), 2), 2, '');

                DB::table('users')->where('id', $user->id)->update(['firstname' => $first, 'lastname' => $last]);
            });

            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('name');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('users', 'name')) {
            return;
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->default('')->after('id');
        });

        DB::table('users')->select(['id', 'firstname', 'lastname'])->orderBy('id')->each(function ($user) {
            DB::table('users')->where('id', $user->id)->update(['name' => trim($user->firstname.' '.$user->lastname)]);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['firstname', 'lastname']);
        });
    }
};
