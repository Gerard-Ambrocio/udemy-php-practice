
<!DOCTYPE html>
<html>
<head>
	<title>Shareboard</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Shareboard</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
		</div>
      



      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL;?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL;?>shares">Shares <span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <ul class="navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL;?>users/login">Login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL;?>users/register">Register <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
    <br>
      <div class="row">
      	<?php require($view); ?>
      </div>

    </div>
</body>
</html>
	
