<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Kependudukan') }}
        </h2>
    </x-slot>

    <script>
        $(document).ready(function() {
            var table = $('.tabel').DataTable( {
                responsive: {
                    breakpoints: [
                        {name: 'bigdesktop', width: Infinity},
                        {name: 'meddesktop', width: 1480},
                        {name: 'smalldesktop', width: 1280},
                        {name: 'medium', width: 1188},
                        {name: 'tabletl', width: 1024},
                        {name: 'btwtabllandp', width: 848},
                        {name: 'tabletp', width: 768},
                        {name: 'mobilel', width: 480},
                        {name: 'mobilep', width: 320}
                        ]
                },
                lengthChange : false,
                searching : true,
                scrollX : true,
                order: [[2, 'asc']],
        rowGroup: {
            dataSrc: 2
        }
            } )
            .columns.adjust()
            .responsive.recalc();
        });
    </script>

    <div class="py-12">
        <div class="max-w-full mx-auto px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">

            <!--Card-->
            <div id='recipients' class="md:p-8 p-2 mt-6 lg:mt-0 rounded shadow bg-white">
                <div class="p-2 bg-white border-b border-gray-200">
                <table id="table" class="tabel stripe hover">
            <thead>
                <tr>
                    <th data-priority="1">Hapus</th>
                    <th data-priority="2">Id Keluarga</th>
                    <th data-priority="2">Nama Anggota Keluarga</th>
                    <th data-priority="2">NIK</th>
                    <th data-priority="3">Jenis Kelamin</th>
                    <th data-priority="4">Tanggal Lahir</th>
                    <th data-priority="5">Status Perkawinan</th>
                    <th data-priority="6">Usia kawin pertama</th>
                    <th data-priority="7">Memiliki Akta Lahir</th>
                    <th data-priority="8">Hubungan dengan kepala keluarga</th>
                    <th data-priority="9">Kode Ibu Kandung</th>
                    <th data-priority="10">Agama</th>
                    <th data-priority="11">Status Pekerjaan</th>
                    <th data-priority="12">Pendidikan</th>
                    <th data-priority="13">Kepesertaan JKN/Asuransi Kesehatan lainnya</th>
                    <th data-priority="14">Keberadaaan anggota keluarga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['delete','kependudukan',$row->id],'style'=>'display:inline']) !!}
                        <button class=" text-red-500 hover:text-red-700 text-xl font-bold py-2 px-4 rounded" type="submit">
                            <i class="fas fa fa-times-circle"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                    <td>{{ $row->id_keluarga }}</td>
                    <td>{{ $row->I_2 }}</td>
                    <td>{{ $row->I_2a }}</td>
                    <td>{{ $row->I_3 }}</td>
                    <td>{{ $row->I_456 }}</td>
                    <td>{{ $row->I_7 }}</td>
                    <td>{{ $row->I_8 }}</td>
                    <td>{{ $row->I_9 }}</td>
                    <td>{{ $row->I_10 }}</td>
                    <td>{{ $row->I_11 }}</td>
                    <td>{{ $row->I_12 }}</td>
                    <td>{{ $row->I_13 }}</td>
                    <td>{{ $row->I_14 }}</td>
                    <td>{{ $row->I_15 }}</td>
                    <td>{{ $row->I_16 }}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
                </div>
                <!--/Card-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
