<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kuhrmdhn | Laravel</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/project/123">Project</a></li>
            <li><a href="/blog/html">HTML Blog</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/personal-web">Personal Web</a></li>
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>