<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>calculator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body style="background-color: chartreuse">
<br><br><br>
<div class="container text-center">
    <div class="row">
        <div class="col-md-4 m-auto">
            <form action="calculation" method="POST">
                @csrf
                <div class="card" style="background-color: blue">
                    <h1 class="text-center text-light">Arithmetic Calculator</h1>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <input type="number" name="firstnumber" class="form-control" placeholder="Enter first number" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <input type="number" name="secondnumber" class="form-control" placeholder="Enter second number" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <select name="operator" class="form-control">
                                <option>----Select Operator----</option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                                <option value="%">%</option>

                            </select>
                        </div>
                    </div>
                    <input type="submit" name="btn" class="btn btn-warning btn-lg font=weight-bold" value="Enter">
                </div>
            </form>
            <br><br><br>
            <div class="row">
                <div class="col-md-3 m-auto">
                    @if(session('message'))
                        <div class="">
                            <h1 class="text-center">{{ session('message') }}</h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
