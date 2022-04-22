<form action="search3.php" method="post" >
<input type="text" name="valueToSearch" placeholder="Search Record.."></br>
<input type="submit" name="search" value="Search Record..">
</form>

<table>
<tr><th>FirstName</th><th>LastName</th></tr>
<tr>
<td><?php echo $row["FirstName"]; ?></td>
<td><?php echo $row["LastName"]; ?></td>
</tr>
</table>