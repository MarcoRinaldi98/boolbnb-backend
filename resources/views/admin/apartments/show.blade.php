<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Apartment's detail</title>
</head>
<body>
    <main>
        <div class="card m-auto mt-5" style="width: 18rem;">
            <img src="{{$apartment->photo}}" alt="{{$apartment->name}}">
            <div class="card-body">
                <h3 class="card-title">{{ $apartment->name }}</h3>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="fw-bold">Rooms: </span>{{ $apartment->rooms }}</li>
                <li class="list-group-item"><span class="fw-bold">Beds: </span>{{ $apartment->beds }}</li>
                <li class="list-group-item"><span class="fw-bold">Bathroom: </span>{{ $apartment->bathroom }}</li>
                <li class="list-group-item"><span class="fw-bold">Mq: </span>{{ $apartment->mq }}</li>
                <li class="list-group-item"><span class="fw-bold">Address: </span>{{ $apartment->address }}</li>
            </ul>
        </div>
    </main>
</body>
</html>