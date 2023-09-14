<?php
require_once "partial/header.php";

?>
<div class="min-h-screen flex items-center justify-center">

    <div class="bg-white p-6 rounded-lg shadow-md max-w-md w-full ">
        <h1 class="text-2xl font-semibold mb-4">Grade Calculator</h1>
        <?php

        $average = '';
        $grade = '';
        $showResult = false;



        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];


            $average = ($score1 + $score2 + $score3) / 3;
            $average = number_format($average, 2);


            if ($average >= 90) {
                $grade = 'A';
            } elseif ($average >= 80) {
                $grade = 'B';
            } elseif ($average >= 70) {
                $grade = 'C';
            } elseif ($average >= 60) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }


            $showResult = true;
        }
        ?>

        <form action="" method="post">

            <div class="mb-4">
                <label for="score1" class="block text-gray-700">Test Score 1:</label>
                <input type="number" id="score1" name="score1" class="border border-gray-400 p-2 rounded w-full"
                    required>
            </div>
            <div class="mb-4">
                <label for="score2" class="block text-gray-700">Test Score 2:</label>
                <input type="number" id="score2" name="score2" class="border border-gray-400 p-2 rounded w-full"
                    required>
            </div>
            <div class="mb-4">
                <label for="score3" class="block text-gray-700">Test Score 3:</label>
                <input type="number" id="score3" name="score3" class="border border-gray-400 p-2 rounded w-full"
                    required>
            </div>

            <button type="submit" class="<?php echo BUTTON_CLASS; ?> ">
                Calculate
            </button>

        </form>

        <?php if ($showResult): ?>

            <div class="<?php echo DISPLAY_CLASS; ?>">
                <p><strong>Average Score:</strong>
                    <?php echo $average; ?>
                </p>
                <p><strong>Letter Grade:</strong>
                    <?php echo $grade; ?>
                </p>
            </div>
            <a href="grade_calculator.php" class="text-blue-500 mt-4 block">Calculate Again</a>
        <?php endif; ?>

    </div>
</div>
<?php
require_once "partial/footer.php";
?>