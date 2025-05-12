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
$dayNames = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

for ($i = 0; $i < 7; $i++) {
    echo "<div class='weather'>";
    echo "📅 " . $dayNames[$i] . ": " . $weekForecast[$i] . "<br>";

    if ($weekForecast[$i] == "Sunny") {
        echo "☀️ Pack sunglasses!";
    } elseif ($weekForecast[$i] == "Cloudy") {
        echo "⛅ Light jacket recommended.";
    } elseif ($weekForecast[$i] == "Rainy") {
        echo "🌧 Don’t forget your umbrella.";
    } elseif ($weekForecast[$i] == "Stormy") {
        echo "⛈ Consider staying indoors.";
    }

    echo "</div>";
}
echo "</div>";

?>
</body>
</html>
