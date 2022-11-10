<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            ['nom' => 'Coding School'
            ],
            ['nom' => 'Marketing School'
            ],
            ['nom' => 'Technical School'
            ],
            ['nom' => 'Auditor School'
            ],
            ['nom' => 'Medical School'
            ],
            ['nom' => 'Ingenering School'
            ],
            ['nom' => 'Logical School'
            ],
            ['nom' => 'Science School'
            ],
            ['nom' => 'Data School'
            ],
            ['nom' => 'Smart School'
            ],
        
        ]);
        
    }
}
