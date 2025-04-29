@extends('layouts.about_us')
@section('title', 'About Us')

@section('content')
    <!-- SECTION 1: ABOUT US HERO -->
    <section class="relative h-screen w-full overflow-hidden">
        <div class="absolute inset-0 bg-fixed bg-center bg-cover z-0"
            style="background-image: url('{{ asset('images/about/bg_about_01.avif') }}');">
        </div>

        <div class="relative z-50 flex items-center justify-center h-full">
            <h1 class="text-white text-5xl md:text-7xl font-bold opacity-0 animate-fadein-scale">
                About Us
            </h1>
        </div>
    </section>


@endsection
