<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    /* Styles for body */
body {
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    padding: 0;
    background-image: #0974e0; /* Background color */
}

/* Styles for section */
.section {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: #f8f9fa; /* Background color */
}

/* Styles for card */
.card-body {
    background-color: #ffffff; /* Card background color */
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Card shadow */
    padding: 30px;
}

/* Styles for heading */
h1, h3 {
    color: #343a40; /* Heading color */
}

/* Styles for buttons */
.btn-primary {
    background-color: #007bff; /* Button background color */
    border-color: #007bff; /* Button border color */
    color: #ffffff; /* Button text color */
}

.btn-primary:hover {
    background-color: #0056b3; /* Button background color on hover */
    border-color: #0056b3; /* Button border color on hover */
}

</style>
<body>

    <section class="vh-100" style="background-color: rgb(15, 231, 246)">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card-body p-5 text-center">
                        <div class="profile-picture mb-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ4Ef3V9AhuK7JDSifZ_mmPilxTsLpspDOTlJF16CXvQ&s" alt="Profile Picture" class="rounded-circle">
                        </div>
                        <h1 class="mb-3">{{ Auth::user()->name }}</h1>
                        <h3 class="mb-5">{{ Auth::user()->email }}</h3>
                        <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block px-5">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>