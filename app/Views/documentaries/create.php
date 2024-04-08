<!DOCTYPE html>
<html>
<head>
    <title>Add New Documentary</title>
</head>
<body>
    <h2>Add New Documentary</h2>
    <form action="/documentaries/store" method="post" enctype="multipart/form-data">
        <label>Title:</label><br>
        <input type="text" name="title"><br><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>
        <label>Date:</label><br>
        <input type="date" name="date"><br><br>
        <label>Image:</label><br>
        <input type="file" name="image"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
