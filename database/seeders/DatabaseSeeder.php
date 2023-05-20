<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\sondage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create();
        \App\Models\User::factory()->create([
            'nom'=>'DONGMO',
            'prenom'=>'Théo',
            'role_id'=>1,
            'email'=>'terezdongmo.cb@gmail.com',
			'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
			'telephone'=>'237695457498',
            'pays'=>'Cameroun',
            'ville'=>'Yaoundé',
			'association'=>'RITAC',
        ]);
        role::factory()->create();
        role::factory()->create([
            'label'=>'Observateur.trice'
        ]);
        sondage::factory()->create();
    }
}
