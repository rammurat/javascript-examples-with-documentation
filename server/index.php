<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Medicine India</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            textarea{
                width: 100%;
                height: 10em;
            }
            .container .row{
                margin-bottom: 50px;
            }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body role="document" >



        <script src="js/jquery-1.11.1.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <form action="" method="post" name="">
            <textarea rows="20" cols="20" name="sourceCode">
                <?php if(isset($_POST['sourceCode'])){ echo $_POST['sourceCode'];   }?>
            </textarea>
            <input type="submit" name="submit" value="Submit"/>
        </form>
        
        <div>
            <?php $test = $_POST['sourceCode']; ?>
            <xmp><?php var_dump($test); ?></xmp>
            <?php if(isset($_POST['sourceCode'])){ echo $_POST['sourceCode'];   }?>
        </div>
    </body>
</html>