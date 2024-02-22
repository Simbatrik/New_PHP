<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Companies; 
use App\Models\Answers; 
use App\Models\Fields; 
use App\Models\Forms; 
use App\Models\Signatures;
use App\Models\users; 


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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = users::factory(10)->create();
        $companies = Companies::factory(10)->create();
        $fields = Fields::factory(5)->create();
        $forms = Forms::factory(5)->create();
        Answers::factory(10)->create();
        Signatures::factory(4)->create();

        foreach($users as $user)
        {
            $company_id = $companies->random(5)->pluck('id');
            $user->company_id()->attach($company_id); 
        }

        foreach($companies as $company)
        {
            $user_id = $users->random(5)->pluck('id');
            $company->user_id()->attach($user_id); 
        }

        foreach($fields as $field)
        {
            $form_id = $forms->random(5)->pluck('id');
            $field->user_id()->attach($form_id); 
        }

        foreach($forms as $form)
        {
            $company_id = $companies->random(5)->pluck('id');
            $form->company_id()->attach($company_id); 
        }

        foreach($signatures as $signature)
        {
            $user_id = $users->random(5)->pluck('id');
            $signature->user_id()->attach($user_id); 

            $form_id = $forms->random(5)->pluck('id');
            $signature->user_id()->attach($form_id); 
        }
    }
}
