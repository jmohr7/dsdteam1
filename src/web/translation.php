<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Random Neighbor</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/rn.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Random Neighbor</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Translate</a></li>
            <li><a href="#about">Help</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <form class="rn-container" method="POST">
        <label class="radio-inline">
          <input type="radio" name="targetLanguage" id="languageRadio1" value="Russian"> Russian
        </label>
        <label class="radio-inline">
          <input type="radio" name="targetLanguage" id="languageRadio2" value="Yoruba"> Yoruba
        </label>
        <label class="radio-inline">
          <input type="radio" name="targetLanguage" id="languageRadio3" value="Telugu"> Telugu
        </label>
  		<div class="form-group">
    	  <label for="textToTranslate">Text For Translation</label>
          <input type="text" class="form-control" name="textToTranslate" placeholder="Enter text to translate">
  		</div>
  		<button type="submit" class="btn btn-success">Translate</button>
      </form>
      <div class="rn-container">
        <div class="row">
          <div id="translatedText" class="well col-md-10"><?php echo $_POST["textToTranslate"] ?></div>
          <div id="translationConfidence" class="col-md-2"><span class="label label-primary percentage"><?php echo shell_exec("java -jar ../../rn.jar") ?></span></div>
        </div
      </div>
    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
