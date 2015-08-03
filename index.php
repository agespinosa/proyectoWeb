
<!DOCTYPE html>
<html lang="es" ng-app="routerApp">
    <head>
        <meta charset=utf-8>
        <title>Inicio </title>

        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- JS (load angular, ui-router, and our custom js file) -->
        <script src="http://code.angularjs.org/1.2.13/angular.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
        <script src="js/app.js"></script>
    </head>  
    <!-- apply our angular app to our site -->
    <body >
        <div class="container-fluid">
            <div ng-include="'templates/nav.html'"></div>
            <div ui-view></div>
            <div ng-include="'templates/pie.html'"></div>
        </div>
    </body>
</html>