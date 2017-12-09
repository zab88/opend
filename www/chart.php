<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<h1>Hello, world!</h1>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php
            var_dump($_POST);
            foreach($_POST as $k => $el){
                if (substr($k, 0, 1) == "s"){
                    echo $k;
                    echo $el;
                }
            }
            ?>
        </div>
        <div class="col-md-3">
            <form method="POST">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="s01"> В среднем депозитов в руб. на человека
                    </label>
                    <label>
                        <input type="checkbox" name="s02"> Средние расходы по картам
                    </label>
                    <label>
                        <input type="checkbox" name="s03"> Средняя сумма заявки на ипотечный кредит
                    </label>
                    <label>
                        <input type="checkbox" name="s04"> Количество заявок на ипотечные кредиты
                    </label>
                    <label>
                        <input type="checkbox" name="s05"> Средняя пенсия
                    </label>
                    <label>
                        <input type="checkbox" name="s06"> Средняя сумма заявки на потребительский кредит
                    </label>
                    <label>
                        <input type="checkbox" name="s07"> В среднем руб. на текущем счете на человека
                    </label>
                    <label>
                        <input type="checkbox" name="s08"> Количество заявок на потребительские кредиты
                    </label>
                    <label>
                        <input type="checkbox" name="s09"> Средняя сумма нового депозита
                    </label>
                    <label>
                        <input type="checkbox" name="s10"> Количество новых депозитов
                    </label>
                    <label>
                        <input type="checkbox" name="s11"> Средняя зарплата
                    </label>
                </div>
                <button type="submit" class="btn btn-default btn-success">Отобразить</button>
                <button type="reset" class="btn btn-default">Сброс</button>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>