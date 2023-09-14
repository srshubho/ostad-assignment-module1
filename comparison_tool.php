<?php

require_once "partial/header.php";

?>
<div class="min-h-screen flex items-center justify-center">

    <div class="bg-white p-6 rounded-lg shadow-md max-w-md w-full">
        <h1 class="text-2xl font-semibold mb-4">Comparison Tool</h1>
        <form action="comparison_tool.php" method="post">
            <div class="mb-4">
                <label for="number1" class="block text-gray-700">Number 1:</label>
                <input type="number" id="number1" name="number1" class="border border-gray-400 p-2 rounded w-full"
                    required>
            </div>
            <div class="mb-4">
                <label for="number2" class="block text-gray-700">Number 2:</label>
                <input type="number" id="number2" name="number2" class="border border-gray-400 p-2 rounded w-full"
                    required>
            </div>
            <button type="submit" class="<?php echo BUTTON_CLASS; ?> ">
                Compare
            </button>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];


            $largerNumber = ($number1 > $number2) ? $number1 : $number2;

            echo "<p class='" . DISPLAY_CLASS . "'><strong>Larger Number:</strong> $largerNumber</p>";
        }
        ?>

        <a href="comparison_tool.php" class="text-blue-500 mt-4 block">Compare Again</a>
    </div>
</div>
</body>

</html>