@extends('layouts.app')

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
            <div data-aos="fade-up" data-aos-delay="200" class="space-y-8 max-w-5xl">
                <h2 class="text-2xl md:text-4xl font-semibold leading-snug"  style="font-family: 'Schibsted Grotesk', sans-serif;">
                    "Create unforgettable experiences with awesome,<br>
                    your one-stop event planning solution from start to finish."
                </h2>

                <p class="text-sm md:text-lg text-gray-100 max-w-4xl mx-auto leading-relaxed whitespace-pre-line" style="font-family: 'IBM Plex Sans Thai', sans-serif;">
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
            <h2 class="text-sm md:text-base font-semibold">Our customer</h2>
        </div>

        <div class="swiper our-customers-tab w-full max-w-full mx-auto relative" style="height: 120px;">
            <div class="swiper-wrapper">

                {{-- Slide 1: ภาคเอกชน --}}
                <div class="swiper-slide h-full flex flex-col justify-center items-center gap-1">
                    <p class="text-xs font-medium text-center mb-4">ภาคเอกชน</p>
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
                    <p class="text-xs font-medium text-center mb-4">ภาครัฐ</p>
                    <div class="flex flex-wrap justify-center items-center gap-21">
                        <img src="{{ asset('images/customers/aot_LG.avif') }}" class="h-6 md:h-15 object-contain"
                            alt="AOT">
                        <img src="{{ asset('images/customers/Rmutr_LG.avif') }}" class="h-6 md:h-12 object-contain"
                            alt="RMUTR">
                    </div>
                </div>
            </div>

            {{-- Navigation + Pagination --}}
            <div class="swiper-button-prev !left-0 text-white !w-4 !h-4"></div>
            <div class="swiper-button-next !right-0 text-white !w-4 !h-4"></div>
            <div class="swiper-pagination mt-1"></div>
        </div>
    </section>


    {{-- 🟦 SECTION 4: Our Customers (สูง 100px + ปรับตำแหน่ง + scale icon) --}}
    <section class="relative z-50 py-16 px-4 text-white overflow-hidden bg-[#F5F0E9]">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold" style="font-family: 'IBM Plex Sans Thai', sans-serif; font-weight: 200; color:#112250;">Our recent work</h2>
        </div>

        <div class="track-wrapper mx-auto">
            <ul class="track">
                @php
                    $images = File::files(public_path('images/home'));
                @endphp
                @foreach ($images as $image)
                    <li class="track__item">
                        <img src="{{ asset('images/home/' . $image->getFilename()) }}" alt="Work Image" loading="lazy"
                            draggable="false" />
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- ✅ SECTION 5: Testimonials (Auto Load) --}}
    <section class="relative z-50 bg-[#1c2a4d] py-16 px-6 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-5 gap-8 items-center">

            {{-- Left: Heading --}}
            <div class="md:col-span-2 text-left">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">What people say..</h2>
                <p class="text-gray-300 text-sm md:text-base">
                    Discover what our satisfied customer have to say about their experiences with our products/services.
                </p>
            </div>

            {{-- Right: Video Swiper --}}
            <div class="md:col-span-3">
                <div class="swiper testimonial-swiper relative">
                    <div class="swiper-wrapper">
                        {{-- 🔥 Loop All Videos from Folder --}}
                        @php
                            $videos = File::files(public_path('videos/testimonials'));
                        @endphp

                        @foreach ($videos as $video)
                            <div class="swiper-slide flex justify-center">
                                <video src="{{ asset('videos/testimonials/' . $video->getFilename()) }}"
                                    class="rounded-xl shadow-lg max-h-[300px] w-auto cursor-pointer testimonial-video"
                                    autoplay muted playsinline loop></video>
                            </div>
                        @endforeach
                    </div>

                    <div class="testimonial-button-prev text-white"></div>
                    <div class="testimonial-button-next text-white"></div>

                    <div class="testimonial-pagination mt-4"></div>
                </div>
            </div>

        </div>
    </section>
@endsection
