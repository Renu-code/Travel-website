<!DOCTYPE html>
<html>
<head>
	     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/styles.css">
	<title></title>
</head>
<body>
<main class="primary-background p-5" style="padding-botton:80px;">
<div class="container">
<div class="col-sm-6 offset-sm-3">
<div class="card">

<div class="card-header text-center primary-background text-white">
<span class="fa fa-3x fa-user-circle"></span>
<p>Register Here</p>
</div>
<div class="card-body">

<form action="userinfo.php" method="post">
<div class="form-group">
    <label for="user_name">User Name</label>
    <input type="text" name="name" class="form-control" id="user_name" aria-describedby="emailHelp" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter email">
     </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1gender">Select Gender</label>
    <br>
    Male<input type="radio" name="gender" value="male" id="gender">
    Female<input type="radio" name="gender" value="female" id="gender">
  </div>
  <div class="form-group">
  <textarea name="comments" class="form-control" rows="5" placeholder="Enter comments if any"></textarea>
  
  
  </div>
  
  
  <div class="form-group form-check">
    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Agree terms and condition</label>
  </div>
  
  <br>
  <div class="container text-center" id="loader" style="display:none" >
  <span class="fa fa-refresh fa-spin fa-4x" ></span>
  <h4>Please wait...</h4>
  
  </div>
  <button type="submit" id="submit-btn" class="btn btn-primary">Submit</button>
</form>




</div>


</div>


</div>

</div></main>


	<!--<div class="container">
		<div class="row col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					
				</div>
				<div class="panel-body">
					
				</div>
				<div class="panel-footer">
					
				</div>
			</div>
		</div>
	</div>
	-->

</body>
</html>