<?php

use Illuminate\Database\Seeder;
use App\Athlete;
use App\Competition;
use App\Velocity;
use App\Models\Enum\Genre;
use App\Models\Enum\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
      $ath = Athlete::create([
        'name' => 'Carlos',
        'surname' => 'Cebrecos',
        'genre' => Genre::M,
        'role' => 'Velocista',
        'habilities' => '100 mll - 200 mll',
        'license' => 'CT-19433',
        'date_birth' => '1993-08-23',
        'active' => True
      ]);

      Velocity::create([
        'athlete_id' => $ath->id,
        'category' => Category::PR,
        'track' => '200mll',
        'result' => '00:00:21.970',
        'place' => 'San Sebastián',
        'date' => '2013-02-11',
        'field' => 'PC'
      ]);
      
      factory(App\Athlete::class, 12)->create()->each(function ($u){
        $u->velocities()->save(factory(App\Velocity::class)->make());
        $u->competitions()->save(factory(App\Competition::class)->make());
      });
    }
}
