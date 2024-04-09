<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentaries</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Mulawin Coconut Farmers Cooperative</h2>
        
        <a href="/generate-report" class="btn btn-success mb-4">Generate Report</a> 
        
<!-- Add this button -->
        <div id="accordion">
            <?php foreach ($documentaries as $key => $documentary): ?>
                <div class="card mb-2">
                    <div class="card-header" id="heading<?= $key ?>">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= $key ?>" aria-expanded="true" aria-controls="collapse<?= $key ?>">
                                <?= $documentary['title']; ?>
                            </button>
                        </h5>
                    </div>

                    <div id="collapse<?= $key ?>" class="collapse" aria-labelledby="heading<?= $key ?>" data-parent="#accordion">
                        <div class="card-body">
                            <p><strong></strong> <?= $documentary['description']; ?></p>
                            <p><strong></strong> <?= $documentary['date']; ?></p>
                            <?php if (!empty($documentary['image'])): ?>
                                <div class="text-center">
                                    <img src="<?= base_url('uploads/' . $documentary['image']); ?>" alt="<?= $documentary['title']; ?>" class="img-fluid rounded mx-auto d-block" style="max-width: 100%; height: auto;">
                                </div>
                            <?php else: ?>
                                <p>No Image</p>
                            <?php endif; ?>
                            <br>
                            <br>
                            <a href="/documentaries/edit/<?= $documentary['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="/documentaries/delete/<?= $documentary['id']; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS and jQuery (required for Bootstrap functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
