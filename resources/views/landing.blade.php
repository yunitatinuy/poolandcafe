@extends('layout.main2')

@section('container')
<main>
    <div class="container my-40 w-1/4 p-3 justify-center rounded-3xl backdrop-blur-sm shadow-5-strong">
        <div class="mb-4 flex justify-center">
            <span class="text-3xl font-marko uppercase">Anang Ferry</span>
        </div>

        <div class="flex flex-row justify-center">
            <div class="pr-3">
                <img src="img/logo3.png" alt="logo" width="160">
            </div>

            <div class="font-jsMath text-2xl pr-3">
                <span>Wujudkan</span><br>
                <span>Perjalanan</span><br>
                <span>Anda</span><br>
                <span>Bersama</span><br>
                <span></span>Kami</span>
            </div>
        </div>
        <div class="flex justify-center mt-3">
            <a href="/dashboard_pengguna" class="font-sans inline-flex items-center px-3 py-2 text-sm font-medium text-center text-[#1d1d1d] bg-[#f9b488] rounded-lg hover:bg-[#1d1d1d] hover:scale-110 transition duration-150 hover:ease-out focus:ring-4 focus:outline-none hover:text-[#fec7a5]">
                Cari Tiket
                <img src="/img/cari.png" alt="" class="w-4 ms-2">
            </a>
        </div>
    </div>
</main>

<div class="bg-[#fec7a5] p-5 rounded-t-xl">
    <div class="text-xl font-marko uppercase flex justify-center mb-10"><span>Rute Populer</span></div>
    <div class="grid grid-cols-3 gap-2 justify-center">
        @foreach($rutes as $rute)
        <div class="content-center mx-24">
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">{{ $rute->pelabuhanAsal->Nama_Pelabuhan }} ke {{ $rute->pelabuhanTujuan->Nama_Pelabuhan }}</p>
            </div>
        </div>
        @endforeach
        <!-- div baris 1 rute populer -->

        <!-- div baris 2 rute populer -->

        <!-- <div class="content-center mx-5">
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
        </div> -->

        <!-- div baris 3 rute populer -->

        <!-- <div class="content-center mx-5">
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
            <div class="flex flex-row">
                <img class="w-6" src="/img/icons/dot.png">
                <p class="font-jsMath">Batam Center ke Harbourfront</p>
            </div>
        </div> -->

    </div>
</div>
@endsection