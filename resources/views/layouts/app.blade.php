<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield("page-title","")</title>

<body>
    @include("partials.header")
    <main>
        @yield("main-content")
    </main>

    @vite("resources/js/app.js")
    @include("partials.footer")
</body>

</html>