<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">

        <div class="row justify-content-center">
            <div style="text-align: center" class="col-md-12">

                <h1>Crud con laravel</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="formulario" class="btn btn-success">Nuevo +</a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-12">

                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Area</th>
                        <th>Curriculum</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        @foreach($cruds as $crud)
                            <tr>
                                <td>{{ $crud -> id_crud }}</td>
                                <td>{{ $crud -> nombre }}</td>
                                <td>{{ $crud -> email }}</td>
                                <td>{{ $crud -> area }}</td>
                                <td>{{ $crud -> Curriculum }}</td>
                                <td>
                                    <a href="formulario/{{ $crud -> id_crud }}" class="btn btn-success">Editar</a>
                                    <form  method="post" action="eliminar">
                                            @csrf

                                            <input name="id_crud" style="display: none" value="{{ $crud -> id_crud }}"  type="text">
                                            <input class="btn btn-danger" value="Eliminar" type="submit">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>