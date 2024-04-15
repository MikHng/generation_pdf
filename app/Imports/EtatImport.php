<?php

namespace App\Imports;

use App\Models\Etat;
use Maatwebsite\Excel\Concerns\ToModel;

class EtatImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Etat([
            //
        ]);
    }
}
