<?php
namespace App\Exports;
use App\Models\Loser;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class LoserExport implements FromCollection,WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Loser::all();
    }


    
    public function headings(): array
    {
        return [
             'board', 'security', 'ref_price', 'open_price', 'high_price', 'low_price', 'last_price', 'close_price', 'change_price', 'change_percentage', 'security_name'
        ];
    }


    public function map($row): array
    {
        return [
            $row['board'],
            $row['security'],
            $row['ref_price'],
            $row['open_price'],
            $row['high_price'],
            $row['low_price'],
            $row['last_price'],
            $row['close_price'],
            $row['change_price'],
            $row['change_percentage'],
            $row['security_name'],
        ];
    }



}
