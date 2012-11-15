<html>
  <head>
    <title>Ali Aman</title>
    <link rel="stylesheet" type="text/css" href="src/css/welcome.css">
    <link rel="stylesheet" type="text/css" href="src/css/resume-page.css">
    <link rel="stylesheet" type="text/css" href="src/css/personal-page.css">
    <link rel="stylesheet" type="text/css" href="src/css/developments-page.css">
    <link rel="stylesheet" type="text/css" href="src/css/video-page.css">
    <link rel="stylesheet" type="text/css" href="src/css/footer.css">             
    <link rel="shortcut icon" href="src/images/favicon.ico">
    <script type="text/javascript" src="src/javascripts/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="src/javascripts/personal.js"></script>
  </head>
  <body>
  	<div class="title">
  	  	Ali Aman
  	</div>
<!--  	  <embed src="src/music/santaolalla.mp3" autostart="true" width="2" height="0"></embed>-->
<!--  	   <embed src="src/music/abc.mp3" autostart="true" width="2" height="0"></embed>-->
      <span id='sound'></span>
  	  <table class='mT'>
  	    <thead>
  	      <tr>
  	        <td>
      		  <?php include_once("src/navigation.php");?>
      		</td>
      	  </tr>
        </thead>
        <tbody>
         <tr>
           <td>
		  	  <?php include_once("src/page/home-page.php")?>
			  <?php include_once("src/page/resume-page.php")?>
			  <?php include_once("src/page/developments-page.php")?>
			  <?php include_once("src/page/personal-page.php")?>
			  <?php include_once("src/page/video-page.php")?>	
	        </td>
	      </tr>
	  	</tbody>
	  </table>  	  	  
    <?php include_once("src/footer.php");?>
    <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-17371220-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
  </body>
</html>