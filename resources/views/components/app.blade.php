{{-- General Master layout --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        <x-navbar></x-navbar>
            <main>
                {{ $slot }}
            </main>
    </div>
</body>
</html>