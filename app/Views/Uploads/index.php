<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Files</title>
</head>
<body>
    <h1>Uploaded Files</h1>
    <?php if (!empty($uploads)): ?>
        <ul>
            <?php foreach ($uploads as $upload): ?>
                <li>
                    <a href="<?= base_url($upload['file_path']) ?>" target="_blank"><?= $upload['file_name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No files uploaded yet.</p>
    <?php endif; ?>
   
</body>
</html>
