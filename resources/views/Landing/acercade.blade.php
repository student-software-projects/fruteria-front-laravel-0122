@extends('Layout.app')

@section('content')

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><h2>Fruteria</h2></a>
                <a class="btn btn-outline-success" href="{{route('Landing.index')}}">Inicio</a>
                <a class="btn btn-outline-success active" href="#">acerca de</a>
                <a class="btn btn-outline-success" href="{{route('Landing.servicios')}}">Servicios</a>
                <a class="btn btn-outline-success" href="{{route('Landing.contacto')}}">Contactos</a>
            </div>
            <div class="container">

                <div class="imgfrutas">
                    <div class="imgfrutas-text">
                        <h3>Mision</h3>
                        <p>Nuestra misión es satisfacer las necesidades de todos nuestros clientes y  partner así como
                            de nuestros  trabajadores, con el objetivo de maximizar la eficiencia y optimizar la
                            rentabilidad a través de nuestra  diferenciación en calidad de producto, servicio y precio.</p>
                    </div>
                    <img src="https://cdn.buenavibra.es/wp-content/uploads/2015/11/14033235/Webp.net-resizeimage-12.jpg"
                         class="imgfrutas-img">

                </div>



                <div class="imgfrutas">

                    <div class="imgfrutas-text">
                        <h3>Vision</h3>
                        <p>Nuestra visión es conseguir la fidelización de nuestros clientes a través de comercialización
                            de productos de calidad, a partir de la cual afianzar un crecimiento progresivo y sostenido
                            en el mercado nacional y europeo consolidando nuestra posición como empresa de referencia en
                            el sector con una imagen corporativa propia y diferenciada de sus competidores. Frutas Terrados
                            trabaja para conseguir la máxima calidad, un catálogo de productos diversificado y el mejor servicio
                            al precio más competitivo.</p>

                    </div>
                    <img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/01/dieta-frutas-salud.jpg?quality=100&strip=info"
                         class="imgfrutas-img">
                </div>
                <br><br>

                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Sigue a nuestros admministradores a travez de nuestras redes sociales</h1>
                        <a href="https://www.facebook.com/frutalia.tropicale" class="btn btn-primary">Facebook</a>
                    </div>
                </div>
                </div>

        </div>

    </nav>
@endsection
