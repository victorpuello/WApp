<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('cities')->delete();
        \App\Models\City::factory(10)->create();
        DB::table('companies')->delete();
        \App\Models\Company::factory(10)->create();
        DB::table('professions')->delete();
        \App\Models\Profession::factory(10)->create();
        DB::table('receptions')->delete();
        \App\Models\Reception::factory(10)->create();
        DB::table('references')->delete();
        \App\Models\Reference::factory(10)->create();
        DB::table('employees')->delete();
        \App\Models\Employee::factory(10)->create();
        DB::table('experiences')->delete();
        DB::table('studies')->delete();
        $this->insertXP();
    }

    private function insertXP()
    {
        $employes = Employee::all();
        foreach ($employes as $employe){
            \App\Models\Experience::factory(4)->create(['employee_id'=>$employe->id]);
            \App\Models\Studie::factory(4)->create(['employee_id'=>$employe->id]);
        }

    }
}
