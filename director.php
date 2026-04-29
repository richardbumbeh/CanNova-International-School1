<?php include 'includes/header.php'; ?>

<!-- Page Hero -->
<section class="relative py-24 bg-dark text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-5xl font-extrabold mb-4 tracking-tight">Director's <span class="text-secondary">Message</span></h1>
            <p class="text-xl text-gray-400 opacity-90 italic border-l-4 border-secondary pl-6">"Education is not just about books; it's about building character and a vision for the future."</p>
        </div>
    </div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/20 rounded-full translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
</section>

<!-- Message Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16 items-start">
            <!-- Director Image Placeholder -->
            <div class="lg:w-1/3 w-full">
                <div class="relative">
                    <div class="aspect-[3/4] bg-gray-200 rounded-[3rem] shadow-2xl overflow-hidden border-8 border-white">
                        <img src="assets/img/home.jpeg" alt="Director" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                    </div>
                    <div class="absolute -bottom-8 -right-8 bg-secondary p-8 rounded-3xl shadow-xl">
                        <p class="text-primary font-bold text-lg">Dr. CanNova</p>
                        <p class="text-primary/70 text-sm font-semibold uppercase tracking-widest">School Director</p>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="lg:w-2/3 space-y-8">
                <h2 class="text-4xl font-bold text-dark leading-tight">Welcome to <span class="text-primary font-black italic">CanNova International School (CIS)</span></h2>
                
                <div class="space-y-6 text-gray-600 text-lg leading-relaxed">
                    <p>
                        Dear Parents and Guardians, it is my absolute honor to welcome you to the CanNova family. When we founded this institution in 2023, our dream was simple: to create a space where children aren't just students, but young explorers discover their unique potential.
                    </p>
                    <p>
                        At CIS, we understand that the early years of a child's life are the most critical for brain development and character formation. Our curriculum is designed to balance academic excellence with creative freedom, ensuring that our pupils are prepared for the challenges of tomorrow while enjoying the wonders of today.
                    </p>
                    <p>
                        We pride ourselves on our nurturing environment, state-of-the-art facilities, and a team of passionate educators who treat every child as an individual. Thank you for trusting us with your child's future.
                    </p>
                    <p class="font-bold text-dark">Warm regards,</p>
                    <div class="pt-4">
                        <p class="font-outfit text-3xl text-primary font-bold">Dr. CanNova</p>
                        <p class="text-sm text-gray-400 mt-1">Founder & Director, CIS</p>
                    </div>
                </div>

                <div class="pt-10 flex space-x-6">
                    <a href="admissions.php" class="bg-secondary text-primary px-8 py-4 rounded-2xl font-bold hover:shadow-xl transition-all">Join Our Community</a>
                    <a href="contact.php" class="border-2 border-gray-100 text-dark px-8 py-4 rounded-2xl font-bold hover:bg-gray-50 transition-all">Schedule a Tour</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
