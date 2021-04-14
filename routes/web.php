<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Kb;
use App\Exports\DataExport;
use App\Models\Kependudukan;
use App\Models\Pembangunan;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $data = Kependudukan::get();
    $id = Auth::user()->id;
    // dd($id);
    if ($id == 1 ) {
        return view('dashboard', compact('data'))->with('i');
    } else {
        return redirect()->route('kependudukan');
    }
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard-kb', function () {
    $data = Kb::get();
    $id = Auth::user()->id;
    if ($id == 1 ) {
        return view('dashboard-kb', compact('data'))->with('i');
    } else {
        return redirect()->route('kependudukan');
    }
})->middleware(['auth'])->name('dashboard-kb');

Route::get('/dashboard-pembangunan', function () {
    $data = Pembangunan::get();
    $id = Auth::user()->id;
    if ($id == 1 ) {
        return view('dashboard-pembangunan', compact('data'))->with('i');
    } else {
        return redirect()->route('kependudukan');
    }
})->middleware(['auth'])->name('dashboard-pembangunan');

Route::get('/kependudukan', function(Request $request) {
    $id = Auth::user()->name;
    $kependudukan = Kependudukan::select()
                ->where('id_keluarga',$id)
                ->get();
    $count = $kependudukan->count();
    // dd($kependudukan);
    return view('kependudukan', compact('kependudukan','count'))->with('i');
})->middleware(['auth'])->name('kependudukan');

Route::get('/kb', function () {
    $name = Auth::user()->name;
    $count = Kb::where('id_keluarga', $name)->count();
    return view('kb', compact('count','name'));
})->middleware(['auth'])->name('kb');


Route::get('/pembangunan-keluarga', function () {
    $id = Auth::user()->name;
    $count = Pembangunan::where('id_keluarga', $id)->count();
    if ($count > 0) {
        return view('selesai');
    } else{
        return view('pembangunan-keluarga');
    }
})->middleware(['auth'])->name('pembangunan-keluarga');

Route::get('/selesai', function () {
    return view('selesai');
})->middleware(['auth'])->name('selesai');

Route::post('kependudukan/store', function (Request $request) {
    $input = $request->all();
    $input['id_keluarga'] = Auth::User()->name;
    // dd($input);
    $input = Kependudukan::create($input);
    return redirect()->route('kependudukan');
})->middleware(['auth'])->name('kependudukan.store');

Route::post('kb/store', function (Request $request) {
    $input['II_4_a'] = "";
    $input['II_5_a'] = "";
    $input['II_5_b'] = "";
    $input['II_8'] = "";
    $input = $request->all();
    // dd($input);
    if ( !isset($input['II_8'])) {
        $input['II_8'] = $input['II_8b'];
    }
    if ( isset($input['II_4_a'])) {
        $input['II_4_a'] = date('m-Y', strtotime($input['II_4_a']));
    }
    if ( isset($input['II_5_a'])) {
        $input['II_5_a'] = date('m-Y', strtotime($input['II_5_a']));
    }
    if ( isset($input['II_5_b'])) {
        $input['II_5_b'] = date('m-Y', strtotime($input['II_5_b']));
    }
    $input['id_keluarga'] = Auth::User()->name;
    $input = Kb::create($input);
    return redirect()->route('pembangunan-keluarga');
})->middleware(['auth'])->name('kb.store');

Route::post('pembangunan/store', function (Request $request) {
    $input['III_32']=array();
    $input['III_30']=array();
    
    $input = $request->all();
    // dd($input);
    $input['III_32']= implode(", ",$input['III_32']);
    $input['III_30']= implode(", ",$input['III_30']);

    $input['id_keluarga'] = Auth::User()->name;
    $input = Pembangunan::create($input);
    return view('selesai');
})->middleware(['auth'])->name('pembangunan.store');

