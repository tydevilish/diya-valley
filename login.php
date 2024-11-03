<?php

if (isset($_SESSION['user'])) {
    header('Location: logout.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| ระบบบริหารงาน </title>
    <link rel="icon" href="https://devcm.info/img/favicon.png">
    <link rel="stylesheet" href="./src/style_fix.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-eva" style="background-image: url('./src/output-onlinepngtoolsnew.png'); background-size: cover; background-position: center;">

<?php
session_start();
require './config/config.php';

if (isset($_POST['submit'])) {
    $login = new Login();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "กรุณากรอกชื่อผู้ใช้และรหัสผ่าน";
    } else {
        $login->login($username, $password);
    }
}
?>

<body class="bg-modern">
    <!-- เพิ่ม spinner element -->
    <div id="loader" class="fixed inset-0 bg-white flex justify-center items-center z-50 transition-opacity duration-500">
        <div class="w-12 h-12 border-4 border-gray-200 border-t-blue-500 rounded-full animate-spin"></div>
    </div>

    <!-- เพิ่ม script ควบคุม spinner -->
    <script>
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader');
            setTimeout(function() {
                loader.classList.add('opacity-0');
                // รอให้ animation จบก่อนซ่อน element
                setTimeout(() => {
                    loader.classList.add('hidden');
                }, 250);
            }, 500);
        });
    </script>

<div class="flex flex-col bg-white space-y-5 rounded-xl lg:mx-auto max-w-lg w-full px-12 py-10 mx-10">
    <div>
        <img
            src="https://devcm.info/img/favicon.png"
            alt="icons"
            class="mx-auto w-20 h-20">
    </div>
    <div>
        <p
            class="title">
            ยินดีต้อนรับเข้าสู่ระบบ
        </p>
    </div>
    <form method="post" class="flex flex-col space-y-5">
        <div>
            <input
                type="text"
                name="username"
                class="input-field <?php echo isset($_SESSION['error']) ? 'input-field-error' : ''; ?>"
                placeholder="Username"
                value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
        </div>
        <div>
            <input
                type="password"
                name="password"
                class="input-field <?php echo isset($_SESSION['error']) ? 'input-field-error' : ''; ?>"
                placeholder="••••••••••••">
        </div>
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input type="checkbox"
                    class="checkbox"
                    checked>
            </div>
            <div class="ml-2 text-sm">
                <label for="remember" class="text-eva">จดจำฉันไว้ในระบบ</label>
            </div>
        </div>
        <div>
            <button
                type="submit"
                name="submit"
                class="primary-button">
                เข้าสู่ระบบ
            </button>
        </div>
    </form>

    <?php if (isset($_SESSION['error'])) { ?>
        <div class="text-red-500 mt-5 text-center">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php } ?>
</div>

</body>

</html>