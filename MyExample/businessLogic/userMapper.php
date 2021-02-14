<?php
require_once "databaseConfig.php";

class UserMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $this->query = "select * from user where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function edit(\SimpleUser $user, $id)
    {
        $this->query = "update user set username=:username, userLastName=:lastname where UserID=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $lastname = $user->getLastname();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function getUserByUsername($username)
    {
        $this->query = "select * from user where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $this->query = "select * from user";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertUser(SimpleUser $user)
    {
        $this->query = "insert into User (username, userlastname,password, role) values (:username,:lastname,:pass,:role)";
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $lastname = $user->getLastname();
        $pass = $user->getPassword();
        $role = $user->getRole();

        $passwordEncrypted = password_hash($pass, PASSWORD_BCRYPT);

        $statement->bindParam(":username", $username);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":pass", $passwordEncrypted);
        $statement->bindParam(":role", $role);

        $statement->execute();
    }

    public function deleteUser($userId)
    {
        $this->query = "delete from user where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }

     public function insertContactForm(SimpleUser $user){
        $this->query = "insert into contactinfo (name, email, message) values (:name,:email,:message)";
        $statement = $this->conn->prepare($this->query);
        $name = $user->getName();
        $email = $user->getEmail();
        $message = $user->getMessage();


        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":message", $message);

        $statement->execute();
    }

    public function getAllContact()
    {
        $this->query = "select * from contactinfo";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function deleteContact($userId)
    {
        $this->query = "delete from contactinfo where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }

}
