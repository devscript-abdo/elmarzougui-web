<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Elmarzougui web creation de site internet</title>

        <link rel="icon" type="image/x-icon" href="public/favicon.ico" />

        <link href="{{mix('css/app.css')}}" rel="stylesheet" />

    </head>
    <body class="d-flex flex-column h-100">

        <main class="flex-shrink-0">
      
            @include('layouts._navbar')

            @yield('content')
            
        </main>

         @include('layouts._footer')

        <script src="{{mix('js/app.js')}}"></script>
        
    </body>
</html>
