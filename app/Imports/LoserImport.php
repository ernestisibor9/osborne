<?php
namespace App\Imports;
use App\Models\Loser;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class LoserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Loser([
            'board' =>$row[0],
            'security' =>$row[1],
            'ref_price' =>$row[2],
            'open_price' =>$row[3],
            'high_price' =>$row[4],
            'low_price' =>$row[5],
            'last_price' =>$row[6],
            'close_price' =>$row[7],
            'change_price' =>$row[8],
            'change_percentage' =>$row[9],
            'security_name' =>$row[10]

        ]);
    }
}

     