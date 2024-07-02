<?php require('Views/partials/head.php'); ?>
<?php require('Views/partials/nav.php'); ?>
<?php require('Views/partials/banner.php'); ?>

<main class="bg-gray-100 min-h-screen py-12">
    <div class="mx-auto max-w-lg px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-md p-8">
            <form method="post">
                <div class="mb-6">
                    <label for="body" class="block text-gray-700 font-semibold mb-2">Body</label>
                    <textarea id="body" name="body" rows="5" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Write your note here..."><?= $_POST['body'] ?? '' ?></textarea>
                    <?php if (isset($errors['body'])) : ?>
                        <p class="text-red-500 text-sm mt-1"><?= $errors['body'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="mr-4 text-gray-700 hover:text-gray-900 transition-colors">Cancel</button>
                    <button type="submit" class="px-4 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 transition-colors">Save</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require('Views/partials/footer.php') ?>