<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>System Admin Page</title>
    	<link href="css/style.css" rel="stylesheet">
    </head>
	<body>
		<div id="header"><?php include('header.php');?></div>

			<label>System Administrator</label>
        <tr>
          <td>
            <form method="POST" action="associationRegistration.php">
              <div class="form-group">
                <img src="./images/regis.png">
                  <p><a href="">Register Association</a></p>
              </div>
            <form/>
          </td>
          <td>
            <form method="POST" action="clerkRegistration.php">
              <div class="form-group">   <img src="./images/regis.png">
                <p><a href="">Reister Association Clerk</a></p>
              </div>
            </form>
          </td>
        </tr>    
	  
  		<div id="footer"><?php include_once('footer.php');?></div>
	</body>
</html>