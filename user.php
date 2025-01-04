<?php
// user.php
require_once 'database.php';

class User extends Database {
    private $table = 'users';

    public function getAllUsers() {
        $sql = "SELECT * FROM " . $this->table;
        return $this->query($sql);
    }
}
?>