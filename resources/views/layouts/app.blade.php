<!DOCTYPE html>
<html>
<head>
    <title>Laravel Notes App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light bg-light px-3">
        <a class="navbar-brand" href="{{ route('notes.index') }}">Notes</a>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
