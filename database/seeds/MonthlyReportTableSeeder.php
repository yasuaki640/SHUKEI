<?php

use Illuminate\Database\Seeder;
use \App\MonthlyReport;

class MonthlyReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MonthlyReport::class, 10)
            ->create();
    }
}
