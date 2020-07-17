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
<body>
<div>
    <form
        method="POST"
    >
        <label
            for="title"
        >Name</label>
        <input
            type="text"
            name="title"
            id="title"
            value="<?= $title ?>"
        >
        <label
            for="description"
        >Description</label>
        <input
            type="text"
            name="description"
            id="description"
            value="<?= $description ?>"
        >
        <button type="submit" name="submit">Edit this task</button>
    </form>
</div>
</body>
</html>
