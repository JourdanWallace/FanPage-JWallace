<html>
    <head>
        <!--Title of document-->
        <title>About Me</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom-style.css">
         <link rel="apple-touch-icon" href="icons/touch-icon-iphone-60x60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="icons/touch-icon-ipad-76x76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="icons/touch-icon-iphone-retina-120x120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="icons/touch-icon-ipad-retina-152x152.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
        <script type="text/JavaScript">
            //Information for the rating system
            $(document).ready(function (){ 
                $('#ratingdiv .undone').click(function(){ 
                    var div = '#ratingdiv';	
                    $(div).html('<img src="load.gif" />');
                    var postdata = "rate=" + $(this).attr('rel'); 
                    $.ajax({type: "POST",url: "rate.php",data: postdata,success: function(msg){$(div).html(msg)}}); 
                });	
                $('#ratingdiv .voted').live('click' , function(){ 
                    alert('Already Done!'); 
                    }); 
                }); 
                </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
        <!--jumbotron info-->
        <div class="jumbotron">
            <!--jumbotron title-->
  <h1>TENNIS ROCKS</h1>
  <!--links to different pages-->
  <p>Tennis Website, click the link below.</p>
  <p><a href="http://www.tennis.com/" class="btn btn-primary btn-lg" role="button">Tennis</a></p>
  <p><a href="pages/SerenaWilliams.html" class="btn btn-primary btn-lg" role="button">Serena</a></p>
  <p><a href="pages/VenusWilliams.html" class="btn btn-primary btn-lg" role="button">Venus</a></p>
  <p><a href="pages/MariaSharapova.html" class="btn btn-primary btn-lg" role="button">Maria</a></p>
  <p><a href="pages/Rafael.html" class="btn btn-primary btn-lg" role="button">Rafael</a></p>
  <p><a href="pages/Novak.html" class="btn btn-primary btn-lg" role="button">Novak</a></p>
  <p><a href="pages/Roger.html" class="btn btn-primary btn-lg" role="button">Roger</a></p>

  </div>
        <!--quick little bio-->
        <p>About Me</p>
        <p>I am Jourdan Wallace, and this is my final project!</p>
        <p>Behind this page are some of the best tennis players in the world </p>
        <div class="col-xs-2">
            <nav class="list-group">
            </nav>
        </div>
    </body>
</html>



