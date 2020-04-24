<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Article</title>
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'--><link rel="stylesheet" href="css/style.css">
<style>
    .error{
        color:red;
        font-style:italic;
    }
</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="row">
		<div class="form-box">
        <h1>Article<span></span></h1>
    	    <form role="form" id="contact-form" action="articlepro.php" method="POST"  onsubmit="validate()">
            <!-- name field -->
                <div class="form-group">
                <div id="nameError" class="sr-only" role="alert"></div>
                <label for="form-name-field" class="sr-only">Title of Article</label>
                    <div class="input-group">
                        <div class="input-group-addon"><!--span class="glyphicon glyphicon-user"></span--></div>
                        <input type="text" class="form-control" id="form-name-field"  placeholder="Title" name="title" autocomplete="off">
                    </div>
                </div>
            <!-- email field -->
                <div class="form-group">
                <div id="nameError" class="sr-only"" role="alert"></div>
                <label for="form-email-field" class="sr-only">Article</label>
                    <div class="input-group">
                        <div class="input-group-addon"><!--span class="glyphicon glyphicon-envelope"></span--></div>
                        <input type="textarea" class="form-control" id="form-email-field"  placeholder="Article" name="article" autocomplete="off">
                    </div>
                </div>
            <button type="submit" class="btn btn-default"  name="submit" onclick="return validate(this)">Submit</button>
    	    </form>   
		</div>
	</div>
</div>
<!-- partial -->
  <!--script  src="js/script.js"></script-->
  <script src="js/article.js"></script>
</script>
</body>
</html>