<?php
function calculateDiameter($radius) {
    return 2 * $radius;
}
$radius = 10;
$diameter = calculateDiameter($radius);
echo "Średnica koła o promieniu " . $radius . " to: " . $diameter;
?>
