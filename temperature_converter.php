<?php

require_once "partial/header.php";

?>
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-1/2">
        <h1 class="text-3xl font-semibold mb-4 text-center">Temperature Converter</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-4">
                <label for="temperature" class="block text-lg font-semibold mb-2">Enter Temperature:</label>
                <input type="number" id="temperature" name="temperature" class="w-full px-4 py-2 rounded-lg border"
                    required>
            </div>
            <div class="mb-4">
                <label for="conversion" class="block text-lg font-semibold mb-2">Select Conversion:</label>
                <select id="conversion" name="conversion" class="w-full px-4 py-2 rounded-lg border">
                    <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                    <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
                </select>
            </div>
            <div>
                <button type="submit" class="<?php echo BUTTON_CLASS; ?>">Convert</button>
            </div>
        </form>
        <?php

        define("CELCSIUS", " °C");
        define("FARENHEIT", " °F");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversion = $_POST["conversion"];
            $result = "";


            if ($conversion === "celsius_to_fahrenheit") {
                $result = ($temperature * 9 / 5) + 32;
                $result .= CELCSIUS;
            } else {
                $result = ($temperature - 32) * 5 / 9;
                $result .= FARENHEIT;
            }



            echo "<p class='" . DISPLAY_CLASS . "'><strong>Result:</strong> $result</p>";
        }
        ?>

    </div>
    <?php
    require_once "partial/footer.php";
    ?>