<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Binario EMail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <?php 
        $directorio = 'public/temp/';
        ?>
        <link rel="stylesheet" href=" {{$directorio}}css/bootstrap.min.css">
        <link rel="stylesheet" href=" {{$directorio}}css/all.min.css">
        <link rel="stylesheet" href=" {{$directorio}}css/brands.min.css">
        <link rel="stylesheet" href=" {{$directorio}}css/conflict-detection.min.css">        
        <link rel="stylesheet" href=" {{$directorio}}css/regular.min.css">

        <link rel="stylesheet" href=" {{$directorio}}css/bootstrap.min.css">
        <link rel="stylesheet" href="{{$directorio}}css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{$directorio}}css/fontAwesome.css">
        <link rel="stylesheet" href="{{$directorio}}css/hero-slider.css">
        <link rel="stylesheet" href="{{$directorio}}css/templatemo-style.css">
        <link rel="stylesheet" href="{{$directorio}}css/lightbox.css">
        <script src="{{$directorio}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{$directorio}}js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="{{$directorio}}js/vendor/bootstrap.min.js"></script>
        <script src="{{$directorio}}js/plugins.js"></script>
        <script src="{{$directorio}}js/main.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        

</head>
<body>
    
  <table class="table table-hover table-sm"> 
                <thead>
                <th>Enviado</th>
                <th>Nombre y apellido</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Accion</th> 
                <th>Estado</th>
                </thead>
                <br>
                <tbody>
                @if(session('info'))
            <div class="alert alert-success">{{session('info')}}</div>
                @endif
                @foreach( $emails as $email)
                    
                        @if($email -> estado == 'Leido')
                        <tr>
                        @else
                        <tr class="alert alert-primary" role="alert" >
                        @endif
                        <td>
                        {{ $email -> created_at }}
                        </td>
                        <td>
                        {{ $email -> nombre }}
                        </td>
                        <td>
                        {{ $email -> email }}
                        </td>
                        <td>
                        {{ $email -> mensage }}
                        </td>
                        <td>
                        {{ $email -> estado }}
                        </td>
                        <td>
                       <a href="javascript:document.getElementById('modifico-{{$email ->id}}').submit()"" class="btn btn-warning btn-xs" > Cambiar estado </a>
                       
                       <a href="javascript:document.getElementById('elimino-{{$email ->id}}').submit()"" class= "btn btn-danger btn-xs" > Eliminar </a>    
                       
                        </td>
                        <form id= "elimino-{{$email ->id}}" action="{{ route('elimino', $email -> id)}}" method=post>
                        @method('delete')
                        @csrf
                        </form>
                        <form id= "modifico-{{$email ->id}}" action="{{ route('modifico', $email -> id)}}" method=post>
                        @method('put')
                        @csrf
                        </form>
                        </tr>
                @endforeach
                </tbody>
                            </table>
                            
                            <div class="card">
  <div class="card-body">
    Bienvenido: {{ auth()-> user()-> name }}
    <a href="javascript:document.getElementById('logout').submit()" class="btn btn-danger btn-sm float-right"> Cerrar sesión </a>
    <form action="{{ route('logout')}}" id="logout" style="display:none" method="post">
    @csrf
    </form>

  </div>
</div>
</body>
</html>