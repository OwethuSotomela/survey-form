<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Survey-form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Processed Data</h1>
                <main>
                    <section class="submission">
                        <!-- <p>Thank you for taking time to rate our services</p> -->
                        <?php
                        if(isset( $_POST['number']))
                        {
                            $fname = $_POST['fname'];
                            $email = $_POST['email'];
                            $number = $_POST['number'];
                            $submit = $_POST['submit'];

                            echo "<p>Name: $fname</p>";
                            echo "<p>Email: $email</p>";
                            echo "<p>Number: $number</p>";
                            echo "<p>$submit</p>";
                        }
                        ?>
                    </section>
                </main>
            </div>
        </div>
    </div>
</body>

</html>