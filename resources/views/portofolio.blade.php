@extends('main')

@section('body')

    <section id="fight" class="py-10 px-6 z-10 ">
        <div class="bg-gradient-to-r from-white to-gray-200 shadow-md rounded-xl md:flex">
            <div class="w-full">
                <div class="text-center items-center py-5">
                    <p class="font-bold text-xl">PORTOFOLIO</p>
                </div>
                <div class="items-center px-6 py-5 space-y-4">
                    <div class="flex items-center justify-center">
                        <div class="h-[2px] w-full bg-black"></div>
                        <p class="whitespace-nowrap px-4 md:px-6 text-sm sm:text-base md:text-lg lg:text-xl font-bold">BIODATA</p>
                        <div class="h-[2px] w-full bg-black"></div>
                    </div>
                    
                    <p class="text-lg text-center flex flex-col md:flex-row md:text-left"><span class="font-bold">Name:</span> <span class="md:ml-2">Reyhan Amando</span></p>
                    <p class="text-lg text-center flex flex-col md:flex-row md:text-left"><span class="font-bold">Jurusan:</span> <span class="md:ml-2">SIB</span></p>
                    <p class="text-lg text-center flex flex-col md:flex-row md:text-left"><span class="font-bold">Angkatan:</span> <span class="md:ml-2">2023</span> </p>
                    <div class="flex items-center justify-center">
                        <div class="h-[2px] w-full bg-black"></div>
                        <p class="whitespace-nowrap px-4 md:px-6 text-sm sm:text-base md:text-lg lg:text-xl font-bold">PENGALAMAN PANITIA</p>
                        <div class="h-[2px] w-full bg-black"></div>
                    </div>
                    <p class="text-lg text-center flex flex-col font-bold md:flex-row md:text-left">FINISHED</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Anggota Usher Sarasehan Orang Tua FTI</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Anggota Tim Keamanan WGG 2024</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Operator BSLT Universitas</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Anggota Transkapman Bebras Training</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Usher Beginning Well 2024</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Anggota Acara BSLT Prodi</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Ketua Olahraga Bulanan</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Anggota Perlengkapan PPS Synthesis</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Sekretaris Bendahara Tutorial UAS Gasal 2024</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Usher Life Enrichment 13</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Usher SmartFesTI</p>
                    <p class="text-lg text-center flex flex-col font-bold md:flex-row md:text-left">ONGOING</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Anggota Perlengkapan FACT - SUTD</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Sekretaris Magang HIMAINFRA</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Koordinator Acara Workshop Figma</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Anggota Transaman Young Science Festival</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- Fungsionaris HIMAINFRA 24/25</p>
                    <p class="text-sm text-center flex flex-col md:flex-row md:text-left">- jek akeh mane, males ngetik 1 1 😁</p>
                    <div class="flex items-center justify-center">
                        <div class="h-[2px] w-full bg-black"></div>
                        <p class="whitespace-nowrap px-4 md:px-6 text-sm sm:text-base md:text-lg lg:text-xl font-bold">PENGALAMAN IT</p>
                        <div class="h-[2px] w-full bg-black"></div>
                    </div>
                    <p class="text-sm text-center md:text-left">
                        Web Undangan Nikah Uprak Jawa - 
                        <a href="https://foreverwithkeenan.netlify.app/" class="hover:text-blue-700" target="_blank">
                            https://foreverwithkeenan.netlify.app/
                        </a>
                    </p>
                    <p class="text-sm text-center md:text-left">
                        Web Cookio Proyek Tekweb - (blm di deploy jd kontak aja 
                        <a href="https://wa.me/6287781176919" class="hover:text-blue-700" target="_blank">
                            087781176919
                        </a>
                        )
                    </p>
                </div>
            </div>
            <div class="p-4 md:p-0 md:justify-self-end">
                <img src="{{ asset('assets/fotodiri.jpg') }}" class="w-32 h-32 border-2 p-1 md:p-0 border-green-800 md:border-none  object-cover md:w-auto md:h-full md:rounded-br-xl md:rounded-tr-xl md:rounded-none rounded-full mx-auto">
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        document.title = 'Portofolio';
    </script>
@endsection
