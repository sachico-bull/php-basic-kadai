<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $num = [15, 4, 18, 23, 10];
            $array = array(15, 4, 18, 23, 10);
            sort($array);
            // 配列$numの要素を１つずつ順番に出力する
            if (sort($array));
            echo "昇順にソートします" . "<br>";
            foreach ($array as $key => $val) {
                echo " " . $val . "\n" . "<br>";  
            } 
            $other = array(15, 4, 18, 23, 10);
            if(rsort($other));
            echo "降順にソートします" . "<br>";
            foreach ($other as $key => $val) {
                echo " " . $val . "\n" . "<br>";
            }
        ?>
        </p>
</body>

</html>
