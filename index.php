<?php
function rand_str($col)
{
    $rus = array(
        'А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё', 'Ж', 'ж', 'З', 'з',
        'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м', 'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р',
        'С', 'с', 'Т', 'т', 'У', 'у', 'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ч', 'ч', 'Ш', 'ш', 'Щ', 'щ',
        'Ъ', 'ъ', 'Ы', 'ы', 'Ь', 'ь', 'Э', 'э', 'Ю', 'ю', 'Я', 'я', ' '
    );

    $str = '';
    for ($i = 1; $i <= $col; $i++) {
        $str .= $rus[rand(0, count($rus) - 1)];
    }
    return $str;
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/table.css">

    <!--    jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!--    bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <!--    /bootstrap-->

    <title>abr-table</title>
</head>
<body>
<div class="container mt-3">
    <table class="table table-bordered table-striped abr-table mt-2 mb-2 " data-paginator="7">
        <thead>
        <tr>
            <th>id</th>
            <th>integer</th>
            <th>float</th>
            <th>text</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $arr = array(1, -1);
        //рандомно заполняем таблицу
        for ($i = 0; $i <= 100; $i++) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= rand(1, 9999) * $arr[array_rand($arr)] ?></td>
                <td><?= rand(1, 9999) / 100 * $arr[array_rand($arr)] ?></td>
                <td><?= rand_str(rand(2, 9)) ?></td>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>

    <h2 class="mt-5">Таблица №2</h2>
    <table class="table table-bordered table-striped abr-table mt-2 abr-off-paginator">
        <thead>
        <tr>
            <th>id</th>
            <th>integer</th>
            <th>float</th>
            <th>text</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>0</td>
            <td>9711</td>
            <td>-30.21</td>
            <td>ЕПЯЩэт</td>
        </tr>
        <tr>
            <td>1</td>
            <td>6816</td>
            <td>-12.75</td>
            <td>лЁЯтТЗЦпл</td>
        </tr>
        <tr>
            <td>2</td>
            <td>-154</td>
            <td>-13.21</td>
            <td>в</td>
        </tr>
        <tr>
            <td>3</td>
            <td>-8429</td>
            <td>32.6</td>
            <td>ЦшПЭ</td>
        </tr>
        <tr>
            <td>4</td>
            <td>7533</td>
            <td>-68.11</td>
            <td>ЯЕоЬБ</td>
        </tr>
        <tr>
            <td>5</td>
            <td>-7557</td>
            <td>64.94</td>
            <td>ЧьгХЧъзк</td>
        </tr>
        <tr>
            <td>6</td>
            <td>-8659</td>
            <td>79.64</td>
            <td>ыцр</td>
        </tr>
        <tr>
            <td>7</td>
            <td>9022</td>
            <td>-31.9</td>
            <td>ДХе</td>
        </tr>
        <tr>
            <td>8</td>
            <td>6050</td>
            <td>47.64</td>
            <td>ЧАЕзЁЗЛЖщ</td>
        </tr>
        <tr>
            <td>9</td>
            <td>-2541</td>
            <td>-16.85</td>
            <td>цзджУЮ з</td>
        </tr>
        <tr>
            <td>10</td>
            <td>9919</td>
            <td>20.82</td>
            <td>иДПаюШод</td>
        </tr>
        <tr>
            <td>11</td>
            <td>199</td>
            <td>34.77</td>
            <td>йЭьтКНагЖ</td>
        </tr>
        <tr>
            <td>12</td>
            <td>-9733</td>
            <td>-45.15</td>
            <td>чТАйХуЫ</td>
        </tr>
        <tr>
            <td>13</td>
            <td>-325</td>
            <td>-41.42</td>
            <td>эвЭ ЮСвМ</td>
        </tr>
        <tr>
            <td>14</td>
            <td>-4130</td>
            <td>55.55</td>
            <td>ёэЁаТщ</td>
        </tr>
        <tr>
            <td>15</td>
            <td>971</td>
            <td>18.15</td>
            <td>Чгё</td>
        </tr>
        <tr>
            <td>16</td>
            <td>-1239</td>
            <td>-14.74</td>
            <td>ЯякНЗуЗ</td>
        </tr>

        </tbody>
    </table>


</div>

<script src="js/tableToExcel.js"></script>
<script src="js/table.js"></script>

</body>
</html>