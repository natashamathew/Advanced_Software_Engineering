<!DOCTYPE html>
<!DOCTYPE html>
</html>
    </head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheetSummary.css" /> 
    </head>
    </body>
        <div id ="wrapper">
                <div id ="banner">
                    <center> <h1>Healthy Diet Smart System</h1></center>
                </div>
            
                <nav id = "navigation">
                    <ul id="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="activity.php">Activity</a></li>   
                        <li><a href="foodlogging.php">Food Dairy</a></li>
                        <li><a href="mealplan.php">Meal Plan</a></li>
                        <li><a href="summary.php">Summary</a></li>
                    </ul>
                </nav>
            <div id="content_area">
                <?php $image='' ;
                echo $image; ?>
            <p> Date
                <input type="text"> </p> 
            <p> MM/DD/YY </p>
            <p> <input type="submit" value="Enter"></p>
            </div>
             
            <footer>
                <p>All rights reserved</p>
            
                </div>
                
                
    </body>
</html>