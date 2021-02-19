<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToModel, WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data([
            'dimension' => $row[0],
            'colada' => $row[2],
            'masa_lineal' => $row[5],
            'fy_mpa' => $row[8],
            'fs_mpa' => $row[10],
            'fs_fy' => $row[11],
            'alargamiento' => $row[12],
            'doblado' => $row[27],
            'alturanerv_mm' => $row[32],
            'espacnerv_m' => $row[33],
            'angNerv_mm' => $row[34],
            'gap' => $row[35],
        ]);
    }
}
