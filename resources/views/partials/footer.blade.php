{{-- ✅ Footer Partial --}}
<footer class="bg-[#0c1f44] text-white py-10 px-6 pb-5">
    <div class="max-w-7xl mx-auto flex flex-col items-center md:flex-row md:items-start md:justify-end text-sm space-y-6 md:space-y-0">
        
        {{-- Menu Right Aligned --}}
        <div class="flex flex-col items-center md:items-end space-y-2">
            <a href="{{ url('/') }}" class="hover:underline">Home</a>
            <a href="{{ url('/about') }}" class="hover:underline">About Us</a>
            <a href="{{ url('/services') }}" class="hover:underline">Our Services</a>
            <a href="{{ url('/contact') }}" class="hover:underline">Contact Us</a>
        </div>

    </div>

    {{-- Copyright Text Centered --}}
    <div class="mt-8 text-center text-xs text-gray-300">
        © 2025 Awesome Network Thailand. All Rights Reserved.
    </div>
</footer>



<style>
    footer a {
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: #cbd5e1;
    }
</style>
