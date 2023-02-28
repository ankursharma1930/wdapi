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
        //Category::truncate();
        $csvData = fopen(base_path('database/csv/category_data.csv'), 'r');
        $transRow = true;
        $item = [];
        while (($data = fgetcsv($csvData, 555555, ',')) !== false) {
            if (!$transRow) {
                $item['id'] = $data['0'];
                $item['parent_id'] = $data['1'];
                $item['path'] = $data['2'];
                $item['name'] = $data['3'];
                $item['link_to'] = @$data['7'];
                $item['link_filter'] = @$data['8'];

                Category::updateOrCreate(['id' => $item['id']], $item);
                // Category::create([
                //     //'id' => $data['0'],
                //     'parent_id' => $data['1'],
                //     'path' => $data['2'],
                //     'name' => $data['3']
                // ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
