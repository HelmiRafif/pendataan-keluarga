<?php

namespace App\Exports;

use App\Models\Kependudukan;
use App\Models\Kb;
use App\Models\Pembangunan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DataExport implements FromArray, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $rekap;

    public function __construct(array $rekap)
    {
        $this->rekap = $rekap;
    }
    public function headings(): array
    {
        return [
            'Berapa kali melahirkan',
            'Anak Lahir Hidup Laki-laki',
            'Anak Lahir Hidup Perempuan',
            'Anak Masih Hidup Laki-laki',
            'Anak Masih Hidup Perempuan',
            'Jumlah anak ideal',
            'Apakah Ibu sedang hamil',
            'Usia Kehamilan',
            'Apakah memang ingin hamil saat itu',
            'Apakah ibu menginginkan anak lagi',
            'Saat ini Ibu / Suami menggunakan alat/obat/cara KB (kontrasepsi) ',
            'Kapan mulai menggunakan alat/obat KB',
            'dalam 12 bulan terakhir Ibu / Suami "PERNAH" menggunakan akat/obat/cara KB (kontrasepsi)',
            'Kapan mulai menggunakan',
            'Kapan berhenti menggunakan',
        ];
    }
    public function array(): array
    {
        return $this->rekap;
    }
}
