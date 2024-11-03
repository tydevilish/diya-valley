<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| ระบบจัดการหมู่บ้าน </title>
    <link rel="icon" href="https://devcm.info/img/favicon.png">
    <link rel="stylesheet" href="../../src/style_fix.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-modern">
    <div class="flex">
        <div id="sidebar" class="fixed top-0 left-0 h-full w-20 hover:w-64 group transition-all duration-300 ease-in-out bg-gradient-to-b from-blue-600 to-blue-500 shadow-xl">
            <div class="flex flex-col h-full">
                <!-- Profile Section -->
                <div class="p-4 mb-6">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0">
                            <img src="https://img5.pic.in.th/file/secure-sv1/img_avatar3.png"
                                alt="Profile"
                                class="w-12 h-12 rounded-full border-2 border-white shadow-md hover:scale-105 transition-transform duration-200">
                        </div>
                        <div class="ml-4">
                            <h3 class="text-white font-semibold text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out whitespace-nowrap">คุณจิรภัทร ป่าไพร</h3>
                            <p class="text-blue-100 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out whitespace-nowrap">Admin</p>
                        </div>
                    </div>
                </div>

                <!-- Menu Section -->
                <div class="px-3">
                    <div class="mb-4">
                        <h2 class="text-xs font-bold text-white/80 px-4 mb-2">Menu</h2>
                        <nav class="space-y-2">
                            <a href="admin.php" class="flex items-center px-4 py-2.5 text-white hover:bg-white/10 rounded-lg transition-all duration-200">
                                <svg class="w-5 h-5 flex-shrink-0 text-white/80 transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                    <polyline points="9 22 9 12 15 12 15 22" />
                                </svg>
                                <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out text-sm whitespace-nowrap">หน้าหลัก</span>
                            </a>

                            <a href="payment.php" class="flex items-center px-4 py-2.5 text-white hover:bg-white/10 rounded-lg transition-all duration-200">
                                <svg class="w-5 h-5 flex-shrink-0 text-white/80 transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="5" width="20" height="14" rx="2" />
                                    <line x1="2" y1="10" x2="22" y2="10" />
                                </svg>
                                <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out text-sm whitespace-nowrap">จัดการค่าส่วนกลาง</span>
                            </a>

                            <a href="request.php" class="flex items-center px-4 py-2.5 text-white hover:bg-white/10 rounded-lg transition-all duration-200">
                                <svg class="w-5 h-5 flex-shrink-0 text-white/80 transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                                </svg>
                                <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out text-sm whitespace-nowrap">จัดการแจ้งซ่อม</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2.5 text-white hover:bg-white/10 rounded-lg transition-all duration-200">
                                <svg class="w-5 h-5 flex-shrink-0 text-white/80 transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out text-sm whitespace-nowrap">จัดการข้อมูลผู้ใช้</span>
                            </a>
                        </nav>
                    </div>

                    <!-- Others Section -->
                    <div class="mb-4">
                        <h2 class="text-xs font-bold text-white/80 px-4 mb-2">Others</h2>
                        <nav class="space-y-2">
                            <a href="edit_profile.php" class="flex items-center px-4 py-2.5 text-white hover:bg-white/10 rounded-lg transition-all duration-200">
                                <svg class="w-5 h-5 flex-shrink-0 text-white/80 transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                                <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out text-sm whitespace-nowrap">แก้ไขโปรไฟล์</span>
                            </a>

                            <a href="../../logout.php" class="flex items-center px-4 py-2.5 text-white bg-red-400 hover:bg-red-500 rounded-lg transition-all duration-200">
                                <svg class="w-5 h-5 flex-shrink-0 text-white transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-250 ease-in-out text-sm whitespace-nowrap">ออกจากระบบ</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="flex-1 ml-20">
        <!-- Top Navigation -->
        <nav class="bg-white shadow-sm px-6 py-3">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-bold text-eva">จัดการข้อมูลผู้ใช้</h1>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button class="p-2 rounded-full hover:bg-gray-100 relative" onclick="toggleNotifications()">
                            <!-- จุดแจ้งเตือนสีแดง -->
                            <div class="absolute top-2 right-2.5 w-2 h-2 bg-red-500 rounded-full flex items-center justify-center">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>

                        <!-- เพิ่มกล่องแจ้งเตือนใต้กระดิ่ง -->
                        <div id="notificationDropdown" class="hidden absolute right-0 top-full mt-2 w-80 bg-white rounded-lg shadow-xl z-50">
                            <div class="p-4">
                                <div class="space-y-4">
                                    <!-- รายการแจ้งเตือน -->
                                    <a href="payment" class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <rect x="2" y="5" width="20" height="14" rx="2" />
                                                    <line x1="2" y1="10" x2="22" y2="10" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm font-medium text-gray-800">ค่าส่วนกลางประจำเดือนมีนาคม 2567</p>
                                                <p class="text-xs text-gray-500">รอการชำระเงิน 500 บาท</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- เพิ่ม JavaScript ก่อน closing body tag -->
                    <script>
                        function toggleNotifications() {
                            const dropdown = document.getElementById('notificationDropdown');
                            dropdown.classList.toggle('hidden');

                            // ปิดเมื่อคลิกที่อื่น
                            document.addEventListener('click', function closeDropdown(e) {
                                if (!e.target.closest('#notificationDropdown') && !e.target.closest('button')) {
                                    dropdown.classList.add('hidden');
                                    document.removeEventListener('click', closeDropdown);
                                }
                            });
                        }
                    </script>
                    <a href="https://devcm.info" class="p-2 rounded-full hover:bg-gray-100">
                        <img src="https://devcm.info/img/favicon.png" class="h-6 w-6" alt="User icon">
                    </a>
                </div>
            </div>
        </nav>

        <!-- Users Table Section -->
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">รายชื่อผู้ใช้ทั้งหมด</h2>
                    <p class="text-sm text-gray-500 mt-1">จำนวนผู้ใช้: 15 คน</p>
                </div>
                <a href="add_users.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    เพิ่มผู้ใช้
                </a>
            </div>

            <!-- ตารางแสดงข้อมูล -->
            <div class="bg-white rounded-lg shadow-sm">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">บ้านเลขที่</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ชื่อ-นามสกุล</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">อีเมล</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">เบอร์โทร</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">สถานะ</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">สิทธิ์การใช้งาน</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">การกระทำ</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm">123/1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">นายสมชาย ใจดี</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">somchai@email.com</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">081-234-5678</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        ปกติ
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                        ผู้ดูแลระบบ
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="edit_profile_users.php?id=1" class="text-blue-600 hover:text-blue-900 mr-3 inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                        แก้ไข
                                    </a>
                                    <button onclick="confirmDelete('1')" class="text-red-600 hover:text-red-900 inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        ลบ
                                    </button>
                                </td>
                            </tr>
                            <!-- เพิ่มแถวข้อมูลตามต้องการ -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(userId) {
            if (confirm('คุณต้องการลบข้อมูลผู้ใช้นี้ใช่หรือไม่?')) {
                // TODO: ส่งคำขอลบข้อมูลไปยัง API
                alert('ลบข้อมูลเรียบร้อย');
            }
        }
    </script>
</body>

</html>