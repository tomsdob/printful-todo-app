<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge"
    >
    <title>Document</title>
</head>
<body
<div>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $task) { ?>
            <tr>
                <td><?= $task['title'] ?></td>
                <td><?= $task['description'] ?></td>
                <td>
                    <a href="index.php?controller=tasks&action=edit&id=<?= $task['id'] ?>">Edit</a>
                    <a href="index.php?controller=tasks&action=delete&id=<?= $task['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="index.php?controller=tasks&action=add">Add a task</a>
</div>
</body>
</html>

