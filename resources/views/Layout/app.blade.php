<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
   <!-- <link rel="stylsheet" href="{//{asset('css/app.css')}}" >-->

    <title>Fruteria</title>
</head>
<body>
@yield('content')

<style>

    *{
        padding: 0;
        margin: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    body{
        background-color: #eee;
        font-family: 'Open Sans', sans-serif;
    }

    .container{
        width: 90%;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 3em;
        margin-bottom: 3em;

        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 30px;
    }

    .imgfrutas{
        background-color: #fff;
        cursor: pointer;
        box-shadow: 0 0 5px 0 rgba(0,0,0,.095);

        transition: all 300ms;

        position: relative;
    }
    .imgfrutas-text{
        padding: 1em;
    }

    .imgfrutas-img{
        max-width: 100%;
        display: block;
    }

    .container::after {
        content: "";
        background-color: rgba(179, 229, 252, .1);
        width: 100%;
        height: 100%;
        position: absolute;
        top:0;
        left: 0;
        transform: scale(0);
        transition: all 300ms;
        opacity: 0;
    }

    .imgfrutas:hover:after{
        opacity: 1;
        transform: scale(1);
    }

    .imgfrutas:hover {
        transform: scale(1.05);
    }

    @media screen and (min-width: 590px) {

        .container{
            grid-template-columns: repeat(2, 1fr);
        }

    }



    @media screen and (min-width: 960px) {

        .container{
            grid-template-columns: repeat(3, 1fr);
        }

    }


</style>

</body>
</html>
