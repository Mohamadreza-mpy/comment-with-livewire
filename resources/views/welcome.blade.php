<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire</title>
       <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <livewire:styles />
   <style>
      * {
         font-family: 'Nunito', monospace;
      }
   </style>
</head>
<body class="d-flex justify-content-center">
<div class="w-75 d-flex mt-5">
    <div class="w-100 mx-3 rounded border p-5">
        <livewire:comments />
    </div>
</div>
<livewire:scripts />
</body>
</html>
