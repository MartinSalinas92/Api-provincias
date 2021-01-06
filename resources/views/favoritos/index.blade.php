@extends('layouts.app')

@section('botones')

    <a href="{{route('noticias.index')}}" class="btn btn-success"> Volver</a>

@endsection

@section('content')
    <h1 class="text-center">Hola favoritos</h1>

    <div class="col-md-12 mx-auto bg-white p-4">
        <table class="table">
            <thead class="bg-primary text-ligth">
                <tr>


                    <th scole="col">Codigo</th>
                    <th scole="col">Nombre_provincia </th>




                </tr>


            </thead>
            <tbody>





                @foreach ($results as $item)

                <tr>

                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>

            </tr>

                @endforeach



            </tbody>






@endsection
