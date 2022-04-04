<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-hw3</title>
</head>
<body>
    <?php
        $eq = '10 + X = 33';
        $elem = explode(' ', $eq);
        for ($i = 0; $i < count($elem); $i++) {
            if ((int)$elem[$i] !== 0) {
                $a = (int)$elem[$i];
            } elseif ($elem[$i] === '+') {
                continue;
            } elseif ($elem[$i] === '=') {
                $res = (int)$elem[$i + 1];
                break;
            }
        }
        $x = $res - $a;
        echo $x;
    ?>
</body>
</html>