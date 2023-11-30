<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartment's detail</title>
</head>
<body>
    <div class="card m-auto mt-5" style="width: 18rem;">
        <img src="{{$apartment->photo}}" alt="{{$apartment->name}}">
        <div class="card-body">
            <h5 class="card-title">{{ $apartment->name }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><span class="fw-bold">Rooms: </span>{{ $apartment->rooms }}</li>
            <li class="list-group-item"><span class="fw-bold">Beds: </span>{{ $apartment->beds }}</li>
            <li class="list-group-item"><span class="fw-bold">Bathroom: </span>{{ $apartment->bathroom }}</li>
        </ul>
    </div>
</body>
</html>