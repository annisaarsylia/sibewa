<?php

namespace App\Exports;

use App\Models\BeasiswaUser;
use Maatwebsite\Excel\Concerns\FromCollection;

class beasiswa_usersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BeasiswaUser::all();
    }
}
