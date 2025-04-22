<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review</title>
    <link rel="stylesheet" href="./css.css">
    <style>

    </style>
</head>

<body>
    <h3>
        給定兩個變數，請思考如何交換兩個變數的值

        例：
        $a = 10; $b = 50;
        交換後
        $a = 50; $b = 10;
    </h3>
    <hr>
    <?php
    $a = 10;
    $b = 50;
    $tmp = $a; //tmp=10
    $a = $b; //a=50
    $b = $tmp;
    echo '$a=' . $a . "<br>";
    echo '$b=' . $b;
    ?>
    <h3>給定一個成績數字，判斷是否及格(60)分</h3>
    <?php
    $score = 59;
    echo "分數為$score" . "<br>";
    if ($score >= 60) {
        echo "及格";
    } else {
        echo "不及格";
    }
    ?>
    <h3>
        閏年判斷，給定一個西元年份，判斷是否為閏年

        地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，
        所以每隔四年設置一個閏年來消除這多出來的一天。
        公元年分除以4不可整除，為平年。
        公元年分除以4可整除但除以100不可整除，為閏年。
        公元年分除以100可整除但除以400不可整除，為平年。
        <!-- 
                公元年分除以4可整除，為閏年。
        公元年分除以4可整除但除以100不可整除，為閏年。
        公元年分除以100不可整除但除以400可整除，為閏年。
        -->
    </h3>
    <?php
    $y = 2024;
    if (($y % 400 == 0) || ($y % 100 != 0 && $y % 4 == 0)) {
        echo "$y 為閏年";
    } else {
        echo "$y 為平年";
    }
    ?>
    <h3>
        1.用 PHP 實作一個計算 Fibonacci number 的 Function
        例如： fib(6) 的結果為 8
        請用 Recursive 及 非 Recursive 的方式各作一次。
        fib= 0 1 1 2 3 5 8 13
    </h3>
    <?php
    function fib($n)
    {
        if ($n == 0) return 0;
        if ($n == 1) return 1;
        return fib($n - 1) + fib($n - 2);
    }
    echo fib(6);
    function fib2($n)
    {
        if ($n == 0) return 0;
        if ($n == 1) return 1;
        $a = 0;
        $b = 1;
        for ($i = 2; $i <= $n; $i++) {
            $tmp = $a + $b; //8
            $a = $b; // 5
            $b = $tmp; //8
        }
        return $b;
    }
    echo fib2(6);
    ?>
    <h3>
        2.給定一個 PHP array, 例如：data = [ 10, 20, 50, 7, 9,1 ];寫一個函數計算該 array 的中位數。
    </h3>
    <?php

    $data = [10, 20, 50, 7, 9,];
    $data1 = [1, 2, 3, 4, 5, 6];
    function median_array($data)
    {
        // 整理陣列
        sort($data);
        // 長度
        $count = count($data);
        // 奇
        if ($count % 2 != 0) {
            // 地板值
            return $data[floor($count / 2)];
        } else {
            // 偶
            $mid1 = $data[$count / 2 - 1];
            $mid2 = $data[$count / 2];
            return ($mid1 + $mid2) / 2;
        }
    }
    echo median_array($data1);
    ?>
    <h3>
        以表格排列的九九乘法表
    </h3>

    <table>
    <?php
    
    for ($i=1; $i <= 9; $i++) { 
        echo "<tr>";
        for ($y=1; $y <=9; $y++) { 
            echo "<td class=ninex>";
            echo  "$i x $y=". $i*$y;
            echo "</td>";
        }
        echo "</tr>";
        // echo "<br>";
    }
    ?>
    </table>
    <h3>
    以交叉計算結果呈現的九九乘法表
    </h3>
    <table>
    <tr>
        <th></th>
    <?php
    for ($i=1; $i <=9 ; $i++) { 
        echo "<th>$i</th>";
    }
    ?>
    </tr>
    <?php
    for ($row=1; $row <=9 ; $row++) { 
        echo "<tr>";
        echo "<th>";
        echo $row;
        echo "</th>";
        for ($col=1; $col <=9 ; $col++) { 
            echo "<td>";
            echo $col;
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>

</html>