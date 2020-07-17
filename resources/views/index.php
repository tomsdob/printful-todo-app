<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Document</title>
</head>
<body class="font-sans antialiased">
<div class="max-w-screen-sm mx-auto p-4">
    <h1 class="mb-3 text-3xl font-semibold text-gray-900 leading-tight text-center">Darāmo lietu saraksts</h1>
    <div>
        <ul class="flex flex-col justify-start items-start w-full">
        <?php foreach ($data as $task) { ?>
            <li class="p-4 flex flex-col w-full border-b hover:bg-gray-100 transition-all duration-200">
                <div class="flex justify-between items-center">
                    <div class="flex justify-start items-center">
                        <input type="checkbox"
                               class="mr-2 form-checkbox text-green-500 hover:text-green-600 focus:shadow-none border-gray-300 focus:border-green-600 transition-all duration-200"
                               name="completed"
                               id="completed"
                        >
                        <label for="completed" class="block text-base font-semibold text-gray-900 leading-tighter text-left"><?= $task['title'] ?></label>
                    </div>
                    <span class="text-sm font-normal text-gray-600 leading-tight">Datums</span>
                </div>
                <p class="mt-4 text-base font-normal text-gray-700 leading-tighter"><?= $task['description'] ?></p>
                <span>
                    <a href="index.php?controller=tasks&action=edit&id=<?= $task['id'] ?>">Edit</a>
                    <a href="index.php?controller=tasks&action=delete&id=<?= $task['id'] ?>">Delete</a>
                </span>
            </li>
        <?php } ?>
        </ul>
    </div>
    <a href="index.php?controller=tasks&action=add">Add a task</a>
</div>
</body>
</html>

