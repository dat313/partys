<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Invitation Wizard</title>
</head>
<body>
    @yield('content')
    <script src="/js/wizard.js"></script>
</body>
</html>
