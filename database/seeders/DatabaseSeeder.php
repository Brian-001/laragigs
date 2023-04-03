<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  \App\Models\User::factory(6)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

         Listing::factory(6)->create([
            'user_id' => $user -> id
         ]);

        // Listing::create([
        //     'title'=>'Laravel Senior Developer',
        //     'tags'=>'Laravel, JavaScript',
        //     'company'=>'Acme Corp',
        //     'location'=>'Boston, MA',
        //     'email' => 'karanjabrian001@gmail.com',
        //     'website' => 'https://wwww.karanja.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        //     Hic doloribus odio perspiciatis repellendus dolorum necessitatibus, 
        //     adipisci eius aspernatur quasi in ipsam unde? Cupiditate autem sint 
        //     modi veniam voluptates, perspiciatis fuga!'

        // ]);

        // Listing::create([
        //     'title' => 'Full stack Engineer',
        //     'tags' => 'Laravel, backend, api',
        //     'company'=> 'Stark Industries',
        //     'location' => 'Newyork, NY',
        //     'email' => 'bkanyi@gretsauniversity.co.ke',
        //     'website' => 'https://wwww.karanjaone.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        //     Hic doloribus odio perspiciatis repellendus dolorum necessitatibus, 
        //     adipisci eius aspernatur quasi in ipsam unde? Cupiditate autem sint 
        //     modi veniam voluptates, perspiciatis fuga!'
        // ]);
    }
}
