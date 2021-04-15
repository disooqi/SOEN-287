<!DOCTYPE html>
<html>
<head>
    <title>PHP forms - SB Tutorial</title>

    <style>
        .req {
            color: red;
        }

    </style>
</head>
<body>
<?php

$fullnameErr = $emailErr = "";
$fullname = $email = $username = $comment = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty($_POST["fullname"])){
        $fullnameErr = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]+$/", $_POST["fullname"])){
        $fullnameErr = "Only letters and white space allowed";
    }
    else {
        $fullname = clean_data($_POST["fullname"]);
    }

    if (empty($_POST["email"])){
        $emailErr = "Email is required";}
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";}
    else $email = clean_data($_POST["email"]);


//        $username = clean_data($_POST["username"]);
//        $password = clean_data($_POST["password"]);
        $comment = clean_data($_POST["comment"]);
}

function clean_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);  // <script>  =>  &lt;script&gt;

    return $data;
}

?>
<form method="post" action="forms_SB.php">

    Name<span class="req">*</span>: <input type="text" name="fullname" value="<?php echo $fullname; ?>">
    <span class="req"><?php echo $fullnameErr; ?></span><br>

    E-Mail<span class="req">*</span>: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="req"><?php echo $emailErr; ?></span><br>

    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    Comment: <textarea rows="5" cols="60" name="comment"><?php echo $comment; ?> </textarea><br>

    <input type="submit" value="Subscribe">
</form>
<br><br>

<?php

echo "Welcome  ".$fullname."<br>";
echo "Your email is: ".$email."<br>";

?>
</body>
</html>

