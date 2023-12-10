<?php
require '/include/ header.php';

session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
} else {
    require('./include/database.php');
    $sql = "SELECT * FROM createUser";
    $result = $conn->query($sql);

    //make table
    echo '<section class = "person-row">';
    echo '<table class = "table-striped">
	
	<tr>
		<th>First Name</th>
		<th> Last Name</th>
		<th>Phone number</th>
		<th> Email</th>
        <th> password</th>
        <th> confirm password</th>
		</tr>';
    // name row of results entered
        foreach ($result as $row) {
        echo '<tr>
				<td> ' .  $row['fname'] . '</td>
				<td> ' .  $row['lname'] . '</td>
				<td> ' .  $row['phone'] . '</td>
				<td> ' .  $row['email'] . '</td>
                <td> ' .  $row['password'] . '</td>
                <td> ' .  $row['confirm_password'] . '</td>
			</tr>';
    }
    // close the table
    echo '</table>';
    echo '<a class="btn btn-warning" href= "logout.php">Logout</a>';
    echo '</section>';
    //disconnect
    $conn = null;
}
