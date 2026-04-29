<?php include 'includes/header.php'; ?>

<!-- Page Hero -->
<section class="relative py-32 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="assets/img/home.jpeg" alt="Contact Banner" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-primary/90 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/50 to-primary"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 text-white">
        <h1 class="text-5xl font-black mb-6 tracking-tight">Get in <span class="text-secondary italic">Touch</span></h1>
        <p class="text-xl text-primary-100 max-w-2xl mx-auto opacity-90 font-medium">We're here to answer your questions and welcome you to our community.</p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-20">
            <!-- Contact Info -->
            <div class="space-y-12">
                <div>
                    <h2 class="text-3xl font-black text-dark mb-8">Contact Information</h2>
                    <div class="space-y-8">
                        <div class="flex items-start space-x-6">
                            <div class="w-14 h-14 bg-primary/5 text-primary rounded-2xl flex items-center justify-center shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark text-lg mb-1">Our Location</h4>
                                <p class="text-gray-500 leading-relaxed">Block C, Pagos Island, Congo Town, Liberia</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-6">
                            <div class="w-14 h-14 bg-secondary/10 text-secondary rounded-2xl flex items-center justify-center shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark text-lg mb-1">Call Us</h4>
                                <p class="text-gray-500 leading-relaxed font-semibold text-xl">(+231) 777-297-443</p>
                                <p class="text-gray-400 text-sm italic">Available Mon - Fri, 8 AM - 4 PM</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6">
                            <div class="w-14 h-14 bg-primary/5 text-primary rounded-2xl flex items-center justify-center shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark text-lg mb-1">Email Us</h4>
                                <p class="text-gray-500 leading-relaxed font-semibold">info@cannova.edu.ng</p>
                                <p class="text-gray-400 text-sm italic">We respond within 24 hours</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Simple Map Placeholder -->
                <div class="h-64 bg-gray-100 rounded-[2.5rem] border border-gray-100 flex items-center justify-center overflow-hidden grayscale hover:grayscale-0 transition-all">
                    <img src="assets/img/home.jpeg" alt="Location Map" class="w-full h-full object-cover opacity-50">
                    <div class="absolute bg-white/90 backdrop-blur-md px-6 py-3 rounded-full shadow-lg font-bold text-primary">View on Google Maps</div>
                </div>
            </div>

            <!-- Form -->
            <div class="bg-gray-50 p-10 md:p-16 rounded-[3rem] shadow-sm border border-gray-100">
                <h2 class="text-3xl font-black text-dark mb-8 italic">Send an <span class="text-primary underline decoration-secondary decoration-4 underline-offset-8">Enquiry</span></h2>
                <form action="forms/submit_contact.php" method="POST" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Full Name</label>
                            <input type="text" name="name" required class="w-full px-6 py-4 rounded-2xl border-2 border-gray-100 focus:border-primary focus:ring-0 outline-none transition-all placeholder:text-gray-300" placeholder="John Doe">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Email Address</label>
                            <input type="email" name="email" required class="w-full px-6 py-4 rounded-2xl border-2 border-gray-100 focus:border-primary focus:ring-0 outline-none transition-all placeholder:text-gray-300" placeholder="john@example.com">
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Subject</label>
                        <select name="subject" class="w-full px-6 py-4 rounded-2xl border-2 border-gray-100 focus:border-primary focus:ring-0 outline-none transition-all text-gray-500">
                            <option value="general">General Enquiry</option>
                            <option value="admission">Admission Question</option>
                            <option value="feedback">Feedback</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Message</label>
                        <textarea name="message" rows="5" required class="w-full px-6 py-4 rounded-2xl border-2 border-gray-100 focus:border-primary focus:ring-0 outline-none transition-all placeholder:text-gray-300" placeholder="How can we help you?"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary text-white py-5 rounded-2xl font-bold text-xl hover:bg-dark hover:shadow-2xl transition-all flex items-center justify-center space-x-3 group">
                        <span>Send Message</span>
                        <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
