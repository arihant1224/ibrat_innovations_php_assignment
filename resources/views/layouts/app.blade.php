<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pageTitle}}</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body style="background-color:#E8F0F2;">
    <div class="ms-5 ps-5 mt-5 pt-5">
        <h3 class="fw-normal">Hi, Welcomeback!</h3>
        <div class="bg-white mt-5 border p-4" style="width: 90%;">
            <h5 class="fw-light">{{$membership_name}}</h5>
            <ul class="nav nav-tabs mt-4 mb-4">
                <li class="nav-item">
                    @if ($pageTitle === 'Details')
                        <a class="nav-link active text-danger fw-light bg-light" aria-current="page" href="/">Details</a>
                    @else
                        <a class="nav-link text-secondary fw-light" href="/">Details</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($pageTitle === 'Plans')
                        <a class="nav-link active text-danger fw-light bg-light" aria-current="page" href="/plans">Plans</a>
                    @else
                        <a class="nav-link text-secondary fw-light" href="/plans">Plans</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($pageTitle === 'Classes')
                        <a class="nav-link active text-danger fw-light bg-light" aria-current="page" href="/classes">Classes</a>
                    @else
                        <a class="nav-link text-secondary fw-light" href="/classes">Classes</a>
                    @endif
                </li>
            </ul>
            @yield('content')
        </div>
    </div>
</body>
</html>