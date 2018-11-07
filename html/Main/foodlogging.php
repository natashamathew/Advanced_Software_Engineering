<!DOCTYPE html>
</html>
    </head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheetFoodLogging.css" /> 
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
                    <?php echo $content; ?>
            
			<form action='' method='post'>
                <p><label>Food Item:</label><input type='text' name='foodName' value='' class='auto'></p>
            </form>

            <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
            <script type="text/javascript" src="https://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
            <script type="text/javascript">
            $(function() {
                //autocomplete
                $(".auto").autocomplete({
                    source: "food_auto_complete.php",
                    minLength: 1
                });
            });
            </script>
				
            <p> Quantity   
                <input type="text"> </p>    
            <p> <input type="submit" value="Enter"></p>
            </div>
             
            <footer>
                <p>All rights reserved</p>
            
                </div>
                
                
    </body>
</html>
