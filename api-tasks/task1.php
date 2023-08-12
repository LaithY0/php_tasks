<!DOCTYPE html>
<html>
<head>
    <title>Weather Forecast</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Weather Forecast</h1>
        
        <form method="POST">
            <label for="city">Enter City Name: </label>
            <input type="text" id="city" name="city" required>
            <button type="submit">Get Weather</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $apiKey = '7fb5a7153b71f4cd81bf068f6d9ccf98';
            $city = $_POST['city'];
            $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=6fcef5a22aab41b8b8b233605231008";
            
            $response = file_get_contents($apiUrl);
            $data = json_decode($response, true);
            
            if ($data && isset($data['main']) && isset($data['wind'])) {
                $cityName = $data['name'];
                $temperature = $data['main']['temp'];
                $humidity = $data['main']['humidity'];
                $minTemp = $data['main']['temp_min'];
                $maxTemp = $data['main']['temp_max'];
                $windSpeed = $data['wind']['speed'];
                
                echo "<h2>Weather in $cityName</h2>";
                echo "<p>Temperature: $temperature &deg;C</p>";
                echo "<p>Humidity: $humidity%</p>";
                echo "<p>Minimum Temperature: $minTemp &deg;C</p>";
                echo "<p>Maximum Temperature: $maxTemp &deg;C</p>";
                echo "<p>Wind Speed: $windSpeed m/s</p>";
            } else {
                echo "<p>City not found or data unavailable. Please try again.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
