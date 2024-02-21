<?php

namespace App\Exports;

use App\Models\Gainer;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;



// use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\FromCollection;

class GainerExport implements FromCollection,WithHeadings,WithMapping

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Gainer::all();
    }


    public function headings(): array
    {
        return [
             'company', 'ref_price', 'past_close', 'open', 'high', 'low', 'close', 'change', 'change_percentage', 'volume', 'value'
        ];
    }




    public function map($row): array
    {
        return [
            $row['company'],
            $row['ref_price'],
            $row['past_close'],
            $row['open'],
            $row['high'],
            $row['low'],
            $row['close'],
            $row['change'],
            $row['change_percentage'],
            $row['volume'],
            $row['value'],
        ];
    }
}



// 'company'=>$row[0],
// 'ref_price'=>$row[1],
// 'past_close'=>$row[2],
// 'open'=>$row[3],
// 'high'=>$row[4],
// 'low'=>$row[5],
// 'close'=>$row[6],
// 'change(N:K)'=>$row[7],
// '%change'=>$row[8],
// 'volume'=>$row[9],
// 'value'=>$row[10]     