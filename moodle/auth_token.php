<?php
require_once(__DIR__ . '/config.php');
require_once($CFG->libdir . '/authlib.php');
$secret_key = $CFG->secret_key;

// Get the token and course ID from the URL
$token = optional_param('token', '', PARAM_RAW);
$courseid = optional_param('courseid', 0, PARAM_INT); // Get the course ID

// Token decoding and verification
$decodedToken = base64_decode($token);
if ($decodedToken) {
    list($email, $timestamp, $signature) = explode('|', $decodedToken);
    echo "Decoded Email: " . htmlspecialchars($email) . "<br>";
    // Further processing...
} else {
    echo "Failed to decode token.<br>";
}

// Validate the signature
$key = $secret_key;
$expectedSignature = hash_hmac('sha256', $email . '|' . $timestamp, $key);

echo "Expected Signature: $expectedSignature <br>";
echo "Provided Signature: $signature <br>";
echo "Email: $email <br>";

if (hash_equals($expectedSignature, $signature)) {
    // Token is valid, find the user by email
    $user = get_complete_user_data('email', $email);
    if ($user) {
        // Log the user in
        complete_user_login($user);

        // Redirect to the course page using the course ID
        if ($courseid > 0) {
            redirect($CFG->wwwroot . '/course/view.php?id=' . $courseid);
        } else {
            // Redirect to the default page if course ID is not provided
            redirect($CFG->wwwroot . '/my/');
        }
    } else {
        echo 'User not found for email: ' . htmlspecialchars($email);
    }
} else {
    echo 'Invalid token.';
}
?>