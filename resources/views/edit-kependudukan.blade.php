@include('layouts.header')

<div class="h-full pb-14 bg-right bg-cover">
	<!--Main-->
	<div class="container pt-10 md:pt-20 md:px-6 px-1 mx-auto  items-center">
		<!--Left Col-->
		<div class="flex flex-col w-full justify-center lg:items-center overflow-y-hidden">
			<h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-right md:mr-3">Edit Data Kependudukan</h1>

        <div class="container bg-white w-11/12 mx-auto my-4 rounded shadow-lg">
        

        <div class="md:w-full py-4 text-left px-4 my-2">
            {!! Form::model($data, ['method' => 'PATCH', 'route' => ['update',$data->id,'kependudukan']]) !!}

            <!--Modal Body-->

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-textfield">
                            Nama Anggota Keluarga
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="I_2" class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="{{ $data->I_2 }}" required>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-textfield">
                            Nomor Induk Keluarga
                        </label>
                    </div>
                    <div class="md:w-2/3 ">
                            <input name="I_2a" class="form-input block w-full focus:bg-white" id="my-textfield" type="text" value="{{ $data->I_2a }}" >
                    </div>
                </div>

                <div class="md:flex mb-6">
                        <div class="md:w-2/3">
                            <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-radio">
                                Jenis Kelamin
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <div class="mt-2">
                            {!! Form::select('I_3', [
                                ''=>'',
                                'Laki-laki' => 'Laki-laki', 
                                'Perempuan' => 'Perempuan',
                            ], $data->I_3, array( 'class' => 'form-input block w-full focus:bg-white')); !!}
                            </div>
                        </div>
                    </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-select">
                            Tanggal Lahir
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="I_456" value="{{$data->I_456}}" class="form-input focus:bg-white" type="text" id="datepicker"/>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-select">
                            Status Perkawinan
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        {!! Form::select('I_7', [
                            ''=>'',
                            'Belum Kawin' => 'Belum Kawin', 
                            'Kawin' => 'Kawin',
                            'Cerai Hidup' => 'Cerai Hidup',
                            'Cerai Mati' => 'Cerai Mati',
                        ], $data->I_7, array( 'class' => 'form-input block w-full focus:bg-white')); !!}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-textfield">
                            Usia Kawin Pertama
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="I_8" value="{{$data->I_8}}" class="form-input block w-3/12 focus:bg-white" id="my-textfield" type="number" min="0" max="100">
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-radio">
                            Memiliki Akta Lahir
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                        {!! Form::select('I_9', [
                            '' => '',
                            'Ya' => 'Ya', 
                            'Tidak' => 'Tidak',
                        ], $data->I_9, array( 'class' => 'form-input block w-full focus:bg-white')); !!}
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-select">
                            Hubungan dengan Kepala Keluarga
                        </label>
                    </div>
                    <div class="md:w-2/3">
                    {!! Form::select('I_10', [
                        '' => '',
                        'Kepala Keluarga' => 'Kepala Keluarga', 
                        'Istri' => 'Istri',
                        'Anak' => 'Anak',
                        'Lainnya' => 'Lainnya',
                    ], $data->I_10, array( 'class' => 'form-input block w-full focus:bg-white')); !!}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 md:mb-0 pr-4" for="my-textfield">
                            Kode Ibu Kandung
                        </label>
                        <p class="mb-2 md:text-right md:mr-3">(Dilihat dari nomor urut KK)</p>
                    </div>
                    <div class="md:w-2/3">
                        <input name="I_11" value="{{ $data->I_11 }}" class="form-input block w-3/12 focus:bg-white" id="my-textfield" min="1" max="15" type="number" value="">
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-select">
                            Agama
                        </label>
                    </div>
                    <div class="md:w-2/3">
                    {!! Form::select('I_12', [
                        '' => '',
                        'Islam' => 'Islam',
                        'Kristen' => 'Kristen',
                        'Katholik' => 'Katholik',
                        'Hindu' => 'Hindu',
                        'Budha' => 'Budha',
                        'Khonghucu' => 'Khonghucu',
                        'Penganut Kepercayaan' => 'Penganut Kepercayaan',
                    ], $data->I_12, array( 'class' => 'form-input block w-full focus:bg-white')); !!}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-select">
                            Status Pekerjaan
                        </label>
                    </div>
                    <div class="md:w-2/3">
                    {!! Form::select('I_13', [
                        '' => '',
                        'Tidak/Belum Bekerja' => 'Tidak/Belum Bekerja',
                        'Petani' => 'Petani',
                        'Nelayan' => 'Nelayan',
                        'Pedagang' => 'Pedagang',
                        'Pejabat Negara' => 'Pejabat Negara',
                        'PNS/TNI/POLRI' => 'PNS/TNI/POLRI',
                        'Pegawai Swasta' => 'Pegawai Swasta',
                        'Wiraswasta' => 'Wiraswasta',
                        'Pensiunan' => 'Pensiunan',
                        'Pekerja Lepas' => 'Pekerja Lepas',
                    ], $data->I_13, array( 'class' => 'form-input block w-full focus:bg-white')); !!}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-select">
                            Pendidikan
                        </label>
                    </div>
                    <div class="md:w-2/3">
                    {!! Form::select('I_14', [
                        '' => '',
                        'Tidak/Belum Sekolah' => 'Tidak/Belum Sekolah',
                        'Tidak Tamat SD/Sederajat' => 'Tidak Tamat SD/Sederajat',
                        'Masih SD/Sederajat' => 'Masih SD/Sederajat',
                        'Tamat SD/Sederajat' => 'Tamat SD/Sederajat',
                        'Masih SLTP/Sederajat' => 'Masih SLTP/Sederajat',
                        'Tamat SLTP/Sederajat' => 'Tamat SLTP/Sederajat',
                        'Masih SLTA/Sederajat' => 'Masih SLTA/Sederajat',
                        'Tamat SLTA/Sederajat' => 'Tamat SLTA/Sederajat',
                        'Masih PT/Akademi' => 'Masih PT/Akademi',
                        'Tamat PT/Akademi' => 'Tamat PT/Akademi',
                    ], $data->I_14, array( 'class' => 'form-input block w-full focus:bg-white')); !!}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-select">
                            Kepesertaan JKN / Asuransi Kesehatan Lainnya
                        </label>
                    </div>
                    <div class="md:w-2/3">
                    {!! Form::select('I_15', [
                        '' => '',
                        'BPJS-PBI/Jamkesmas/Jamkesda' => 'BPJS-PBI/Jamkesmas/Jamkesda',
                        'BPJS-Non PBI' => 'BPJS-Non PBI',
                        'Swasta' => 'Swasta',
                        'Tidak Memiliki' => 'Tidak Memiliki',
                    ], $data->I_15, array( 'class' => 'form-input block w-full focus:bg-white')); !!}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-right md:mr-3 mb-3 md:mb-0 pr-4" for="my-select">
                            Keberadaan Anggota Keluarga <br> (1 tahun terakhir)
                        </label>
                    </div>
                    <div class="md:w-2/3">
                    {!! Form::select('I_16', [
                        '' => '',
                        'Di Dalam Rumah' => 'Di Dalam Rumah',
                        'Di Luar Rumah' => 'Di Luar Rumah',
                        'Di Luar Negeri' => 'Di Luar Negeri',
                    ], $data->I_16, array( 'class' => 'form-input block w-full focus:bg-white')); !!}
                    </div>
                </div>
            <!--Footer-->
            <div class="flex justify-end pt-2">
            
            <a href="{{route('dashboard')}}" class="x-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Cancel</a>
            <button class="shadow bg-indigo-700 hover:bg-indigo-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                Update
            </button>
            {!! Form::close() !!}
            </div>
        </div>
        </div>
    </div>

@include('layouts.footer')