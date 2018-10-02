<?php

namespace App\Tenant\Database;

use Illuminate\Support\Facades\DB;
use App\Models\Company;

class DatabaseManager
{
    public function createDatabase(Company $company)
    {
        return DB::statement("
            CREATE DATABASE {$company->bd_database} CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
        ");
    }
}