<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Processed Data</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Processed Data</h1>
        <main>
            <section class="submission">
                <?php
                if (isset($_POST['submit'])) {
                    $fname = htmlspecialchars($_POST['fname']);
                    $email = htmlspecialchars($_POST['email']);
                    $number = htmlspecialchars($_POST['number']);
                    $profession = htmlspecialchars($_POST['profession']);
                    $rating = htmlspecialchars($_POST['rating']);
                    $gender = isset($_POST['gender']) ? implode(', ', $_POST['gender']) : 'Not specified';
                    $comments = htmlspecialchars($_POST['comments']);

                    echo "<p><strong>Name:</strong> $fname</p>";
                    echo "<p><strong>Email:</strong> $email</p>";
                    echo "<p><strong>Number:</strong> $number</p>";
                    echo "<p><strong>Profession:</strong> $profession</p>";
                    echo "<p><strong>Rating:</strong> $rating</p>";
                    echo "<p><strong>Gender:</strong> $gender</p>";
                    echo "<p><strong>Comments:</strong> $comments</p>";
                }
                ?>
            </section>
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
