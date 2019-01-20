<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/temp_converter.css" />
        <title>Temperature converter</title>
    </head>
    <body>
        
        <?php
            if(isset($_POST['temperature'])){//check if temperature has valid contents
                $user_input=$_POST['temperature'];
                
                if(is_numeric($user_input)){//check if user entered a number or not
                    
                    $selection=$_POST['converter'];
                    
                    switch($selection){//check user radio button selection
                        case 'ftc':
							if($user_input < -459.67)
							{
								echo '<h1>User, please enter a Fahrenheit number > than or equal to -459.67 (absolute zero)</h1>';
								print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to enter a number</a>';
								break;
							}
                            $result=($user_input-32)/9*5;
                            echo '<h1>'. $user_input . ' Fahrenheit is about '. round($result,2) . ' Celsius.</h1><br><br><br>';
                            print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to start a new conversion</a>';
                            break;
                        case 'ftk':
							if($user_input < -459.67)
							{
								echo '<h1>User, please enter a Fahrenheit number > than or equal to -459.67 (absolute zero)</h1>';
								print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to enter a number</a>';
								break;
							}
                            $result=($user_input+459.67)*5/9;
                            echo '<h1>'. $user_input . ' Fahrenheit is about '. round($result,2) . ' Kelvin.</h1><br><br><br>';
                            print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to start a new conversion</a>';
                            break;
                        case 'ctf':
							if($user_input < -273.15)
							{
								echo '<h1>User, please enter a Celsius number > than -273.15 or equal to (absolute zero)</h1>';
								print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to enter a number</a>';
								break;
							}
                            $result=($user_input)*9/5+32;
                            echo '<h1>'. $user_input . ' Celsius is about '. round($result,2) . ' Fahrenheit.</h1><br><br><br>';
                            print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to start a new conversion</a>';
                            break;
                        case 'ctk':
							if($user_input < -273.15)
							{
								echo '<h1>User, please enter a Celsius number > than -273.15 or equal to (absolute zero)</h1>';
								print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to enter a number</a>';
								break;
							}
                            $result=$user_input+273.15;
                            echo '<h1>'. $user_input . ' Celsius is about '. round($result,2) . ' Kelvin.</h1><br><br><br>';
                            print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to start a new conversion</a>';
                            break;
                        case 'ktf':
							if($user_input < 0)
							{
								echo '<h1>User, please enter a Kelvin number > than 0 or equal to (absolute zero)</h1>';
								print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to enter a number</a>';
								break;
							}
                            $result=($user_input)*9/5-459.67;
                            echo '<h1>'. $user_input . ' Kelvin is about '. round($result,2) . ' Fahrenheit.</h1><br><br><br>';
                            print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to start a new conversion</a>';
                            break;
                        case 'ktc':
							if($user_input < 0)
							{
								echo '<h1>User, please enter a Kelvin number > than 0 or equal to (absolute zero)</h1>';
								print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to enter a number</a>';
								break;
							}
                            $result=$user_input-273.15;
                            echo '<h1>'. $user_input . ' Kelvin is about '. round($result,2). ' Celsius.</h1><br><br><br>';
                            print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to start a new conversion</a>';
                            break;
                        //tell user to go back to select a radio button for converter, if no radio button been selected.
                        default:
                            echo "<h1>Please select your temperature converter</h1><br>";
                            print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to select a temperature converter</a>';
                        
                    }
                }
                else{//tell user wrong input, number is required
                    echo '<h1>please enter a number</h1>';
                    print '<a href="' . $_SERVER['PHP_SELF'] . '">Go back to enter a number</a>';
                }
            }
        else{
        ?>
        <div id="main">
        <h1>Temperature Converter</h1>
        <br>
        <form action="<? print $_SERVER['PHP_SELF']; ?>" method="post">
            <p>Please enter the temperature you want to convert? &nbsp &nbsp<input type="text" name="temperature"></p>
            <input type="radio" name="converter" value="ftc"> Fahrenheit to Celsius   <br>
			<input type="radio" name="converter" value="ftk"> Fahrenheit to Kelvin    <br>
            <input type="radio" name="converter" value="ctf"> Celsius    to Fahrenheit<br>
            <input type="radio" name="converter" value="ctk"> Celsius    to Kelvin    <br>
            <input type="radio" name="converter" value="ktc"> Kelvin     to Celsius   <br>
            <input type="radio" name="converter" value="ktf"> Kelvin     to Fahrenheit<br><br>
            <input type="submit" value="Convert">
        </form>
        <?php
            }
        ?>
        </div>
    </body>
</html>