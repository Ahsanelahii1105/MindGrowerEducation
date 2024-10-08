<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Study - QuizStart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

        <div class="container-fluid">
            <div class="row" style="padding-top: 40vh">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <label>Correct: <small> {{Session::get('correctans')}} </small></label><br><br>
                    <label>Incorrect: <small> {{Session::get('wrongans')}} </small></label><br><br>
                    <label>Result: <small> {{Session::get('correctans')}}/{{Session::get('correctans')+Session::get('wrongans')}} </small></label>
                    <br>
                    <a href="/"><button class="btn btn-primary">Finish Quiz</button></a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>


</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
