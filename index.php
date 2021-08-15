<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arbitency Landing Page</title>
    <link rel="stylesheet" href="assets/style.css">
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
            <form action="">
                <input type="text" placeholder="Email"><br>
                <input type="submit" value="Subscribe">
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
            <form action="">
                <input type="text" placeholder="Email"><br>
                <input type="submit" value="Subscribe">
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
        $(document).ready(function() {
            $(".head").on("contextmenu", function() {
                return false;
            });
        });
        document.querySelector('.head').setAttribute('draggable', false);
    </script>
</body>

</html>