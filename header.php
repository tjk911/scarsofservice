<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scars of Service<?php echo htmlspecialchars($title);?></title>
    <!-- <link rel="stylesheet" href="css/normalize.css" /> -->
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="stylesheet" href="css/3dgrid.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_CN/sdk.js#xfbml=1&appId=170170889686818&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  <div id="page-wrap">  
	<div class="fixed-custom">
	  <nav class="top-bar backgroundtop" data-topbar>
	    <ul class="title-area">
	      <li class="name hide-for-small">
	        <h1><a href="http://www.sctimes.com">SCTimes</a></h1>
	      </li>
        <li class="name show-for-small">
          <h1><a href="http://www.sctimesapps.com/projects/scarsofservice">Scars of Service</a></h1>
        </li>
	      <li class="toggle-topbar menu-icon"><a href="javascript:void(0)"><span></span></a></li>
	    </ul>
	    <section class="top-bar-section">
	    	<ul class="left hide-for-small">
	    	  <li><a href="http://www.sctimesapps.com/projects/scarsofservice">Scars of Service</a></li>
	    	</ul>
	      	<ul class="right">
      	      <li class="has-dropdown">
      	        <a href="javascript:void(0)">Menu</a>
      	        <ul class="dropdown">
                <li class="hide-for-small"><a href="http://www.sctimesapps.com/projects/scarsofservice">Home</a></li>
   		       		<li class="has-dropdown">
   		       			<a href="javascript:void(0)">Part 1</a>
   		       			<ul class="dropdown">
   		       				<li><a href="page.php?page=larson">Tony Larson</a></li>
   		       				<li><a href="page.php?page=tbi">Traumatic Brain Injury</a></li>
   		       			</ul>
   		       		</li>
   		       		<li class="has-dropdown">
   		       			<a href="javascript:void(0)">Part 2</a>
   		       			<ul class="dropdown">
   		       				<li><a href="page.php?page=peterson">Brian Peterson</a></li>
   		       				<li><a href="page.php?page=ptsd">Post-Traumatic Stress Disorder</a></li>
   		       				<li><a href="page.php?page=suicide">Suicide</a></li>
   		       			</ul>
   		       		</li>
   		       		<li class="has-dropdown">
   		       			<a href="javascript:void(0)">Part 3</a>
   		       			<ul class="dropdown">
   		       				<li><a href="page.php?page=eagle">Eagle's Nest</a></li>
   		       				<li><a href="page.php?page=klutenkamper">Dan Klutenkamper</a></li>
   		       			</ul>
   		       		</li>
   		       		<li class="has-dropdown">
   		       			<a href="javascript:void(0)">Part 4</a>
   		       			<ul class="dropdown">
   		       				<li><a href="page.php?page=brockhector">Brock Hunter & Hector Matascastillo</a></li>
   		       				<li><a href="page.php?page=hector">Hector Matascastillo</a></li>
   		       			</ul>
   		       		</li>
   		       		<li class="has-dropdown">
                  <a href="javascript:void(0)">Additional resources</a>
                  <ul class="dropdown">
                    <li><a href="page.php?page=resources">Resources for Veterans</a></li>
                    <li><a href="page.php?page=costofwar">Cost of War</a></li>
                    <li class="show-for-large-up"><a href="page.php?page=building">A Building Boom at the VA</a></li>
                  </ul>
                </li>
      	        </ul>
      	      </li>
      	    </ul>
	    </section>
	  </nav>
	</div>
  
    <section id="main-content">
    <div id="guts">
      <iframe scrolling="no" height="1" width="1" frameborder="0" src="omnitureService.php?pagetitle=<?php echo $title; ?>" style="position:absolute;left:-5000px;"></iframe>
