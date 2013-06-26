<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home Tuition Nepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;        
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
	  
	    
	  .teacher {
		text-align:center;
	  }
	  
	  .text-center{
	  text-align:center;
	  }
	  
	  p.teacher-info{
		margin-top:10px;	  
	  }
	  
	  p.text-small{
	  font-size:12px;
	  color:#666;
	  }
	  
	  
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        
		<a class="btn btn-success pull-right">Submit Teacher Profile</a>
			
		<ul class="nav nav-pills pull-right">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>          
        </ul>
        <h3 class="muted">Home Tuition Nepal</h3>
      </div>

      <hr>


	  
	 
	    <?php
		  $profile=array(
		                   array(  
						          "name"=>"maruti",
								  "photo"=> "images/teacher.jpg"
						   
						         
								  ),
								  array(  
						          "name"=>"Samir",
								  "photo"=> "images/teacher.jpg"
						   
						         
								  ),
								  array(  
						          "name"=>"matrika",
								  "photo"=> "images/teacher.jpg"
						   
						         
								  ),
								  array(  
						          "name"=>"Suman",
								  "photo"=> "images/teacher.jpg"
						   
						         
								  ),
								  array(  
						          "name"=>"Thakur",
								  "photo"=> "images/teacher.jpg"
						   
						         
								  )
		  
		  
		  
		  
		                  
						  
						  
						  )
		?>
 <table>
       <?php
         foreach($profile as $value) 
		 {
	    ?>
		<tr>
		  
		  <td> 		  		  
		  		  <img src="<?php echo $value['photo'];?>" width="160">
				  <br/>
				<?php  echo $value["name"]; ?>
		  
		  </td>
		   
		   

		 <?php
		 }
		 
		 ?>
		 
	  </table>
		
		
		
   
	 
		
		
      <hr>

      <div class="footer text-center">
		
          <a href="#">Home</a> - 
          <a href="#">About</a> -
          <a href="#">Contact</a> - 
          <a href="#">Submit Teacher Profile</a>
          <p class="text-small">
		  Home Tuition Nepal Pvt. Ltd. &copy; Company 2013
		  <br/>Kathmandu, Nepal. Phone: +977-1-5520471
		  </p>
          
		
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
