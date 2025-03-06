<!DOCTYPE html>
<html lang="en">

        <title>Homepage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>

        <div class="header container-fluid text-bg-dark">
            <div class="row">
                <div class="col-sm-4"></div>
                
                <?php 
                    $arrPage = ["Home","About me","Blogs","Skills","Contacts"];
                    $arrRange = count($arrPage);
                    for ($i = 0; $i < $arrRange; $i++): ?>

                        <div class="col pt-sm-5 pb-sm-3">

                            <form action="pages/<?php echo $arrPage[$i]?>.php">
                                <button class="homePageBtn text-bg-dark" type="submit" name="<?php echo $arrPage[$i]?>"><?php echo $arrPage[$i]?></button>
                            </form>

                        </div>
                        
                <?php endfor; ?>    
            </div>
        </div>
        <div></div>















        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>