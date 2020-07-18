<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Labot - <?= $title ?> | Darāmo lietu saraksts</title>
</head>
<body class="font-sans antialiased">
<div class="max-w-screen-sm mx-auto p-4">
    <h1 class="mb-3 text-3xl font-semibold text-gray-900 leading-tight text-center">Darāmo lietu saraksts</h1>
    <h2 class="mb-3 text-xl font-semibold text-gray-700 leading-tight text-center">Labot - <?= $title ?></h2>
    <form method="POST" class="space-y-4 flex flex-col justify-start items-start">
        <div class="w-full">
            <label for="title" class="mb-2 block text-base font-semibold text-gray-900 leading-tight text-left">Virsraksts</label>
            <input
                type="text"
                name="title"
                id="title"
                value="<?= $title ?>"
                required
                maxlength="256"
                class="form-input text-base font-normal text-gray-700 w-full"
            >
        </div>
        <div class="w-full">
            <label for="description" class="mb-2 block text-base font-semibold text-gray-900 leading-tight text-left">Apraksts</label>
            <textarea
                type="text"
                name="description"
                id="description"
                maxlength="256"
                class="form-textarea text-base font-normal text-gray-700 w-full"
            ><?= $description ?></textarea>
        </div>
        <div class="inline-flex justify-between items-center w-full">
            <!-- Delete case of tasks -->
            <a
                href="/"
                class="p-2 inline-flex items-center text-sm font-semibold text-white leading-tight bg-gray-500 hover:bg-gray-600 rounded-lg transition-all duration-200 transform hover:-translate-y-px hover:shadow-lg"
            >
                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                <span>Doties atpakaļ</span>
            </a>
            <div class="space-x-2 inline-flex justify-end items-center">
                <!-- Delete case of tasks -->
                <a
                    href="index.php?controller=tasks&action=delete&id=<?= $id ?>"
                    class="p-2 inline-flex items-center text-sm font-semibold text-white leading-tight bg-red-500 hover:bg-red-600 rounded-lg transition-all duration-200 transform hover:-translate-y-px hover:shadow-lg"
                >
                    <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                    <span>Dzēst</span>
                </a>
                <!-- Submit the form and edit the task -->
                <button
                    type="submit"
                    name="submit"
                    class="p-2 inline-flex items-center text-sm font-semibold text-white leading-tight bg-green-500 hover:bg-green-600 rounded-lg transition-all duration-200 transform hover:-translate-y-px hover:shadow-lg"
                >
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>Saglabāt</span>
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
