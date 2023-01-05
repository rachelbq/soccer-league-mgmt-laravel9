<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
    <title>@yield('title')</title>
</head>

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

    {{-- <!-- scripts --> --}}
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
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const select = document.querySelector('select[name=id]');
          select.addEventListener('change', () => {
            select.nextElementSibling.value = select.value;
          });
        });
    </script>

</body>

</html>