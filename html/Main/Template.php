<!DOCTYPE html>
</html>
    </head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" /> 
    </head>
    </body>
        <div id ="wrapper">
                <div id ="banner">
                    <center> <h1>Healthy Diet Smart System</h1></center>
                </div>
            
                <nav id = "navigation">
                    <ul id="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="foodlogging.php">Food Logging</a></li>
                        <li><a href="index.php">Activity</a></li>  
                        <li><a href="index.php">Summary</a></li> 
                    </ul>
                </nav>
                
                <div id="content_area">
                    <?php echo $content; ?>
                    <img src="Images/alexafoodpic.png" alt="Trulli" width="500" height="333">
                </div>
             <div id ="sidebar">
                 <center> <h4>Sign in</h4> </center>
            </div>
            
            <footer>
                <p>All rights reserved</p>
           
                </div>
    </body>
</html>