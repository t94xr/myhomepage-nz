<?php
// To adjust the format of the date, see www.php.net/manual/function.date.php
//
// If your local time is *behind* the server time, then change the "+" to
// a "-" in the $melbdate line
// If you don't know how many hours, then "uncomment" the three lines
// below by deleting "// " to see what the server time is (remember to
// put the comments "// " back when you've finished checking:
// $serverdate = date("l, d F Y h:i a");
// print ("$serverdate");
// print (" &nbsp; <p>");

// Variable for hours
$hourdiff = "+2"; // hours difference between server time and local time

// Nothing needs to be changed below here unless you want to change
// the format of the date (see above for URL of options) or your local
// time is behind the server time
$timeadjust = ($hourdiff * 3600);
// OLD CODE
// $melbdate = date("l, d F Y - h:ia",time() + $timeadjust);

// Corrected by Giga.
$melbdate = date("l, d F Y - g:ia",time() + $timeadjust);


//IP ADDRESS GET
$ip=$_SERVER['REMOTE_ADDR'];

?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Homepage</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


<style>
<!--

@import url('https://rsms.me/inter/inter.css');
html { font-family: 'Inter', sans-serif; }
@supports (font-variation-settings: normal;  font-feature-settings: 'ss02' 1 ) {
  html { font-family: 'Inter var', sans-serif; }
}

html {
  line-height: 1.90em;
	font-size: 0.7em;
  letter-spacing: -0.5px;
}

main {
  display: flex;
  max-width: 768px;
  margin: 0 auto;
}

section {
  flex: 1;
}

section.right{
  text-align: right;
  order: 2;
}

h2 {
  font-weight: 900;
  text-transform: uppercase;
}


@media(max-width: 500px){
  main{
    flex-direction: column;
  }
  section.right{
    text-align: left;
  }
}


-->
</style>
</head>

<body>


    <header>
      <h1 class="title"><?php print ("$melbdate"); ?></h1>
    </header>

<main>

<section>
<h2>Search Engines</h2>
<p>
  <a href="http://www.google.co.nz/">Google NZ</a>
  <a href="http://www.bing.com/">bing</a>
  <a href="https://start.duckduckgo.com/">DuckDuckGo</a>
</p>

<h2>New Zealand</h2>
<p>
    <a href="http://www.nzpages.co.nz/">NZPages</a>
  <a href="http://nzsearch.co.nz/">NZSearch</a>
    <a href="http://www.nzdating.com/">NZDating</a>
    <a href="http://www.freetvguide.co.nz/">Free TV Guide</a>
    <a href="http://www.vouchermate.co.nz/">Vouchermate</a>
</p>

<h2>NZ Online Shopping</h2>
<p>
  <a href="http://www.trademe.co.nz/">TradeMe</a>
    <a href="http://www.fishpond.co.nz/">Fishpond</a>
    <a href="http://www.1-day.co.nz/">1-day</a>
    <a href="http://www.dealaday.co.nz/">dealaday</a>
    <a href="http://www.mightyape.co.nz/">Mighty Ape</a>
    <a href="http://www.pricespy.co.nz/">PriceSpy</a>
    <a href="http://salefinder.co.nz/">SaleFinder</a>
    <a href="http://www.rubbermonkey.co.nz/">RubberMonkey</a>
    <a href="http://www.getnzmade.net/">getnzmade.net</a>
  <a href="https://www.bookme.co.nz/">Bookme</a>
</p>
<h2>News &amp; Current Affairs</h2>
<p>
  <a href="http://www.nzherald.co.nz/">The Herald</a>
    <a href="https://www.tvnz.co.nz/one-news">1news</a>
    <a href="http://www.stuff.co.nz/">Stuff</a>
     <a href="http://nz.news.yahoo.com/">Yahoo!Xtra News</a>
   <a href="http://news.google.co.nz/">Google News NZ</a>
</p>
<h2>Online Banking</h2>
<p>
  <a href="https://www.kiwibank.co.nz/banking/login.asp">KiwiBank</a>
    <a href="https://sec.westpac.co.nz/IOLB/Login.jsp">Westpac</a>
  <a href="https://secure.sbsbank.co.nz/personal/">SBS Bank</a>
    <a href="https://fnc.asbbank.co.nz/">ASB Fastnet</a>
    <a href="https://www.bnz.co.nz/Internet_Banking/1,1184,10-123,00.html">BNZ</a>
    <a href="http://www.anz.com/nz/default.asp">ANZ</a>
    <a href="https://www.co-operativebank.co.nz/">Co-Operative Bank</a>
    <a href="https://www.accessweb.co.nz/secure/ebank.jsp?main=login.jsp">Credit Union</a>
  <a href="https://www.firstcreditunion.co.nz/">First Credit Union</a>
  <a href="https://www.heartland.co.nz/content/internet-banking/default.aspx">Heartland Bank</a>
  <a href="https://secure1.rabodirect.co.nz/exp/policyenforcer/pages/loginB2CDGPEN.jsf">RaboDirect</a>


<h2>OnDemand &amp; Streaming</h2>
<p>
  <a href="http://tvnzondemand.co.nz/">TVNZ</a>
    <a href="http://www.3now.co.nz/">TV3</a>
  <a href="http://www.maoritelevision.com/tv/on-demand">MaoriTV</a>
  <a href="http://ctv.co.nz/livestream/">CTV Livestream</a>
    <a href="http://www.nzonscreen.com/">NZonScreen</a>
  <a href="http://www.skyondemand.co.nz/">SkyTV</a>

