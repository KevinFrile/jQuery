<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- estilos logo -->
    <script src="https://kit.fontawesome.com/ad8bac452b.js" crossorigin="anonymous"></script>

    <!-- Estilos CSS MENU -->
    <link rel="stylesheet" href="css/menu.css">

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/index.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/miscript.js"></script>

    <title>Ejercicios</title>
</head>

<body>

    <div class="container-fluid">

        <div class="row" id="navbar">
            <nav class="col-12">

                <a id="enlace1" href="#">
                    Ejercicios
                </a>



                <button id="botonHamburguesa" data-bs-toggle="offcanvas" data-bs-target="#Menu-right" aria-controls="Menu-right"> <i class="fas fa-bars"></i>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="Menu-right">

                    <div class="offcanvas-header">

                        <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times botonCerrar"></i>
                        </button>

                    </div>
                    <div class="offcanvas-body ">
                        <hr>
                        <h4>JQuery</h4>
                        <a class="enlace2collapsado" href="#Ejercicio-1">
                            <h4> Ejercicio 1</h4>
                        </a>
                        <a class="enlace2collapsado" href="#Ejercicio-2">
                            <h4> Ejercicio 2</h4>
                        </a>
                        <a class="enlace2collapsado" href="#Ejercicio-3">
                            <h4> Ejercicio 3</h4>
                        </a>
                        <a class="enlace2collapsado" href="#Ejercicio-4">
                            <h4> Ejercicio 4</h4>
                        </a>
                        <a class="enlace2collapsado" href="#Ejercicio-5">
                            <h4> Ejercicio 5</h4>
                        </a>
                        <a class="enlace2collapsado" href="#Ejercicio-6">
                            <h4> Ejercicio 6</h4>
                        </a>
                        <a class="enlace2collapsado" href="#Ejercicio-7">
                            <h4> Ejercicio 7</h4>
                        </a>
                        <hr>
                        <h4>PDO</h4>
                        <a class="enlace2collapsado" href="#Ejercicio-8">
                            <h4> Ejercicio 8</h4>
                        </a>
                        <a class="enlace2collapsado" href="#Ejercicio-9">
                            <h4> Ejercicio 9</h4>
                        </a>
                        <hr>
                        <h4>REACT</h4>
                        <a class="" href="#Ejercicio-10">
                            <h4> Ejercicio 10</h4>
                        </a>
                        <hr>
                        <br>
                        <h5 class="text-center Copyright">Copyright © Kevin Andres Fraile Camacho 2021</h5>
                        <br>
                        <img src="https://cdn.worldvectorlogo.com/logos/w3c-blue.svg" alt="w3c" id="w3c">

                    </div>
                </div>

            </nav>

        </div>
    </div>

    <a id="Ejercicio-1"></a>
    <div class="row Ejercicio-1  m-0">
        <h2 class="ejercicio">Ejercicio 1</h2>
        <div id="pandora" class="letra2">This is Pandora's box</div>
        <input type="button" name="Button" value="Ejecutalo" class="boton letra1" onclick="cambiar()">
    </div>

    <a id="Ejercicio-2"></a>
    <div class="row Ejercicio-2 m-0">
        <h2 class="ejercicio">Ejercicio 2</h2>
        <figure id="fig1" class="p-3 m-0">
            <img id="img1" src="https://cdn.pixabay.com/photo/2016/03/09/09/37/railway-1245906_960_720.jpg" alt="vias del tren en la nieve"><br><br>
            <figcaption id="cap1">ferrocarril vias</figcaption>
        </figure>
        <input type="button" name="Button" value="Ejecutalo" class="boton letra1" onclick="cambiar2()">
    </div>

    <a id="Ejercicio-3"></a>
    <div class="row Ejercicio-3 m-0">
        <h2 class="ejercicio">Ejercicio 3</h2>
        <figure id="fig2" class="p-3 m-0">
            <img id="img2" src="https://cdn.pixabay.com/photo/2016/03/09/09/37/railway-1245906_960_720.jpg" alt="vias del tren en invierno"><br><br>
            <figcaption id="cap2" class="text-center">Vias del tren en invierno</figcaption>
        </figure>
        <input type="button" name="Button" value="Ejecutalo" class="boton letra1" onclick="cambiar3()">
    </div>

    <a id="Ejercicio-4"></a>
    <div class="row Ejercicio-4 m-0">
        <h2 class="ejercicio">Ejercicio 4</h2>
        <figure id="fig3" class="p-3 m-0">
            <img id="img3" src="https://cdn.pixabay.com/photo/2016/03/09/09/37/railway-1245906_960_720.jpg" alt="vias del tren en invierno"><br><br>
            <figcaption id="cap3" class="text-center">Vias del tren en invierno</figcaption>
        </figure>
        <input type="button" name="Button" value="Mostrar" class="boton letra1" onclick="mostrar()">
        <input type="button" name="Button" value="Ocultar" class="boton letra1" onclick="ocultar()">
    </div>

    <a id="Ejercicio-5"></a>
    <div class="row Ejercicio-5 m-0">
        <h2 class="ejercicio">Ejercicio 5</h2>
        <ol id="characters1">
            <li class="gryffindor">Harry</li>
            <li class="gryffindor">Ron</li>
            <li class="gryffindor">Hermione</li>
            <li class="gryffindor">Fred</li>
            <li class="gryffindor">George</li>
            <li class="ravenclaw">Cho</li>
            <li class="hufflepuff">Cedric</li>
            <li class="slytherin">Draco</li>
            <li class="slytherin">Crabbe</li>
            <li class="slytherin">Goyle</li>
        </ol>

        <input type="button" name="Button" value="Ejecutalo" class="boton letra1" onclick="cambiar4()">
    </div>

    <a id="Ejercicio-6"></a>
    <div class="row Ejercicio-6 m-0">
        <h2 class="ejercicio">Ejercicio 6</h2>
        <figure id="fig4" class="p-3 m-0">
            <img id="img4" src="https://cdn.pixabay.com/photo/2016/03/09/09/37/railway-1245906_960_720.jpg" alt="vias del tren en invierno"><br><br>
            <figcaption id="cap4" class="text-center">Vias del tren en invierno</figcaption>
        </figure>
        <input type="button" name="Button" value="Ejecutalo" class="boton letra1" onclick="cambiar5()">
    </div>

    <a id="Ejercicio-7"></a>
    <div class="row Ejercicio-7 m-0">
        <h2 class="ejercicio">Ejercicio 7</h2>
        <ol id="characters2">
            <li class="gryffindor">Harry</li>
            <li class="gryffindor">Ron</li>
            <li class="gryffindor">Hermione</li>
            <li class="gryffindor">Fred</li>
            <li class="gryffindor">George</li>
            <li class="ravenclaw">Cho</li>
            <li class="hufflepuff">Cedric</li>
            <li class="slytherin">Draco</li>
            <li class="slytherin">Crabbe</li>
            <li class="slytherin">Goyle</li>
        </ol>

        <input type="button" name="Button" value="Ejecutalo" class="boton letra1" onclick="cambiar6()">
    </div>

    <a id="Ejercicio-8"></a>
    <div class="row Ejercicio-8 m-0">
        <h2 class="ejercicio">Ejercicio 8</h2>

        <a href="consultas/consultas.html" class="boton letra1">Ejercicio-consultas</a>

    </div>

    <a id="Ejercicio-9"></a>
    <div class="row Ejercicio-9 m-0">
        <h2 class="ejercicio">Ejercicio 9</h2>

        <a href="crud.php" class="boton letra1">Ejercicio-CRUD</a>
    </div>

    <a id="Ejercicio-10"></a>
    <div class="row Ejercicio-10 m-0">
        <h2 class="ejercicio">Ejercicio 10</h2>

        <a href="http://localhost:3000/" class="boton letra1">Ejercicio 1 REACT</a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>