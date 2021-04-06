@include('layouts.header')

<div class="flex items-center justify-center h-screen">
    <div class="bg-white text-black font-bold rounded-lg border shadow-lg p-10 text-center">
        <i class="far fa-check-circle animate-pulse text-7xl text-green-500"></i>
        <h2 class="font-semibold text-3xl mb-6">Selesai</h2>
        <p class="text-gray-700 font-normal mb-4">Data Kependudukan anda berhasil terkirim, silahkan logout</p>

        <button class="shadow bg-red-500 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                
                <a :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Logout <i class="fas fa-sign-out-alt"></i>
                </a>
            </form>
        </button>

    </div>
</div>

@include('layouts.footer')