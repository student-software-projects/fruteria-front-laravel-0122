@extends('Layout.app')

@section('content')

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><h2>Fruteria</h2></a>
                <a class="btn btn-outline-success" href="{{route('Landing.index')}}">Inicio</a>
                <a class="btn btn-outline-success" href="{{route('Landing.acercade')}}">acerca de</a>
                <a class="btn btn-outline-success" href="{{route('Landing.servicios')}}">Servicios</a>
                <a class="btn btn-outline-success active" href="#">Contactos</a>
            </div>


        </div>

        <div class="container">

            <div class="imgfrutas">
                <div class="imgfrutas-text">
                    <h3>Fruver</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7964.969476662896!2d-76.501278!3d3.474447!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwMjgnMjcuOCJOIDc2wrAzMCcwMy4zIlc!5e0!3m2!1ses-419!2sus!4v1604016738521!5m2!1ses-419!2sus"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">

                    </iframe>
                </div>
            </div>

            <div align="right">
                <h3>- Caloto, Cauca
                    - Tel: 57 312-2720418</h3>
            </div>


        </div>
    </nav>



@endsection
