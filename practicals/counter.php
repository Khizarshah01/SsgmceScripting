<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter - Khizar Shah</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="practical-container">
        <div class="practical-content">
            <h1 class="practical-title">Visitor Counter</h1>

            <div class="counter-display">
                <p>Welcome to our website!</p>
                <p class="counter-value">
                    You are visitor number: 
                    <span id="counter">
                        <?php
                        // Open the counter file
                        $counterFile = 'counter.txt';

                        // Check if the file exists
                        if (file_exists($counterFile)) {
                            // Read the current count
                            $count = (int)file_get_contents($counterFile);
                            // Increment the count
                            $count++;
                        } else {
                            // Start the count at 1
                            $count = 1;
                        }

                        // Save the new count
                        file_put_contents($counterFile, $count);

                        // Display the count
                        echo $count;
                        ?>
                    </span>
                </p>
            </div>

            <div class="info-box">
                <h2 class="practical-subtitle">About This Practical</h2>
                <p>
                    This page demonstrates a visitor counter implemented using PHP. The count is stored in a text file on the server.
                    Each time someone visits this page, the counter is incremented and displayed.
                </p>
            </div>

            <div class="code-box">
                <h3 class="code-title">PHP Implementation:</h3>
                <pre class="code-block">
&lt;?php
// Open the counter file
$counterFile = 'counter.txt';

// Check if the file exists
if (file_exists($counterFile)) {
    // Read the current count
    $count = (int)file_get_contents($counterFile);
    // Increment the count
    $count++;
} else {
    // Start the count at 1
    $count = 1;
}

// Save the new count
file_put_contents($counterFile, $count);

// Display the count
echo "&lt;h1>Welcome to our website!&lt;/h1>";
echo "&lt;p>You are visitor number: " . $count . "&lt;/p>";
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
