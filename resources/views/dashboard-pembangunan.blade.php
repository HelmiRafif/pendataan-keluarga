<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Pembangunan Keluarga') }}
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
                        ],
                },
                lengthChange : false,
                searching : true,
                scrollX : true
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
                    <table  class="tabel table-auto stripe hover">
                        <thead>
                            <tr>
                                <th>Hapus</th>
                                <th>Edit</th>
                                <th data-priority="1">id keluarga</th>
                                <th data-priority="2">III_1</th>
                                <th data-priority="3">III_2</th>
                                <th data-priority="4">III_3</th>
                                <th data-priority="5">III_3a</th>
                                <th data-priority="6">III_3b</th>
                                <th data-priority="7">III_3c</th>
                                <th data-priority="8">III_3d</th>
                                <th data-priority="9">III_4</th>
                                <th data-priority="10">III_5</th>
                                <th data-priority="11">III_6</th>
                                <th data-priority="12">III_7</th>
                                <th data-priority="13">III_8</th>
                                <th data-priority="14">III_9</th>
                                <th data-priority="15">III_10</th>
                                <th data-priority="16">III_11</th>
                                <th data-priority="17">III_12</th>
                                <th data-priority="18">III_13</th>
                                <th data-priority="19">III_14</th>
                                <th data-priority="20">III_15</th>
                                <th data-priority="21">III_16</th>
                                <th data-priority="22">III_17</th>
                                <th data-priority="23">III_18a</th>
                                <th data-priority="24">III_18b</th>
                                <th data-priority="25">III_18c</th>
                                <th data-priority="26">III_18d</th>
                                <th data-priority="27">III_19</th>
                                <th data-priority="28">III_20</th>
                                <th data-priority="29">III_21</th>
                                <th data-priority="30">III_22</th>
                                <th data-priority="31">III_23</th>
                                <th data-priority="32">III_24</th>
                                <th data-priority="33">III_25</th>
                                <th data-priority="34">III_26</th>
                                <th data-priority="35">III_27</th>
                                <th data-priority="36">III_28</th>
                                <th data-priority="37">III_29</th>
                                <th data-priority="38" class="w-40">III_30</th>
                                <th data-priority="39">III_31</th>
                                <th data-priority="40">III_32</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>
                                    {!! Form::open(['method' => 'DELETE','route' => ['delete','pembangunan',$row->id_keluarga],'style'=>'display:inline']) !!}
                                    <button class=" text-red-500 hover:text-red-700 text-xl font-bold py-2 px-4 rounded" type="submit">
                                        <i class="fas fa fa-times-circle"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    <a href="{{ route('edit', [$row->id_keluarga, 'pembangunan']) }}"><button class="text-yellow-500 hover:text-yellow-700 text-xl font-bold py-2 px-4 rounded">
                                        <i class="fa fa-edit"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>{{ $row->id_keluarga }}</td>
                                <td>{{ $row->III_1 }}</td>
                                <td>{{ $row->III_2 }}</td> 
                                <td>{{ $row->III_3 }}</td>
                                <td>{{ $row->III_3a }}</td>
                                <td>{{ $row->III_3b }}</td>
                                <td>{{ $row->III_3c }}</td>
                                <td>{{ $row->III_3d }}</td>
                                <td>{{ $row->III_4 }}</td>
                                <td>{{ $row->III_5 }}</td>
                                <td>{{ $row->III_6 }}</td>
                                <td>{{ $row->III_7 }}</td>
                                <td>{{ $row->III_8 }}</td>
                                <td>{{ $row->III_9 }}</td>
                                <td>{{ $row->III_10 }}</td>
                                <td>{{ $row->III_11 }}</td>
                                <td>{{ $row->III_12 }}</td>
                                <td>{{ $row->III_13 }}</td>
                                <td>{{ $row->III_14 }}</td>
                                <td>{{ $row->III_15 }}</td>
                                <td>{{ $row->III_16 }}</td>
                                <td>{{ $row->III_17 }}</td>
                                <td>{{ $row->III_18a }}</td>
                                <td>{{ $row->III_18b }}</td>
                                <td>{{ $row->III_18c }}</td>
                                <td>{{ $row->III_18d }}</td>
                                <td>{{ $row->III_19 }}</td>
                                <td>{{ $row->III_20 }}</td>
                                <td>{{ $row->III_21 }}</td>
                                <td>{{ $row->III_22 }}</td>
                                <td>{{ $row->III_23 }}</td>
                                <td>{{ $row->III_24 }}</td>
                                <td>{{ $row->III_25 }}</td>
                                <td>{{ $row->III_26 }}</td>
                                <td>{{ $row->III_27 }}</td>
                                <td>{{ $row->III_28 }}</td>
                                <td>{{ $row->III_29 }}</td>
                                <td>{{ $row->III_30 }}</td>
                                <td>{{ $row->III_31 }}</td>
                                <td>{{ $row->III_32 }}</td>
                            </tr>
                            @endforeach
                            <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                        </tbody>
                        
                    </table>
                </div>
                <!--/Card-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
