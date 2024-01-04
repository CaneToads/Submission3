<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Tabs Layout')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('create') }}">Create</a></li>
                <li><a href="{{ route('update') }}">Update</a></li>
                <li><a href="{{ route('delete') }}">Delete</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
