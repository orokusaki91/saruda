<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>Villagiosaruda</title>
<!-- za mobilne -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!-- FA FA ICONS -->
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/ws_nav.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/ws_main.css') }}">

  <!-- favicon -->
  <link rel="icon" href="{{ asset('img/favicon.png') }}">
 
</head>

<body>


<div id="about" class="center-content-form">
        <h1>
            @if ($category->type == 'prehistory')
                PREISTORIA
            @elseif ($category->type == 'traditions')
                TRADIZIONI
            @elseif ($category->type == 'baby')
                BABY
            @endif
        </h1>
        <h2>{{ $category->title }}</h2>
    <div class="container">
        <?php $count = 1; ?>
        @foreach ($records as $record)
            <div class="row">

                @if ($count % 2 != 0)
                <div class="col-1-2">
                    <a href="{{ asset($record->image_path) }}" target="_blank">
                        <img src="{{ asset($record->image_path) }}" alt="">
                    </a>
                </div>
                @endif

                <div class="col-1-2">
                    <h3>{{ $record->heading }}</h3>
                    <p>{{ $record->description }}</p>
                </div>

                @if ($count % 2 == 0)
                <div class="col-1-2">
                    <a href="{{ asset($record->image_path) }}" target="_blank">
                        <img src="{{ asset($record->image_path) }}" alt="">
                    </a>
                </div>
                @endif

            </div> 
        <?php $count++; ?>
        @endforeach
    </div>
</div>

</body>
</html>
