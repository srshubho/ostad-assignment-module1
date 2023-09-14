<!DOCTYPE html>
<?php
require_once "partial/header.php";

?>
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-1/2">
        <h1 class="text-3xl font-semibold mb-4">Even or Odd Checker</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-4">
                <label for="number" class="block text-lg font-semibold mb-2">Enter a Number:</label>
                <input type="number" id="number" name="number" class="w-full px-4 py-2 rounded-lg border" required>
            </div>
            <div>
                <button type="submit" class="<?php echo BUTTON_CLASS; ?>">Check</button>
            </div>
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $result = "";

            if ($number % 2 == 0) {
                $result = "The number $number is even.";
            } else {
                $result = "The number $number is odd.";
            }

            echo "<p class='" . DISPLAY_CLASS . "'><strong>Result:</strong> $result</p>";
        }
        ?>
    </div>
</div>
<?php
require_once "partial/footer.php";
?>