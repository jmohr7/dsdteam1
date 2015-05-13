<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Radius of Neighbors</title>
    <link rel="shortcut icon" href="rnicon.ico">
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
          <a class="navbar-brand" href="index.php">Radius of Neighbors</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Sentence</a></li>
            <li><a href="doc.php">Document</a></li>
            <li class="active"><a href="help.php">Help</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
	  <h2>User Guide</h2>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-success">
			<div class="panel-heading" role="tab" id="headingOne">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  Translate A Single Sentence
				</a>
			  </h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			  <div class="panel-body">
			    <ol>
			      <li>Click the Sentence link in the top menu</li>
			      <li>Enter the sentence you want translated in the box labeled "Text For Translation"</li>
			      <li>Click the button labeled "Translate"</li>
			    </ol>
			  </div>
			</div>
		  </div>
		  <div class="panel panel-success">
			<div class="panel-heading" role="tab" id="headingTwo">
			  <h4 class="panel-title">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				  Translate Multiple Sentences or Document
				</a>
			  </h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			  <div class="panel-body">
				<ol>
			      <li>Click the Document link in the top menu</li>
			      <li>Enter the sentences you want translated in the box labeled "Text For Translation".  End each sentence with a period.  Don't use periods elsewhere.</li>
			      <li>Click the button labeled "Translate"</li>
			    </ol>
			  </div>
			</div>
		  </div>
		  <div class="panel panel-success">
			<div class="panel-heading" role="tab" id="headingThree">
			  <h4 class="panel-title">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  RESTful Service and API
				</a>
			  </h4>
			</div>
			<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			  <div class="panel-body">
			    <ol>
			      <li>Make a GET request to the URL with the following format: http://ix.cs.uoregon.edu/~jmohr7/web/api/?method=rn&format=json&text=TEXT_TO_TRANSLATEargetLanguage=LANG
			        <ul>
			          <li>TEXT_TO_TRANSLATE = The text you want translated</li>
			          <li>LANG = The language you want the text translated to (i.e. Russian)</li>
			        </ul>
			      </li>
			      <li>The response will be formatted in JSON and have the following items:
			        <ul>
			          <li>"code" - API method code (will be 1 for RN)</li>
			          <li>"status" - The HTTP request status</li>
			          <li>"data" - Contains the results of the RN algorithm and has the following items:
			            <ul>
			              <li>"translation" - The translated text</li>
			              <li>"confidence" -  A integer value representing the confidence of the translation using the Radius of Neighbors algorithm</li>
			            </ul>
			          </li>
			        </ul>
			    </ol>
			  </div>
			</div>
		  </div>
		</div>
    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
