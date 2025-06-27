<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

    // 1. DB Connection
    $conn = mysqli_connect('localhost','root','','ecom3_db') or die('Could not connect');
   
    echo "TESt";
    if(isset($_GET['action']) && isset($_GET['action']) == 'Registration')
    {
        echo"OKAY";
        // 2. Build the query
            
            // Sanitize Data
            $email = mysqli_real_escape_string($conn, $_GET['e']);
            $password = mysqli_real_escape_string($conn, $_GET['p']);

            // Hash the password
            $salt = mt_rand(10,10000);
            $hashed_password = hash('sha512',$salt . $salt . $password . $salt);

            $sql = "INSERT INTO `user_table` (`email`, `password`) VALUES ('$email', '$hashed_password')";
    
            // 3. Execute the Query
            mysqli_query($conn, $sql) or die(mysqli_error($conn));

            // 4. Display the Result/ AJAX 
            echo '200';
            exit;
    }

    // Check if Data is coming
    // if(isset())

    // 5. DB Connection Close
    mysqli_close($conn);
?>