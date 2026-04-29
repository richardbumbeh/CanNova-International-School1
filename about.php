<?php include 'includes/header.php'; ?>

<!-- Page Hero -->
<section class="relative py-32 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="assets/img/home.jpeg" alt="About Banner" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-primary/90 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/50 to-primary"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center text-white">
        <h1 class="text-5xl font-black mb-6 tracking-tight">Our Story & <span class="text-secondary italic">Mission</span></h1>
        <p class="text-xl text-primary-100 max-w-2xl mx-auto opacity-90 font-medium">Building the foundations of future leadership through excellence in early childhood education.</p>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Mission Card -->
            <div class="bg-gray-50 p-10 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 group">
                <div class="w-16 h-16 bg-primary text-secondary rounded-2xl flex items-center justify-center mb-8 transform group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold text-dark mb-6">Our Mission</h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    To provide a nurturing, high-quality international education that fosters critical thinking, creativity, and a lifelong love for learning in every child.
                </p>
            </div>
            
            <!-- Vision Card -->
            <div class="bg-gray-50 p-10 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 group">
                <div class="w-16 h-16 bg-secondary text-primary rounded-2xl flex items-center justify-center mb-8 transform group-hover:-rotate-6 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold text-dark mb-6">Our Vision</h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    To be the leading early childhood education provider in the region, recognized for developing confident, globally-minded, and responsible future leaders.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-dark mb-4">Our Core Values</h2>
            <p class="text-gray-500 max-w-xl mx-auto italic">The pillars that define the CanNova experience.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Value 1 -->
            <div class="bg-white p-8 rounded-3xl text-center shadow-sm hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto mb-6 font-bold text-xl">01</div>
                <h3 class="text-2xl font-black text-dark mb-3">Excellence</h3>
                <p class="text-gray-500 text-lg leading-relaxed">We strive for the highest standards in everything we do.</p>
            </div>
            <!-- Value 2 -->
            <div class="bg-white p-8 rounded-3xl text-center shadow-sm hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-secondary/10 text-secondary rounded-full flex items-center justify-center mx-auto mb-6 font-bold text-xl">02</div>
                <h3 class="text-2xl font-black text-dark mb-3">Integrity</h3>
                <p class="text-gray-500 text-lg leading-relaxed">Honesty and transparency are at our core.</p>
            </div>
            <!-- Value 3 -->
            <div class="bg-white p-8 rounded-3xl text-center shadow-sm hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto mb-6 font-bold text-xl">03</div>
                <h3 class="text-2xl font-black text-dark mb-3">Creativity</h3>
                <p class="text-gray-500 text-lg leading-relaxed">We encourage innovation and out-of-the-box thinking.</p>
            </div>
            <!-- Value 4 -->
            <div class="bg-white p-8 rounded-3xl text-center shadow-sm hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-secondary/10 text-secondary rounded-full flex items-center justify-center mx-auto mb-6 font-bold text-xl">04</div>
                <h3 class="text-2xl font-black text-dark mb-3">Empathy</h3>
                <p class="text-gray-500 text-lg leading-relaxed">We nurture kindness and respect for others.</p>
            </div>
        </div>
        
        <div class="mt-20 text-center">
            <a href="index.php" class="inline-flex items-center text-primary font-bold hover:text-secondary transition-colors group">
                <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Home
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
