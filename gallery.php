<?php include 'includes/header.php'; ?>

<!-- Page Hero -->
<section class="relative py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-block px-4 py-1 bg-secondary/20 text-primary rounded-full font-bold text-xs uppercase tracking-widest mb-4">Visual Tour</div>
        <h1 class="text-5xl font-black text-dark mb-6 tracking-tight italic">Our <span class="text-primary">Gallery</span></h1>
        <p class="text-xl text-gray-500 max-w-2xl mx-auto italic">Capturing beautiful moments and milestones at CanNova International School (CIS).</p>
    </div>
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
</section>

<!-- Gallery Grid -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Gallery Item 1 -->
            <div class="group relative aspect-square overflow-hidden rounded-[2.5rem] bg-gray-200 shadow-sm hover:shadow-2xl transition-all duration-500">
                <img src="assets/img/home.jpeg" alt="School Environment" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col items-center justify-center p-8 text-center">
                    <h3 class="text-white text-2xl font-bold mb-2">Modern Campus</h3>
                    <p class="text-secondary text-sm font-bold uppercase tracking-widest">Environment</p>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="group relative aspect-square overflow-hidden rounded-[2.5rem] bg-gray-200 shadow-sm hover:shadow-2xl transition-all duration-500">
                <img src="assets/img/WhatsApp Image 2026-04-28 at 14.36.46.jpeg" alt="Learning Activity" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col items-center justify-center p-8 text-center">
                    <h3 class="text-white text-2xl font-bold mb-2">Active Learning</h3>
                    <p class="text-secondary text-sm font-bold uppercase tracking-widest">Education</p>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="group relative aspect-square overflow-hidden rounded-[2.5rem] bg-gray-200 shadow-sm hover:shadow-2xl transition-all duration-500">
                <img src="assets/img/WhatsApp Image 2026-04-28 at 14.36.42.jpeg" alt="Creative Arts" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col items-center justify-center p-8 text-center">
                    <h3 class="text-white text-2xl font-bold mb-2">Creative Minds</h3>
                    <p class="text-secondary text-sm font-bold uppercase tracking-widest">Arts & Culture</p>
                </div>
            </div>

            <!-- More items using existing placeholders or images -->
            <div class="group relative aspect-square overflow-hidden rounded-[2.5rem] bg-gray-200 shadow-sm hover:shadow-2xl transition-all duration-500">
                <img src="assets/img/home.jpeg" alt="School Life" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 grayscale hover:grayscale-0">
                <div class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col items-center justify-center p-8 text-center">
                    <h3 class="text-white text-2xl font-bold mb-2">Student Life</h3>
                    <p class="text-secondary text-sm font-bold uppercase tracking-widest">Community</p>
                </div>
            </div>
            
            <div class="group relative aspect-square overflow-hidden rounded-[2.5rem] bg-gray-200 shadow-sm hover:shadow-2xl transition-all duration-500">
                <img src="assets/img/WhatsApp Image 2026-04-28 at 14.36.46.jpeg" alt="Facilities" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col items-center justify-center p-8 text-center">
                    <h3 class="text-white text-2xl font-bold mb-2">World-Class Facilities</h3>
                    <p class="text-secondary text-sm font-bold uppercase tracking-widest">Infrastructure</p>
                </div>
            </div>

            <div class="group relative aspect-square overflow-hidden rounded-[2.5rem] bg-gray-200 shadow-sm hover:shadow-2xl transition-all duration-500">
                <img src="assets/img/WhatsApp Image 2026-04-28 at 14.36.42.jpeg" alt="Fun Moments" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col items-center justify-center p-8 text-center">
                    <h3 class="text-white text-2xl font-bold mb-2">Happy Moments</h3>
                    <p class="text-secondary text-sm font-bold uppercase tracking-widest">Social</p>
                </div>
            </div>
        </div>

        <div class="mt-20 text-center">
            <p class="text-gray-400 mb-8 italic">Follow us on social media for more updates.</p>
            <a href="contact.php" class="btn-primary !px-12 !py-4 text-lg inline-block">Schedule a School Visit</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
