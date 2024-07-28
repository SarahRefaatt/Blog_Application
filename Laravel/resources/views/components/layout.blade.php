<!DOCTYPE html>
<html>
<head>
    <title>My Application</title>
    <!-- Add your stylesheets here -->

    <x-layout>
    <h1>Welcome to My Application</h1>
</x-layout>

</head>
<body>
    <header>
        <!-- Add your header here -->
    </header>

    <main>
        {{ $slot }} <!-- This is where the content will be injected -->
    </main>

    <footer>
        <!-- Add your footer here -->
    </footer>
</body>
</html>
