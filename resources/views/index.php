<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Darāmo lietu saraksts</title>
</head>
<body class="font-sans antialiased">
<div class="max-w-screen-sm mx-auto p-4">
    <h1 class="mb-3 text-3xl font-semibold text-gray-900 leading-tight text-center">Darāmo lietu saraksts</h1>
    <div>
        <ul class="mb-4 flex flex-col justify-start items-start w-full">
        <!-- For each construct iterating over all of the tasks fetched -->
        <!-- For each kontruktors, kas pāriet pāri visām iegūtajām lietām -->
        <?php foreach ($data as $task) { ?>
            <li class="p-4 flex flex-col w-full border-b hover:bg-gray-100 transition-colors duration-200">
                <div class="flex justify-between items-center">
                    <!-- Task completed form containing a checkbox -->
                    <!-- Lieta izpildīta forma, kas ietver sevī checkbox -->
                    <form method="POST" class="flex justify-start items-center" action="index.php?controller=tasks&action=complete&id=<?= $task['id'] ?>">
                        <input type="checkbox"
                           class="mr-2 form-checkbox text-green-500 hover:text-green-600 focus:shadow-none border-gray-300 focus:border-green-600 transition-all duration-200"
                           name="completed"
                           id="completed_<?= $task['id'] ?>"
                           <?=
                            // Determining if the task is completed, if true set checked value to the input
                           // Noskaidro, vai lieta ir izpildīta, ja taisnība, tad pievieno checked vērtību input laukam
                            $task['completed'] == 1 ? 'checked' : ''
                           ?>
                           value="<?= $task['completed'] ?>"
                           onChange="this.form.submit()"
                        >
                        <label
                            for="completed_<?= $task['id'] ?>"
                            class="block text-base font-semibold text-gray-900 leading-tighter text-left"
                        >
                            <?= $task['title'] ?>
                        </label>
                    </form>
                    <!-- Output of a date with a d.m.Y format -->
                    <!-- Izvada datumu ar d.m.Y formātu -->
                    <span class="text-sm font-normal text-gray-600 leading-tight"><?= date("d.m.Y, H:i", strtotime($task['date'])) ?></span>
                </div>
                <p class="my-4 text-base font-normal text-gray-700 leading-tighter"><?= $task['description'] ?></p>
                <!-- Edit case of tasks -->
                <!-- Labot lietu gadījums -->
                <a
                    href="index.php?controller=tasks&action=edit&id=<?= $task['id'] ?>"
                    class="ml-auto p-2 inline-flex items-center text-sm font-semibold text-white leading-tight bg-gray-500 hover:bg-gray-600 rounded-lg transition-all duration-200 transform hover:-translate-y-px hover:shadow-lg focus:outline-none focus:shadow-outline"
                >
                    <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                    <span>Labot</span>
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>
    <!-- Add a new task case of tasks -->
    <!-- Pievienot jaunu lietu gadījums -->
    <a
        href="index.php?controller=tasks&action=add"
        class="ml-auto p-4 inline-flex justify-center items-center text-base font-semibold text-white leading-tight text-center w-full bg-green-500 hover:bg-green-600 rounded-lg transition-all duration-200 transform hover:-translate-y-px hover:shadow-lg focus:outline-none focus:shadow-outline"
    >
        <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
        <span>Pievienot jaunu</span>
    </a>
</div>
</body>
</html>

