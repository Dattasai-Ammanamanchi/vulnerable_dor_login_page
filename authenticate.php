<?php
// User credentials (example data, replace with your own implementation)
$users = [
    ['id' => 1311, 'username' => 'user1', 'password' => 'pass1', 'name' => 'John Doe', 'email' => 'john@example.com'],
    ['id' => 2121, 'username' => 'user2', 'password' => 'pass2', 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
    ['id' => 3212, 'username' => 'user3', 'password' => 'pass3', 'name' => 'John Babu', 'email' => 'babu@example.com'],
    ['id' => 4121, 'username' => 'user4', 'password' => 'pass4', 'name' => 'Mr Smith', 'email' => 'smith@example.com'],
    ['id' => 542, 'username' => 'user5', 'password' => 'pass5', 'name' => ' Doe Deo', 'email' => 'deo@example.com'],
    ['id' => 666, 'username' => 'user6', 'password' => 'pass6', 'name' => 'Janaki', 'email' => 'janaki@example.com'],
    ['id' => 2342342,'username' => 'user7', 'password' => 'pass7', 'name' => 'Johnny', 'email' => 'johnny@example.com'],
    ['id' => 23242, 'username' => 'user8', 'password' => 'pass8', 'name' => 'Jenny', 'email' => 'jenny@example.com'],
    ['id' => 112323, 'username' => 'user9', 'password' => 'pass9', 'name' => 'Joey', 'email' => 'joey@example.com'],
    ['id' => 4124, 'username' => 'user10', 'password' => 'pass10', 'name' => 'Jane', 'email' => 'jane@example.com'],
    // Add more users as needed
];

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Find user by username and password
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username && $u['password'] === $password) {
        $user = $u;
        break;
    }
}

// Check if user is found
if ($user) {
    // Redirect to user account page with user ID
    header("Location: account.php?id={$user['id']}");
    exit;
} else {
    // Handle login failure
    echo "Invalid username or password. Please try again.";
}
?>
