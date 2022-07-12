<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Text Area to Display Greetings and user Favourites :</h4>
    <textarea rows="6" cols="50">
    <?php
    if (isset($_COOKIE['name']) && isset($_COOKIE['nick']) && isset($_COOKIE['col']) && isset($_COOKIE['lang'])) {
        $name = $_COOKIE['name'];
        $nick = $_COOKIE['nick'];
        $color = $_COOKIE['col'];
        $lang = $_COOKIE['lang'];
        if (date("H") < 12) {

            $day = "Good morning";
        } else if (date("H") > 11 && date("H") < 18) {

            $day = "Good afternoon";
        } else if (date("H") > 17) {

            $day = "Good evening";
        }
        echo  $day . " " . $name . " ,Nick name is " . $nick;
        echo " And your Favourite color is : " . "$color";
        echo ",your Favourite Language is : " . $lang;
    }
    ?>
    </textarea>
</body>

</html>