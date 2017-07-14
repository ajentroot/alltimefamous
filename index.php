<!DOCTYPE html>
<html>


<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<title>:: Rishabh Jain Official Website ::</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.gif" />
<link rel="stylesheet" href="css/parallax.css" />
<link rel="stylesheet" href="css/media-1920.css" />
<link rel="stylesheet" href="css/media-1680.css" />
<link rel="stylesheet" href="css/media-1600.css" />
<link rel="stylesheet" href="css/media-1440.css" />
<link rel="stylesheet" href="css/media-1344.css" />
<link rel="stylesheet" href="css/media-1280.css" />
<link rel="stylesheet" href="css/media-1024.css" />
<!--<script src="js/jquery.min.js"></script>-->
<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
			$(function() {
                $('#logo a').bind('click',function(event){
                    var $anchor = $(this);
					console.log($($anchor.attr('href')).position().top);
					a = $('#wrapper').scrollTop();
					b = a + $($anchor.attr('href')).position().top;
                    
                    $('#wrapper').stop().animate({
                        scrollTop: b
                    }, 1500,'easeOutCubic');
                    event.preventDefault();
					location0 = window.location.href.split('#')[0];
					location1 = window.location.href.split('#')[1];
					location.href = location0+$anchor.attr('href');
                });
                $('.menu ul a').bind('click',function(event){
                    var $anchor = $(this);
					console.log($($anchor.attr('href')).position().top);
					a = $('#wrapper').scrollTop();
					b = a + $($anchor.attr('href')).position().top;
                    
                    $('#wrapper').animate({
                        scrollTop: b
                    }, 1500,'easeOutCubic', function(){
						location0 = window.location.href.split('#')[0];
						location1 = window.location.href.split('#')[1];
						location.href = location0+$anchor.attr('href');
					});
					return false;
					//event.preventDefault();
                    
			});
            });
        </script>
<script src="jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
<script type="text/javascript" src="../flesler-plugins.googlecode.com/files/jquery.scrollTo-1.4.3.1-min.html"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#scrollbar1').tinyscrollbar();	
			$('body').bind('mousewheel', function(e,delta){
				$("#wrapper").unbind("mousewheel");
				if(e.originalEvent.wheelDelta /120 > 0) {
					console.log('scrolling up !');
					$('#wrapper').scrollTo('-=120px',100);
				}
				else{
					console.log('scrolling down !');
					
					$('#wrapper').scrollTo('+=120px',100);
				}
				event.preventDefault();
				$("#wrapper").bind("mousewheel");
			});

		});
</script>

<script type="text/javascript" src="js/parallax.js"></script>

<script>
        
        $(document).ready(function(){
 		  var str=location.href.toLowerCase();
        $('.navigation li a').each(function() {
                if (str.indexOf(this.href.toLowerCase()) > -1) {
						$("li.highlight").removeClass("highlight");
                        $(this).parent().addClass("highlight"); 
                   }
              	 							}); 
		$('li.highlight').parents().each(function(){
												  
					if ($(this).is('li')){
						$(this).addClass("highlight"); 
						}							  
												  });
		$('.navigation').children('li').children('a').click(function(){
			$(this).parent().siblings().removeClass('highlight');
			$(this).parent().addClass('highlight');
		});
		
		$('#logo').click(function(){
			$('.highlight').removeClass('highlight');
			});
		
  	    })
		
        </script>

</head>

