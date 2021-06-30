<style>
h2{
    text-align : center;
    font-family: cursive;
}
body{
    background-color: plum;
}
</style>
<?php
$user = "Rachana A";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head>
<body>
<h2> Hello! <?php echo $user; ?>, Welcome to Sample PHP Script! </h2>
<h4>This page displays the number of page vists</h4>
<?php
print "<h3> REFRESH PAGE </h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
echo "<b>Total number of views: </b>".$hits[0];
?>
</body>
</html>