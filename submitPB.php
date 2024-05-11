<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form data
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $small = intval($_POST["small"]);
    $medium = intval($_POST["medium"]);
    $large = intval($_POST["large"]);
    $city = htmlspecialchars($_POST["city"]);
    
    // Calculate total price
    $totalPrice = ($small * $smallPrice) + ($medium * $mediumPrice) + ($large * $largePrice);

    // Geolocation
    
    // 1. Get user's IP address
    $user_ip = $_SERVER['REMOTE_ADDR'];

    // 2. Submit IP address to GeoPlugin API
    $url = "http://www.geoplugin.net/json.gp?ip=$user_ip&jsoncallback=?&apikey=$api_key";
    $response = file_get_contents($url);

    // 3. Parse API response to get user's city
    $data = json_decode($response, true);
    $user_city = $data['geoplugin_city'];

    // 4. Match user's city with European capitals to find the nearest capital
    $nearest_capital = findNearestCapital($user_city);

    // Function to find nearest European capital
    function findNearestCapital($user_city) {
        $european_capitals = array(
            'London', 'Paris', 'Berlin', 'Madrid', 'Rome', // Add more capital cities here
        );

        // Compare user's city with European capitals and find nearest
        $nearest_distance = PHP_INT_MAX;
        $nearest_capital = '';

        foreach ($european_capitals as $capital) {
            // Calculate distance between user's city and European capital
            $distance = calculateDistance($user_city, $capital);
            if ($distance < $nearest_distance) {
                $nearest_distance = $distance;
                $nearest_capital = $capital;
            }
        }

        return $nearest_capital;
    }

    // Function to calculate distance (you need to implement this)
    function calculateDistance($city1, $city2) {
        // Implement distance calculation logic (e.g., using APIs or hardcoded values)
    }

// Proceed with saving form data to database and sending email notifications
// Use $nearest_capital as the delivery city

    
    // Save form data to database
    
    // Send email notification to user
    
    // Send email notification to yourself
}
?>
