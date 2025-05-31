<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $dataItems = [
            [
                'address' => 'policy',
                'title' => 'Grosgroup | Политика конфиденциальности',
                'description' => 'Политика конфиденциальности компании Grosgroup'
            ]
        ];

        foreach ($dataItems as $item) {
            DB::table('page_infos')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('page_infos')->where('address', '=', 'policy')->delete();
    }
};
