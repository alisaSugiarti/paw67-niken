@extends('app')

@section('content')
<div class="container">
    <h2 class="text-info" style="margin: 10px">About Me</h2>
    <div class="row justify-content-md-center">
        <div class="col-lg-3 col-md-5 mb-5 mb-md-0" style="margin: 10px;">
            <img src="{{ asset('niken.jpg')}}" alt="foto" width="100%">
        </div>
    </div>
    <div class="row justify-content-center" style="margin: 20px">
        <div class="col-lg-3">
            <h5 class="text-info text-center">Niken Amalia</h5>
        </div>
    </div>
    <div class="row justify-content-center" style="margin: 20px">
        <div class="col-lg-12">
            <h2 class="text-info" style="margin: 10px">Background</h2> 
            <p style="margin: 10px">
                Halo,Perkenalkan nama saya Niken Amalia.Saya berasal dari Kabupaten Magetan.Saya merupakan anak pertama dari 2 bersaudara.
                Saya sudah menempuh pendidikan di SDN Tamanan 2, kemudian SMPN 1 Kawedanan dan SMKN 1 Bendo.Sekarang ini saya sedang menempuh
                pendidikan di Universitas Trunojoyo Madura pada Prodi Teknik Informatika.Saya masuk ke UTM melalui jalur SBMPTN.
            </p>
        </div>
        <div class="col-lg-12">
            <h2 class="text-info" style="margin: 10px">Suka Duka Praktikum PAW</h2>
            <p style="margin: 10px">
                Awalnya saya merasa kesulitan dalam mengerjakan tugas praktikum modul 6 dan 7.Tapi dengan begitu membuat saya mencoba hal baru
                dengan mengekplore materi baru dengan belajar dari youtube.
            </p>
        </div>
    </div>
</div>

@endsection
