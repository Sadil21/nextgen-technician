<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technician;

class TechniciansTableSeeder extends Seeder
{
    public function run()
    {
        $technicians = [
            [
                'district' => 'District A',
                'town' => 'Town 1',
                'name' => 'John Doe',
                'contact_number' => '123-456-7890',
            ],
            [
                'district' => 'District B',
                'town' => 'Town 2',
                'name' => 'Jane Smith',
                'contact_number' => '234-567-8901',
            ],
            [
                'district' => 'District A',
                'town' => 'Town 3',
                'name' => 'Mike Johnson',
                'contact_number' => '345-678-9012',
            ],
        ];

        foreach ($technicians as $technician) {
            Technician::create($technician);
        }
    }
}
