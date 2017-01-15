<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daily Posts</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link href="css/app.css" rel="stylesheet" type="text/css">


    </head>
    <body>
        <div id="app">
          <navbar></navbar>
          <router-view></router-view>
        </div>
    </body>
    <script>
      var csrf = "{{ csrf_token() }}";
      var state = {!! json_encode($state) !!}
    </script>
    <script src="js/app.js"></script>
</html>
