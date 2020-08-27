<?php  
include('server.php');

?>
<html>
 <head>
 	<title>WELCOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<table>
 	<thead>
		<tr>
			<th>Firstname</th>
            <th>Lastname</th>
             <th>SID</th>
             <th>Email</th>
            <th>Slot</th>
		</tr>
	</thead>
<?php
 while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['Firstname']; ?></td>
            <td><?php echo $row['Lastname']; ?></td>
            <td><?php echo $row['sid']; ?></td>
           <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['days']; ?></td>
	</tr>
    <?php } ?>
</table>

    </body>
    </html>

