<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AwesomeTheSauce-HomePage</title>
      <link rel="SHORTCUT ICON" HREF="images/logo.png">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link href="css/homepageStyle.css" rel="stylesheet">
      <script src="javascript/jquery.js"></script>
      <script src="javascript/bootstrap.min.js"></script> <!-- Bootstrap JavaScript -->
	  <script src="https://apis.google.com/js/platform.js"></script> <!-- YoutTube -->
   </head>
   <header>
	<div class="container">
         <div class="col-lg-12">
            <img id="logo" class="logoImage" border="0" alt="logo" src="images/logo.png">
		<ul class="list-inline">
               <li>
                  <a href="https://twitter.com/awesomethesalsa" class="twitter-follow-button" data-show-count="false">Follow @AwesomeTheSalsa</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
               </li>
            </ul>
         </div>
      </div>
   </header>
   <div class="RetroIntroductionHeaderStyle">
      <div class="container">
         <div class="col-lg-12">
            <!--col-lg, (large) the columns will stack when the width is < 1200px.-->
            <div class="RetroIntroductionMessageStyle">
               <h1 style="color:white;"><i>AwesomeTheSauce</i></h1>
               <h3 style="color:lightgreen;">Saucing forever ~<!--<br><i>~</i> Saucia.</br>--> </h3>
               <hr class="RetroIntroductionDivider">
               <h4 style="color:white;">Like the content? Support me on</h4> <h4 style="color:orange;">YouTube / StreamLabs</h4>
			   <button class="btn1" type="button" onclick="window.open ('https://streamlabs.com/awesomethesauce', ''); return false" href="javascript:void(0);">StreamLabs</button>
            </div>
         </div>
      </div>
   </div>
   <div class="ContentSection1">
      <div class="container">
         <div class="col-lg-5 col-sm-6">
            <hr class="HeadingOfSection-space">
            <div class="clearfix"></div>
            <h2 class="HeadingOfSection">Wizard101?</h2>
            <p class="writing">Wizard101 is a "Highly acclaimed" MMORPG card game, free to play rated everyone 10+! Oh and its on STEEAMMM...</p>
			<button class="btn1" type="button" onclick="window.open ('https://www.wizard101.com/', ''); return false" href="javascript:void(0);">Wizard101</button>
			<button class="btn1" type="button" onclick="window.open ('https://store.steampowered.com/app/799960/Wizard101/', ''); return false" href="javascript:void(0);">Wizard101-STEAM</button>
         </div>
         <div class="col-lg-5 col-lg-offset-2 col-sm-6">
            <img class="img-responsive" src="images/wiz.png" alt="Wizard101">
         </div>
      </div>
   </div>
   <div class="ContentSection2">
      <div class="container">
         <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
            <hr class="HeadingOfSection-space">
            <div class="clearfix"></div>
            <h2 class="HeadingOfSection">Who am I?</h2>
            <p class="writing">The coolest Indian in the modern world. DANG I SOUND REALLY FORMAL.</p>
			<!--<button class="btn1" type="button" onclick="window.open ('https://www.wizard101.com/', ''); return false" href="javascript:void(0);">Twitch!</button>-->
         </div>
         <div class="col-lg-5 col-sm-pull-6  col-sm-6">
            <img class="img-responsive" src="images/Thomas.png" alt="Thomas">
         </div>
      </div>
   </div>
   <div class="ContentSection1">
      <div class="container">
         <div class="col-lg-5 col-sm-6">
            <hr class="HeadingOfSection-space">
            <div class="clearfix"></div>
            <h2 class="HeadingOfSection">What is yo Purr-Pose??</h2>
            <p class="writing">WHAT UP PLAYAS? Welcome to the channel brehs. My goal is to get 100,000 subs btw...so help a brutha out!</p>
			<div class="g-ytsubscribe" data-channelid="UC2FscK2dqX3s_m4ESWCnppA" data-layout="full" data-count="default"></div>
         </div>
         <div class="col-lg-5 col-lg-offset-2 col-sm-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/eu5pFpfQJA4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <div class="ContentSection2">
      <div class="container">
		<div class="col-lg-5 col-lg-offset-1 col-sm-push-1  col-sm-4"><!-- center alignment by bootstrap; col-sm-push-1 seems to be the main factor for alignment here...-->
	<!-- Add a placeholder for the Twitch embed -->
    <div id="twitch-embed"></div>

    <!-- Load the Twitch embed script -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: 854,
        height: 480,
        channel: "Awesomethesauce12345"
      });
    </script>
		</div>
      </div>
   </div>
   <footer>
      <div class="container">
         <div class="col-lg-12">
            <ul class="list-inline">
               <li>
                  <a href="#">Top of Page</a>
               </li>
            </ul>
            <p class="copyright">Copyright &copy; AwesomeTheSauce 2018. All Rights Reserved</p>
         </div>
      </div>
   </footer>
   </body>
</html>
