<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\GroupData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentId = Group::count() + 1;

        DB::table('group')->insert([
            'id' => $currentId,
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'is_admin' => false,
        ]);

        DB::table('group_data')->insert([
            'id' => GroupData::count() + 1,
            'group_id' => $currentId,
            'team_name' => 'lol',
            'fullname' => 'luxamrown',
            'birth'=> '05-05-05',
            'line_id'=> 'luxamrown',
            'phone_no'=> '08231231233',
            'competition_type'=> 'CTF',
            'regist_date'=>date("Y-m-d",time())
        ]);
    }
}
