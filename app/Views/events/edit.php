<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
</head>

<body>
    <h1>Edit Event</h1>
    <form action="/events/update/<?= $event['id'] ?>" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?= $event['title'] ?>"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?= $event['description'] ?></textarea><br>
        <label for="time">Time:</label><br>
        <input type="datetime-local" id="time" name="time" value="<?= date('Y-m-d\TH:i', strtotime($event['time'])) ?>"><br>
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" value="<?= $event['location'] ?>"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
