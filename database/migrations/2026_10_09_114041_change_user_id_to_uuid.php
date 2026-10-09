<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('ALTER TABLE "user" RENAME COLUMN id TO old_id');
        DB::statement('ALTER TABLE "user" DROP CONSTRAINT "user_pkey"');
        DB::statement('ALTER TABLE "user" ADD COLUMN id UUID');

        $users = DB::table('user')->select('old_id')->get();

        foreach ($users as $user) {
            DB::table('user')
                ->where('old_id', $user->old_id)
                ->update(['id' => (string) Str::uuid()]);
        }

        DB::statement('ALTER TABLE "user" ALTER COLUMN id SET NOT NULL');
        DB::statement('ALTER TABLE "user" ADD PRIMARY KEY (id)');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE "user" DROP CONSTRAINT "user_pkey"');
        DB::statement('ALTER TABLE "user" DROP COLUMN id');
        DB::statement('ALTER TABLE "user" RENAME COLUMN old_id TO id');
        DB::statement('ALTER TABLE "user" ADD PRIMARY KEY (id)');
    }
};