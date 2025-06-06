<?php

if (!empty($_SESSION['error'])) {
    $parameters = $_SESSION['error'];
    unset($_SESSION['error']);

    ?>

<section class="flex flex-col items-center justify-center min-h-[60vh] text-center px-6 py-12">
  <div class="max-w-xl">
    <h1 class="text-6xl font-bold text-red-600 mb-4">
      <?= htmlspecialchars($parameters['code']) ?>
    </h1>
    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">
      <?= htmlspecialchars($parameters['message']) ?: 'Something went wrong.' ?>
    </h2>
    <p class="text-gray-600 dark:text-gray-400 mb-6">
      The page you’re looking for might have been removed, had its name changed, or is temporarily unavailable.
    </p>
    <a href="/" class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg shadow hover:bg-blue-700 transition">
      Go to Homepage
    </a>
  </div>
</section>



<?php
}
?>
