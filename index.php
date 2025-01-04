<?php
// index.php
require_once 'user.php';
require_once 'admin.php';


function displayUsers($users) {
    echo '<table border="1" cellpadding="10" style="border-collapse: collapse; width: 50%; margin-bottom: 20px;">';
    echo '<tr><th>User ID</th><th>Name</th></tr>';
    foreach ($users as $user) {
        echo "<tr><td>" . htmlspecialchars($user['id']) . "</td><td>" . htmlspecialchars($user['name']) . "</td></tr>";
    }
    echo '</table>';
}


function displayAdmins($admins) {
    echo '<table border="1" cellpadding="10" style="border-collapse: collapse; width: 50%; margin-bottom: 20px;">';
    echo '<tr><th>Admin ID</th><th>Name</th></tr>';
    foreach ($admins as $admin) {
        echo "<tr><td>" . htmlspecialchars($admin['id']) . "</td><td>" . htmlspecialchars($admin['name']) . "</td></tr>";
    }
    echo '</table>';
}


$userObj = new User();
$users = $userObj->getAllUsers()->fetchAll(PDO::FETCH_ASSOC);
echo "<h2>Users:</h2>";
displayUsers($users);


$adminObj = new Admin();
$admins = $adminObj->getAllUsers()->fetchAll(PDO::FETCH_ASSOC);
echo "<h2>Admins:</h2>";
displayAdmins($admins);
?>