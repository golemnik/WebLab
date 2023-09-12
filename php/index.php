<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <script type="text/javascript" src="../js/main.js"></script>
    <script src="../js/draw.js"></script>
<!--    <link rel="stylesheet" href="../html/css/blocks.css">-->
<!--    <link rel="stylesheet" href="../html/css/main.css">-->
</head>
<body>

<div class="author">
    <details class="h_det">
        <summary class="h_sum">
            Автор лабораторной работы:
        </summary>
        Создатель: Кокорев Михаил Дмитриевич <br>
        Группа: З219 <br>
        Вариант: 2972 <br>
    </details>
    <br>
</div>

<div class="input-er">
    <h1>Lab 1</h1>
    <form id="dart" name="dart" action="Work.php" method="post" onsubmit="return check(); ">
        <div class="input-box">
            <label for="x1">-2</label><input id="x1" type="radio" value="-2" name="x">
            <label for="x2">-1.5</label><input id="x2" type="radio" value="-1.5" name="x">
            <label for="x3">-1</label><input id="x3" type="radio" value="-1" name="x">
            <label for="x4">-0.5</label><input id="x4" type="radio" value="-0.5" name="x">
            <label for="x5">0</label><input id="x5" type="radio" value="0" name="x" checked>
            <label for="x6">0.5</label><input id="x6" type="radio" value="0.5" name="x">
            <label for="x7">1</label><input id="x7" type="radio" value="1" name="x">
            <label for="x8">1.5</label><input id="x8" type="radio" value="1.5" name="x">
            <label for="x9">2</label><input id="x9" type="radio" value="2" name="x">
            <label > Insert X</label>
        </div>
        <div class="input-box">
            <label for="y">Insert Y</label>
            <input type="text" id="y" name="y" required="" placeholder="-3 ... 3" value="1">
        </div>
        <div class="input-box">
            <label for="r"> Insert R</label>
            <input type="text" id="r" name="r" required="" placeholder="1 ... 4" value="1">
        </div>
        <br>
        <div>
            <button type="submit" class="butSub">
                Request
            </button>
        </div>
    </form>
</div>

<div id="dr">
    <canvas id="canvas" width="600" height="600">
        <script>
            draw(
                <?php
                session_start();
                if(array_key_exists('dots', $_SESSION)) {
                    echo"[";
                    foreach ($_SESSION['dots'] as $dot) {
                        echo "{x:".$dot['x'].",y:".$dot['y'].",r:".$dot['r']."},";
                    }
                    echo"]";
                }
                ?>
            );
        </script>
    </canvas>
</div>

<div>
    <h1> Results </h1>
    <table>
        <tr>
            <td>X</td>
            <td>Y</td>
            <td>R</td>
            <td>Hit</td>
            <td>Time</td>
            <td>Scripted</td>
        </tr>
        <?php
        if(array_key_exists('dots', $_SESSION)) {
            foreach ($_SESSION['dots'] as $dot) {
                echo "<tr>";
                foreach ($dot as $d) {
                    echo "<td> $d </td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</div>

</body>
</html>



