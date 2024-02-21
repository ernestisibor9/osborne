<?php

namespace App\Imports;

use App\Models\Gainer;
use Maatwebsite\Excel\Concerns\ToModel;

class GainersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Gainer([
            'company' =>$row[0],
            'ref_price'=>$row[1],
            'past_close'=>$row[2],
            'open'=>$row[3],
            'high'=>$row[4],
            'low'=>$row[5],
            'close'=>$row[6],
            'change'=>$row[7],
            'change_percentage'=>$row[8],
            'volume'=>$row[9],
            'value'=>$row[10]            


        ]);
    }
}
// $row['company'],
// $row['ref_price'],
// $row['past_close'],
// $row['open'],
// $row['high'],
// $row['low'],
// $row['close'],
// $row['change'],
// $row['change_percentage'],
// $row['volume'],
// $row['value'],