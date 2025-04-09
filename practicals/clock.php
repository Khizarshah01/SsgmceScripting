<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock - Khizar Shah</title>
    <link rel="stylesheet" href="../css/styles.css">
    <meta http-equiv="refresh" content="1">
</head>
<body>
    <div class="practical-container">
        <div class="practical-content">
            <h1 class="practical-title">Digital Clock</h1>

            <div class="clock-display">
                <p>Current Server Time:</p>
                <p class="clock-value">
                    <?php
                    // Set the timezone
                    date_default_timezone_set('Asia/Kolkata');

                    // Get the current time
                    $currentTime = date('H:i:s');

                    // Output the time
                    echo $currentTime;
                    ?>
                </p>
            </div>

            <div class="info-box">
                <h2 class="practical-subtitle">About This Practical</h2>
                <p>
                    This page demonstrates a digital clock implemented using PHP to display the server time.
                    The page automatically refreshes every second to show the updated time.
                </p>
            </div>

            <div class="code-box">
                <h3 class="code-title">PHP Implementation:</h3>
                <pre class="code-block">
&lt;?php
// Set the timezone
date_default_timezone_set('Asia/Kolkata');

// Get the current time
$currentTime = date('H:i:s');

// Output the time
echo "&lt;h1>Digital Clock&lt;/h1>";
echo "&lt;p>Current Server Time: " . $currentTime . "&lt;/p>";

// Add auto-refresh meta tag to update every second
echo '&lt;meta http-equiv="refresh" content="1">';
?>
                </pre>
            </div>

            <div class="text-center">
                <a href="../index.html" class="btn btn-secondary">Back to Portfolio</a>
            </div>
        </div>
    </div>
</body>
</html>
