<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleConfirm.css">
    <title>Booking Confirmation</title>
</head>
<body>
    <?php
    session_start();

    // Periksa apakah ada data booking dalam session
    if(isset($_SESSION['booking_data'])) {
        $bookingData = $_SESSION['booking_data'];
        // Tampilkan data booking
        echo "<div class='confirmation-message'>";
        echo "<h2>Booking Confirmation</h2>";
        echo "<p>Name: " . $bookingData['name'] . "</p>";
        echo "<p>Email: " . $bookingData['email'] . "</p>";
        echo "<p>Date: " . $bookingData['date'] . "</p>";
        echo "<p>Time: " . $bookingData['time'] . "</p>";
        echo "<p>Number of Guests: " . $bookingData['guests'] . "</p>";
        echo "</div>";
    } else {
        // Jika tidak ada data booking dalam session
        echo "<div class='confirmation-message'>";
        echo "<h2>No booking data found.</h2>";
        echo "</div>";
    }
    ?>
</body>
</html>
