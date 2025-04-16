<?php
namespace Login\classes;
use PDO;
use PDOExceptiom;
// Gemaakt door: Joaquim

class User {
    public $username;
    public $email;
    private $password;
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function registerUser() {
        if (empty($this->username) || empty($this->password)) {
            return ["Gebruikersnaam en wachtwoord zijn verplicht."];
        }

        $stmt = $this->conn->prepare("SELECT 1 FROM users WHERE username = :username");
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return ["Gebruikersnaam bestaat al."];
        }

        $stmt = $this->conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);

        return $stmt->execute() ? [] : ["Er is iets misgegaan bij het registreren."];
    }

    public function loginUser($password) {
        $stmt = $this->conn->prepare("SELECT password FROM users WHERE username = :username");
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["password"])) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION["user"] = $this->username;
            return true;
        }
        return false;
    }

    public function isLoggedIn() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION["user"]);
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        header("Location: index.php");
        exit();
    }
}
?>
