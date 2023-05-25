<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    
    <title> @yield('title'):: Post</title>
</head>
<body>


@yield ('header')
@yield ('header1')



<div class="container">

@yield('main')
</div>


<div class="footer">
        <div class="inner__footer">
            <div class="desc">
                <div class="our">Наши микроблоги</div>
                <div class="logo">OURBLOG</div>
                <div class="date">2023</div>
            </div>
            <div class="line"></div>
            <div class="creator">Сурсякова Анастасия</div>
        </div>
       
    </div>
   

    

</body>
</html>