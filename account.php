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

// Retrieve user ID from URL parameter
$id = $_GET['id'];

// Find user by ID
$user = null;
foreach ($users as $u) {
    if ($u['id'] == $id) {
        $user = $u;
        break;
    }
}

// Check if user is found
if ($user) {
    // Display user account information
    echo "<h1>Welcome, {$user['name']}!</h1>";
    echo "<p>Email: {$user['email']}</p>";
    // Add more private information as needed
} else {
    // Handle invalid user ID
    echo "Invalid user ID.";
}
?>
