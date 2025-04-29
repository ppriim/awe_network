{{-- ปุ่ม Hamburger ด้านขวาบน (ตอนยังไม่เปิดเมนู) --}}
<button id="hamburger-open" class="fixed top-6 right-6 z-50 text-white focus:outline-none">
    <svg class="h-6 w-7 stroke-current hover:stroke-blue-500 transition-colors duration-200" fill="none"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>

{{-- Sidebar Menu --}}
<div id="hamburger-sidebar"
    class="fixed top-0 right-0 h-full w-[300px] bg-white/80 backdrop-blur-sm translate-x-full transition-transform duration-300 ease-in-out z-40 flex flex-col p-6">

    {{-- ปุ่ม Close (อยู่ซ้าย) --}}
    <button id="hamburger-close" class="self-start text-gray-700 mb-8 focus:outline-none">
        <svg class="h-8 w-8 stroke-current hover:stroke-blue-500 transform transition-transform duration-500 hover:rotate-[360deg]"
            fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>


    {{-- เมนูรายการ --}}
    <nav class="flex flex-col space-y-8 text-right w-full">
        <a href="/" class="text-2xl font-semibold text-gray-800 hover:text-gray-500">Home</a>
        <a href="/about" class="text-2xl font-semibold text-gray-800 hover:text-gray-500">About Us</a>
        <a href="/services" class="text-2xl font-semibold text-gray-800 hover:text-gray-500">Services</a>
        <a href="/contact" class="text-2xl font-semibold text-gray-800 hover:text-gray-500">Contact</a>
    </nav>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openBtn = document.getElementById('hamburger-open');
        const closeBtn = document.getElementById('hamburger-close');
        const sidebar = document.getElementById('hamburger-sidebar');

        if (openBtn && closeBtn && sidebar) {
            openBtn.addEventListener('click', () => {
                sidebar.classList.remove('translate-x-full');
                sidebar.classList.add('translate-x-0');
                openBtn.classList.add('hidden'); // 🛑 ซ่อนปุ่ม Hamburger ตอนเปิด
            });

            closeBtn.addEventListener('click', () => {
                sidebar.classList.add('translate-x-full');
                sidebar.classList.remove('translate-x-0');
                openBtn.classList.remove('hidden'); // ✅ โชว์ปุ่ม Hamburger กลับมา
            });
        }
    });
</script>
