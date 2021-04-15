<html>
<head><title>Login Page</title></head>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="fullname"><br/>
    Username: <input type="text" name="username"><br/>
    E-Mail: <input type="text" name="email"><br/>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br/>
    Language:
    <input type="radio" name="language" value="English" checked> English
    <input type="radio" name="language" value="French"> French
    <input type="radio" name="language" value="Arabic"> Arabic
    <br/>


    <input type="submit" value="Submit">


</form>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST["fullname"];
    $name = clean_data($_POST["fullname"]);

    if(empty($_POST["fullname"])){
        $nameErr = "Name is required";
    } else {
        $name = clean_data($_POST["name"]);
    }

    $username = clean_data($_POST["username"]);
    $email = clean_data($_POST["email"]);
    $comment = clean_data($_POST["comment"]);
    $language = clean_data($_POST["language"]);

    echo $name;
}

function clean_data($data_item){
    $data_item  = trim($data_item);
    $data_item = stripslashes($data_item);
    $data_item = htmlspecialchars($data_item);

    return $data_item;
}

?>


</body>
</html>