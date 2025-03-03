<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="w-full font-poppins">
    <nav>
        @yield('navbar')
    </nav>

    <body>
        @yield('content')
    </body>

    <footer>
        @yield('footer')
    </footer>

    {{-- Script javascript tambahan --}}
    <script>
        // Mencegah tombol back di browser
        window.onload = function () {
            setTimeout(function () {
                window.history.pushState(null, "", window.location.href);
            }, 0);

            window.onpopstate = function () {
                window.history.pushState(null, "", window.location.href);
            };
        };

        // Menjaga biar tetep di halaman yang sama
        window.addEventListener('popstate', function (event) {
            history.go(1);
        })
        
        window.history.replaceState(null, document.title, window.location.pathname + window.location.search);
        window.history.pushState(null, document.title, window.location.pathname + window.location.search);
    </script>        
</body>
</html>

{{-- Pusher --}}
<!DOCTYPE html>
<head>
  <title></title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('cd183c71fcf5cb7316d1', {
      cluster: 'mt1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1></h1>
  <p><code></code><code></code>
  </p>
</body>