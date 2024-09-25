<!doctype html>
<html lang="en">
<head>
    <title>Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Section-->
    <section class="background-radial-gradient overflow-hidden">
    <link rel="stylesheet" href="{!! asset('Estilos_login/css/login.css') !!}">
    <link rel="stylesheet" href="{!! asset('build/assets/app-c22a5d79.css') !!}">
</head>
<body>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-center my-5" style="height: 100vh;"> <!-- Ajuste en la clase text-center -->
        <div class="row gx-lg-5 align-items-center mb-5">

        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(0, 0%, 100%)">
                Stock-App<br />
                <span style="color: hsl(0, 0%, 100%)"> Registrate ¡Ya!.</span>


            </h1>
            <p >

            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Temporibus, expedita iusto veniam atque, magni tempora mollitia
                dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                ab ipsum nisi dolorem modi. Quos?
            </p>

            <!-- Imagen del código QR -->

        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
            <div class="card bg-glass">
                <div class="card-body px-4 py-5 px-md-5">
                    @include('auth.from.from_register')
                </div>
            </div>
        </div>
        </div>
    </div>
    </section>








    <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
    ></script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js.2"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
    ></script>
</body>
</html>
