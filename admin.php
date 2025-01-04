<?php
// admin.php
require_once 'database.php';

class Admin extends User {
    private $table = 'admins';

    public function getAllUsers() {
        $sql = "SELECT * FROM " . $this->table;
        return $this->query($sql);
    }
}
?>