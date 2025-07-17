<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kuhrmdhn | Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav>
        <ul>
            <li><x-ui.link :isActive="true" href="/">Home</x-ui.link></li>
            <li><x-ui.link href="/about">About</x-ui.link></li>
            <li><x-ui.link href="/project/123">Project</x-ui.link></li>
            <li><x-ui.link href="/blog/html">HTML Blog</x-ui.link></li>
            <li><x-ui.link href="/contact">Contact</x-ui.link></li>
            <li><x-ui.link href="/personal-web">Personal Web</x-ui.link></li>
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>