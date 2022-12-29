<?
	$connect = mysqli_connect("127.0.0.1", "root", "", "less25");
	$select = "SELECT * FROM cities INNER JOIN countries ON cities.country_id = countries.id";
	$select = "SELECT * FROM countries INNER JOIN flags ON countries.flags_id = flags.id";
	$query = mysqli_query($connect, $select);
	$query2 = mysqli_query($connect, $select2);


?>


<?

for ($i=0; $i < $query->num_rows; $i++) {
	$result = $query->fetch_assoc();
	$result2 = $query2->fetch_assoc();

?>


<p><? echo $result['city_name'] ?>  <span> = <? echo $result['country_name'] ?> </span></p>

<p><? echo $result2['name'] ?>  <span> = <? echo $result2['country_name'] ?> </span></p>



<?
}
?>