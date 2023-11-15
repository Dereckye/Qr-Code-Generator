<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr Code Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f2f2f2;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>
                                Qr Code Generator
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <input type="text" name="qr" placeholder="Enter text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Generate!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include 'qrcode.php';

if (isset($_POST['qr'])) {
    $text = $_POST['qr'];

    $options = array(
        'w' => 500,
        'h' => 500,
    );
    $generator = new QRCode($text, $options);
    $image = $generator->render_image();

    $file = "files/" . md5(time()) . ".png";

    imagepng($image, $file);
    imagedestroy($image);

    echo "<div class='container fixed-top'>
        <div class='card mx-auto' style='width: max-content;'>
            <div class='card-body'>
                <p class='mb-0'>Image generated successfully! <a href='{$file}' target='_blank'>Click here to visit</a></p>
            </div>    
        </div>
      </div>";

}
?>