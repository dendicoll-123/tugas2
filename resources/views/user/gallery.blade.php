@extends('Layouts.app')

@section('galeri', 'gallery')

@section('content')
    <div>
        <h1>Gallery</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ">
            <img src="{{ asset('assets/gambar1.jpg') }}" class="w-full h-70" alt="">
            <img src="{{ asset('assets/gambar2.jpg') }}" class="w-full h-70" alt="">
            <img src="{{ asset('assets/gambar3.jpg') }}" class="w-full h-70" alt="">
        </div>
    </div>

@endsection