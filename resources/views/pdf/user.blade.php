<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="m-5">
        <h1 class="text-cyan-600">
            {{ $user->name }}
        </h1>
        <hr>
        <p class="text-cyan-400">
            {{ $user->email }}
        </p>
    </body>
</html>
