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
            <!-- h1 -->
            <h1 id="about-hero-title"
                class="text-[#F5F0E9] text-[40px] sm:text-[64px] tracking-wide leading-snug
       opacity-0 scale-150 transition-all duration-1000"
                style="font-family:'Playfair'; font-weight: 100;">
                About us
            </h1>

            <!-- p -->
            <p id="about-hero-desc"
                class="text-[#F5F0E9] mt-6 text-base sm:text-lg leading-relaxed text-center
       opacity-0 scale-70 transition-all duration-1000"
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
    <section
        class="bg-[#112250] text-[#D9CBC2] flex items-center justify-center px-4 sm:px-6 lg:px-8 py-10 sm:py-12 max-h-[563px]">
        <div id="story-block"
            class="opacity-0 scale-75 blur-sm transition-all duration-1000 max-w-3xl sm:max-w-4xl lg:max-w-5xl text-sm sm:text-base leading-loose sm:leading-relaxed text-center"
            style="font-family: 'Prompt', sans-serif;">
            <p class="mb-4">
                ก่อตั้งขึ้นในวันที่ 19 กรกฎาคม พ.ศ. 2547
                ด้วยความตั้งใจแน่วแน่ที่จะเปลี่ยนทุกช่วงเวลาสำคัญให้กลายเป็นประสบการณ์ที่หรูหรา มีชีวิต
                และน่าประทับใจเหนือความคาดหมายที่ Awesome Network Thailand
                เราเชื่อว่าศิลปะแห่งการจัดอีเวนต์ไม่ใช่เพียงการสร้างบรรยากาศ
                แต่คือการถักทอเรื่องราว ผ่านรายละเอียดที่ประณีต การดีไซน์ที่ล้ำสมัย
                และการบริการที่เข้าใจความต้องการของลูกค้าในทุกมิติ
            </p>
            <p>
                ตลอดสองทศวรรษที่ผ่านมา เราสร้างสรรค์งานที่ผสมผสานความหรูหราเข้ากับความทันสมัยอย่างลงตัว
                ทุกโครงการสะท้อนตัวตนที่ไม่เหมือนใคร และมุ่งเน้นประสบการณ์ที่เหนือความคาดหมายในทุกช่วงเวลา
                เพราะสำหรับเรา การจัดงานอีเวนต์ที่สมบูรณ์แบบไม่ใช่เพียงเรื่องของความสวยงามที่มองเห็นได้
                แต่คือการสร้าง “ประสบการณ์” ที่สัมผัสได้จากหัวใจ
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

    <!-- SECTION 4: p’ Bee -->
    <section id="section-pbee" class="relative w-full max-h-[490px] overflow-hidden bg-cover bg-center text-white"
        style="background-image: url('{{ asset('images/about/team/bg_bg.png') }}');">
        <div
            class="relative z-10 max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-center gap-8 px-4 py-12 lg:py-0">

            <!-- กล่องรูปพี่บี + ป้ายชื่อ -->
            <div class="relative flex-shrink-0 -translate-x-2 lg:-translate-x-6">
                <img src="{{ asset('images/about/team/pb.png') }}" id="bee-image"
                    class="relative z-15 max-h-[470px] w-[220px] sm:w-[260px] md:w-[300px] lg:w-auto opacity-0 blur-sm transition-all duration-1000 delay-[1000ms]" />
                <img src="{{ asset('images/about/team/name_pb.png') }}" id="bee-name"
                    class="absolute bottom-4 right-[-130%] top-[77%] -translate-x-1/2 w-[200px] sm:w-[260px] opacity-0 scale-110 transition-all duration-700 delay-[600ms]" />
            </div>

            <!-- ข้อความ -->
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-6 max-w-md sm:max-w-lg -translate-x-2 lg:-translate-x-6"
                style="font-family: 'Prompt', light;">
                <p id="bee-text"
                    class="text-xs sm:text-sm opacity-0 scale-110 transition-all duration-700 delay-[0ms] leading-7">
                    ประสบการณ์ 21 ปี ในวงการอีเว้นท์ออแกไนซ์ Awesome​ network​ <br>
                    สั่งสมความเชี่ยวชาญในการสร้างสรรค์งาน​ ที่​ตอบสนองทุกความต้องการ
                    ของลูกค้าในทุกเทรนด์ ทีมงานมืออาชีพของเราพร้อมทุ่มเทความสามารถ <br>
                    และความคิดสร้างสรรค์ เรายึดมั่นในคุณภาพและมาตรฐาน
                    โดยร่วมมือกับพันธมิตรที่น่าเชื่อถือ มั่นใจได้เลยว่า​ Awesome​ Network. <br>
                    ให้ความสำคัญกับความสำเร็จ ในทุกงานของลูกค้า​ <br>
                    เพราะ ​"Awesome​" คือ ยอดเยี่ยม ดีเลิศ น่าประทับใจอย่างมาก
                </p>
            </div>

        </div>
    </section>
    <!-- SECTION 5: p’ Krit -->
    <section id="section-pkrit" class="relative w-full max-h-[490px] overflow-hidden bg-cover bg-center text-white"
        style="background-image: url('{{ asset('images/about/team/bg_bg.png') }}');">
        <div
            class="relative z-10 max-w-7xl mx-auto flex flex-col lg:flex-row-reverse items-center justify-center gap-8 px-4 py-12 lg:py-0">

            <!-- กล่องรูปพี่กฤษ + ป้ายชื่อ -->
            <div class="relative flex-shrink-0 translate-x-2 lg:translate-x-6">
                <img src="{{ asset('images/about/team/pk.png') }}" id="krit-image"
                    class="relative z-15 max-h-[470px] w-[220px] sm:w-[260px] md:w-[300px] lg:w-auto opacity-0 blur-sm transition-all duration-1000 delay-[1000ms]" />
                <img src="{{ asset('images/about/team/name_pk.png') }}" id="krit-name"
                    class="absolute bottom-4 left-[-130%] top-[77%] -translate-x-1/2 w-[200px] sm:w-[260px] opacity-0 scale-110 transition-all duration-700 delay-[600ms]" />
            </div>

            <!-- ข้อความ -->
            <div class="flex flex-col items-center lg:items-end text-center lg:text-right space-y-6 max-w-md sm:max-w-lg translate-x-2 lg:translate-x-6"
                style="font-family: 'Prompt', light;">
                <p id="krit-text"
                    class="text-xs sm:text-sm opacity-0 scale-110 transition-all duration-700 delay-[0ms] leading-7">
                    ประสบการณ์ 21 ปี ในวงการอีเว้นท์ออแกไนซ์ Awesome​ network​ <br>
                    สั่งสมความเชี่ยวชาญในการสร้างสรรค์งาน​ ที่​ตอบสนองทุกความต้องการ
                    ของลูกค้าในทุกเทรนด์ ทีมงานมืออาชีพของเราพร้อมทุ่มเทความสามารถ <br>
                    และความคิดสร้างสรรค์ เรายึดมั่นในคุณภาพและมาตรฐาน
                    โดยร่วมมือกับพันธมิตรที่น่าเชื่อถือ มั่นใจได้เลยว่า​ Awesome​ Network. <br>
                    ให้ความสำคัญกับความสำเร็จ ในทุกงานของลูกค้า​ <br>
                    เพราะ ​"Awesome​" คือ ยอดเยี่ยม ดีเลิศ น่าประทับใจอย่างมาก
                </p>
            </div>

        </div>
    </section>

@endsection
