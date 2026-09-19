<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts (name, email, subject, message)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssss",
        $name,
        $email,
        $subject,
        $message
    );

    if ($stmt->execute()) {

        echo "<h2>Message sent successfully!</h2>";
        echo "<p>Thank you for contacting me.</p>";
        echo "<a href='contact.php'>Go Back</a>";

    } else {

        echo "Error: " . $stmt->error;

    }

    $stmt->close();
    $conn->close();

}

?>