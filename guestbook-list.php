<?php

    require('config/config.php');
    require('config/db.php');

    $query = 'SELECT * FROM UserAccount';
    $result = mysqli_query($conn, $query);
    $persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($persons as $person) : ?>
                    <tr>
                    <th scope="row"><?php echo $person['uid'];?></th>
                    <td><?php echo $person['username'];?></td>
                    <td><?php echo $person['password'];?></td>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>