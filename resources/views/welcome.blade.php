<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C to C++ Converter</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
        <h1>C to C++ Code Converter</h1>
        <form id="convertForm">
            <textarea id="cCode" placeholder="Enter C code here..."></textarea>
            <button type="submit">Convert</button>
        </form>
        <h2>Converted C++ Code</h2>
        <textarea id="cppCode" readonly></textarea>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

