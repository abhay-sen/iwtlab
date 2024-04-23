<?php
function getUserDetails($user_id) {
    // Load the XML file
    $xml = simplexml_load_file('D:\4thsem\iwt\pracs\exp 4\user.xml');

    // Search for the user with the specified ID
    foreach ($xml->user as $user) {
        if ($user->id == $user_id) {
            $name = (string)$user->name;
            $email = (string)$user->email;
            $age = (string)$user->age;
            return "User ID: $user_id\nName: $name\nEmail: $email\nAge: $age";
        }
    }

    // If user ID not found
    return "User not found.";
}

// Check if user ID is provided via GET or POST
if (isset($_REQUEST['user_id'])) {
    $user_id = $_REQUEST['user_id'];
    echo getUserDetails($user_id);
} else {
    echo "Please provide a User ID.";
}
?>
