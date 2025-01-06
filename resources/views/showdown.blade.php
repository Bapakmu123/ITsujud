@extends('main')

@section('body')
<section class="py-10 px-6">
{{-- supaya jarak vertical nya 40px dengan elemen atas bawahnya dan padding horizontalnya 24px dari kiri kannanya --}}
    <div class="bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-85 shadow-md rounded-lg ">
{{-- meng gradient kan warna dari yellow terang ke yellow cukup terang, trs juga dibuat transparan dikit dan ada bayangannya,
 sama tiap sudutnya melengkung--}}
        <div class="text-center items-center py-5">
{{-- mbuat supaya tulisan di tengah secara vertikal maupun horizontal, dan jarak veritkal antara atas bawah e 20px--}}
            <p class="font-bold text-xl">GRAND SHOWDOWN</p>
{{-- supaya jarak vertical nya 40px dengan elemen atas bawahnya dan padding horizontalnya 24px dari kiri kannanya --}}
        </div>
        <div class="items-center px-6 py-5 space-y-4">
{{-- mbuat supaya tulisan di tengah secara vertikal maupun horizontal, dan jarak veritkal antara atas bawah e 20px, 
sama isi dari div ini nanti ada jarak vertikal masing-masing elemennya sebanyak 16px--}}
            <div class="flex items-center justify-center animate-pulse">
{{-- biar elemen div di dlm div ini bersampingan dan berada di tengah, sama ada animasi seperti pulse gitu--}}
                <div class="h-[2px] w-2/5 bg-black"></div>
{{-- suatu garis hitam panjang yang lebarnya ga sampe penuh, ini garis yg berada di sblh kiri tulisan Round-1 --}}
                <p class="whitespace-nowrap px-4 md:px-6 text-sm sm:text-base md:text-lg lg:text-xl font-bold">Round - 1</p>
{{-- Elemen paling tengah antara 2 garis hitam, dan  saat dikecilkan layarnya, tulisan jg ikut kecil sama ttp sebaris, jd ga kek
                Round -
                1
                whitespace-nowrap yg mencegah tulisan tersebut pisah
--}}
                <div class="h-[2px] w-2/5 bg-black"></div>
{{-- suatu garis hitam panjang yang lebarnya ga sampe penuh, ini garis yg berada di sblh kanan tulisan Round-1 --}}
            </div>
            <div class="flex items-center justify-between mx-4 sm:mx-10 md:mx-16">
{{-- supaya elemen bersampingan tapi berjarak antara sesama, satu di tengah satu di pojok kiri satu di pojok kanan, dan mx nya supaya yg pojok kiri
sama pojok kanan ga terlalu mepet sama masing-masing sudut --}}
                <div class="flex-col">
{{-- supaya elemen dalam div ini atas bawah walaupun di dlm div yang memaksanya kiri kanan--}}
                    <img src="{{ asset('assets/bem.png') }}" class="h-36 w-36 sm:h-40 sm:w-40 md:h-44 md:w-44 lg:h-48 lg:w-48 p-1">
{{-- mengambil image dari file public/assets/ lalu diatur tinggi sama lebar nya trs diatur lagi biar membesar saat di layar besar dan mengecil saat
di layar kecil --}}
                    <p class="text-center font-bold">BEM</p>
{{-- supaya tulisan nya di tengah bawah gambar diatas, dan di bold --}}
                </div>
                <p class="whitespace-nowrap px-4 md:px-6 text-lg md:text-xl font-bold">VS</p>
{{-- mengatur besar kecilnya tulisan agar responsive lalu di bold --}}
                <div class="flex-col">
{{-- supaya elemen dalam div ini atas bawah walaupun di dlm div yang memaksanya kiri kanan--}}
                    <img src="{{ asset('assets/hima.png') }}" class="h-36 w-36 sm:h-40 sm:w-40 md:h-44 md:w-44 lg:h-48 lg:w-48 p-1">
{{-- mengambil image dari file public/assets/ lalu diatur tinggi sama lebar nya trs diatur lagi biar membesar saat di layar besar dan mengecil saat
di layar kecil --}}
                    <p class="text-center font-bold">HIMAINFRA</p>
{{-- supaya tulisan nya di tengah bawah gambar diatas, dan di bold --}}
                </div>
            </div>
            <div class="flex items-center justify-center animate-pulse">
{{-- biar elemen div di dlm div ini bersampingan dan berada di tengah, sama ada animasi seperti pulse gitu--}}
                <div class="h-[2px] w-2/5 bg-black"></div>
{{-- suatu garis hitam panjang yang lebarnya ga sampe penuh, ini garis yg berada di sblh kiri tulisan Round-2 --}}
                <p class="whitespace-nowrap px-4 md:px-6 text-sm sm:text-base md:text-lg lg:text-xl font-bold">Round - 2</p>
{{-- Elemen paling tengah antara 2 garis hitam, dan  saat dikecilkan layarnya, tulisan jg ikut kecil sama ttp sebaris, jd ga kek
                Round -
                2
                whitespace-nowrap yg mencegah tulisan tersebut pisah
--}}
                <div class="h-[2px] w-2/5 bg-black"></div>
{{-- suatu garis hitam panjang yang lebarnya ga sampe penuh, ini garis yg berada di sblh kanan tulisan Round-2 --}}
            </div>
            <div class="flex items-center justify-between mx-4 sm:mx-10 md:mx-16">
{{-- supaya elemen bersampingan tapi berjarak antara sesama, satu di tengah satu di pojok kiri satu di pojok kanan, dan mx nya supaya yg pojok kiri
sama pojok kanan ga terlalu mepet sama masing-masing sudut --}}
                <div class="flex-col">
{{-- supaya elemen dalam div ini atas bawah walaupun di dlm div yang memaksanya kiri kanan--}}
                    <img src="{{ asset('assets/keamanan.jpg') }}" class="h-36 w-36 sm:h-40 sm:w-40 rounded-xl md:h-44 md:w-44 lg:h-48 lg:w-48 p-1">
{{-- mengambil image dari file public/assets/ lalu diatur tinggi sama lebar nya trs diatur lagi biar membesar saat di layar besar dan mengecil saat
di layar kecil --}}
                    <p class="text-center font-bold">TIM KEAMANAN</p>
{{-- supaya tulisan nya di tengah bawah gambar diatas, dan di bold --}}
                </div>
                <p class="whitespace-nowrap px-4 md:px-6 text-lg md:text-xl font-bold">VS</p>
{{-- mengatur besar kecilnya tulisan agar responsive lalu di bold --}}
                <div class="flex-col">
{{-- supaya elemen dalam div ini atas bawah walaupun di dlm div yang memaksanya kiri kanan--}}
                    <img src="{{ asset('assets/peran.jpg') }}" class="h-36 w-36 sm:h-40 sm:w-40 md:h-44 rounded-xl md:w-44 lg:h-48 lg:w-48 p-1">
{{-- mengambil image dari file public/assets/ lalu diatur tinggi sama lebar nya trs diatur lagi biar membesar saat di layar besar dan mengecil saat
di layar kecil --}}   
                    <p class="text-center font-bold">DIVISI PERAN</p>
{{-- supaya tulisan nya di tengah bawah gambar diatas, dan di bold --}}
                </div>
            </div>
            <div class="flex items-center justify-center animate-pulse">
{{-- biar elemen div di dlm div ini bersampingan dan berada di tengah, sama ada animasi seperti pulse gitu--}}
                <div class="h-[2px] w-2/5 bg-black"></div>
{{-- suatu garis hitam panjang yang lebarnya ga sampe penuh, ini garis yg berada di sblh kiri tulisan Round-3 --}}
                <p class="whitespace-nowrap px-4 md:px-6 text-sm sm:text-base md:text-lg lg:text-xl font-bold">Round - 3</p>
{{-- Elemen paling tengah antara 2 garis hitam, dan  saat dikecilkan layarnya, tulisan jg ikut kecil sama ttp sebaris, jd ga kek
                Round -
                3
                whitespace-nowrap yg mencegah tulisan tersebut pisah
--}}
                <div class="h-[2px] w-2/5 bg-black"></div>
{{-- suatu garis hitam panjang yang lebarnya ga sampe penuh, ini garis yg berada di sblh kanan tulisan Round-3 --}}
            </div>
            <div class="flex items-center justify-between mx-4 sm:mx-10 md:mx-16">
{{-- supaya elemen bersampingan tapi berjarak antara sesama, satu di tengah satu di pojok kiri satu di pojok kanan, dan mx nya supaya yg pojok kiri
sama pojok kanan ga terlalu mepet sama masing-masing sudut --}}                
                <div class="flex-col">
{{-- supaya elemen dalam div ini atas bawah walaupun di dlm div yang memaksanya kiri kanan--}}                 
                    <img src="{{ asset('assets/max.jpg') }}" class="h-36 w-36 sm:h-40 sm:w-40 md:h-44 md:w-44 lg:h-48 lg:w-48 p-1 object-cover rounded-xl">
{{-- mengambil image dari file public/assets/ lalu diatur tinggi sama lebar nya trs diatur lagi biar membesar saat di layar besar dan mengecil saat
di layar kecil --}}  
                    <p class="text-center font-bold">MAX</p>
{{-- supaya tulisan nya di tengah bawah gambar diatas, dan di bold --}}
                </div>
                <p class="whitespace-nowrap px-4 md:px-6 text-lg md:text-xl font-bold">VS</p>
{{-- mengatur besar kecilnya tulisan agar responsive lalu di bold --}}
                <div class="flex-col">
{{-- supaya elemen dalam div ini atas bawah walaupun di dlm div yang memaksanya kiri kanan--}}                
                    <img src="{{ asset('assets/tps.png') }}" class="h-36 w-36 sm:h-40 sm:w-40 md:h-44 md:w-44 lg:h-48 lg:w-48 p-1">
{{-- mengambil image dari file public/assets/ lalu diatur tinggi sama lebar nya trs diatur lagi biar membesar saat di layar besar dan mengecil saat
di layar kecil --}}  
                    <p class="text-center font-bold">TPS</p>
{{-- supaya tulisan nya di tengah bawah gambar diatas, dan di bold --}}
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection

@section('script')
    <script>
        document.title = 'Match';
    </script>
@endsection