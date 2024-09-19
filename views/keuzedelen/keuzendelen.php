<!DOCTYPE html>
<html lang="nl">

<head>
    <?php require '../views/templates/head.php' ?>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Ensure Tailwind CSS is linked -->
</head>

<body class="bg-gray-100">

    <?php require '../views/templates/menu.php' ?>

    <div class="mt-6 mb-16 w-11/12 p-6 space-y-8 sm:p-8 bg-white shadow-md rounded-lg mx-auto">

        <h1 class="text-3xl font-bold text-gray-800">Keuzendelen</h1>

        <ul class="list-disc list-inside space-y-2 text-gray-700">
            <li class="text-lg italic text-red-500">Basis programmeren</li>
            <li class="text-lg italic text-blue-600">Digitale vaardigheden vorderen</li>
            <li class="text-lg italic text-orange-500">bla bluh</li>
            <li class="text-lg italic text-green-500">blieh blah bluh</li>
            <li class="text-lg italic text-pink-500">double chunck chocolate cookie</li>
            <li class="text-lg italic text-gray-400">Nog toe te voegen</li>
            
        </ul>

        <?php require '../views/templates/footer.php' ?>

    </div>

</body>

</html>
