<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
    {{-- <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script> --}}
    <title>@yield('title')</title>
</head>

<script>
    function confirmation(){
        var answer=confirm("do you really want to remove this record?");
        if(answer==true){
            return true;
        }else{
            return false; 
        }
    }
</script>

<body class='bg-gray-300'>

    <div class="container px-4 mx-auto">

    <header>
        @include('layouts.partials.header')
    </header>

    @yield('content')

    {{-- <!-- footer --> --}}
    <footer>
        @include('layouts.partials.footer')
    </footer>

    </div>

</body>

</html>