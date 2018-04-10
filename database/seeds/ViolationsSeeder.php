<?php

use Illuminate\Database\Seeder;

class ViolationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // jika ingin membuat data dummy dengan factory
      factory(App\Violation::class, 1000)->create();
    
      // jika ingin membuat data dummy manual
      //
      // DB::table('violations')->insert([
      //   "violation_identinty_number" => "KTP-12345",
      //   "violation_name"	=> "Joko Widodo",
      //   "officer_id"	=> 1,
      //   "status"	=> "NEW"
      // ]);
      //
      // DB::table('violations')->insert([
      //   "violation_identinty_number" => "KTP-67890",
      //   "violation_name"	=> "Prabowo Subianto",
      //   "officer_id"	=> 1,
      //   "status"	=> "NEW"
      // ]);
    }
}
