<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Post Manager' }}</title>

    @stack('scripts')
</head>
<body>
    <h1>Posts</h1>
    <hr>
    {{ $slot }}
</body>
</html>