<?php
    function rand_str($col){
        $rus = array(
            'А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё', 'Ж', 'ж', 'З', 'з',
            'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м', 'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р',
            'С', 'с', 'Т', 'т', 'У', 'у', 'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ч', 'ч', 'Ш', 'ш', 'Щ', 'щ',
            'Ъ', 'ъ', 'Ы', 'ы', 'Ь', 'ь', 'Э', 'э', 'Ю', 'ю', 'Я', 'я'
        );

        $str = '';
        for($i=1; $i<=$col; $i++){
            $str .= $rus[rand(0, count($rus)-1)];
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
    <!--    jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!--    bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--    /bootstrap-->

    <link rel="stylesheet" href="css/table.css">

    <title>abr-table</title>
</head>
<body>
    <div class="container mt-3">
        <table class="table table-bordered table-striped abr-table mt-2 mb-2">
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
                for ($i=0; $i<=20; $i++){
                    ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= rand(1, 9999) * $arr[array_rand($arr)] ?></td>
                        <td><?= rand(1, 9999)/100 * $arr[array_rand($arr)] ?></td>
                        <td><?= rand_str(rand(2, 9)) ?></td>
                    </tr>
                    <?php
                }
            ?>

            </tbody>
        </table>



    </div>

    <script src="js/table.js"></script>

</body>
</html>