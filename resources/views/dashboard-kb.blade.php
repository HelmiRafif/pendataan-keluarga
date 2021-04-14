<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Keluarga Berencana') }}
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
                lengthChange : false    ,
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
                                <th>id keluarga</th>
                                <th>No HP</th>
                                <th>1</th>
                                <th>1.a.1</th>
                                <th>1.a.2</th>
                                <th>1.b.1</th>
                                <th>1.b.2</th>
                                <th>2</th>
                                <th>3</th>
                                <th>3.a</th>
                                <th>3.a.1</th>
                                <th>3.b</th>
                                <th>4</th>
                                <th>4.a</th>
                                <th>5</th>
                                <th>5.a</th>
                                <th>5.b</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9.a</th>
                                <th>9.b</th>
                                <th>9.c</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td>
                                    {!! Form::open(['method' => 'DELETE','route' => ['delete','kb',$data->id_keluarga],'style'=>'display:inline']) !!}
                                    <button class=" text-red-500 hover:text-red-700 text-xl font-bold py-2 px-4 rounded" type="submit">
                                        <i class="fas fa fa-times-circle"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    <a href="{{ route('edit', [ 'kb', $data->id]) }}"><button class="text-yellow-500 hover:text-yellow-700 text-xl font-bold py-2 px-4 rounded">
                                        <i class="fa fa-edit"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>{{ $data->id_keluarga }}</td>
                                <td>{{ $data->No_HP }}</td>
                                <td>{{ $data->II_1 }}</td>
                                <td>{{ $data->II_1_a_1 }}</td>
                                <td>{{ $data->II_1_a_1 }}</td>
                                <td>{{ $data->II_1_b_1 }}</td>
                                <td>{{ $data->II_1_b_2 }}</td>
                                <td>{{ $data->II_2 }}</td>
                                <td>{{ $data->II_3 }}</td>
                                <td>{{ $data->II_3_a }}</td>
                                <td>{{ $data->II_3_a_1 }}</td>
                                <td>{{ $data->II_3_b }}</td>
                                <td>{{ $data->II_4 }}</td>
                                <td>{{ $data->II_4_a }}</td>
                                <td>{{ $data->II_5 }}</td>
                                <td>{{ $data->II_5_a }}</td>
                                <td>{{ $data->II_5_b }}</td>
                                <td>{{ $data->II_6 }}</td>
                                <td>{{ $data->II_7 }}</td>
                                <td>{{ $data->II_8 }}</td>
                                <td>{{ $data->II_9_a }}</td>
                                <td>{{ $data->II_9_b }}</td>
                                <td>{{ $data->II_9_c }}</td>
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
