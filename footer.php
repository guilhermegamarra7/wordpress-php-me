<footer class="bg-brand-900 text-gray-400 py-12 border-t border-gray-800">
        <div class="max-w-screen-xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <span class="text-white font-bold text-xl">ME Imprensa</span>
            </div>
            <div class="text-sm">
                &copy; 2025 ME Imprensa & Assessoria.
            </div>
            <div class="flex gap-4">
                <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-linkedin text-xl"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-instagram text-xl"></i></a>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/5551999579829" target="_blank" class="fixed bottom-6 right-6 z-50 bg-green-500 text-white w-14 h-14 rounded-full shadow-2xl flex items-center justify-center hover:bg-green-600 hover:scale-110 transition-all duration-300 animate-bounce-slow" title="Fale conosco no WhatsApp">
        <i class="fa-brands fa-whatsapp text-3xl"></i>
    </a>

    <script>

        function toggleMenu() {
            const menu = document.getElementById('navbar-sticky');
            menu.classList.toggle('hidden');
        }

        document.querySelectorAll('#navbar-sticky a').forEach(link => {
            link.addEventListener('click', () => {
                const menu = document.getElementById('navbar-sticky');
                if (!menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                }
            });
        });


        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 10) {
                navbar.classList.add('shadow-md', 'bg-white/95');
                navbar.classList.remove('bg-white/0'); 
            } else {
                navbar.classList.remove('shadow-md', 'bg-white/95');
                navbar.classList.add('bg-white/90'); 
            }
        });


        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();
    </script>

    <?php wp_footer(); ?>
</body>
</html>