{{-- <x-guest-layout>
    @include('layouts.navbar')
     @include('layouts.footer')

</x-guest-layout> --}}
{{-- <x-app-layout>

</x-app-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <script src="{{ asset('css/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('css/js/jquery-1.11.0.min.js') }}"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url({{ asset('Image/background.jpg') }});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

        }
    </style>
</head>

<body>
    <div class="container min-vh-100 ">
        <div class="row ">
            <div class="col-md-12">
                <div class="card mt-5">
                    @include('layouts.navbar')

                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
