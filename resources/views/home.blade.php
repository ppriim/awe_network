@extends('layouts.app')
@section('title', 'Home')

@php
    use Illuminate\Support\Facades\File;

    // 🔧 เช็กโฟลเดอร์ภาพก่อน
    $imagePath = public_path('images/home');
    $images = File::exists($imagePath) ? File::files($imagePath) : [];

    // 🔧 เช็กโฟลเดอร์วิดีโอก่อน
    $videoPath = public_path('videos/testimonials');
    $videos = File::exists($videoPath) ? File::files($videoPath) : [];
@endphp

@section('content')
    {{-- 🎬 Hero Section --}}
    <div class="relative z-[50] w-full h-screen overflow-hidden" id="hero">
        <video
            class="absolute top-1/2 left-1/2 min-w-full min-h-full object-cover transform -translate-x-1/2 -translate-y-1/2 z-0"
            autoplay muted playsinline
            onended="document.getElementById('after-video').scrollIntoView({ behavior: 'smooth' });">
            <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        {{-- Layer ข้อความบนวีดีโอ --}}
        <div class="absolute inset-0 flex items-center justify-center z-10 bg-black/40 text-white text-center">
            <div class="max-w-4xl px-4">
                <h1 class="text-3xl md:text-5xl font-bold leading-snug" data-aos="fade-up">
                    <!-- ใส่ข้อความ hero ตรงนี้ -->
                </h1>
            </div>
        </div>
    </div>


    {{-- 🟦 SECTION 2: Quote + Fixed Background --}}
    <div class="relative z-10" id="after-video">
        {{-- Background ที่อยู่กับที่ตลอด --}}
        <div class="fixed top-0 left-0 w-full h-screen z-0 bg-center bg-cover"
            style="background-image: url('{{ asset('images/home_bg.jpg') }}');">
        </div>

        {{-- เนื้อหาที่ scroll ผ่าน --}}
        <div class="relative z-20 flex items-center justify-center h-screen px-4 text-white text-center">
            <div class="space-y-8 max-w-5xl">

                <h2 class="motion-h2 text-2xl md:text-4xl font-semibold leading-snug"
                    style="font-family: 'Playfair', serif;">
                    "Create unforgettable experiences with awesome,<br>
                    your one-stop event planning solution from start to finish."
                </h2>

                <p class="motion-p text-sm md:text-lg text-gray-100 max-w-4xl mx-auto leading-relaxed whitespace-pre-line"
                    style="font-family: 'IBM Plex Sans Thai', sans-serif;">
                    “เบื้องหลังอีเวนต์ที่ประสบความสำเร็จ... ไม่ได้มาจากความบังเอิญ” แต่คือความใส่ใจในทุกขั้นตอน
                    และความเข้าใจในเป้าหมายของคุณ ที่ Awesome Network เราคือ “ผู้เชี่ยวชาญในการเนรมิตอีเวนต์”
                    ที่พร้อมจะเปลี่ยนวิสัยทัศน์ของคุณให้กลายเป็นเรื่องจริง ด้วยประสบการณ์และ ความคิดสร้างสรรค์ที่ไร้ขีดจำกัด
                    เราใส่ใจในทุกรายละเอียดตั้งแต่ การวางแผนกลยุทธ์ การจัดการงบประมาณ การประสานงานกับทีมงาน
                    ไปจนถึงการดูแลแขกร่วมงาน เพื่อให้มั่นใจว่างานของคุณจะ “ราบรื่น สมบูรณ์แบบ และบรรลุเป้าหมายที่ตั้งไว้”
                    ปล่อยให้ความซับซ้อนเป็นหน้าที่ของเรา แล้วคุณแค่เตรียมตัวให้พร้อมฉลองกับ Awesome network
                    พร้อมที่จะเป็น “พาร์ทเนอร์ที่ไว้ใจได้” ในการจัดอีเวนต์ครั้งต่อไปของคุณ
                    ปรึกษาเราฟรี พร้อมสร้างสรรค์ช่วงเวลาที่ประทับใจ
                </p>

            </div>
        </div>

    </div>

    {{-- ✅ SECTION 3: Our Customers (สูง 100px + ปรับตำแหน่ง + scale icon) --}}
    <section class="relative z-[50] bg-[#0c1f44] text-white py-4 px-0">
        <div class="max-w-full mx-auto text-center">
            <h2 class="text-sm md:text-base font-semibold"
                style="font-family: 'IBM Plex Sans Thai', sans-serif; font-weight:400;">Our customer</h2>
        </div>

        <div class="swiper our-customers-tab w-full max-w-full mx-auto relative" style="height: 120px;">
            <div class="swiper-wrapper">

                {{-- Slide 1: ภาคเอกชน --}}
                <div class="swiper-slide h-full flex flex-col justify-center items-center gap-1">
                    <p class="text-xs font-medium text-center mb-4"
                        style="font-family: 'IBM Plex Sans Thai', sans-serif; font-weight:200;">ภาคเอกชน</p>
                    <div class="flex flex-wrap justify-center items-center gap-20">
                        <img src="{{ asset('images/customers/aia_LG.avif') }}" class="h-6 md:h-15 object-contain"
                            alt="AIA">
                        <img src="{{ asset('images/customers/ABB_LG.avif') }}" class="h-6 md:h-15 object-contain"
                            alt="ABB">
                        <img src="{{ asset('images/customers/Deloitte_LG.avif') }}" class="h-6 md:h-15 object-contain"
                            alt="Deloitte">
                        <img src="{{ asset('images/customers/chubb_LG.avif') }}" class="h-6 md:h-15 object-contain"
                            alt="CHUBB">
                        <img src="{{ asset('images/customers/BB_LG.avif') }}" class="h-6 md:h-15 object-contain"
                            alt="BB Smart Car">
                    </div>
                </div>

                {{-- Slide 2: ภาครัฐ --}}
                <div class="swiper-slide h-full flex flex-col justify-center items-center gap-1">
                    <p class="text-xs font-medium text-center mb-4"
                        style="font-family: 'IBM Plex Sans Thai', sans-serif; font-weight:200;">ภาครัฐ</p>
                    <div class="flex flex-wrap justify-center items-center gap-21">
                        <img src="{{ asset('images/customers/aot_LG.avif') }}" class="h-6 md:h-15 object-contain"
                            alt="AOT">
                        <img src="{{ asset('images/customers/Rmutr_LG.avif') }}" class="h-6 md:h-12 object-contain"
                            alt="RMUTR">
                    </div>
                </div>
            </div>

            {{-- Navigation + Pagination --}}
            <div class="swiper-button-prev !absolute !top-1/2 !-translate-y-1/2 !left-0 text-white w-6 h-6 z-10"></div>
            <div class="swiper-button-next !absolute !top-1/2 !-translate-y-1/2 !right-0 text-white w-6 h-6 z-10"></div>

            <div class="swiper-pagination mt-1"></div>
        </div>
        <div id="flash-overlay"
            class="pointer-events-none absolute inset-0 bg-white opacity-0 z-20 transition-opacity duration-500"></div>
    </section>

    {{-- 🟦 SECTION 4: Our recent work --}}
    <section
        class="relative z-50 py-16 px-4 text-white h-screen overflow-hidden bg-[#F5F0E9] flex flex-col items-center justify-center text-center">
        <div class="mb-8">
            <h2 class="text-4xl md:text-5xl font-bold"
                style="font-family: 'Playfair', serif; font-weight: 200; color: #112250;">
                Our recent work
            </h2>
        </div>

        <div class="track-wrapper mx-auto">
            <ul class="track">
                @foreach ($images as $image)
                    <li class="track__item">
                        <img src="{{ asset('images/home/' . $image->getFilename()) }}" alt="Work Image" loading="lazy"
                            draggable="false" />
                    </li>
                @endforeach
            </ul>
        </div>
    </section>


    {{-- 🟦 SECTION 5: Testimonial --}}
    <section class="relative z-50 bg-[#D9CBC2] px-6 py-0 text-[#112250] overflow-hidden flex items-center"
        style="max-height: 430px;">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between w-full h-full relative">

            {{-- Left: Heading --}}
            <div class="w-full md:w-2/5 flex flex-col items-start justify-start h-[430px] pt-6 md:pt-10">
                <h2 class="text-2xl md:text-4xl font-bold mb-2" style="font-family: 'Playfair', serif;">
                    What people say..
                </h2>
                <p class="text-xs md:text-base max-w-xs leading-relaxed"
                    style="font-family: 'IBM Plex Sans Thai', sans-serif; font-weight: 200;">
                    Discover what our satisfied customers have to say about their experiences with our products/services.
                </p>
            </div>

            {{-- Center: Swiper Videos --}}
            <div class="w-full md:w-3/5 flex items-center justify-center h-full relative">
                <div class="swiper testimonial-swiper w-full h-full relative">
                    <div class="swiper-wrapper h-full">
                        @foreach ($videos as $video)
                            <div class="swiper-slide flex items-center justify-center h-full">
                                <video src="{{ asset('videos/testimonials/' . $video->getFilename()) }}"
                                    class="h-full w-auto object-contain cursor-pointer testimonial-video" autoplay muted
                                    playsinline loop></video>
                            </div>
                        @endforeach
                        {{-- Pagination (Dot ทับวีดีโอกลางล่าง) --}}
                        <div class="swiper-pagination absolute bottom-4 left-1/2 -translate-x-1/2 z-50"></div>
                    </div>
                </div>
            </div>


        </div>
        {{-- Navigation ลูกศร (อยู่ขอบจอ ซ้าย-ขวา) --}}
        <div class="swiper-button-prev fixed left-2 top-1/2 -translate-y-1/2 z-50" style="color: #F5F0E9"></div>
        <div class="swiper-button-next fixed right-2 top-1/2 -translate-y-1/2 z-50" style="color: #F5F0E9"></div>
    </section>
@endsection
