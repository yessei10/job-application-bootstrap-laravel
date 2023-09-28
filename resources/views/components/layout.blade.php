<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Job Application</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <!-- JS import -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="form-validation.js"></script>
</head>
<body class="bg-light">
<div class="container">
    <!-- container starts here -->
    
    {{ $slot }}

    <!-- footer begins -->
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2022 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
</body>
</html>