Route::get('download', function(){
    $kependudukan = Kependudukan::leftJoin('kb','kb.id_keluarga','=','kependudukan.id_keluarga')
    ->leftJoin('pembangunan','kb.id_keluarga','=','pembangunan.id_keluarga')
    ->orderBy('kependudukan.id_keluarga','asc')
    -> get();
    $a = [];

    // dd($kependudukan);
    
    foreach($kependudukan as $value) {
        
    // dd($value, $kependudukan);

        $a[] = [
            'Alamat' => $value->Alamat,
            'RT' => $value->rt,
            'No HP' => $value->No_HP,
            'Nama Anggota Keluarga' => $value->I_2,
            'NIK' => $value->I_2a ,
            'Jenis Kelamin' => $value->I_3 ,
            'Tanggal Lahir' => $value->I_456 ,
            'Status Perkakwinan' => $value->I_7 ,
            'Usia Kawin pertama' => $value->I_8 ,
            'Memiliki Akta Lahir' => $value->I_9 ,
            'Hubungan dengan Kepala Keluarga' => $value->I_10 ,
            'Kode Ibu Kandung' => $value->I_11 ,
            'Agama' => $value->I_12 ,
            'Status Pekerjaan' => $value->I_13 ,
            'Pendidikan' => $value->I_14 ,
            'Kepesertaan JKN / Askes' => $value->I_15 ,
            'Keberadaan (1 tahun terakhir)' => $value->I_16 ,
            'Berapa kali melahirkan'=> $value->II_1 ,
            'Anak Lahir Hidup Laki-laki'=> $value->II_1_a_1 ,
            'Anak Lahir Hidup Perempuan'=> $value->II_1_a_2 ,
            'Anak Masih Hidup Laki-laki'=> $value->II_1_b_1 ,
            'Anak Masih Hidup Perempuan'=> $value->II_1_b_2 ,
            'Jumlah anak ideal'=> $value->II_2 ,
            'Apakah Ibu sedang hamil'=> $value->II_3 ,
            'Usia Kehamilan'=> $value->II_3_a ,
            'Apakah memang ingin hamil saat itu'=> $value->II_3_a_1 ,
            'Apakah ibu menginginkan anak lagi'=> $value->II_3_b ,
            'Saat ini Ibu / Suami menggunakan alat/obat/cara KB (kontrasepsi) '=> $value->II_4 ,
            'Kapan mulai menggunakan alat/obat KB'=> $value->II_4_a ,
            'dalam 12 bulan terakhir Ibu / Suami "PERNAH" menggunakan akat/obat/cara KB (kontrasepsi)'=> $value->II_5 ,
            'Kapan mulai menggunakan (terakhir)'=> $value->II_5_a ,
            'Kapan berhenti menggunakan (terakhir)'=> $value->II_5_b ,
            'Alasan Utama tidak pakai KB'=> $value->II_6 ,
            'Jenis alat/obat/cara KB yang dipakai terakhir'=> $value->II_7 ,
            'Sumber mendapatkan pelayanan alat/obat/cara KB terakhir'=> $value->II_8 ,
            'mendapat informasi tentang Jenis-jenis alat/obat/cara KB'=> $value->II_9_a ,
            'mendapat informasi tentang Efek samping alat/obat/cara KB'=> $value->II_9_b ,
            'mendapat informasi tentang Yang harus dilakukan apabila mengalami efek samping'=> $value->II_9_c ,
            'III_1' => $value->III_1,
            'III_2' => $value->III_2,
            'III_3' => $value->III_3,
            'III_3a' => $value->III_3a,
            'III_3b' => $value->III_3b,
            'III_3c' => $value->III_3c,
            'III_3d' => $value->III_3d,
            'III_4' => $value->III_4,
            'III_5' => $value->III_5,
            'III_6' => $value->III_6,
            'III_7' => $value->III_7,
            'III_8' => $value->III_8,
            'III_9' => $value->III_9,
            'III_10' => $value->III_10,
            'III_11' => $value->III_11,
            'III_12' => $value->III_12,
            'III_13' => $value->III_13,
            'III_14' => $value->III_14,
            'III_15' => $value->III_15,
            'III_16' => $value->III_16,
            'III_17' => $value->III_17,
            'III_18a' => $value->III_18a,
            'III_18b' => $value->III_18b,
            'III_18c' => $value->III_18c,
            'III_18d' => $value->III_18d,
            'III_19' => $value->III_19,
            'III_20' => $value->III_20,
            'III_21' => $value->III_21,
            'III_22' => $value->III_22,
            'III_23' => $value->III_23,
            'III_24' => $value->III_24,
            'III_25' => $value->III_25,
            'III_26' => $value->III_26,
            'III_27' => $value->III_27,
            'III_28' => $value->III_28,
            'III_29' => $value->III_29,
            'III_30' => $value->III_30,
            'III_31' => $value->III_31,
            'III_32' => $value->III_32,
        ];
        // dd($a, $kependudukan);
    }
    $export = new DataExport($a);

    return Excel::download($export, 'data posyandu.xlsx');
})->middleware(['auth'])->name('download');

