<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>


    <meta charset="utf-8">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #b1b7ba;
            color: black;
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
            /*margin-left: auto;*/
            /*text-align: center;*/

        }
        h1  {
            background-color: deepskyblue;
            color: black;
            font-family: 'Raleway', sans-serif;
            font-size: 36px;
            text-align: center;
            text-transform: uppercase;
            border: solid;
        }
        th {
            background-color: #b1b7ba;
            color: black;
            font-family: 'Raleway', sans-serif;
            font-size: 12px;
            text-align: left;
        }
        td {
            color: black;
            font-family: 'Raleway', sans-serif;
            font-size: 11px;
            word-wrap: break-word;
        }
    </style>
</head>

<body>

<div class="container">
    @yield('content')
</div>

<div class="container">
    @yield('feedback')
</div>

</body>
</html>
