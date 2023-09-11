<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
<!--    <link rel="stylesheet" href="../html/css/blocks.css">-->
<!--    <link rel="stylesheet" href="../html/css/main.css">-->
</head>
<body>

<div class="input-er">
    <h1>Lab 1</h1>
    <form action="Work.php" method="post">
        <div class="input-box">
            <input type="radio" value="-2" name="x">
            <input type="radio" value="-1.5" name="x">
            <input type="radio" value="-1" name="x">
            <input type="radio" value="-0.5" name="x">
            <input type="radio" value="0" name="x">
            <input type="radio" value="0.5" name="x">
            <input type="radio" value="1" name="x">
            <input type="radio" value="1.5" name="x">
            <input type="radio" value="2" name="x">
<!--            <input type="" name="x" required="">-->
            <label > Insert X:</label>
        </div>
        <div class="input-box">
            <input type="text" name="y" required="" placeholder="-3 ... 3" value="1">
            <label> Insert Y:</label>
        </div>
        <div class="input-box">
            <input type="text" name="r" required="" placeholder="1 ... 4" value="1">
            <label > Insert R:</label>
        </div>
        <br>
        <div>
            <button type="submit" class="butSub">
                Request
            </button>
        </div>
    </form>
</div>
<div>
    <h1> Results </h1>
    <table border="1">
        <tr>
            <td>X</td>
            <td>Y</td>
            <td>R</td>
            <td>Hit</td>
            <td>Time</td>
        </tr>
        <?php
        session_start();
        show_dot($_SESSION['dots']);
        function show_dot ($dots) {
            if (empty($dots)) {
                return;
            }
            foreach ($dots as $dot) {
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

