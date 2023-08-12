<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 3</title>
</head>
<body>

<form method="POST">
            <label for="city">Enter User Name: </label>
            <input type="text" name="search" required>
            <button type="submit">Search</button>
        </form>
    
</body>
</html>  -->




<!-- 
// $userName = $_POST['search'];

// $apiurl = "https://api.github.com/users/$userName";

// $res = file_get_contents($apiurl);

// $data = json_decode($res);

// if($_SERVER["REQUEST_METHOD"] == "POST"){

//    $user = $data['id'];
//    echo $user;

// } -->



<!DOCTYPE html>
<html>
<head>
    <title>GitHub User Search</title>
    <style>
        .user-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>GitHub User Search</h1>
    
    <form method="GET">
        <label for="username">Enter GitHub Username: </label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Search</button>
    </form>
    
    <?php
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
        $apiUrl = "https://api.github.com/users/$username";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        $data = json_decode($response, true);
        
        if ($data && isset($data['login'])) {
            echo "<div class='user-card'>";
            echo "<img src='{$data['avatar_url']}' alt='User Avatar' width='100'>";
            echo "<h3>{$data['login']}</h3>";
            echo "<p>Followers: {$data['followers']}</p>";
            echo "</div>";
        } else {
            echo "<p>User not found. Please try again.</p>";
        }
    }
    ?>
</body>
</html>
