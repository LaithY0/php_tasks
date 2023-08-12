<!DOCTYPE html>
<html>
<head>
    <title>Pokémon Search</title>
    <style>
        .pokemon-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Pokémon Search</h1>
    
    <form method="GET">
        <label for="pokemon">Enter Pokémon Name or ID: </label>
        <input type="text" id="pokemon" name="pokemon" required>
        <button type="submit">Search</button>
    </form>
    
    <?php
    if (isset($_GET['pokemon'])) {
        $pokemonName = $_GET['pokemon'];
        $apiUrl = "https://pokeapi.co/api/v2/pokemon/{$pokemonName}/";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        $data = json_decode($response, true);
        
        if ($data && isset($data['name'])) {
            echo "<div class='pokemon-card'>";
            echo "<img src='{$data['sprites']['front_default']}' alt='Pokémon Image' width='100'>";
            echo "<h3>{$data['name']}</h3>";
            echo "<p>Height: {$data['height']}</p>";
            echo "<p>Weight: {$data['weight']}</p>";
            echo "</div>";
        } else {
            echo "<p>Pokémon not found. Please try again.</p>";
        }
    }
    ?>
</body>
</html>
