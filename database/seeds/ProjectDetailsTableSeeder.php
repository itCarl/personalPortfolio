<?php

use Illuminate\Database\Seeder;
use App\Models\ProjectDetailModel;

class ProjectDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProjectDetailModel::class, 10)->create();
    }
}
