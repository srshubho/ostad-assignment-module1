<?php
require_once "partial/header.php";
?>
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-semibold mb-4">Personal Information</h1>
        <?php
        // Define PHP variables for personal information
        $name = "Muhammad Shihab Rahman";
        $age = 30;
        $country = "Bangladesh";
        $introduction = "Hello, I'm Shihab. I'm pursuing a career in software engineering.";
        ?>
        <div class="<?php echo DISPLAY_CLASS; ?>">

            <p class="text-lg"><strong>Name:</strong>
                <?php echo $name; ?>
            </p>
            <p class="text-lg"><strong>Age:</strong>
                <?php echo $age; ?>
            </p>
            <p class="text-lg"><strong>Country:</strong>
                <?php echo $country; ?>
            </p>
            <p class="text-lg"><strong>Introduction:</strong>
                <?php echo $introduction; ?>
            </p>
        </div>
    </div>
</div>
<?php
require_once "partial/footer.php";
?>