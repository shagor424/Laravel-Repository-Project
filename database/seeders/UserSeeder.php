<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin password 12345678
        $faker = Faker::create();
        // for super admin panel
        DB::table('users')->insert([
            'name' => 'Ahmed Sagor',
            'email' => 'admin@gmail.com',
            'phone' => $faker->phoneNumber,
            'address' => 'dhaka bangladesh',
            'password' => '$2y$10$OQM1VZtREvUEgga6iJjlN.mJYD7z2e7hjnEHHh6gfSlz7bJCVCHzC',
            'role_id' => 1,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->firstName,
                'role_id' => rand(1,5),
                'email' => $faker->unique()->safeEmail,
                'mobile' => $faker->phoneNumber,
                'address' => $faker->address,
                'status' => rand(1, 3),
                'password' => '$2y$10$OQM1VZtREvUEgga6iJjlN.mJYD7z2e7hjnEHHh6gfSlz7bJCVCHzC',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

          foreach (range(1, 10) as $index) {
            DB::table('customers')->insert([
                'customer_id' => rand(1,10),
                'name' => $faker->firstName,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->unique()->phoneNumber,
                'address' => $faker->address,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

         foreach (range(1, 10) as $index) {
            DB::table('support_teams')->insert([
                'team_name' => $faker->randomElement($array = array('Outdoor Work','Indoor Work','Office Work')),
                'group_name' => $faker->randomElement($array = array('Engineer','Technical','Driver')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

         foreach (range(1, 10) as $index) {
            DB::table('team_members')->insert([
                'suport_team_id' => rand(1,10),
                'user_id' => rand(1,10),
                'team_member_name' => $faker->firstName,
                'team_member_email' => $faker->unique()->safeEmail,
                'team_member_phone' => $faker->unique()->phoneNumber,
                'team_member_job_description' => $faker->paragraph,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

         foreach (range(1, 10) as $index) {
            DB::table('account_charts')->insert([
                'account_name' => $faker->firstName,
                'acount_group' => $faker->firstName,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

         foreach (range(1, 10) as $index) {
            DB::table('account_ledgers')->insert([
                'account_id' => rand(1,10),
                'debit_amount' => rand(100,300),
                'credit_amount' => rand(100,300),
                'date' => Carbon::now(),
                'description' => $faker->paragraph,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

         foreach (range(1, 4) as $index) {
            DB::table('packages')->insert([
                'package_name' => $faker->randomElement($array = array('5mbps','8mbps','10mbps','15mbps')),
                'price' => rand(300,1500),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

          foreach (range(1, 10) as $index) {
            DB::table('bills')->insert([
                'customer_id' => rand(1,10),
                'bill_amount' => rand(500,1500),
                'paid_date' => Carbon::now(),
                'due_date' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

          foreach (range(1, 10) as $index) {
            DB::table('customer_packages')->insert([
                'customer_id' => rand(1,10),
                'package_id' => rand(1,4),
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
     
      foreach (range(1, 10) as $index) {
            DB::table('discounts')->insert([
                'discount_name' => $faker->firstName,
                'percent' => rand(10,80),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        foreach (range(1, 10) as $index) {
            DB::table('coupons')->insert([
                'discount_id' => rand(1,10),
                'coupon_code' => rand(10000,99999),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

         foreach (range(1, 10) as $index) {
            DB::table('reports')->insert([
                'query' => $faker->firstName,
                'search' => $faker->firstName,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

         foreach (range(1, 10) as $index) {
            DB::table('complaints')->insert([
                'customer_id' => rand(1,10),
                'assigned_to' => rand(1,10),
                'complaint_date' => Carbon::now(),
                'resolved_date' => Carbon::now(),
                'complaint_description' => $faker->paragraph,
                'resolution_description' => $faker->paragraph,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        foreach (range(1, 5) as $index) {
            DB::table('roles')->insert([
                'name' =>  $faker->randomElement($array = array('Admin','Sub Admin','Support Member','Team Member','Customer')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        foreach (range(1, 5) as $index) {
            DB::table('permissions')->insert([
                'name' =>  $faker->randomElement($array = array('user_all_data','user_details','user_create','user_edit','user_delete')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        foreach (range(1, 5) as $index) {
            DB::table('role_has_permissions')->insert([
                'permission_id' => rand(1,10),
                'role_id' => rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        foreach (range(1, 5) as $index) {
            DB::table('permissions')->insert([
                'role_id' => rand(1,5),
                'model_type' => 'App\Models\User',
                'model_id' => rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
