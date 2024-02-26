<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Joining</title>
</head>
<body>
    <h1>Edit Joining</h1>
    <form action="/joining/update" method="post">
        <input type="hidden" name="id" value="<?= $joining['id'] ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?= $joining['name'] ?>"><br>
        <label for="middle_name">Middle Name:</label><br>
        <input type="text" id="middle_name" name="middle_name" value="<?= $joining['middle_name'] ?>"><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" value="<?= $joining['age'] ?>"><br>
        <label for="sex">Sex:</label><br>
        <input type="text" id="sex" name="sex" value="<?= $joining['sex'] ?>"><br>
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" value="<?= $joining['location'] ?>"><br>
        <label for="contact_number">Contact Number:</label><br>
        <input type="text" id="contact_number" name="contact_number" value="<?= $joining['contact_number'] ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
