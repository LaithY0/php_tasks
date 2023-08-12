<!DOCTYPE html>
<html>
<head>
    <title>YouTube Search</title>
    <style>
        .video-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>YouTube Search</h1>
    
    <form method="GET">
        <label for="search">Enter Search Keywords: </label>
        <input type="text" id="search" name="search" required>
        <button type="submit">Search</button>
    </form>
    
    <?php
    if (isset($_GET['search'])) {
        $searchQuery = urlencode($_GET['search']);
        $apiKey = 'YOUR_YOUTUBE_API_KEY';
        $apiUrl = "https://www.googleapis.com/youtube/v3/search?q={$searchQuery}&key={$apiKey}&part=snippet&type=video&maxResults=10";
        
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);
        
        if ($data && isset($data['items'])) {
            echo "<h2>Total Results: {$data['pageInfo']['totalResults']}</h2>";
            
            foreach ($data['items'] as $item) {
                echo "<div class='video-card'>";
                echo "<img src='{$item['snippet']['thumbnails']['medium']['url']}' alt='Video Thumbnail' width='120'>";
                echo "<h3>{$item['snippet']['title']}</h3>";
                echo "<p>{$item['snippet']['description']}</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No results found. Please try again.</p>";
        }
    }
    ?>
</body>
</html>
