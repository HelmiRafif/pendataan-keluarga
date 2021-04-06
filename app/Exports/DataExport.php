<?php

namespace App\Exports;

// use App\Models\Kependudukan;
// use App\Models\Kb;
// use App\Models\Pembangunan;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DataExport implements FromArray, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $download;

    public function __construct(array $download)
    {
        $this->download = $download;
    }
    public function headings(): array
    {
        return [
            'Alamat',
            'RT',
            'No Hp',
            'Nama Anggota Keluarga',
            'NIK',
            'Jenis Kelamin',
            'Tanggal Lahir',
            'Status Perkakwinan',
            'Usia Kawin pertama',
            'Memiliki Akta Lahir',
            'Hubungan dengan Kepala Keluarga',
            'Kode Ibu Kandung',
            'Agama',
            'Status Pekerjaan',
            'Pendidikan',
            'Kepesertaan JKN / Askes',
            'Keberadaan (1 tahun terakhir)',

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
            'Kapan mulai menggunakan (terakhir)',
            'Kapan berhenti menggunakan (terakhir)',
            'Alasan Utama tidak pakai KB',
            'Jenis alat/obat/cara KB yang dipakai terakhir',
            'Sumber mendapatkan pelayanan alat/obat/cara KB terakhir',
            'mendapat informasi tentang Jenis-jenis alat/obat/cara KB',
            'mendapat informasi tentang Efek samping alat/obat/cara KB',
            'mendapat informasi tentang Yang harus dilakukan apabila mengalami efek samping',

            'III_1',
            'III_2',
            'III_3',
            'III_3a',
            'III_3b',
            'III_3c',
            'III_3d',
            'III_4',
            'III_5',
            'III_6',
            'III_7',
            'III_8',
            'III_9',
            'III_10',
            'III_11',
            'III_12',
            'III_13',
            'III_14',
            'III_15',
            'III_16',
            'III_17',
            'III_18a',
            'III_18b',
            'III_18c',
            'III_18d',
            'III_19',
            'III_20',
            'III_21',
            'III_22',
            'III_23',
            'III_24',
            'III_25',
            'III_26',
            'III_27',
            'III_28',
            'III_29',
            'III_30',
            'III_31',
            'III_32',
        ];
    }
    public function array(): array
    {
        return $this->download;
    }
}