Route::delete('delete/{table}/{id?}', function($table,$id)
{
    if ($table == 'kependudukan') {
        DB::table($table)->where('id',$id)->delete();
    } else {    
        DB::table($table)->where('id_keluarga',$id)->delete();
    }
    if ($table == 'kb') {
        return redirect()->route('dashboard-kb');
    }
    else if ($table == 'pembangunan') {
        return redirect()->route('dashboard-pembangunan');
    }
    else if ($table == 'kependudukan') {
        return redirect()->route('dashboard');
    }
})->middleware(['auth'])->name('delete');


// edit 
Route::get('edit/{table}/{id?}', function($id, $table){
    
    if ($table == 'kependudukan') {
       $data = Kependudukan::find($id);
    } else if ($table == 'kb') {    
        $data= Kb::find($id);
    }
     else if ($table == 'pembangunan') {    
        $data= Pembangunan::find($id);
    }

    if ($table == 'kependudukan') {
        return view('edit-kependudukan', compact('data','id'));
    }
    else if ($table == 'kb') {
        return view('edit-kb', compact('data','id'));
    }
    else if ($table == 'pembangunan') {
        $value_30 = array("Koran / Majalah / Tabloid", 
                    "Televisi / Radio / Videotron",
                    "Facebook / Instagram / Twitter / Whatsapp / Youtube / Website",
                    "Seminar / Pengajian / Ibadat / Workshop / Pertemuan Kelompok Kegiatan");
        $value_32 = array("Pejabat Pemerintah", 
                    "Petugas Keluarga Berencana (PKB/PLKB/Petugas lapangan KB lainnya",
                    "Guru / Dosen",
                    "Tokoh Agama",
                    "Tokoh Masyarakat",
                    "Dokter",
                    "Bidan / Perawat",
                    "Perangkat Desa / Kelurahan",
                    "Kader / IMP");
        $data->III_30 = explode(", ", $data->III_30);
        $data->III_32 = explode(", ", $data->III_32);
        return view('edit-pembangunan', compact('data','id','value_30','value_32'));
    }
})->middleware(['auth'])->name('edit');

// update
Route::patch('update/{table}/{id?}', function(Request $request, $table, $id){
    
    if ($table == 'kependudukan') {
        $data = Kependudukan::find($id);
    } else if ($table == 'kb') {    
        $data= Kb::find($id);
    }
    else if ($table == 'pembangunan') {    
        $data= Pembangunan::find($id);
    }
    
    $input = $request->all();
    if (isset($input['III_30'])) {  
        $input['III_30'] = implode(", ", $input['III_30']);
    } else $input['III_30'] = null;
    if (isset($input['III_32'])) {  
        $input['III_32'] = implode(", ", $input['III_32']);
    } else $input['III_32'] = null;
    
    $data->update($input);
    // dd($data);
    if ($table == 'kependudukan') {
        return redirect()->route('dashboard');
    }
    else if ($table == 'kb') {
        return redirect()->route('dashboard-kb');
    }
    else if ($table == 'pembangunan') {
        return redirect()->route('dashboard-pembangunan');
    }
})->middleware(['auth'])->name('update');



require __DIR__.'/auth.php';
