@extends('main')

@section('body')
<section class="bg-gradient-to-b from-yellow-300 to-yellow-400 p-4 mt-20">
    <h1 data-aos="fade-down" class="text-center font-bold">SILAKAN INPUT TIMER
    </h1>
    <div class="justify-items-center">
        <div class="flex items-center bg-yellow-300 rounded-lg shadow-md">
            <input type="number" id="inputDetik" placeholder="Input detik" min="1" class="flex-1 p-2 text-gray-700 rounded-l-lg focus:outline-none" />
            <button id="mulai" class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white p-2 rounded-r-lg hover:bg-gradient-to-r hover:from-purple-700 hover:to-indigo-700">Start</button>
        </div>
        <div class="dem">
            <p id="dem" class="m-2 bg-white border-0 rounded-lg p-2 text-center shadow-md w-[500px] mx-auto text-base font-extrabold">Waiting for input...</p>
        </div>
    </div>
    <h1 data-aos="fade-down" class="mt-10 text-center font-bold">DEADLINE TUGAS IT EPICLAIR</h1>
    <div class="demo m-2 bg-white border-0 rounded-lg p-2 text-center shadow-md w-96 mx-auto text-base font-extrabold">
        <p id="demo"></p>
    </div>
</section>
@endsection

@section('script')
    <script>
        document.title = 'Timer';
        var deadline = new Date("Jan 7, 2025 23:59:00").getTime(); //untuk mengambil tanggal dan jam deadlin tugas ini

        var x = setInterval(function () { //fungsi supaya kode berjalan ulang2

            var now = new Date().getTime(); //mendapatkan waktu sekarang, literli skrg

            var jarak = deadline - now; //waktu deadline dikurangi dengan waktu skrg

            var hari = Math.floor(jarak / (1000 * 60 * 60 * 24)); //menghitung jmlh milidetik yg ada dlm sehari lalu dibagi dengan jarak trs dibulatkan
            var jam = Math.floor((jarak % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); 
            //menghitung jmlh milidetik yg ada dlm sehari lalu dimodule dengan jarak lalu baru dibagi dengan jumlah milidetik dalam satu jam trs dibulatkan
            var menit = Math.floor((jarak % (1000 * 60 * 60)) / (1000 * 60));
            //menghitung jmlh milidetik yg ada dlm sejam lalu dimodule dengan jarak lalu baru dibagi dengan jumlah milidetik dalam satu menit trs dibulatkan
            var detik = Math.floor((jarak % (1000 * 60)) / 1000);
            //menghitung jmlh milidetik yg ada dlm semenit lalu dimodule dengan jarak lalu baru dibagi dengan 1000 milidetik/1 detik trs dibulatkan

            document.getElementById("demo").innerHTML = hari + " days " + jam + " hours "
                + menit + " minutes " + detik + " seconds "; //mendapatkan elemen yg punya class demo lalu menaruh hasilnya disitu

            if (jarak < 0) { //dengan persyaratan jaraknya kurang dr 0
                clearInterval(x); //akan mengambil var x
                document.getElementById("demo").innerHTML = "HAYOO ENTEK WAKTUE"; // lalu akan menampilkan tulisan tersbuet pada elemen yg pny class demo
            }
        }, 1000);

        const mulai = document.getElementById("mulai"); //untuk mengambil interaksi user dengan button
        const display = document.getElementById("dem"); //untuk mengetahui elemen yg digunakan utk memunculkan 
        let countdown; //menyimpan ID dari interval yang dibuat dengan menjalankan setInterval

        mulai.addEventListener("click", () => {//akan aktif saat ada button dengan  class mulai
        const inputDetik = parseInt(document.getElementById("inputDetik").value); //mengambil nilai input

        if (isNaN(inputDetik) || inputDetik <= 0) { //kalau input tidak ada isinya atau  kurang dari sama dengan 0, disuru isi ulang
            alert("Please enter a valid number of seconds!"); //menunjukkan alert dengan tulisan ini
            return; //
        }

        let sisaWaktu = inputDetik; //memasukkan nilai input ke dalam variabel

        updateDisplay(sisaWaktu); //memeanggil fungsi updateDisplay

        countdown = setInterval(() => { //untuk memulai countdown dengan setInterval
            sisaWaktu--; //mengurangi 1 tiap detik 
            updateDisplay(sisaWaktu); //mengupdate display tiap detik

            if (sisaWaktu <= 0) { //if statement untuk stop countdown kalo sampe 0
                clearInterval(countdown); //stop interval
                display.innerHTML = "WAKTU HABIS ADIK2"; //menunjukkan pesan ini kalo if statement terpenuhi
            }
        }, 1000); //merupakan milisecon, 1000 milisekon = 1 detik brarti set interval berjalan tiap 1 detik
        });

        function updateDisplay(detiknya) { //fungsi utk memperbarui display nya
        const tahun = Math.floor(detiknya / (365 * 24 * 60 * 60)); //menghitung taun 
        const bulan = Math.floor((detiknya % (365 * 24 * 60 * 60)) / (30 * 24 * 60 * 60)); //menghitung bulan 
        const hari = Math.floor((detiknya % (30 * 24 * 60 * 60)) / (24 * 60 * 60)); //menghitung hari
        const jam = Math.floor((detiknya % (24 * 60 * 60)) / (60 * 60)); //menghitung jam
        const menit = Math.floor((detiknya % (60 * 60)) / 60);//menghitung menit
        const detik = detiknya % 60; //menghitung detik

        let hasil = ""; //cuma buat nyimpen variable

        if (tahun > 0) hasil += `${tahun} years `; //menampilkan hasil tapi kalo inputan tidak sampai setaun jd diihilangkan
        if (bulan > 0) hasil += `${bulan} months `; //menampilkan hasil tapi kalo inputan tidak sampai sebulan jd diihilangkan
        if (hari > 0) hasil += `${hari} days `; //menampilkan hasil kalo tapi inputan tidak sampai sehari jd diihilangkan
        if (jam > 0) hasil += `${jam} hours `; //menampilkan hasil tapi kalo inputan tidak sampai sejam jd diihilangkan
        if (menit > 0) hasil += `${menit} minutes `; //menampilkan hasil tapi kalo inputan tidak sampai semenit jd diihilangkan
        if (detik > 0) hasil += `${detik} seconds`;  //menampilkan hasil inputan

        display.innerHTML = hasil;//display merupakan tempat untuk menampilkan hasil dari inputan, jadi hasil tersebut dimunculkan

    }

    </script>
    
@endsection