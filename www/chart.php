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
<h2 class="text-center">Открытые данные НСО и исторические события на временной шкале</h2>
<hr />

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div id='chart_div' style='width: 100%;height:520px;'></div>
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

                    <label>
                        <input type="checkbox" name="s12"> Средние цены на рынке жилья по Новосибирской области первичный рынок
                    </label>
                    <label>
                        <input type="checkbox" name="s13"> Средние цены на рынке жилья по Новосибирской области вторичный рынок
                    </label>
                    <label>
                        <input type="checkbox" name="s14"> Удельный вес организаций (в % к общему числу обследованных организаций), используюших выделенные каналы связи
                    </label>
                    <label>
                        <input type="checkbox" name="s15"> Удельный вес организаций (в % к общему числу обследованных организаций), имеющих web-сайт в Интернете
                    </label>
                    <label>
                        <input type="checkbox" name="s16"> Число умершиъх за год Новосибирская область
                    </label>
                    <label>
                        <input type="checkbox" name="s17"> Число рожденных за год в Новосибирской области
                    </label>
                    <label>
                        <input type="checkbox" name="s18"> Поголовье скота и птицы в хозяйствах всех категорий
                    </label>
                    <label>
                        <input type="checkbox" name="s19"> Посевные площади сельскохозяйственных культур
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

<script type='text/javascript' src='//www.gstatic.com/charts/loader.js'></script>
<script type='text/javascript'>
    google.charts.load('current', {'packages':['annotatedtimeline']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        <?php include "maker.php"; ?>

        var chart = new google.visualization.AnnotatedTimeLine(document.getElementById('chart_div'));

        google.visualization.events.addListener(chart, 'rangechange', function () {
            console.log(chart.getVisibleChartRange())
        });

        chart.draw(data, {displayAnnotations: true, interpolateNulls: true});
    }
</script>

</body>
</html>