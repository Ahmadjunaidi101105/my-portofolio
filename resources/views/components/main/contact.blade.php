<x-card title="📞 Contact & Social Media" icon="fa-solid fa-address-book">
    {{-- Menggunakan Grid 3 kolom untuk layar besar, dan responsif untuk layar kecil --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        {{-- GitHub --}}
        <a href="https://github.com/Ahmadjunaidi101105" target="_blank"
            class="flex items-center p-4 rounded-lg text-white shadow-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl bg-gray-800 hover:bg-black">
            <i class="fab fa-github fa-2x w-12 text-center opacity-80"></i>
            <div>
                <span class="font-bold text-base block">GitHub</span>
                <span class="text-xs opacity-80">My programming portfolio</span>
            </div>
        </a>

        {{-- LinkedIn --}}
        <a href="https://www.linkedin.com/in/ahmad-junaidi-572385235/" target="_blank"
            class="flex items-center p-4 rounded-lg text-white shadow-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl bg-[#0A66C2] hover:bg-[#0854a0]">
            <i class="fab fa-linkedin fa-2x w-12 text-center opacity-80"></i>
            <div>
                <span class="font-bold text-base block">LinkedIn</span>
                <span class="text-xs opacity-80">See my career page</span>
            </div>
        </a>

        {{-- WhatsApp --}}
        <a href="https://wa.me/+6285714336286" target="_blank"
            class="flex items-center p-4 rounded-lg text-white shadow-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl bg-[#25D366] hover:bg-[#1DA851]">
            <i class="fab fa-whatsapp fa-2x w-12 text-center opacity-80"></i>
            <div>
                <span class="font-bold text-base block">WhatsApp</span>
                <span class="text-xs opacity-80">Send me a message</span>
            </div>
        </a>

        {{-- Instagram --}}
        <a href="https://www.instagram.com/ahbdz_/" target="_blank"
            class="flex items-center p-4 rounded-lg text-white shadow-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500">
            <i class="fab fa-instagram fa-2x w-12 text-center opacity-80"></i>
            <div>
                <span class="font-bold text-base block">Instagram</span>
                <span class="text-xs opacity-80">Follow me</span>
            </div>
        </a>

        {{-- Facebook --}}
        <a href="https://www.facebook.com/ahmmd.junaidi/" target="_blank"
            class="flex items-center p-4 rounded-lg text-white shadow-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl bg-[#1877F2] hover:bg-[#125bba]">
            <i class="fab fa-facebook fa-2x w-12 text-center opacity-80"></i>
            <div>
                <span class="font-bold text-base block">Facebook</span>
                <span class="text-xs opacity-80">Let's be friends</span>
            </div>
        </a>

        {{-- Email --}}
        <a href="mailto:ahmadjunaidibeds@gmail.com" target="_blank"
            class="flex items-center p-4 rounded-lg text-white shadow-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl bg-gray-500 hover:bg-gray-600">
            <i class="fas fa-envelope fa-2x w-12 text-center opacity-80"></i>
            <div>
                <span class="font-bold text-base block">E-Mail</span>
                <span class="text-xs opacity-80">Business inquiries?</span>
            </div>
        </a>

    </div>
</x-card>