<body style="margin:0;padding:0">
<header style="margin-right:20px">
	<div id="logo"><a href="#home" onclick="_gaq.push(['_trackPageview', 'johnlogo']);"><img src="images/logo.jpg" width="125" height="120" style="border:0;"></a></div>
	<div class="topmenu">
		<nav class="menu" style="float:left;">
			<ul class="navigation">
				<li><a href="#aboutme" onclick="_gaq.push(['_trackPageview', 'aboutme']);">About Me</a></li>
				<li><a href="#TOUR-DIARIES" onclick="_gaq.push(['_trackPageview', 'TOUR-DIARIES']);">TOUR-DIARIES</a></li>
				<li><a href="#wheels" onclick="_gaq.push(['_trackPageview', 'wheels']);">wheels</a></li>
				<li><a href="#journal" onclick="_gaq.push(['_trackPageview', 'journal']);"> journal</a></li>
				<li><a href="#myworld" onclick="_gaq.push(['_trackPageview', 'myworld']);">my world</a></li>
			</ul>
		</nav>
		<div class="socialhold">
        	<div class="instagramicon"><a href="http://instagram.com/rishabh.jain15#" target="_blank"><img src="images/clear.gif" width="25" height="25"></a></div>
			<div class="facebookicon"><a href="http://www.facebook.com/rishabhjain1510" target="_blank"><img src="images/clear.gif" width="25" height="25"></a></div>
		</div>
		<div class="cl"></div>
	</div>
	<div class="cl"></div>
</header>

<div id="wrapper">

  
  
   <div class="bg-box1" id="home">
    <div class="bg-box1a floatingBox" style="top:-300px">
      <p class="home-message">Welcome</p>
      <div class="cl"></div>
      <p class="watchvideo-hp"></p>
      <div class="cl"></div>
      <p class="textmatter-hp"><font color="red">Hi guys, Thanks for all your love and support. It means so much. </font></p>
      <div class="cl"></div>
      <p class="playbtn-hp"><a href="#aboutme"><img src="images/playbtn-hp.png" style="border:0;" ></a></p>
    </div>
    
  </div>
  
  
 
    <div class="bg-box2" id="aboutme">
    <div class="bg-box2a floatingBox">
      <p class="fitness-txt"><img src="images/fitness-txt.png" width="250" height="294"></p>
    </div>
    <div class="bg-box2b floatingBox">
      <div class="tips-box-holder">
      <div class="tips-box"> </p>
        </a> </div>
        
      <div class="tips-box"> <a href="http://alltimefamous-merchandise.azurewebsites.net" class="tips-content ajax2" onclick="_gaq.push(['_trackPageview', 'fitnesscenter']);">
        <p class="fit-tip-dot"><img src="images/fit-tip-dot.png" ></p>
        <div class="cl"></div>
        <span class="link-dash1">----</span><span class="link-dash2">----</span>
        <div class="cl"></div>
        <p class="fitness-links">My Merchandise</p>
        </a> </div>
		
        <div class="tips-box"> </p>
        </a> </div>
      
        </div>
    </div>
  </div>
 
 
 
  
