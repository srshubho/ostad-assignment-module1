<?php
require_once "partial/header.php";

$temperature = rand(-20, 20);
$message = ""
    ?>
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-semibold mb-4">Weather Report</h1>
        <?php
        if ($temperature <= 0) {
            $message = "It's freezing!";
        } elseif ($temperature > 0 && $temperature < 15) {
            $message = "It's cool";
        } elseif ($temperature >= 15) {
            $message = "It's warm";
        }
        ?>

        <?php if ($message): ?>

            <div class="<?php echo DISPLAY_CLASS; ?>">
                <p><strong>Temperature:</strong>
                    <?php echo $temperature; ?>
                </p>
                <p><strong>Message:</strong>
                    <?php echo $message; ?>
                </p>
            </div>
            <a href="weather_report.php" class="text-blue-500 mt-4 block">New Report</a>
        <?php endif; ?>

    </div>
</div>

</body>

</html>