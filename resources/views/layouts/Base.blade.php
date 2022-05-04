<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emmaüs-Synergie : @yield("titre")</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css%22%3E">
</head>
<body class="bg-dark text-light">
    @include("fragment.navbar")
<div class="container min-vh-100">
    @yield("contenu")

    @if (session('success'))
    <div id="notif"
        class="fixed-bottom rounded-pill bg-primary border border-1 border-dark mx-2 my-3 col-6 col-lg-3">
        <div class="fs-5 col align-center m-2">
            <i class="bi bi-bell px-2"></i>
            {{ session('success') }}
        </div>
    </div>
@endif

</div>
    {{-- Footer --}}
Footer
<script src="{{asset("js/notif.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

