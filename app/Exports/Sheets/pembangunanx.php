<?php
namespace App\Exports\Sheets;

use App\Models\Pembangunan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class pembangunanx implements FromView, WithTitle
{
    public function view(): View
    {
        return view('dashboard-pembangunan', [
            'dashboard' => Pembangunan::all()
        ]);
    }
    public function title(): string
    {
        return 'Pembangunan';
    }
}