<div class="bg-box3" style="background:#000;" id="TOUR-DIARIES">
   <div class="bg-box3b floatingBox"><img src="images/tour.png" width="700" height="1200"></div>
    <div class="bg-box3a floatingBox">
    <p class="movieshead">TOUR-DIARIES</p>
    <div class="cl"></div>
    <p class="movies-text">The world is a book, and those who do not travel read only a page.</p>
    <div class="container">
      <div id="ca-container" class="ca-container">
        <div class="ca-wrapper">
          <div class="ca-item ca-item-1">
            <div class="ca-item-main">
              <div class="img-holder"><a  class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">
			  <img src="images\travel\vizag\vizag.png" width="165" height="240"></a>
                <h3>March-2016</h3>
                <a  class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">Visakhapatnam</a></div>
            </div>
          </div>
          <div class="ca-item ca-item-2">
            <div class="ca-item-main">
              <div class="img-holder"><a  class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">
			  <img src="images\travel\tvm\tvm.png" width="165" height="240"></a>
                <h3>August-2016</h3>
                <a  class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">Trivandrum</a></div>
            </div>
          </div>
          <div class="ca-item ca-item-3">
            <div class="ca-item-main">
              <div class="img-holder"><a class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">
			  <img src="images\travel\kanya\kanya.png" width="165" height="240"></a>
                <h3>September-2016</h3>
                <a class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">Kanyakumari</a></div>
            </div>
          </div>
          <div class="ca-item ca-item-4">
            <div class="ca-item-main">
              <div class="img-holder"><a class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">
			  <img src="images\travel\pune\pune.png" width="165" height="240"></a>
                <h3>November-2016</h3>
                <a  class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">Pune</a></div>
            </div>
          </div>
          <div class="ca-item ca-item-5">
            <div class="ca-item-main">
              <div class="img-holder"><a class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">
			  <img src="images\travel\hyd\hyd.png" width="165" height="240"></a>
                <h3>December-2016</h3>
                <a  class="more ajax4" onclick="_gaq.push(['_trackPageview', 'travel']);">Hyderabad</a></div>
            </div>
          </div>
    
        </div>
      </div>
    </div></div>
  </div>


  <div class="bg-box4" id="wheels">
    
    <div class="bg-box4b floatingBox"><p class="wheelshead">wheels</p>
    <div class="cl"></div>
    <p class="wheels-text">Biking is more than a passion to me. It's a way of life.</p>
    <div id="scrollbar1">
      <div class="mycollection">My Collection</div>
      <div class="cl"></div>
      <div class="scrollbar">
        <div class="track">
          <div class="thumb">
            <div class="end"></div>
          </div>
        </div>
      </div>
      <div class="viewport">
        <div class="overview">
            <a  class="ajax5" onclick="_gaq.push(['_trackPageview', 'wheelsphoto']);"><img src="images/wheel/1.jpg" class="wg-img" width="103" height="100"></a>
            <div class="blackpatch"><img src="images/wheelsgallery/grad.jpg" width="103" height="100"></div>
            <a  class="ajax5" onclick="_gaq.push(['_trackPageview', 'wheelsphoto']);"><img src="images/wheel/2.jpg" class="wg-img" width="103" height="100"></a>
            <div class="blackpatch"><img src="images/wheelsgallery/grad.jpg" width="103" height="100"></div>

			<!-- img src="upload/wheel_photo/thumb/210301369984679.jpg" width="207" height="100" class="collection-img"--> 

            <div class="blackpatch"><img src="images/wheelsgallery/grad.jpg" width="103" height="100"></div>
            <a  class="ajax5" onclick="_gaq.push(['_trackPageview', 'wheelsphoto']);"><img src="images/wheel/3.jpg" class="wg-img" width="103" height="100"></a>
            <div class="blackpatch"><img src="images/wheelsgallery/grad.jpg" width="103" height="100"></div>
            <a  class="ajax5" onclick="_gaq.push(['_trackPageview', 'wheelsphoto']);"><img src="images/wheel/4.jpg" class="wg-img" width="103" height="100"></a>


            
        	
        
        </div>
      </div>
    </div>
    
    <div class="cl"></div>
    <div class="xbph-btn"><img src="images/red.jpg" width="416" height="36"></div>
    </div>
  </div>




  <div class="bg-box5" id="journal">
  	
    <div class="bg-box5b floatingBox"><img src="images/journal.png" class="johnjournal-img"></div>
  
    <div class="bg-box5a floatingBox">
    <p class="johnjournal-head">Write in my journal</p>
      <div class="writetome-holder">
	  

	<a href="wishes.html" class="writetome ajax6 cboxElement" onclick="_gaq.push(['_trackPageview', 'jjwishes']);">write to me </a>

	  
	  
	  <img src="images/arrow-writetome.png" width="26" height="49" style="margin:0 0 0 15px; float:left;"></div>
      <div class="cl"></div>
      <div class="topfan-cont">
        <p>Subscrbe to Stay Upadted:-</p>
		<form name="subs" method="post" action="send.php">
          <input type="email" name="emailer" id="emailer"> <input type="submit" value="Subscrbe">
          <div class="cl"></div>
          
          
        <div class="fanwishes"> 
                  
        <a href="post.php" class="fanwishes-btn ajax6" onclick="_gaq.push(['_trackPageview', 'jjwishes']);">
        
        <img src="images/clear.gif" width="102" height="19"></a>
        
  
      <div class="cl"></div>
      <p class="text-msg">
	 <?php
	$servername = "us-cdbr-azure-southcentral-f.cloudapp.net";
	$username = "b3d95ba825189b";
	$password = "01db2a4f";
	$dbname = "alltimefamous_db";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql="select * from post order by id DESC LIMIT 1";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)) {
        echo $row["message"] ." "."<a href='post.php'>more..</a>";
		echo"<div class='cl'></div>";
		echo"<p class='byname'>";
		echo "Posted By " ." " .$row["name"];
		echo"</div>";
	}
		?>
    </div>

        
        <div class="fanwishes"> <a href="https://hackers-24.blogspot.com/" target="_blank" class="blogjj-btn" onclick="_gaq.push(['_trackPageview', 'jjblog']);"><img src="images/clear.gif" width="102" height="19"></a>
          <div class="cl"></div>
          <p class="text-msg">Bypass Iphone passcode <a target="_blank" href="https://hackers-24.blogspot.in/2016/11/bypass-iphone-passcode-to-access-photos.html" class="textmsg-more" onclick="_gaq.push(['_trackPageview', 'jjblog']);">more</a></p>
          <div class="cl"></div>
          <p class="byname">Posted on 26/11/2016</p>
    	</div>
        </div>
        </div>
        
		
        </div>

  
  
  <div class="bg-box6" id="myworld">
    <div class="bg-box6a floatingBox"><img src="images/john-my-world.png" width="424" height="824"></div>
    <div class="bg-box6b floatingBox">
    <div class="myworld-head">My World</div>
    
    <div class="cl"></div>
    
      <div class="mylinks-holder">
        <a href="brandsbeb0.html?brand_id=19" class="portfolio-links ajax7" onclick="_gaq.push(['_trackPageview', 'mwbrands']);"><p class="portfolio-text">brands <br>06</p></a>
        
        <a href="causes.html" class="portfolio-links ajax8" onclick="_gaq.push(['_trackPageview', 'mwcauses']);"><p class="portfolio-text">Causes <br>08</p></a>
        
        <a href="media.html" class="portfolio-links ajax9" onclick="_gaq.push(['_trackPageview', 'mwmedia']);"><p class="portfolio-text">Media <br>07</p></a>
        
        <a href="house.html" class="portfolio-links ajax10" onclick="_gaq.push(['_trackPageview', 'mwhouse']);"><p class="portfolio-text">House <br> 18</p></a>
        
        <a href="family.html" class="portfolio-links ajax11" onclick="_gaq.push(['_trackPageview', 'mwfamily']);"><p class="portfolio-text">family <br>17</p></a>
        
        <a href="wallpapers.html" class="portfolio-links ajax12" onclick="_gaq.push(['_trackPageview', 'mwwallpaper']);"><p class="portfolio-text">wallpaper <br>07</p></a>
        
        <a href="venetiacorner.html" class="portfolio-links ajax13" onclick="_gaq.push(['_trackPageview', 'mwvenetiacorner']);"><p class="venetiascorner-text">venetia's<br>corner  <br>08</p></a>
        
        <a href="friends.html" class="portfolio-links ajax14" onclick="_gaq.push(['_trackPageview', 'mwonlyme']);"><p class="portfolio-text">Only Me <br>25</p></a>
        
        <a href="faqs.html" class="portfolio-links ajax15" onclick="_gaq.push(['_trackPageview', 'mwfaqs']);"><p class="portfolio-text">FAQs</p></a>
    </div>
    
      <div class="cl"></div>
      <div class="myworld-bot"> Copyright &copy; 2017 Rishabh Jain</div>
    </div>
  </div>
  <div class="bg-box7" style="background:#000; height:230px">
   
   	<div class="browsers">Website best viewed in Firefox | Chrome | Safari | IE9 </div>
   
  </div>
</div>
<link rel="stylesheet" href="css/colorbox.css" />

<script src="js/jquery.colorbox.js"></script>

<script type="text/javascript" src="js/colorajax.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script> 
<script type="text/javascript">
			$('#ca-container').contentcarousel();
			
				function setUrl(me){
					
					location0 = window.location.href;
					location.href = location0+'/'+me;
					
				}
				
		</script>
		
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39985749-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>


</html>