</p>
<h2>NZ Directories</h2>
<p>
  <a href="http://www.whitepages.co.nz/">White Pages</a>
    <a href="http://www.yellowpages.co.nz/">Yellow Pages</a>
    <a href="http://www.teara.govt.nz/">Encyclopedia of New Zealand</a>
</p>
<h2>New Zealand - Misc</h2>
<p>
  <a href="http://www.aamaps.co.nz/">AA Maps</a>
    <a href="http://www.wises.co.nz/">wises maps</a>
    <a href="http://www.mylotto.co.nz/">MyLotto</a>
    <a href="http://www.metservice.co.nz/">MetService</a>
    <a href="http://www.learningmedia.co.nz/ngata/">Ngata Dictionary</a>
</p>
<h2>Online Ordering</h2>
<p>
  <a href="http://www.pizzahut.co.nz/">Pizza Hut</a>
    <a href="http://dominospizza.co.nz/">Domino's Pizza</a>
    <a href="http://www.hell.co.nz/">Hell Pizza</a>
  <a href="http://tinyurl.com/pizzacoupons">GPforums Pizza Coupons</a>
</p>

</section>

<section class="right">

<h2>Social Networking</h2>
<p>
  <a href="http://www.facebook.com/">FaceBook</a>
    <a href="http://www.twitter.com/">Twitter</a>
    <a href="https://instagram.com/">Instagram</a>
    <a href="https://www.tumblr.com/">tumblr</a>
    <a href="http://reddit.com/">Reddit</a>
</p>

<h2>Videos &amp; Streaming</h2>
<p>
  <a href="http://nz.youtube.com/">YouTube NZ</a>
  <a href="http://vimeo.com/">Vimeo</a>
    <a href="http://www.twitch.tv/">twitch.tv</a><br />
  <a href="http://www.pandora.com/">Pandora Radio</a>
  <a href="https://soundcloud.com/">SoundCloud</a>
  <a href="https://www.spotify.com/nz/">Spotify</a>
  <a href="http://tunein.com/">TuneIn</a>
  <a href="http://www.last.fm/">last.fm</a>
  <a href="http://www.iheart.com/">iHeartRADIO</a><br />
  <a href="http://www.iheart.com/live/country/NZ/city/auckland-auk-465/">NZ Radio Streams</a>


</p>


<h2>International News</h2>
<p>
  <a href="http://www.smh.com.au/">The Sydney Morning Herald</a>
    <a href="http://www.telegraph.co.uk/">The Telegraph</a>
    <a href="http://www.bbc.co.uk/">BBC</a>
    <a href="http://www.guardian.co.uk/">Guardian</a>
    <a href="http://www.dailymail.co.uk/">Daily Mail Online</a>
  <a href="http://www.huffingtonpost.com/">Huffington Post USA</a>
  <a href="http://www.huffingtonpost.co.uk/">Huffington Post UK</a>
  <a href="http://www.nytimes.com/">NY Times</a>
  <a href="https://www.washingtonpost.com/">Washington Post</a>
</p>

<h2>Intl. Online Shopping</h2>
<p>
  <a href="http://www.ebay.com/">eBay</a>
  <a href="http://dx.com/">DealExtreme</a>
  <a href="https://www.aliexpress.com/">AliExpress</a>
  <a href="http://www.geekbuying.com/">GeekBuying</a>
  <a href="http://www.tinydeal.com/">TinyDeal</a>
  <a href="http://www.everbuying.net/">Everbuying</a>

</p>


<h2>Online Cloud</h2>
<p>
  <a href="http://db.tt/a3bJb0k">DropBox</a>
    <a href="http://mega.nz/">Mega</a>
  <a href="https://onedrive.live.com/">OneDrive</a>
  <a href="https://www.pcloud.com/">pCloud</a>
  <a href="http://flickr.com/">Flickr</a>
    <a href="https://500px.com/">500px</a><br />
  <a href="https://office.live.com/start/Word.aspx?omkt=en-US">Word Online</a>
  <a href="https://office.live.com/start/Excel.aspx?omkt=en-US">Excel Online</a>
  <a href="https://drive.google.com/drive/u/0/my-drive">Google Drive</a>
  <a href="https://www.draw.io/">draw.io</a>
</p>

<h2>Online Dictionaries &amp; Resources</h2>
<p>
    <a href="http://en.wikipedia.org/">Wikipedia</a>
  <a href="http://www16.wolframalpha.com/">Wolfram|Alpha</a>
    <a href="http://www.merriam-webster.com/">Merriam-Webster</a>
    <a href="https://en.oxforddictionaries.com/">Oxford Dictionary</a>
    <a href="http://www.etymonline.com/">Etymology</a>
</p>

<h2>Kids Games</h2>
<p>
  <a href="http://www.miniclip.com/games/en/">Miniclip</a>
    <a href="http://ofg.me/">OFG</a>
    <a href="http://friv.com/">Friv</a>
    <a href="http://agar.io/">agar.oi</a>
  <a href="http://slither.io/">slither.io</a>
  <a href="http://wings.io/">wings.io</a>

</p>
<h2>Random</h2>
<p>
  <a href="http://failblog.org/">FAIL Blog</a>
    <a href="http://www.fmylife.com/">FMyLife</a>
    <a href="http://www.lunchtimers.com/">Lunchtimers</a>
  <a href="http://howsecureismypassword.net/">How Secure is My Password?</a>
</p>


</section>
<footer>

</footer>
</main>


</div>
</body>
</html>
