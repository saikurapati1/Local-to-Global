<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
</head>
<body>
    <h1>QR Code Generator</h1>
    <p>Here is your QR code:</p>
    <?php
    // Include the phpqrcode library
    include 'phpqrcode/qrlib.php';

    // Data to encode
    $data = 'https://www.example.com';

    // File path for saving the QR code image
    $file = 'qrcode_example.png';

    // Generate and save the QR code
    QRcode::png($data, $file, QR_ECLEVEL_L, 10, 2);

    // Display the QR code image
    echo '<img src="'.$file.'" alt="QR Code">';
    ?>
</body>
</html>
