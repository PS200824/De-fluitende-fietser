<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/Slider.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="img/logo.ico">
        <title>De fluitende fietser</title>
    </head>
    <body>
        <!-- <p class="p2">
            Openingstijden:
        </p> -->
        <!-- <p class="p3">
            maandag 12:30 - 18:00
            dinsdag 08:30 - 18:00
            woensdag 08:30 - 18:00
            donderdag 08:30 - 18:00
            vrijdag 08:30 - 19:30
            zaterdag 09:00 - 17:00
            zondag gesloten
        </p> -->
        <div class="ww">&nbsp;</div>
        <div class="ww">&nbsp;</div>
        <!-- SLIDER -->
        <!--image slider start-->
        <div class="slider">
        <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
            <img src="img/sfeer1.jpg" alt="">
            </div>
            <div class="slide">
            <img src="img/sfeer2.jpg" alt="">
            </div>
            <div class="slide">
            <img src="img/sfeer3.jpg" alt="">
            </div>
            <div class="slide">
            <img src="img/sfeer4.jpg" alt="">
            </div>
            <div class="slide">
            <img src="img/sfeer5.jpg" alt="">
            </div>
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
            <div class="auto-btn5"></div>
            </div>
            <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
        </div>
        <!--image slider end-->

        <script type="text/javascript">
        var counter = 0;
        setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 6){
            counter = 2;
        }
        }, 5000);
        </script>

    </body>
</html>