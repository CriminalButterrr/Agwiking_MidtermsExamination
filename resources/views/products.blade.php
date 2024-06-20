<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Products</title>
</head>
<body>

    <h1 class="text-center mb-5">MOVIES</h1>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://cdn-wp.thesportsrush.com/2024/02/64817f8e-kai-ray.jpg?format=auto&w=3840&q=75" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$movies['Title1']}}</h5>
              <p class="card-text">{{$movies['Genre1']}}</p>
              <p class="card-text">{{$movies['Release Date1']}}</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://www.esquire.com.au/wp-content/uploads/2023/11/Screen-Shot-2023-11-16-at-2.21.49-pm.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$movies['Title2']}}</h5>
              <p class="card-text">{{$movies['Genre2']}}</p>
              <p class="card-text">{{$movies['Release Date2']}}</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4x-9CM9rzvKwNvmcPA-z-dKoMZRi1HkX4Iw&s" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$movies['Title3']}}</h5>
              <p class="card-text">{{$movies['Genre3']}}</p>
              <p class="card-text">{{$movies['Release Date3']}}</p>
            </div>
        </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>