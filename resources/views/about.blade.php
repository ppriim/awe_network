@extends('layouts.about_us')
@section('title', 'About Us')

@section('content')
    <!-- SECTION 1: ABOUT US HERO -->
    <section class="relative h-screen w-full overflow-hidden z-40">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-fixed bg-center bg-cover z-0"
            style="background-image: url('{{ asset('images/about/bg_about_01.avif') }}');">
        </div>

        <!-- Text Container -->
        <div class="relative z-10 flex flex-col items-center justify-start h-full pt-20 px-6 max-w-7xl mx-auto">
            <h1 class="text-[#F5F0E9] text-[40px] sm:text-[64px] tracking-wide leading-snug" id="about-hero-title"
                style="font-family:'Playfair'; font-weight: 100;">
                About us
            </h1>
            <p class="text-[#F5F0E9] mt-6 text-base sm:text-lg leading-relaxed text-center" id="about-hero-desc"
                style="font-family: 'Prompt', sans-serif;">
                “เราเชื่อว่าเบื้องหลังทุกความทรงจำที่น่าประทับใจ คือการออกแบบประสบการณ์ที่ใส่ใจทุกรายละเอียด
                เพราะเราเชื่อว่าเสน่ห์ของช่วงเวลาที่ดีที่สุดคือการได้อยู่ในบรรยากาศที่ทั้งสง่างามและเต็มไปด้วยพลังแห่งความสุข
                ตั้งแต่รอยยิ้มแรกของแขกที่เข้ามา จนถึงเสียงหัวเราะสุดท้ายก่อนงานจะจบลง
                เราคือทีมที่เข้าใจว่าทุกงานมีเรื่องราวเฉพาะตัว และเรา
                ทุ่มเททุกจังหวะเวลาให้การเล่าเรื่องนั้นถูกถ่ายทอดออกมาอย่างสมบูรณ์แบบ ผ่านการวางแผนที่แม่นยำ
                ความคิดสร้างสรรค์ไร้ขีดจำกัด และความตั้งใจที่จะเปลี่ยนทุกไอเดียให้กลายเป็นความจริง เพราะสำหรับเรา
                งานของคุณไม่ใช่แค่งานอีกหนึ่งงาน แต่มันคือช่วงเวลาสำคัญที่ควรถูกจดจำตลอดไป”
            </p>
        </div>
    </section>

    <!-- SECTION 2: STORY BLOCK -->
    <section class="bg-[#112250] text-[#D9CBC2] flex items-center justify-center px-6 py-14 max-h-[563px]">
        <div class="max-w-7xl text-center text-loose leading-relaxed" style="font-family: 'Prompt', sans-serif;">
            <p>
                ก่อตั้งขึ้นในวันที่ 19 กรกฎาคม พ.ศ. 2547
                ด้วยความตั้งใจแน่วแน่ที่จะเปลี่ยนทุกช่วงเวลาสำคัญให้กลายเป็นประสบการณ์ที่หรูหรา มีชีวิต
                และน่าประทับใจเหนือความคาดหมายที่ Awesome Network Thailand
                เราเชื่อว่าศิลปะแห่งการจัดอีเวนต์ไม่ใช่เพียงการสร้างบรรยากาศ
                แต่คือการถักทอเรื่องราว ผ่านรายละเอียดที่ประณีต การดีไซน์ที่ล้ำสมัย
                และการบริการที่เข้าใจความต้องการของลูกค้าในทุกมิติ ตลอดสองทศวรรษที่ผ่านมา เราสร้างสรรค์งานที่ผสมผสาน
                ความหรูหราเข้ากับ ความทันสมัย อย่างลงตัว — ทุกโครงการสะท้อนตัวตนที่ไม่เหมือนใคร
                และมุ่งเน้นประสบการณ์ที่เหนือความคาดหมายในทุกช่วงเวลา เพราะสำหรับเรา
                การจัดงานอีเวนต์ที่สมบูรณ์แบบไม่ใช่เพียงเรื่องของความสวยงามที่มองเห็นได้ แต่คือการสร้าง “ประสบการณ์”
                ที่สัมผัสได้จากหัวใจ
            </p>
            <p>
                Awesome Network Thailand — Crafting Moments. Creating Legacy.
            </p>
        </div>
    </section>

    <!-- SECTION 3: AWESOME CARDS (Smooth RotateY ตามเมาส์) -->
    <section id="awesome-section" class="relative w-full py-24 overflow-hidden"
        style="background-image: url('{{ asset('images/about/awesome/bg_awe.avif') }}'); background-size: cover; background-position: center;">
        <div class="relative z-10 max-w-7xl mx-auto px-4">
            <div class="flex justify-center items-center gap-6 perspective-wrapper">
                @for ($i = 1; $i <= 7; $i++)
                    <div class="card w-36 sm:w-44 md:w-48 lg:w-52 xl:w-56 bg-white rounded-lg overflow-hidden">
                        <img src="{{ asset("images/about/awesome/2-0$i.png") }}"
                            class="w-full h-full object-cover pointer-events-none" />
                    </div>
                @endfor
            </div>
        </div>
    </section>







@endsection
