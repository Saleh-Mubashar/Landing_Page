<?php

$emailErr = "";
$hide = "";

// PHP code to get email on submit

$email = isset($_POST['email']) ? $_POST['email'] : '';

if (isset($_POST["submit"])) {

    if (!isset($email) || trim($email) == '') {
        $emailErr = "Please enter an email address";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {

            // send email

            $to      = 'preshychinny@gmail.com';
            $subject = 'New Subscriber';
            $message = "The new subscriber is : " . $email;
            $headers = 'From: admin@arbitency.com'       . "\r\n" .
                'Reply-To: admin@arbitency.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);

            // save in text file

            file_put_contents("assets/emails.txt", $email . "\n", FILE_APPEND);
            $hide = "none";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arbitency Landing Page</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/images/head.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>
    <div class="header">
        <img src="assets/images/head.png" class="head">
        <p>When A Second. Is An Eternity...</p>
    </div>
    <div class="features desktop">
        <div class="feature feature1">
            <span class="feature__title">DIAMOND</span>
            <lottie-player src="https://assets1.lottiefiles.com/datafiles/yxuKqdi8TvAkNfF/data.json" background="transparent" speed="2" style="width: 45px; " loop autoplay></lottie-player>
            <span class="feature__description">An Ultra Low Latency<br> Scalper</span>
        </div>
        <div class="feature feature2">
            <span class="feature__title">RUBY</span>
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_H26ojR.json" background="transparent" speed="2" style="width: 45px; " loop autoplay></lottie-player>
            <span class="feature__description">An Ultra Low Latcny Intra<br> Crypto Arbitrage Program</span>
        </div>
    </div>
    <div class="main_container">
        <div class="form desktop">
            <h1>Be the first to know when we launch!</h1>
            <span>subscribe to our newsletter</span>
            <form method="POST">
                <input type="text" placeholder="Email" name="email">
                <span class="error"><?php echo $emailErr; ?></span><br>
                <input class="submit" type="submit" value="Subscribe" name="submit">
            </form>
        </div>
        <div class="about">
            <h1>Arbitency, Inc.</h1>
            <p>Arbitency, Inc. is a software company.<br><br> We believe that reinventing ultra low latency programs represents our greatest opportunity to improve the way people trade. <br><br>We contribute to human progress by empowering people to use
                algorithmic and low latency robots to trade efficiently in the financial market. </p>
        </div>
        <div class="form mobile2">
            <h1>Be the first to know when we launch!</h1>
            <span>subscribe to our newsletter</span>
            <form action="" method="POST">
                <input type="text" placeholder="Email" name="email">
                <span class="error"><?php echo $emailErr; ?></span><br>
                <input class="submit" type="submit" value="Subscribe" name="submit">
            </form>
        </div>
    </div>
    <div class="features mobile">
        <div class="feature feature1">
            <span class="feature__title">DIAMOND</span>
            <lottie-player src="https://assets1.lottiefiles.com/datafiles/yxuKqdi8TvAkNfF/data.json" background="transparent" speed="2" style="width: 45px; " loop autoplay></lottie-player>
            <span class="feature__description">An Ultra Low Latency<br> Scalper</span>
        </div>
        <div class="feature feature2">
            <span class="feature__title">RUBY</span>
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_H26ojR.json" background="transparent" speed="2" style="width: 45px; " loop autoplay></lottie-player>
            <span class="feature__description">An Ultra Low Latcny Intra<br> Crypto Arbitrage Program</span>
        </div>
    </div>
    <div class="features">
        <div class="feature feature1">
            <span class="feature__title">ICECREAM</span>
            <lottie-player src="https://assets3.lottiefiles.com/temp/lf20_bpLhgE.json" background="transparent" speed="2" style="width: 45px; " loop autoplay></lottie-player>
            <span class="feature__description">A Lightweight Low Latency<br> Scalper</span>
        </div>
        <div class="feature feature2">
            <span class="feature__title">JADE</span>
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_i9EKwC.json" background="transparent" speed="2" style="width: 45px; " loop autoplay></lottie-player>
            <span class="feature__description">A Crypto Arbitrage<br>Program</span>
        </div>
    </div>
    <hr>
    <div class="footer">
        <p>© 2021 Arbitency, Inc.</p>
    </div>
    <script>
        // PREVENT RIGHT CLICK ON LOGO IMAGE
        $(document).ready(function() {
            $(".head").on("contextmenu", function() {
                return false;
            });
        });
        document.querySelector('.head').setAttribute('draggable', false);
        // preven form resolution image from showing
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        var php_var = "<?php echo $hide; ?>";
        // hide form and change text
        if (php_var == "none") {
            document.querySelector(".form h1").innerHTML = "Thank you!, well keep in touch!";
            document.querySelector(".form span").style.display = "none";
            document.querySelector(".form form").style.display = "none";
            document.querySelector(".mobile2 form").style.display = "none";
            document.querySelector(".mobile2").style.marginBottom = "25px";
            document.querySelector(".mobile2 h1").innerHTML = "Thank you!, well keep in touch!";
            document.querySelector(".mobile2 span").style.display = "none";
        }
    </script>
</body>

</html>