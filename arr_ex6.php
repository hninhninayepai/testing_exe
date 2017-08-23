<?php
$ages = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
print_r($ages) ;
echo "<hr>";
echo "ascending order sort by value";
asort($ages);
echo "<table border='1'>";
echo "<tr>";
echo "<td>";
echo "Name";
echo "</td>";
echo "<td>";
echo "Age";
echo "</td>";
echo "</tr>";
foreach ($ages as $name => $age) {

echo "<tr>";
	echo "<td>";
	echo $name;
	echo "</td>";
	echo "<td>";
	echo $age;
	echo "</td>";
}
echo "</tr>";
echo "</table>";
echo "<hr>";
echo "ascending order sort by key";
ksort($ages);
echo "<br>";

echo "<table border='1'>";
echo "<tr>";
echo "<td>";
echo "Name";
echo "</td>";
echo "<td>";
echo "Age";
echo "</td>";
echo "</tr>";
foreach ($ages as $name => $age) {

echo "<tr>";
	echo "<td>";
	echo $name;
	echo "</td>";
	echo "<td>";
	echo $age;
	echo "</td>";
}
echo "</tr>";
echo "</table>";
echo "<hr>";

echo "descending order sort by value";
arsort($ages);
echo "<table border='1'>";
echo "<tr>";
echo "<td>";
echo "Name";
echo "</td>";
echo "<td>";
echo "Age";
echo "</td>";
echo "</tr>";
foreach ($ages as $name => $age) {

echo "<tr>";
	echo "<td>";
	echo $name;
	echo "</td>";
	echo "<td>";
	echo $age;
	echo "</td>";
}
echo "</tr>";
echo "</table>";
echo "<hr>";

echo "descending order sort by key";
krsort($ages);
echo "<br>";

echo "<table border='1'>";
echo "<tr>";
echo "<td>";
echo "Name";
echo "</td>";
echo "<td>";
echo "Age";
echo "</td>";
echo "</tr>";
foreach ($ages as $name => $age) {

echo "<tr>";
	echo "<td>";
	echo $name;
	echo "</td>";
	echo "<td>";
	echo $age;
	echo "</td>";
}
echo "</tr>";
echo "</table>";
echo "<hr>";
?>