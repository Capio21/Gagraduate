<!DOCTYPE html>
<html>
<head>
    <title>Edit Documentary</title>
</head>
<body>
    <h2>Edit Documentary</h2>
    <form action="/documentaries/update/<?= $documentary['id']; ?>" method="post">
        <label>Title:</label><br>
        <input type="text" name="title" value="<?= $documentary['title']; ?>"><br><br>
        <label>Description:</label><br>
        <textarea name="description"><?= $documentary['description']; ?></textarea><br><br>
        <label>Date:</label><br>
        <input type="date" name="date" value="<?= $documentary['date']; ?>"><br><br>
        <label>Image:</label><br>
        <input type="text" name="image" value="<?= $documentary['image']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
