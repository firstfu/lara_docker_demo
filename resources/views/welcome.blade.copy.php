<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>



<body>
    <div class="container containerSection">
        <div class="row my-4">
            {{-- <div class="col-md-4 mx-auto">
                <div class="btn btn-danger">
                    測試
                </div>
            </div> --}}

            <div class="col">欄1</div>
            <div class="col">欄2</div>
        </div>
    </div>




    @vite(['resources/js/app.js'])

    <style>
        .containerSection {
            background-color: #BBB3B3;
        }
    </style>


</body>

</html>
