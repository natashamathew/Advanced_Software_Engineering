<!DOCTYPE html>
</html>
    </head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css" /> 
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
						<li><a href="https://www.fitbit.com/oauth2/authorize?response_type=code&client_id=22D5DD&redirect_uri=https%3A%2F%2Fapi.heathsystemapp.tech%2FsaveToken.php&scope=activity%20heartrate%20location%20nutrition%20profile%20settings%20sleep%20social%20weight&expires_in=60480000">Register Fitbit</a></li>
                    </ul>
                </nav>
                
                
                
                <div id="content_area">
                    <?php echo $content; ?>
                    <img src="Images/alexafoodpic.png" alt="Trulli" width="500" height="333">
                </div>
             
            
            <footer>
                <p>All rights reserved</p>
           
                </div>
    </body>
</html>