<?php

// إعدادات الاتصال بقاعدة البيانات
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "private_ward_db";

// إنشاء الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

$username_error = $password_error = '';

// التحقق من إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // جلب المستخدم حسب اسم المستخدم فقط
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // التحقق من وجود المستخدم
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // تحقق من كلمة المرور
        if (password_verify($password, $user['password'])) {
            // نجاح تسجيل الدخول
            header('Location: dashboard.php');
            exit();
        } else {
            $password_error = "كلمة المرور غير صحيحة";
        }
    } else {
        $username_error = "اسم المستخدم غير صحيح";
    }

    $stmt->close();
}

$conn->close();

// عرض صفحة تسجيل الدخول
include 'index.html';
?>
