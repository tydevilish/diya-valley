<?php

class connection
{
    private const DBHOST = "localhost";
    private const DBUSER = "root";
    private const DBPASS = "";
    private const DBNAME = "management_system";
    protected $connection;

    function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=" . self::DBHOST . ";dbname=" . self::DBNAME, self::DBUSER, self::DBPASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            echo "Connection failed: " . $error->getMessage();
        }
    }
}

new connection();

class Login extends connection
{
    private $username;
    private $password;

    private function redirectWithError($message)
    {
        $_SESSION['error'] = $message;
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit();
    }

    private function redirectBasedOnRole($role)
    {
        switch ($role) {
            case 'users':
                header('Location: users');
                break;
            case 'admin':
                header('Location: admin');
                break;
            case 'group':
                header('Location: group');
                break;
            default:
                $this->redirectWithError('ไม่พบหน้าที่ถูกต้องสำหรับบทบาทนี้');
                return;
        }
        exit();
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$username]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if user exists and if password matches (plaintext comparison)
        if ($userData && $password === $userData['password']) {
            $_SESSION['user'] = $userData; // Store user data in session

            // Redirect based on user role
            $this->redirectBasedOnRole($userData['role']);
        } else {
            $this->redirectWithError('ชื่อผู้ใช้หรือรหัสผ่านของคุณผิด กรุณาลองใหม่อีกครั้ง');
        }
    }
}
