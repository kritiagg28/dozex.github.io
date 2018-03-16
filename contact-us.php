<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gp Bootstrap Template</title>

    <?php include 'header.php'; ?>

    <header id="header">
        <nav class="navbar navbar-fixed-top" role="banner" style="margin-bottom: 10px">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Dozex Earthmovers</a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="bulldozer-hire">Bulldozer Hire</a></li>
                        <li><a href="mini-excavators">Mini Excavators</a></li>
                        <li><a href="rock-breaker">Rock Breakers</a></li>
                        <li><a href="motor-grader">Motor Grader</a></li>
                        <li><a href="hemm-spare-parts">Spare Parts</a></li>                         
                        <li><a href="sand-wash-plant">Sand Wash Plant</a></li>  
                        <li class="active"><a href="contact-us">Contact Us</a></li>                    
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

  </head>
	<body class="Contact Us"> 
	<section id="contact-page">
        <div class="container" style="padding-top :120px;">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">Sign Up nd get connected with us and our latest updates</p>
            </div> 
            <div class="row contact-wrap"> 
          
                <form id="main-contact-form" action="sendemail.php" class="contact-form" name="contact-form" method="POST">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label><strong>Name *</strong></label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Email *</strong></label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Phone *</strong></label>
                            <input type="tel" name="phone" class="form-control" required="required"> 
                        </div>
                        <div class="form-group">
                            <label><strong>Company Name</strong></label>
                            <input type="text" name="company" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><strong>City* </strong></label>
                            <input type="text" name="city" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Message </strong></label>
                            <textarea name="msg" id="message" class="form-control" rows="8"></textarea>
                        </div>                        
                    
                        <input type="submit" />
                    </div>
                </form> 

            </div><!--/.row-->
        </div><!--/.container-->
    </div>
    </section><!--/#contact-page-->
          <div class="map">
        <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
        </iframe>
    </div>
        

  </body>
</html>
<?php include 'footer.php' ?>
