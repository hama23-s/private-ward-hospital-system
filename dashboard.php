<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - مستشفى خانقين</title>
    <link rel="stylesheet" href="style_dashboard.css?v=<?php echo filemtime('style_dashboard.css'); ?>">

</head>
<body>
    <!-- الترويسة -->
    <div class="header">
    <button class="btn close-btn">إغلاق البرنامج</button>
    <div class="left-buttons">
        <a href="search_patient_data.html">
        <button class="btn">بحث عن المريض</button>
</a>
        <a href="alaedadat.html">
        <button class="btn">الإعدادات</button>
        </a>
    </div>
</div>


    <!-- محتوى الواجهة -->
    <div class="main-content">
        <!-- الوردة والشعار -->
        <div class="daisy-flower">
            <!-- بتلات الوردة -->
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
            <!-- مركز الوردة -->
            <div class="center"></div>
        </div>

        <!-- معلومات المستشفى -->
        <div class="hospital-info">
            <p>دائرة صحة محافظة ديالى</p>
            <p>مستشفى خانقين العام / الجناح الخاص</p>
        </div>

        <!-- القائمة -->
        <div class="menu">
        <div class="menu-item wider"></div>
        <a href="add_patient.php">
    <div class="menu-item">
        <img src="image/Picture1.jpg" class="menu-icon">
        <p>إضافة المريض</p>
    </div>
</a>

    <a href="athna_eamalayh.php">
    <div class="menu-item">
        <img src='image\Picture2.jpg' class="menu-icon">
        <p>معلومات أثناء عملية</p>
    </div>
</a>

    <a href="baed_eamalayh.php">
    <div class="menu-item">
        <img src="image\Picture3.jpg" class="menu-icon">
        <p>معلومات بعد عملية</p>
    </div>
</a>
    <a href="aladara.php">
    <div class="menu-item">
        <img src="image\Picture4.jpg"  class="menu-icon">
        <p>الادارة </p>
    </div>
</a>
    <a href="altaqrir.html">
    <div class="menu-item">
        <img src="image\Picture5.jpg"  class="menu-icon">
        <p>التقرير</p>
    </div>
</a>
    <div class="menu-item wider"></div>
</div>

    </div>
</body>
</html>
