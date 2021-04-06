<?php
namespace App\Exports\Sheets;

use App\Models\Kependudukan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class kependudukanx implements FromView, WithTitle
{
    public function view(): View
    {
        return view('dashboard', [
            'data' => Kependudukan::all()
        ]);
    }
    public function title(): string
    {
        return 'Kependudukan';
    }
}