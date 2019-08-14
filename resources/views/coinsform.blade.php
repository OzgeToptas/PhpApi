<!DOCTYPE html>
<html lang='tr'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Document</title>
    <style>
    body{
        background-color:lightblue;
    }
    </style>
</head>
<body>
        <div class="container">
        {{--<div class="jumbotron"> --}}
        <div class="card">
            <div class="card-header">
                <h4> Coins </h4>
            </div>
                <div class="card-body">
                    <h5 class="card-title"> Coins Data </h5>
                
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="/insertdata" class="btn btn-success badge-pill" style="width:80px;"> ADD </a>
                    </div>
                </div>
                <br>

                <table class="table table-light table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"> BITCOIN </th>
                            <th scope="col"> LITECOIN </th>
                            <th scope="col"> ETHERIUM </th>
                            <th scope="col"> RIPPLE </th>
                            <th scope="col"> BITCOIN_CASH </th>
                            <th class="text-right"> ACTIONS </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coins as $coins)
                        <tr>
                            <th> {{ $coins->BITCOIN}} </th>
                            <th> {{ $coins->LITECOIN}} </th>
                            <th> {{ $coins->ETHERIUM}} </th>
                            <th> {{ $coins->RIPPLE}} </th>
                            <th> {{ $coins->BITCOIN_CASH}} </th>

                            <td class="text-right">
                                <a href="#" class="btn btn-primary badge-pill" style="width:80px;"> EDIT </a>
                                <button class="btn btn-danger badge-pill" style="width:80px;"> DELETE </button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>