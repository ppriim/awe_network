@extends('layouts.app')

@section('content')
{{-- 🎬 Hero Section --}}
<div class="relative z-[50] w-full h-screen overflow-hidden" id="hero">
    <video 
        class="absolute top-0 left-0 w-full h-full object-cover z-0"
        autoplay 
        muted 
        playsinline 
        onended="document.getElementById('after-video').scrollIntoView({ behavior: 'smooth' });">
        <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="absolute inset-0 flex items-center justify-center z-10 bg-black/40 text-white text-center">
        <div class="max-w-4xl px-4">
            <h1 class="text-3xl md:text-5xl font-bold leading-snug" data-aos="fade-up">
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

    {{-- มืดพื้นหลัง --}}
    <div class="fixed top-0 left-0 w-full h-screen bg-black/60 z-10"></div>

    {{-- เนื้อหาที่ scroll ผ่าน --}}
    <div class="relative z-20 flex items-center justify-center h-screen px-4 text-white text-center">
        <div data-aos="fade-up" data-aos-delay="200" class="space-y-8 max-w-5xl">
            <h2 class="text-2xl md:text-4xl font-semibold leading-snug">
                "Create unforgettable experiences with awesome,<br>
                your one-stop event planning solution from start to finish."
            </h2>

            <p class="text-sm md:text-lg text-gray-100 max-w-4xl mx-auto leading-relaxed whitespace-pre-line">
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

{{-- ✅ SECTION 3: Our Customers (Swiper Tab 2 หน้า) --}}
<section class="relative z-[50] bg-[#0c1f44] text-white py-16 px-4">
    <div class="max-w-7xl mx-auto text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-semibold mb-2">Our customer</h2>
    </div>

    <div class="swiper our-customers-tab w-full max-w-6xl mx-auto h-[600px]">
        <div class="swiper-wrapper">

            {{-- Slide 1: ภาคเอกชน --}}
            <div class="swiper-slide flex flex-col items-center justify-center h-full gap-8">
                <p class="text-lg">ภาคเอกชน</p>
                <div class="flex flex-wrap justify-center gap-8 items-center">
                    <img src="{{ asset('images/customers/aia_LG.avif') }}" class="h-16 object-contain" alt="AIA">
                    <img src="{{ asset('images/customers/ABB_LG.avif') }}" class="h-16 object-contain" alt="ABB">
                    <img src="{{ asset('images/customers/Deloitte_LG.avif') }}" class="h-16 object-contain" alt="Deloitte">
                    <img src="{{ asset('images/customers/chubb_LG.avif') }}" class="h-16 object-contain" alt="CHUBB">
                    <img src="{{ asset('images/customers/BB_LG.avif') }}" class="h-16 object-contain" alt="BB Smart Car">
                </div>
            </div>

            {{-- Slide 2: ภาครัฐ --}}
            <div class="swiper-slide flex flex-col items-center justify-center h-full gap-8">
                <p class="text-lg">ภาครัฐ</p>
                <div class="flex flex-wrap justify-center gap-8 items-center">
                    <img src="{{ asset('images/customers/aot_LG.avif') }}" class="h-16 object-contain" alt="AOT">
                    <img src="{{ asset('images/customers/Rmutr_LG.avif') }}" class="h-16 object-contain" alt="RMUTR">
                </div>
            </div>
        </div>

        {{-- Swiper Navigation + Dots --}}
        <div class="swiper-button-prev text-white"></div>
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-pagination mt-4"></div>
    </div>
</section>

@endsection
