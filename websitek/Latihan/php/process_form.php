<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Submission Result</title>
</head>
<body> -->
    <?php
    echo "<h2>Form Submission Result</h2>";
    // Periksa apakah formulir telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Tangkap data dari formulir
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Tampilkan data yang diinputkan
        echo "<h2>Form Submission Result</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong> $message</p>";
    } else {
        // Jika formulir tidak disubmit, tampilkan pesan kesalahan
        echo "<h2>Error: Form not submitted.</h2>";
    }
    ?>
<!-- </body>
</html> -->
