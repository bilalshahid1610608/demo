<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/banner.php"; ?>

<main class="bg-gray-100 min-h-screen">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
                        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            
                <?php foreach ($companies as $company): ?>
                <?php $userId=$company['id'];?>
                    <li>
                <a href="/notes?userId=<?php echo $userId;?>"    class="block bg-white rounded-lg shadow-md p-4 hover:bg-gray-100 transition duration-200">
                        <h3 class="text-lg font-semibold"><?php echo $company[
                            "name"
                        ]; ?></h3>
                        <!-- Add additional company details here if needed -->
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</main>

<?php require "partials/footer.php"; ?>
