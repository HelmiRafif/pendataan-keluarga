<?php
namespace App\Exports\Sheets;

use App\Models\Kb;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class kbx implements FromView, WithTitle
{
    public function view(): View
    {
        return view('dashboard', [
            'dashboard' => Kb::all()
        ]);
    }
    public function title(): string
    {
        return 'Kb';
    }
}