<?php 
include 'includes/header.php'; 
$app_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>

<section class="py-32 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-white p-12 rounded-3xl shadow-2xl border border-gray-100">
            <div class="w-20 h-20 bg-secondary/20 text-secondary rounded-full flex items-center justify-center mx-auto mb-8">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h1 class="text-4xl font-bold text-dark mb-4">Registration Successful!</h1>
            <p class="text-gray-600 text-lg mb-10 leading-relaxed">
                Thank you for applying to CanNova International School (CIS). Your registration data has been securely saved in our system.
            </p>
            
            <div class="space-y-4">
                <a href="download_admission.php?id=<?php echo $app_id; ?>" target="_blank" class="block w-full bg-primary text-white py-4 rounded-xl font-bold text-lg hover:bg-opacity-90 transition-all shadow-lg flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Download Your Form
                </a>
                <a href="index.php" class="block w-full text-gray-500 font-medium hover:text-primary transition-colors">
                    Back to Home
                </a>
            </div>
        </div>
        
        <div class="mt-12 p-6 bg-secondary/10 rounded-2xl border border-secondary/20">
            <p class="text-primary font-bold">What's Next?</p>
            <p class="text-gray-600 text-sm mt-2">Our admissions team will contact you within 3-5 business days via email or phone to schedule an assessment.</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
