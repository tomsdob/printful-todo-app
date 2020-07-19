<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Pievienot jaunu | Darāmo lietu saraksts</title>
</head>
<body class="font-sans antialiased">
<div class="max-w-screen-sm mx-auto p-4">
    <h1 class="mb-3 text-3xl font-semibold text-gray-900 leading-tight text-center">Darāmo lietu saraksts</h1>
    <h2 class="mb-3 text-xl font-semibold text-gray-700 leading-tight text-center">Pievienot jaunu</h2>
    <form method="POST" class="space-y-4 flex flex-col justify-start items-start">
        <div class="w-full">
            <!-- Outputs an error alert if there are any errors -->
            <!-- Izvada kļūdas paziņojumu, ja ir kāda kļūda -->
            <?php if (isset($error)) { ?>
                <div class="mb-3 p-2 w-full bg-red-500 rounded-lg text-sm font-normal text-white leading-tighter text-left">
                    <p><?= $error ?></p>
                </div>
            <?php } ?>
            <label for="title" class="mb-2 block text-base font-semibold text-gray-900 leading-tight text-left">Virsraksts</label>
            <!-- Input for the task title -->
            <!-- Ievades lauks lietas virsrakstam -->
            <input
                type="text"
                name="title"
                id="title"
                required
                maxlength="256"
                placeholder="Ievadi virsrakstu"
                class="form-input text-base font-normal text-gray-700 w-full"
            >
        </div>
        <div class="w-full">
            <label for="description" class="mb-2 block text-base font-semibold text-gray-900 leading-tight text-left">Apraksts</label>
            <!-- Input for the task description -->
            <!-- Ievades lauks lietas aprakstam -->
            <textarea
                type="text"
                name="description"
                id="description"
                placeholder="Ievadi aprakstu"
                maxlength="256"
                class="form-textarea text-base font-normal text-gray-700 w-full"
            ></textarea>
        </div><div class="inline-flex justify-between items-center w-full">
            <!-- Go back -->
            <!-- Doties atpakaļ poga -->
            <a
                    href="/"
                    class="p-2 inline-flex items-center text-sm font-semibold text-white leading-tight bg-gray-500 hover:bg-gray-600 rounded-lg transition-all duration-200 transform hover:-translate-y-px hover:shadow-lg focus:outline-none focus:shadow-outline"
            >
                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                <span>Doties atpakaļ</span>
            </a>
            <!-- Submit the form and edit the task -->
            <!-- Iesniedz formu un labo to -->
            <button
                    type="submit"
                    name="submit"
                    class="p-2 inline-flex items-center text-sm font-semibold text-white leading-tight bg-green-500 hover:bg-green-600 rounded-lg transition-all duration-200 transform hover:-translate-y-px hover:shadow-lg focus:outline-none focus:shadow-outline"
            >
                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                <span>Pievienot</span>
            </button>
        </div>
    </form>
</body>
</html>
