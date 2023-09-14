<?php
require_once "partial/header.php";
?>
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-1/2">
        <h1 class="text-3xl font-semibold mb-4">Simple Calculator</h1>
        <form method="post" action="">
            <div class="mb-4">
                <label for="num1" class="block text-lg font-semibold mb-2">Enter First Number:</label>
                <input type="number" id="num1" name="num1" class="w-full px-4 py-2 rounded-lg border" required>
            </div>
            <div class="mb-4">
                <label for="operation" class="block text-lg font-semibold mb-2">Select Operation:</label>
                <select id="operation" name="operation" class="w-full px-4 py-2 rounded-lg border">
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Subtraction (-)</option>
                    <option value="multiply">Multiplication (*)</option>
                    <option value="divide">Division (/)</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="num2" class="block text-lg font-semibold mb-2">Enter Second Number:</label>
                <input type="number" id="num2" name="num2" class="w-full px-4 py-2 rounded-lg border" required>
            </div>
            <div>
                <button type="submit" class="<?php echo BUTTON_CLASS; ?> ">Calculate</button>
            </div>
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            $result = 0;

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                default:
                    $result = "Invalid operation";
            }
            if (is_float($result)) {
                $result = number_format($result, 2);
            }
            echo "<p class='" . DISPLAY_CLASS . "'><strong>Result:</strong> $result</p>";

        }
        ?>
    </div>
</div>
<?php
require_once "partial/footer.php";
?>