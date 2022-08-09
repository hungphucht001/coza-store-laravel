<?php

namespace App\Http\Services\Database;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseService
{
    public function addColDeteledAt($table_name){
        Schema::table($table_name, function (Blueprint $table) {
            $table->softDeletes();
        });
    }
}
