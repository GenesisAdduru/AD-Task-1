<!DOCTYPE html>
<html>
<head>
    <title>Travel Journal</title>
    <link rel="stylesheet" href="/page/assets/css/example.css"> <!-- External CSS file -->
</head>
<body>
<h1>✈️ WeatherWanderer Travel Journal</h1>
<?php
$travelQuotes = array(
    "Travel far enough, you meet yourself. – David Mitchell",
    "Wherever you go becomes a part of you somehow. – Anita Desai",
    "The world is a book, and those who do not travel read only one page. – St. Augustine",
    "Life is short and the world is wide. – Unknown",
    "Adventure may hurt you but monotony will kill you. – Unknown"
);

$travelMoods = array("Adventurous", "Relaxed", "Prepared", "Cautious", "Spontaneous", "Wanderlust", "Reflective");

$dailyTips = array(
    "Explore one local hidden gem today.",
    "Write down your best moment of the trip.",
    "Take 10 deep breaths while enjoying a view.",
    "Buy a local snack you've never tried.",
    "Take a photo with someone you met today.",
    "Sketch something — even if badly!",
    "Walk without a map for 20 minutes."
);
echo "<div class='block'>";
echo "🧭 <strong>Today's Mood:</strong> <em>" . $travelMoods[rand(0, count($travelMoods) - 1)] . "</em><br>";
echo "📌 <strong>Daily Tip:</strong> " . $dailyTips[rand(0, count($dailyTips) - 1)] . "<br>";
echo "📝 <strong>Quote of the Day:</strong><br><em>“" . $travelQuotes[rand(0, count($travelQuotes) - 1)] . "”</em>";
echo "</div>";
echo "<div class='block'>";
echo "<h2>✅ Safety Checklist</h2><ul>";

$tips = array(
    "Always check the weather before leaving.",
    "Keep emergency contacts written down.",
    "Carry a small first-aid kit.",
    "Hydrate often and eat light meals.",
    "Stay informed about local conditions.",
    "Use sunblock during sunny days.",
    "Avoid travel during strong storms."
);

for ($i = 0; $i < count($tips); $i++) {
    echo "<li>📍 " . $tips[$i] . "</li>";
}

echo "</ul></div>";
echo "<a href='/index.php'>← Back to Dashboard</a>";
?>


</html>