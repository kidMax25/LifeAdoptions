<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "mydatabase";
    if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
        die("No DB connection");
    }

 
    function generateUniqueUUID($length = 9, $con) {
        $prefix = 'user_';
        $unique = false;

        while (!$unique) {
            $uuid = $prefix . str_pad(mt_rand(1, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);

            // Check if the UUID exists in the database
            $stmt = $con->prepare("SELECT COUNT(*) as count FROM personal_information WHERE uuid = ?");
            $stmt->bind_param("s", $uuid);
            $stmt->execute();
            $result = $stmt->get_result();

            // Fetch the count
            $row = $result->fetch_assoc();
            $count = $row['count'];

            // If the UUID doesn't exist, set $unique to true to exit the loop
            if ($count === 0) {
                $unique = true;
            }

            // Close the statement
            $stmt->close();
        }

        return $uuid;
    }


    if (isset($_POST['form[Submit2]'])){
        //validate inputs and check if fields are filled using php
        $uuid = generateUniqueUUID($length = 9, $con);
        $First_Name = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        $Last_Name = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
        $Pronouns = filter_input(INPUT_POST, 'pronoun', FILTER_SANITIZE_STRING);
        $Date_of_Birth = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
        $Race = filter_input(INPUT_POST, 'race1', FILTER_SANITIZE_STRING);

        
        $stmt1 = $con->prepare("INSERT INTO personal_information (uuid, `First Name`, `Last Name`, `Pronouns`, `Date of Birth`, Race) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt1->bind_param("ssssss", $uuid);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
    }
    else{
        echo "Error Submitting";
    }
 
?>