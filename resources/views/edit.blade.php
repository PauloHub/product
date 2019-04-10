<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        <!-- Maindiv -->
        <div class="flex-center position-ref full-height">
            <!-- Content --> 
            <div class="content w-auto">
                <!-- Start Form -->
 				@if(session('success'))
                    <p class="alert-success" align="center" id="foo">
                    {{session('success')}} </p>
                @endif        
                <br>        
                <form action="{{ url('/edit', $product->id) }}" method="POST" name="input_form" class="text-center lg-border p-lg-5 pt-1 pb-5 px-5">
                    {{csrf_field()}}
                    <!-- Title -->
                    <div class="title m-b-md">
                        Poduto
                    </div>

                    <!-- Product name -->
                    <input type="text" class="form-control mb-4" placeholder="Nome" maxlength="100" name="NAME" value="{{ $product->name }}">

                    <!-- Product description -->
                    <input type="text" class="form-control mb-4" placeholder="Descrição" maxlength="200" name="DETAILS" value="{{ $product->details }}">

                    <!-- Submit button -->
                    <button class="btn btn-info btn-block my-4 w-auto mx-auto" type="submit">Salvar</button>

                <!-- End Form -->
                </form>
            <!-- End Maindiv --> 
            </div>
        <!-- Maindiv -->
        </div>
    </body>
    
    <script>
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
    </script>
</html>
