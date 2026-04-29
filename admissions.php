<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative py-32 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="assets/img/home.jpeg" alt="Admissions Banner" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-primary/90 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/50 to-primary"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 text-white">
        <h1 class="text-5xl font-black mb-6 tracking-tight">Admission & <span class="text-secondary italic">Registration</span></h1>
        <p class="text-xl text-primary-100 max-w-2xl mx-auto opacity-90 font-medium">Join the CanNova family and prepare your child for a bright future.</p>
    </div>
</section>

<!-- Section 1: Admission Highlights -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all group">
                <div class="w-12 h-12 bg-primary/10 text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    <i class="fas fa-check-circle text-xl"></i>
                </div>
                <h3 class="text-2xl font-black text-dark mb-4">Rolling Admissions</h3>
                <p class="text-gray-500 text-lg leading-relaxed">Applications are reviewed promptly during each intake period.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all group">
                <div class="w-12 h-12 bg-primary/10 text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    <i class="fas fa-users text-xl"></i>
                </div>
                <h3 class="text-2xl font-black text-dark mb-4">Parent Support</h3>
                <p class="text-gray-500 text-lg leading-relaxed">Our team guides parents through every step from inquiry to enrollment.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all group">
                <div class="w-12 h-12 bg-primary/10 text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    <i class="fas fa-graduation-cap text-xl"></i>
                </div>
                <h3 class="text-2xl font-black text-dark mb-4">Grade Placement</h3>
                <p class="text-gray-500 text-lg leading-relaxed">Students are placed based on age, records, and readiness assessment.</p>
            </div>
        </div>

        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-dark tracking-tight">Admission <span class="text-primary">Requirements</span></h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Required Documents -->
            <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-sm border border-gray-100">
                <h3 class="text-2xl font-bold text-dark mb-8 flex items-center">
                    <span class="w-1.5 h-8 bg-secondary rounded-full mr-4"></span>
                    Required Documents
                </h3>
                <ul class="space-y-6">
                    <li class="flex items-center text-gray-700 text-lg font-semibold">
                        <i class="fas fa-check-circle text-green-500 mr-4 text-xl"></i>
                        Completed Application Form
                    </li>
                    <li class="flex items-center text-gray-700 text-lg font-semibold">
                        <i class="fas fa-check-circle text-green-500 mr-4 text-xl"></i>
                        Child Birth Certificate (copy)
                    </li>
                    <li class="flex items-center text-gray-700 text-lg font-semibold">
                        <i class="fas fa-check-circle text-green-500 mr-4 text-xl"></i>
                        Previous School Records/Transcript
                    </li>
                    <li class="flex items-center text-gray-700 text-lg font-semibold">
                        <i class="fas fa-check-circle text-green-500 mr-4 text-xl"></i>
                        Two Recent Passport Photos
                    </li>
                    <li class="flex items-center text-gray-700 text-lg font-semibold">
                        <i class="fas fa-check-circle text-green-500 mr-4 text-xl"></i>
                        Parent/Guardian Contact Information
                    </li>
                </ul>
            </div>

            <!-- Important Dates -->
            <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-sm border border-gray-100">
                <h3 class="text-2xl font-bold text-dark mb-8 flex items-center">
                    <span class="w-1.5 h-8 bg-primary rounded-full mr-4"></span>
                    Important Admission Dates
                </h3>
                <div class="space-y-8">
                    <div class="flex justify-between items-center border-b border-gray-100 pb-6">
                        <span class="text-gray-500 text-lg font-medium">Application Window Opens</span>
                        <span class="text-xl font-black text-primary">Aug 25, 2026</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-gray-100 pb-6">
                        <span class="text-gray-500 text-lg font-medium">Placement Assessment</span>
                        <span class="text-xl font-black text-primary">Sep 2 - Sep 5, 2026</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-gray-100 pb-6">
                        <span class="text-gray-500 text-lg font-medium">Admission Decisions</span>
                        <span class="text-xl font-black text-primary">Sep 7, 2026</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-500 text-lg font-medium">Enrollment Confirmation</span>
                        <span class="text-xl font-black text-primary">Sep 8 - Sep 12, 2026</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Student Registration Form -->
<section id="registration-form" class="py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-dark">Student Registration Form</h2>
            <p class="text-gray-500 mt-4">Please fill in all the details correctly to start the admission process.</p>
        </div>

        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
            <div class="p-8 md:p-12">
                <form action="forms/submit_admission.php" method="POST" class="space-y-8">
                    <!-- Student Info -->
                    <div>
                        <h3 class="text-lg font-bold text-primary mb-6 flex items-center">
                            <span class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center mr-3 text-sm">01</span>
                            Student Information
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700" for="full_name">Full Name *</label>
                                <input type="text" name="full_name" id="full_name" required placeholder="Enter student's full name"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700" for="date_of_birth">Date of Birth *</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700" for="gender">Gender *</label>
                                <select name="gender" id="gender" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all bg-white">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700" for="class_applying">Class Applying For *</label>
                                <select name="class_applying" id="class_applying" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all bg-white">
                                    <option value="" disabled selected>Select Class</option>
                                    <option value="Nursery">Nursery</option>
                                    <option value="Pre-K">Pre-K</option>
                                    <option value="KG 1">KG 1</option>
                                    <option value="KG 2">KG 2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-100">

                    <!-- Parent Info -->
                    <div>
                        <h3 class="text-lg font-bold text-primary mb-6 flex items-center">
                            <span class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center mr-3 text-sm">02</span>
                            Parent/Guardian Information
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2 md:col-span-2">
                                <label class="text-sm font-semibold text-gray-700" for="parent_name">Parent/Guardian Full Name *</label>
                                <input type="text" name="parent_name" id="parent_name" required placeholder="Enter parent's full name"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700" for="phone">Phone Number *</label>
                                <input type="tel" name="phone" id="phone" required placeholder="e.g. +1234567890"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700" for="email">Email Address *</label>
                                <input type="email" name="email" id="email" required placeholder="example@email.com"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
                            </div>
                            <div class="space-y-2 md:col-span-2">
                                <label class="text-sm font-semibold text-gray-700" for="address">Home Address *</label>
                                <textarea name="address" id="address" rows="3" required placeholder="Enter full residential address"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full bg-secondary text-primary py-4 rounded-xl font-extrabold text-xl hover:bg-opacity-90 transition-all shadow-xl hover:shadow-secondary/20 flex items-center justify-center">
                            Submit Registration
                            <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
