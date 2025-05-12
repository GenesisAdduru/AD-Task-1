<!DOCTYPE html>
<html>
<head>
    <title>WeatherWanderer - Travel Forecast</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>🌍 WeatherWanderer Dashboard</h1>

<?php
$destination = "🧥Baguio City🍓";
$weatherOptions = array("Sunny", "Cloudy", "Rainy", "Stormy");
$weekForecast = array();

for ($i = 0; $i < 7; $i++) {
    $randomIndex = rand(0, count($weatherOptions) - 1);
    $weekForecast[] = $weatherOptions[$randomIndex];
}

echo "<div class='block'>";
echo "Destination: <strong>$destination</strong><br>";
echo "Here's your 7-day weather forecast:<br><br>";

?>
</body>
</html>
