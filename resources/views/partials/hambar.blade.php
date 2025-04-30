{{-- ปุ่ม Hamburger ด้านขวาบน (ตอนยังไม่เปิดเมนู) --}}
<button id="hamburger-open" class="fixed top-6 right-6 z-50 text-white focus:outline-none">
    <svg class="h-7 w-7 stroke-current hover:stroke-blue-500 transition-colors duration-200" fill="none"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 7h16 M4 12h16 M4 17h16"/>
    </svg>
</button>

{{-- Overlay ด้านหลังเมนู --}}
<div id="hamburger-overlay" class="fixed inset-0 bg-opacity-0 z-30 hidden"></div>

{{-- Sidebar Menu --}}
<div id="hamburger-sidebar"
    class="fixed top-0 right-0 h-full w-[300px] bg-white/80 backdrop-blur-sm translate-x-full transition-transform duration-300 ease-in-out z-40 flex flex-col p-6">

    {{-- ปุ่ม Close (อยู่ซ้าย) --}}
    <button id="hamburger-close" class="self-start text-gray-700 mb-15 focus:outline-none">
        <svg class="h-6 w-6 stroke-current transform transition-transform duration-500 hover:rotate-[180deg]"
            fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>


    {{-- เมนูรายการ --}}
    <nav class="flex flex-col space-y-8 text-left w-full" style="font-family: 'Cormorant', light;">
        <a href="/" class="text-2xl text-[#112250] hover:text-[#83899D]">Home</a>
        <a href="/about" class="text-2xl text-[#112250] hover:text-[#83899D]">About Us</a>
        <a href="/services" class="text-2xl text-[#112250] hover:text-[#83899D]">Services</a>
        <a href="/contact" class="text-2xl text-[#112250] hover:text-[#83899D]">Contact</a>
    </nav>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openBtn = document.getElementById('hamburger-open');
        const closeBtn = document.getElementById('hamburger-close');
        const sidebar = document.getElementById('hamburger-sidebar');
        const overlay = document.getElementById('hamburger-overlay');

        function openMenu() {
            sidebar.classList.remove('translate-x-full');
            sidebar.classList.add('translate-x-0');
            overlay.classList.remove('hidden');
            openBtn.classList.add('hidden');
        }

        function closeMenu() {
            sidebar.classList.add('translate-x-full');
            sidebar.classList.remove('translate-x-0');
            overlay.classList.add('hidden');
            openBtn.classList.remove('hidden');
        }

        if (openBtn && closeBtn && sidebar && overlay) {
            openBtn.addEventListener('click', openMenu);
            closeBtn.addEventListener('click', closeMenu);
            overlay.addEventListener('click', function(e) {
                // ตรวจสอบว่า user คลิก "ด้านนอกของ sidebar"
                const isClickInsideSidebar = sidebar.contains(e.target);
                if (!isClickInsideSidebar) {
                    closeMenu();
                }
            });
        }
    });
</script>
