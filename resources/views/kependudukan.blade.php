@include('layouts.header')

<div class="h-full pb-14 bg-right bg-cover">
	<!--Main-->
	<div class="container pt-10 md:pt-20 px-6 mx-auto  items-center">
		<!--Left Col-->
		<div class="flex flex-col w-full justify-center lg:items-center overflow-y-hidden">
			<h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left">Form Pendataan Keluarga 2021</h1>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle"></p>

            <!-- Progress bar -->
            <div class="w-full py-3 mb-3">
                <div class="flex">
                    <div class="w-1/4">
                    <div class="relative mb-2">
                        <div class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-white w-full">
    
                                <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm14 8V5H5v6h14zm0 2H5v6h14v-6zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </svg>
             
                        </span>
                        </div>
                    </div>

                    <div class="text-xs text-center md:text-base">Kependudukan</div>
                    </div>

                    <div class="w-1/4">
                    <div class="relative mb-2">
                        <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                            <div class="w-0 bg-green-300 py-1 rounded" style="width: 0%;"></div>
                        </div>
                        </div>

                        <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-gray-600 w-full">
       
                            <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/>
                            </svg>
       
                        </span>
                        </div>
                    </div>

                    <div class="text-xs text-center md:text-base">Keluarga Berencana</div>
                    </div>

                    <div class="w-1/4">
                    <div class="relative mb-2">
                        <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                            <div class="w-0 bg-green-300 py-1 rounded" style="width: 0%;"></div>
                        </div>
                        </div>

                        <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-gray-600 w-full">
                        
                            <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                     
                        </span>
                        </div>
                    </div>

                    <div class="text-xs text-center md:text-base">Pembangunan Keluarga</div>
                    </div>

                    <div class="w-1/4">
                    <div class="relative mb-2">
                        <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                            <div class="w-0 bg-green-300 py-1 rounded" style="width: 0%;"></div>
                        </div>
                        </div>

                        <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-gray-600 w-full">
                            <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                            </svg>
                        </span>
                        </div>
                    </div>

                    <div class="text-xs text-center md:text-base">Selesai</div>
                    </div>
                </div>
            </div>
            {{-- End Progress bar --}}
		</div>

        <table id="table" class="stripe hover" style=" padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">No</th>
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
                    <th data-priority="">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kependudukan as $row)
                <tr>
                    <td>{{ ++$i }}</td>
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
                    <td>
                        <a href="{{ route('edit', ['kependudukan',$row->id]) }}"><button class="text-yellow-500 hover:text-yellow-700 text-xl font-bold py-2 px-4 rounded">
                            <i class="fa fa-edit"></i>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        <div class="text-center mx-auto py-6">
            <button class="modal-open bg-transparent align-middle border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Tambah Anggota Keluarga <i class="fas fa-plus"></i></button>
        </div>

        @if($count > 0)
            
        <div class="text-center mx-auto py-6">
            <a href="/kb"><button class="bg-indigo-600 align-middle text-white hover:text-gray-300 font-bold py-3 px-4 rounded-full">Selanjutnya <i class="fas fa-arrow-right"></i></button></a>
        </div>
        
        @endif

    <!-- MODAL BOS  -->
    <!-- <div class="modal md:w-full opacity-0 pointer-events-none overflow-y-scroll fixed w-full h-full top-0 left-0 flex items-center z-10" style="height:255%;"> -->
    <div class="modal opacity-0 pointer-events-none  overflow-y-scroll fixed w-full bg-gray-900 bg-opacity-50 h-full top-0 left-0 z-10">
        <div class="modal-overlay"></div>
        <!-- <div class="modal-container bg-white w-11/12 md:max-w-3xl mx-auto rounded shadow-lg z-50 overflow-y-auto"> -->
        <div class="modal-container bg-white w-11/12 md:max-w-3xl mx-auto my-4 rounded shadow-lg z-50 overflow-y-scroll">
        
        <!-- <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm ">Tutup</span>
        </div> -->

        <div class="modal-content md:w-full py-4 text-left px-6 my-2">
            {!! Form::open(array('route' => 'kependudukan.store','method' => 'POST')) !!}
            {{-- Title --}}
            <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Tambah Data</p>
            <div class="modal-close cursor-pointer z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </div>
            </div>

            <!--Modal Body-->
            <p class="font-sans font-light mb-3">Isi data sesuai dengan urutan Kartu Keluarga !</p>
            <p class="font-sans font-light mb-3 text-sm text-red-600">*Kosongi yang tidak perlu</p>
                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Nama Anggota Keluarga
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="I_2" class="form-input block w-full focus:bg-white" id="my-textfield" type="text" required>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Nomor Induk Keluarga
                        </label>
                    </div>
                    <div class="bg-white rounded-lg shadow p-3 text-center" x-data="app()">
                        <div class="flex">
                            <template x-for="(l,i) in pinlength" :key="`codefield_${i}`" >
                                <input :autofocus="i == 0" :id="`codefield_${i}`" class="pin-nik h-5 w-3 border mx-0.5 rounded-lg flex items-center text-center font-thin text-xs" value="" maxlength="1" max="9" min="0" inputmode="decimal" @keyup="stepForward(i)" @keydown.backspace="stepBack(i)" @focus="resetValue(i)"></input>
                            </template>
                            <input type="hidden" id="nik" name="I_2a">
                        </div>
                    </div>
                    {{-- <div class="md:w-2/3">
                        <input name="I2a" class="form-input block w-full focus:bg-white" id="my-textfield" type="number" value="">
                    </div> --}}
                </div>

                <div class="md:flex mb-6">
                        <div class="md:w-2/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                                Jenis Kelamin
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input name="I_3" type="radio" class="form-radio text-indigo-600" name="radioOption" value="Laki-laki">
                                    <span class="ml-2">Laki-laki</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input name="I_3" type="radio" class="form-radio" name="radioOption" value="Perempuan">
                                    <span class="ml-2">Perempuan</span>
                                </label>
                            </div>
                        </div>
                    </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Tanggal Lahir
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="I_456" class="form-input focus:bg-white" type="date">
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Status Perkawinan
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="I_7" class="form-select block w-full focus:bg-white" id="my-select">
                            <option value="" class="select-none hidden" disabled selected>Status</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Usia Kawin Pertama
                        </label>
                        <p class="mb-2">(Di umur berapa anda pertama kali menikah)</p>
                    </div>
                    <div class="md:w-2/3">
                        <input name="I_8" class="form-input block w-3/12 focus:bg-white" id="my-textfield" type="number" min="0" max="100">
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Memiliki Akta Lahir
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input name="I_9" type="radio" class="form-radio text-indigo-600" name="radioOption" value="Ya">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input name="I_9" type="radio" class="form-radio" name="radioOption" value="Tidak">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Hubungan dengan Kepala Keluarga
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="I_10" class="form-select block w-full focus:bg-white" id="my-select">
                            <option value="" class="select-none hidden" disabled selected>Hubungan</option>
                            <option value="Kepala Keluarga">Kepala Keluarga</option>
                            <option value="Istri">Istri</option>
                            <option value="Anak">Anak</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left md:mb-0 pr-4" for="my-textfield">
                            Kode Ibu Kandung
                        </label>
                        <p class="mb-2">(Dilihat dari nomor urut KK)</p>
                    </div>
                    <div class="md:w-2/3">
                        <input name="I_11" class="form-input block w-3/12 focus:bg-white" id="my-textfield" min="1" max="15" type="number" value="">
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Agama
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="I_12" class="form-select block w-full focus:bg-white" id="my-select">
                            <option value="" class="select-none hidden" disabled selected>Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="Penganut Kepercayaan">Penganut Kepercayaan</option>
                        </select>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Status Pekerjaan
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="I_13" class="form-select block w-full focus:bg-white" id="my-select">
                            <option value="" class="select-none hidden" disabled selected>Pekerjaan</option>
                            <option value="Tidak/Belum Bekerja">Tidak/Belum Bekerja</option>
                            <option value="Petani">Petani</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Pejabat Negara">Pejabat Negara</option>
                            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Pekerja Lepas">Pekerja Lepas</option>
                        </select>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Pendidikan
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="I_14" class="form-select block w-full focus:bg-white" id="my-select">
                            <option value="" class="select-none hidden" disabled selected>Pendidikan</option>
                            <option value="Tidak/Belum Sekolah">Tidak / Belum Sekolah</option>
                            <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD / Sederajat</option>
                            <option value="Masih SD/Sederajat">Masih SD / Sederajat</option>
                            <option value="Tamat SD/Sederajat">Tamat SD / Sederajat</option>
                            <option value="Masih SLTP/Sederajat">Masih SLTP / Sederajat</option>
                            <option value="Tamat SLTP/Sederajat">Tamat SLTP / Sederajat</option>
                            <option value="Masih SLTA/Sederajat">Masih SLTA / Sederajat</option>
                            <option value="Tamat SLTA/Sederajat">Tamat SLTA / Sederajat</option>
                            <option value="Masih PT/Akademi">Masih PT / Akademi</option>
                            <option value="Tamat PT/Akademi">Tamat PT / Akademi</option>
                        </select>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Kepesertaan JKN / Asuransi Kesehatan Lainnya
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="I_15" class="form-select block w-full focus:bg-white" id="my-select">
                            <option value="" class="select-none hidden" disabled selected>Jenis Kepesertaan</option>
                            <option value="BPJS-PBI/Jamkesmas/Jamkesda">BPJS-PBI / Jamkesmas / Jamkesda</option>
                            <option value="BPJS-Non PBI">BPJS-Non PBI</option>
                            <option value="Swasta">Swasta</option>
                            <option value="Tidak Memiliki">Tidak Memiliki</option>
                        </select>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-2/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Keberadaan Anggota Keluarga <br> (1 tahun terakhir)
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="I_16" class="form-select block w-full focus:bg-white" id="my-select">
                            <option value="" class="select-none hidden" disabled selected>Keberadaan Anggota Keluarga</option>
                            <option value="Di Dalam Rumah">Di Dalam Rumah</option>
                            <option value="Di Luar Rumah">Di Luar Rumah</option>
                            <option value="Di Luar Negeri">Di Luar Negeri</option>
                        </select>
                    </div>
                </div>
            <!--Footer-->
            <div class="flex justify-end pt-2">
            
            <a class="modal-close x-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Tutup</a>
            <button class="shadow bg-indigo-700 hover:bg-indigo-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                Simpan
            </button>
            {!! Form::close() !!}
            </div>
        </div>
        </div>
    </div>
	</div>

@include('layouts.footer')