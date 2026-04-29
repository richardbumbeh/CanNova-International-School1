<?php
require_once 'config/db.php';

$app_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($app_id <= 0) {
    die("Invalid Application ID.");
}

try {
    $stmt = $pdo->prepare("SELECT * FROM admissions WHERE id = ?");
    $stmt->execute([$app_id]);
    $student = $stmt->fetch();

    if (!$student) {
        die("Application not found.");
    }
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form - <?php echo htmlspecialchars($student['student_name']); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media print {
            .no-print { display: none; }
            body { background: white; padding: 0; margin: 0; }
            .print-container { border: none; box-shadow: none; width: 100%; max-width: 100%; padding: 0; }
        }
        body { font-family: 'Arial', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-4xl mx-auto bg-white border-2 border-gray-200 p-12 print-container shadow-sm relative overflow-hidden">
        <!-- School Header -->
        <div class="flex justify-between items-center border-b-2 border-primary pb-8 mb-8">
            <div class="flex items-center space-x-4">
                <img src="assets/img/WhatsApp Image 2026-04-27 at 21.48.15.jpeg" alt="CIS Logo" class="h-24 w-auto">
                <div>
                    <h1 class="text-3xl font-extrabold text-primary">CanNova International School (CIS)</h1>
                    <p class="text-lg text-gray-600 font-bold tracking-widest uppercase">Admission Form</p>
                    <p class="text-sm text-gray-500">Motto: Preparing Future Leaders Today</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-sm text-gray-500">Application ID: <span class="font-bold text-dark">#CIS-<?php echo str_pad($student['id'], 5, '0', STR_PAD_LEFT); ?></span></p>
                <p class="text-sm text-gray-500">Date: <span class="font-bold text-dark"><?php echo date('d M, Y', strtotime($student['created_at'])); ?></span></p>
            </div>
        </div>

        <!-- Student Details -->
        <div class="space-y-8">
            <section>
                <h3 class="text-lg font-bold text-white bg-primary px-4 py-2 rounded-lg mb-6">Student Particulars</h3>
                <div class="grid grid-cols-2 gap-y-6 px-4">
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Full Name</p>
                        <p class="text-lg font-bold text-dark"><?php echo htmlspecialchars($student['student_name']); ?></p>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Date of Birth</p>
                        <p class="text-lg font-bold text-dark"><?php echo htmlspecialchars($student['dob']); ?></p>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Gender</p>
                        <p class="text-lg font-bold text-dark"><?php echo htmlspecialchars($student['gender']); ?></p>
                    </div>
                        <p class="text-lg font-bold text-dark"><?php echo htmlspecialchars($student['class']); ?></p>
                </div>
            </section>

            <section>
                <h3 class="text-lg font-bold text-white bg-primary px-4 py-2 rounded-lg mb-6">Parent/Guardian Details</h3>
                <div class="grid grid-cols-2 gap-y-6 px-4">
                    <div class="col-span-2">
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Full Name</p>
                        <p class="text-lg font-bold text-dark"><?php echo htmlspecialchars($student['parent_name']); ?></p>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Phone Number</p>
                        <p class="text-lg font-bold text-dark"><?php echo htmlspecialchars($student['phone']); ?></p>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Email Address</p>
                        <p class="text-lg font-bold text-dark"><?php echo htmlspecialchars($student['email']); ?></p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Home Address</p>
                        <p class="text-lg font-bold text-dark"><?php echo htmlspecialchars($student['address']); ?></p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer / Certification -->
        <div class="mt-16 pt-12 border-t border-gray-100 grid grid-cols-2 gap-12">
            <div class="space-y-8">
                <div class="h-20 border-b border-gray-300 w-full"></div>
                <p class="text-xs text-gray-500 font-bold text-center uppercase">Parent/Guardian Signature</p>
            </div>
            <div class="space-y-8">
                <div class="h-20 border-b border-gray-300 w-full"></div>
                <p class="text-xs text-gray-500 font-bold text-center uppercase">Registrar Signature & Stamp</p>
            </div>
        </div>

        <div class="mt-12 text-center text-[10px] text-gray-400 uppercase tracking-widest italic">
            This is an electronically generated admission form for CanNova International School (CIS).
        </div>
    </div>

    <!-- Print Button (Visible only on screen) -->
    <div class="fixed bottom-10 right-10 no-print">
        <button onclick="window.print()" class="bg-secondary text-primary px-8 py-4 rounded-full font-bold shadow-2xl flex items-center space-x-2 hover:scale-105 transition-transform">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
            <span>Print Form</span>
        </button>
    </div>

</body>
</html>
