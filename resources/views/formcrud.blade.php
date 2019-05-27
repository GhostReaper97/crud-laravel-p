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

        <div class="row">
            <div  style="text-align:center; margin-top:30px" class="col-md-12">

                <h2>Datos Crud</h2>

            </div>
        </div>

        <div class="row justify-content-center">
            <div style="margin-top:30px" class="col-md-12">



                
                
                @if($nuevo)

                    <form method="POST" action="guardar">

                            @csrf

                            <div class="form-group">

                                    <label for="">Nombre</label>
                                    <input required name="nombre" class="form-control" type="text">
                
                                </div>
                
                                <div class="form-group">
                
                                        <label for="">Email</label>
                                        <input required name="email" class="form-control" type="email">
                    
                                </div>
                
                                <div class="form-group">
                
                                        <label for="">Area</label>
                                        <input required name="area" class="form-control" type="text">
                    
                                </div>
                
                                <div class="form-group">
                
                                        <label for="">Curriculum</label>
                                        <input required name="Curriculum" class="form-control" type="text">
                    
                                </div>

                                <input class="btn btn-success" value="Guardar" type="submit">

                    </form>
                @else

                <form method="POST" action="/modificar">

                        @csrf

                        <div style="display: none" class="form-group">

                                <label for="">Id</label>
                                <input required value="{{ $crud -> id_crud }}" name="id_crud" class="form-control" type="text">
            
                        </div>

                        <div class="form-group">

                                <label for="">Nombre</label>
                                <input required value="{{ $crud -> nombre }}" name="nombre" class="form-control" type="text">
            
                        </div>
            
                            <div class="form-group">
            
                                    <label for="">Email</label>
                                    <input required value="{{ $crud -> email }}" name="email" class="form-control" type="email">
                
                            </div>
            
                            <div class="form-group">
            
                                    <label for="">Area</label>
                                    <input required value="{{ $crud -> area }}" name="area" class="form-control" type="text">
                
                            </div>
            
                            <div class="form-group">
            
                                    <label for="">Curriculum</label>
                                    <input required value="{{ $crud -> Curriculum }}" name="Curriculum" class="form-control" type="text">
                
                            </div>

                            <input class="btn btn-success" value="Guardar" type="submit">

                </form>

                @endif

            </div>
        </div>


    </div>


</body>
</html>