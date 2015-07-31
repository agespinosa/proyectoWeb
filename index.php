
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset=utf-8>
        <title>Inicio </title>
        <?php include 'inc/head_common.php'; ?>
    </head>  
    <!-- apply our angular app to our site -->
    <body ng-app="routerApp">

    <?php include 'inc/header_common.php';?>  

        <!-- MAIN CONTENT -->
        <div class="container">
            <!-- THIS IS WHERE WE WILL INJECT OUR CONTENT ============================== -->
            <div ui-view></div>
        </div>

    <?php include 'inc/footer.php'; ?>
    <div>
        
    </div>
    
</body>
</html>