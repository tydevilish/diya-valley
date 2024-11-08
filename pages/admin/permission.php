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
        <div id="sidebar" class="fixed top-0 left-0 h-full w-20 transition-all duration-300 ease-in-out bg-gradient-to-b from-blue-600 to-blue-500 shadow-xl">
            <button id="toggleSidebar" class="absolute -right-3 top-1/2 transform -translate-y-1/2 bg-blue-800 text-white rounded-full p-1 shadow-lg hover:bg-blue-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            
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
                            <h3 class="text-white font-semibold text-sm opacity-0 transition-opacity duration-500 ease-in-out whitespace-nowrap">คุณจิรภัทร ป่าไพร</h3>
                            <p class="text-blue-100 text-xs opacity-0 transition-opacity duration-500 ease-in-out whitespace-nowrap">Admin</p>
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
                            <a href="user_profile.php" class="flex items-center px-4 py-2.5 text-white hover:bg-white/10 rounded-lg transition-all duration-200">
                                <svg class="w-5 h-5 flex-shrink-0 text-white/80 transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out text-sm whitespace-nowrap">จัดการข้อมูลผู้ใช้</span>
                            </a>

                            <a href="#" class="flex items-center px-4 py-2.5 text-white hover:bg-white/10 rounded-lg transition-all duration-200">
                                <svg class="w-5 h-5 flex-shrink-0 text-white/80 transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                </svg>
                                <span class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out text-sm whitespace-nowrap">จัดการสิทธิ์การใช้งาน</span>
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
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-eva ml-4">จัดการสิทธิ์การใช้งาน</h1>
                </div>
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
                                    <a href="payment.php" class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors">
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

        <!-- Main Content -->
        <div class="p-6">
            <!-- หัวข้อและปุ่มเพิ่มสิทธิ์ -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800">รายการสิทธิ์การใช้งาน</h2>
                <button onclick="showAddModal()" 
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    เพิ่มสิทธิ์ใหม่
                </button>
            </div>

            <!-- ตารางแสดงสิทธิ์ -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ชื่อสิทธิ์</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">เมนูที่เข้าถึงได้</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">จำนวนผู้ใช้</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">ผู้ดูแลระบบ</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded">หน้าหลัก</span>
                                    <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded">จัดการค่าส่วนกลาง</span>
                                    <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded">จัดการแจ้งซ่อม</span>
                                    <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded">จัดการข้อมูลผู้ใช้</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">2 คน</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button onclick="showEditModal('admin')" class="text-blue-600 hover:text-blue-900 mr-4">แก้ไข</button>
                                <button onclick="confirmDelete('admin')" class="text-red-600 hover:text-red-900">ลบ</button>
                            </td>
                        </tr>
                        <!-- เพิ่มแถวอื่นๆ ตามต้องการ -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal เพิ่ม/แก้ไขสิทธิ์ -->
    <div id="permissionModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
        <div class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-5 border w-full max-w-xl shadow-lg rounded-md bg-white">
            <div class="flex justify-between items-center pb-3">
                <h3 class="text-xl font-bold text-gray-900" id="modalTitle">เพิ่มสิทธิ์ใหม่</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form id="permissionForm" class="mt-4">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        ชื่อสิทธิ์ <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="permissionName" name="permissionName" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        เมนูที่สามารถเข้าถึง <span class="text-red-500">*</span>
                    </label>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" name="menus[]" value="dashboard" class="rounded text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">หน้าหลัก</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="menus[]" value="payment" class="rounded text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">จัดการค่าส่วนกลาง</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="menus[]" value="repair" class="rounded text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">จัดการแจ้งซ่อม</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="menus[]" value="users" class="rounded text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">จัดการข้อมูลผู้ใช้</span>
                        </label>
                    </div>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeModal()"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                        ยกเลิก
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                        บันทึก
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- เพิ่ม Script -->
    <script>
    function showAddModal() {
        document.getElementById('modalTitle').textContent = 'เพิ่มสิทธิ์ใหม่';
        document.getElementById('permissionForm').reset();
        document.getElementById('permissionModal').classList.remove('hidden');
    }

    function showEditModal(id) {
        document.getElementById('modalTitle').textContent = 'แก้ไขสิทธิ์';
        // โห���ดข้อมูลส���ทธิ์ที่ต้องการแก้ไข
        document.getElementById('permissionModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('permissionModal').classList.add('hidden');
    }

    function confirmDelete(id) {
        if (confirm('คุณต้องการลบสิทธิ์นี้ใช่หรือไม่?')) {
            // ดำเนินการลบสิทธิ์
            alert('ลบสิทธิ์เรียบร้อยแล้ว');
        }
    }

    document.getElementById('permissionForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // ตรวจสอบว่าเลือกเมนูอย่างน้อย 1 รายการ
        const selectedMenus = document.querySelectorAll('input[name="menus[]"]:checked');
        if (selectedMenus.length === 0) {
            alert('กรุณาเลือกเมนูที่สามารถเข้าถึงอย่างน้อย 1 รายการ');
            return;
        }
        // ดำเนินการบันทึกข้อมูล
        alert('บันทึกข้อมูลเรียบร้อย');
        closeModal();
    });

    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    const toggleIcon = toggleBtn.querySelector('svg path');
    const textElements = document.querySelectorAll('.opacity-0');
    let isExpanded = false;

    toggleBtn.addEventListener('click', () => {
        isExpanded = !isExpanded;
        if (isExpanded) {
            sidebar.classList.remove('w-20');
            sidebar.classList.add('w-64');
            toggleIcon.setAttribute('d', 'M15 19l-7-7 7-7');
            textElements.forEach(el => el.classList.remove('opacity-0'));
        } else {
            sidebar.classList.remove('w-64');
            sidebar.classList.add('w-20');
            toggleIcon.setAttribute('d', 'M9 5l7 7-7 7');
            textElements.forEach(el => el.classList.add('opacity-0'));
        }
    });
    </script>
</body>

</html>