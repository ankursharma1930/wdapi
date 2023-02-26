<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        $csvData = fopen(base_path('database/csv/sql.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Category::create([
                    'id' => $data['0'],
                    'parent_id' => $data['1'],
                    'path' => $data['2'],
                    'name' => $data['3']
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
