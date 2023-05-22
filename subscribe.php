<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["Newsletter-Email"];

    // Perform any additional validation or processing here

    // Add code to subscribe the user to your newsletter service or email list
    // This can vary depending on the service or method you're using

    // Example: Adding the email to a text file (subscribers.txt)
    $file = fopen("subscribers.txt", "a");
    fwrite($file, "$email\n");
    fclose($file);

    // Send email to the organization
    $to_organization = "nkletebele@gmail.com"; // Replace with organization's email
    $subject_organization = "New Subscriber";
    $body_organization = "A new subscriber has joined the newsletter.\n\nEmail: $email";
    mail($to_organization, $subject_organization, $body_organization);

    // Send welcome message to the new subscriber
    $subject_subscriber = "Welcome to Our Newsletter";
    $body_subscriber = "Thank you for subscribing to our newsletter!\n\nWe will keep you updated with the latest news and offers.\n\nRegards,\nFem_Black";
    mail($email, $subject_subscriber, $body_subscriber);

    echo "Thank you for subscribing!";
}
?>

