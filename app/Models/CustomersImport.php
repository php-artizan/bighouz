<?php

namespace App\Models;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;
use App\Traits\PreventDemoModeChanges;

class CustomersImport implements ToModel, WithHeadingRow
{
    use PreventDemoModeChanges;

    public function model(array $row)
    {
        return new Customer([
           'user_id'     => $row['user_id'],
        ]);
    }
}
