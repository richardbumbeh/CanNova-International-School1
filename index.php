<?php include 'includes/header.php'; ?>

<!-- Hero Slider Section -->
<section class="relative bg-white overflow-hidden">
    <!-- Swiper -->
    <div class="swiper heroSwiper h-[500px] md:h-[650px] lg:h-[750px]">
        <div class="swiper-wrapper">
            <!-- Slide 1: Welcome -->
            <div class="swiper-slide relative">
                <img src="assets/img/home.jpeg" class="w-full h-full object-cover" alt="Welcome to CanNova">
                <div class="absolute inset-0 bg-dark/50 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-3xl text-white">
                            <span class="inline-block bg-secondary text-primary px-4 py-1 rounded-full font-bold text-xs uppercase tracking-widest mb-6 animate-fadeIn">Established 2023</span>
                            <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-6 animate-slideUp">
                                Preparing <span class="text-secondary italic">Future Leaders</span> Today
                            </h1>
                            <p class="text-xl text-gray-100 mb-10 leading-relaxed max-w-2xl opacity-90">
                                CanNova International School (CIS) provides a nurturing environment where early childhood education meets international standards.
                            </p>
                            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                                <a href="admissions.php" class="bg-secondary text-primary px-10 py-4 rounded-full font-bold text-lg hover:shadow-2xl transition-all text-center">Apply for Admission</a>
                                <a href="about.php" class="bg-white/20 backdrop-blur-md text-white border-2 border-white/40 px-10 py-4 rounded-full hover:bg-white/30 transition-all text-lg font-medium text-center">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Learning -->
            <div class="swiper-slide relative">
                <img src="assets/img/WhatsApp Image 2026-04-28 at 14.36.46.jpeg" class="w-full h-full object-cover" alt="Learning">
                <div class="absolute inset-0 bg-dark/50 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-3xl text-white">
                            <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-6">
                                Holistic <span class="text-secondary italic">Child Development</span>
                            </h1>
                            <p class="text-xl text-gray-100 mb-10 leading-relaxed max-w-2xl opacity-90">
                                We focus on academic excellence, creative expression, and emotional intelligence to build well-rounded individuals.
                            </p>
                            <a href="academic.php" class="bg-secondary text-primary px-10 py-4 rounded-full font-bold text-lg hover:shadow-2xl transition-all inline-block">Explore Academics</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Swiper Controls -->
        <div class="swiper-button-next !text-white !right-10 after:!text-2xl hidden md:flex"></div>
        <div class="swiper-button-prev !text-white !left-10 after:!text-2xl hidden md:flex"></div>
        <div class="swiper-pagination !bottom-10"></div>
    </div>

    <style>
        .swiper-pagination-bullet { background: white !important; opacity: 0.5; width: 12px; height: 12px; }
        .swiper-pagination-bullet-active { background: #FFB800 !important; opacity: 1; width: 40px; border-radius: 6px; transition: all 0.3s; }
        .heroSwiper .swiper-slide img { transition: transform 10s ease-out; }
        .heroSwiper .swiper-slide-active img { transform: scale(1.15); }
    </style>
</section>

<!-- Quick Navigation -->
<section class="py-12 bg-white relative z-20 -mt-10 max-w-5xl mx-auto px-4">
    <div class="bg-white rounded-3xl shadow-2xl p-8 grid grid-cols-1 md:grid-cols-3 gap-8 border border-gray-50">
        <a href="admissions.php" class="group flex items-center space-x-6 p-4 rounded-2xl hover:bg-gray-50 transition-all">
            <div class="w-14 h-14 bg-primary/10 text-primary rounded-2xl flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-white transition-all">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            </div>
            <div>
                <h3 class="font-bold text-dark text-lg">Admission</h3>
                <p class="text-gray-400 text-sm">Enroll your child now</p>
            </div>
        </a>
        <a href="gallery.php" class="group flex items-center space-x-6 p-4 rounded-2xl hover:bg-gray-50 transition-all">
            <div class="w-14 h-14 bg-secondary/10 text-secondary rounded-2xl flex items-center justify-center shrink-0 group-hover:bg-secondary group-hover:text-primary transition-all">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
            <div>
                <h3 class="font-bold text-dark text-lg">Our Gallery</h3>
                <p class="text-gray-400 text-sm">See life at CanNova</p>
            </div>
        </a>
        <a href="contact.php" class="group flex items-center space-x-6 p-4 rounded-2xl hover:bg-gray-50 transition-all">
            <div class="w-14 h-14 bg-primary/10 text-primary rounded-2xl flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-white transition-all">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <div>
                <h3 class="font-bold text-dark text-lg">Contact Us</h3>
                <p class="text-gray-400 text-sm">Get in touch with us</p>
            </div>
        </a>
    </div>
</section>

<!-- Welcome Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2 relative">
                <div class="relative z-10 rounded-[3rem] overflow-hidden shadow-2xl border-8 border-white">
                    <img src="assets/img/home.jpeg" alt="Students" class="w-full h-auto">
                </div>
                <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-secondary rounded-[3rem] -z-0"></div>
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary rounded-[2rem] -z-0 opacity-20"></div>
            </div>
            <div class="lg:w-1/2 space-y-8">
                <div class="inline-block px-4 py-1 bg-primary/5 text-primary rounded-full font-bold text-sm tracking-widest uppercase">About Our School</div>
                <h2 class="text-4xl md:text-5xl font-black text-dark leading-tight">Nurturing Young Minds to <span class="text-primary italic">Soar Higher</span></h2>
                <p class="text-gray-500 text-xl leading-relaxed">
                    At CanNova International School (CIS), we believe that every child is a unique star waiting to shine. Our mission is to provide an educational foundation that is built on excellence, creativity, and integrity.
                </p>
                <div class="grid grid-cols-2 gap-8 py-4">
                    <div class="space-y-2">
                        <p class="text-4xl font-black text-primary">500+</p>
                        <p class="text-gray-400 font-bold text-sm uppercase">Happy Students</p>
                    </div>
                    <div class="space-y-2">
                        <p class="text-4xl font-black text-primary">20+</p>
                        <p class="text-gray-400 font-bold text-sm uppercase">Expert Teachers</p>
                    </div>
                </div>
                <a href="about.php" class="btn-primary inline-block !px-10 !py-4 text-lg">Our Full Story</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Video Column -->
            <div class="lg:w-1/2 w-full">
                <div class="relative group rounded-[2.5rem] overflow-hidden shadow-2xl bg-dark aspect-video border-8 border-white">
                    <!-- YouTube Embed (Specific Video ID: SNQtms7IoTE) -->
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/SNQtms7IoTE" title="CanNova School Presentation" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    
                    <!-- Decorative floating element -->
                    <div class="absolute -bottom-6 -left-6 bg-secondary w-20 h-20 rounded-3xl -z-10 group-hover:rotate-12 transition-transform"></div>
                </div>
            </div>

            <!-- Features Column -->
            <div class="lg:w-1/2 space-y-8">
                <div>
                    <h2 class="text-4xl font-black text-dark mb-4">Why Choose <span class="text-primary italic">CanNova School?</span></h2>
                    <p class="text-gray-500 italic">We don't just teach — we shape futures.</p>
                </div>

                <div class="space-y-8">
                    <!-- Feature 1 -->
                    <div class="flex items-start space-x-6 group">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center shrink-0 shadow-lg group-hover:bg-secondary group-hover:text-primary transition-all duration-300">
                            <i class="fas fa-certificate text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-dark text-2xl mb-2">Quality Academic Programs</h4>
                            <p class="text-gray-500 text-lg">A structured curriculum from Early Childhood through Upper Elementary.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start space-x-6 group">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center shrink-0 shadow-lg group-hover:bg-secondary group-hover:text-primary transition-all duration-300">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-dark text-2xl mb-2">Experienced & Caring Staff</h4>
                            <p class="text-gray-500 text-lg">Qualified teachers dedicated to every child's growth and wellbeing.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start space-x-6 group">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center shrink-0 shadow-lg group-hover:bg-secondary group-hover:text-primary transition-all duration-300">
                            <i class="fas fa-shield-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-dark text-2xl mb-2">Safe & Nurturing Environment</h4>
                            <p class="text-gray-500 text-lg">A secure space where students feel valued, confident, and motivated.</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="flex items-start space-x-6 group">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center shrink-0 shadow-lg group-hover:bg-secondary group-hover:text-primary transition-all duration-300">
                            <i class="fas fa-heart text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-dark text-2xl mb-2">Values-Based Education</h4>
                            <p class="text-gray-500 text-lg">Love, unity, discipline, and peaceful co-existence woven into every lesson.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <a href="about.php" class="bg-primary text-white px-10 py-4 rounded-2xl font-bold text-lg hover:bg-dark hover:shadow-2xl transition-all inline-block">Discover More About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats / Features Grid -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-dark">Why Parents Choose CanNova</h2>
            <p class="text-gray-500 max-w-xl mx-auto italic">The pillars that define the CanNova experience.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 bg-primary/10 text-primary rounded-xl flex items-center justify-center mb-6"><i class="fas fa-book-open"></i></div>
                <h3 class="text-xl font-bold mb-3">Modern Curriculum</h3>
                <p class="text-gray-400 text-sm">International standards adapted for early childhood development.</p>
            </div>
            <div class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 bg-secondary/10 text-secondary rounded-xl flex items-center justify-center mb-6"><i class="fas fa-shield-virus"></i></div>
                <h3 class="text-xl font-bold mb-3">Safe Environment</h3>
                <p class="text-gray-400 text-sm">Our campus is equipped with modern security and child-safe facilities.</p>
            </div>
            <div class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 bg-primary/10 text-primary rounded-xl flex items-center justify-center mb-6"><i class="fas fa-palette"></i></div>
                <h3 class="text-xl font-bold mb-3">Creative Arts</h3>
                <p class="text-gray-400 text-sm">We nurture talent in music, painting, and performing arts.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 relative overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="assets/img/home.jpeg" alt="Banner Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-primary/90 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/80 to-transparent"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 text-white">
        <h2 class="text-4xl md:text-6xl font-black mb-8 leading-tight">Ready to start your child's <span class="text-secondary italic">journey?</span></h2>
        <p class="text-xl text-primary-100 mb-12 opacity-80 font-medium">Admissions for the 2024 academic year are currently ongoing. Limited spaces available.</p>
        <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="admissions.php" class="bg-secondary text-primary px-12 py-5 rounded-full font-bold text-xl hover:shadow-2xl transition-all hover:scale-105">Enroll Now</a>
            <a href="contact.php" class="bg-white/10 backdrop-blur-md text-white border-2 border-white/20 px-12 py-5 rounded-full font-bold text-xl hover:bg-white/20 transition-all">Talk to us</a>
        </div>
    </div>
</section>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.heroSwiper', {
            loop: true,
            effect: 'fade',
            fadeEffect: { crossFade: true },
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            speed: 1500,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
