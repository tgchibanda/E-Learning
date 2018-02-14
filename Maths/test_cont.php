<?php

session_start();

$connection = mysqli_connect("localhost","root","","mind")or die(mysqli_error());
//$query = mysqli_query($connection, "update questions set answered='0' where answered='0'");
?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.2.363"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.watch.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  <title>Home</title>
  
  
  
  
  
  
  
  <!-- Bootstrap core CSS     -->
    <link href="stuff/css/bootstrap.min.css" rel="stylesheet" />
	<link href="stuff/css/my_styles.css" rel="stylesheet" />
	
	
    <!--  Material Dashboard CSS    -->
    <link href="stuff/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="stuff/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
	
	  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	
	
	
	
	
	
	
	
	
	
	
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?crc=156657282" id="pagesheet"/>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu128"><!-- group -->
     <div class="clip_frame grpelem" id="u128"><!-- svg -->
      <img class="svg" id="u124" src="images/hydraulics.svg?crc=4125670821" width="584" height="431" alt="" data-mu-svgfallback="images/hydraulics_poster_.png?crc=4134101264"/>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu165"><!-- none box -->
      <div class="popup_anchor" id="u168popup">
       <div class="ContainerGroup clearfix" id="u168"><!-- none box -->
        <div class="Container invi clearfix grpelem" id="u169"><!-- group -->
         <div class="clip_frame grpelem" id="u139"><!-- svg -->
          <img class="svg" id="u135" src="images/fluid-mechanics.svg?crc=4144953705" width="202" height="101" alt="" data-mu-svgfallback="images/fluid%20mechanics_poster_.png?crc=3909440894"/>
         </div>
        </div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u188"><!-- none box -->
       <div class="popup_anchor" id="u191popup">
        <div class="Thumb popup_element museBGSize" id="u191"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu305"><!-- none box -->
      <div class="popup_anchor" id="u308popup">
       <div class="ContainerGroup clearfix" id="u308"><!-- none box -->
        <div class="Container invi clearfix grpelem" id="u309"><!-- group -->
         <div class="clip_frame grpelem" id="u279"><!-- svg -->
          <img class="svg" id="u275" src="images/force-exerted.svg?crc=4263517645" width="152" height="20" alt="" data-mu-svgfallback="images/force%20exerted_poster_.png?crc=4092869947"/>
         </div>
        </div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u328"><!-- none box -->
       <div class="popup_anchor" id="u331popup">
        <div class="Thumb popup_element museBGSize" id="u331"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu414"><!-- none box -->
      <div class="popup_anchor" id="u418popup">
       <div class="ContainerGroup clearfix" id="u418"><!-- none box -->
        <div class="Container invi clearfix grpelem" id="u419"><!-- group -->
         <div class="clip_frame grpelem" id="u463"><!-- svg -->
          <img class="svg" id="u459" src="images/trust-acting.svg?crc=94754023" width="194" height="147" alt="" data-mu-svgfallback="images/trust%20acting_poster_.png?crc=3786071697"/>
         </div>
        </div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u422"><!-- none box -->
       <div class="popup_anchor" id="u423popup">
        <div class="Thumb popup_element museBGSize" id="u423"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu558"><!-- none box -->
      <div class="popup_anchor" id="u564popup">
       <div class="ContainerGroup clearfix" id="u564"><!-- none box -->
        <div class="Container invi clearfix grpelem" id="u565"><!-- group -->
         <div class="clip_frame grpelem" id="u595"><!-- svg -->
          <img class="svg" id="u591" src="images/definition.svg?crc=3820488596" width="111" height="15" alt="" data-mu-svgfallback="images/definition_poster_.png?crc=296554098"/>
         </div>
        </div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u562"><!-- none box -->
       <div class="popup_anchor" id="u563popup">
        <div class="Thumb popup_element museBGSize" id="u563"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu657"><!-- none box -->
      <div class="popup_anchor" id="u658popup">
       <div class="ContainerGroup clearfix" id="u658"><!-- none box -->
        <div class="Container invi clearfix grpelem" id="u659"><!-- group -->
         <div class="clip_frame grpelem" id="u650"><!-- svg -->
          <img class="svg" id="u646" src="images/used.svg?crc=470128680" width="162" height="61" alt="" data-mu-svgfallback="images/used_poster_.png?crc=495047694"/>
         </div>
         <div class="PamphletWidget clearfix grpelem" id="pamphletu514"><!-- none box -->
          <div class="popup_anchor" id="u517popup">
           <div class="ContainerGroup clearfix" id="u517"><!-- none box -->
            <div class="Container invi clearfix grpelem" id="u518"><!-- group -->
             <div class="clip_frame grpelem" id="u551"><!-- svg -->
              <img class="svg" id="u547" src="images/a2.svg?crc=262318585" width="70" height="15" alt="" data-mu-svgfallback="images/a2_poster_.png?crc=3882517862"/>
             </div>
            </div>
           </div>
          </div>
          <div class="ThumbGroup clearfix grpelem" id="u521"><!-- none box -->
           <div class="popup_anchor" id="u522popup">
            <div class="Thumb popup_element museBGSize" id="u522"><!-- simple frame --></div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u664"><!-- none box -->
       <div class="popup_anchor" id="u665popup">
        <div class="Thumb popup_element museBGSize" id="u665"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu602"><!-- none box -->
      <div class="popup_anchor" id="u603popup">
       <div class="ContainerGroup clearfix" id="u603"><!-- none box -->
        <div class="Container invi clearfix grpelem" id="u604"><!-- group -->
         <div class="clip_frame grpelem" id="u639"><!-- svg -->
          <img class="svg" id="u635" src="images/p%3dpgh.svg?crc=4288357494" width="85" height="15" alt="" data-mu-svgfallback="images/p%3dpgh_poster_.png?crc=4239245310"/>
         </div>
        </div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u609"><!-- none box -->
       <div class="popup_anchor" id="u610popup">
        <div class="Thumb popup_element museBGSize" id="u610"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu470"><!-- none box -->
      <div class="popup_anchor" id="u473popup">
       <div class="ContainerGroup clearfix" id="u473"><!-- none box -->
        <div class="Container invi clearfix grpelem" id="u474"><!-- group -->
         <div class="clip_frame grpelem" id="u507"><!-- svg -->
          <img class="svg" id="u503" src="images/artmosphere-(atm)-%3d-1%2c01105-pa.svg?crc=4169064597" width="165" height="81" alt="" data-mu-svgfallback="images/artmosphere%20(atm)%20%3d%201%2c01105%20pa_poster_.png?crc=3983150782"/>
         </div>
        </div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u477"><!-- none box -->
       <div class="popup_anchor" id="u478popup">
        <div class="Thumb popup_element museBGSize" id="u478"><!-- simple frame --></div>
       </div>
      </div>
     </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	

<a href="index.php" class="btn btn-warning btn-lg" >Reset Questions</a>
	
	
	
	
	
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Test Yourself</h4>
        </div>
        <div class="modal-body">
          <?php include 'questions.php'; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>	
<!-- End Modal -->



















    <div class="PamphletWidget clearfix colelem" id="pamphletu713"><!-- none box -->
     <div class="popup_anchor" id="u716popup">
      <div class="ContainerGroup clearfix" id="u716"><!-- none box -->
       <div class="Container invi clearfix grpelem" id="u727"><!-- group -->
        <div class="clearfix grpelem" id="u707-4"><!-- content -->
       
        </div>
       </div>
      </div>
     </div>
     <div class="ThumbGroup clearfix grpelem" id="u736"><!-- none box -->
      <div class="popup_anchor" id="u738popup">
       <div class="Thumb popup_element museBGSize" id="u738"><!-- simple frame --></div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="1434" data-content-above-spacer="1433" data-content-below-spacer="62"></div>
   </div>
  </div>
  <!-- Other scripts -->
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
 <script src="bootstrap.min.js"></script> 
<script type="text/javascript">


	$('#myModal').modal('show');

</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","webpro","musewpslideshow","jquery.museoverlay","touchswipe","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#pamphletu165', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu165 */
Muse.Utils.initWidget('#pamphletu305', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu305 */
Muse.Utils.initWidget('#pamphletu414', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu414 */
Muse.Utils.initWidget('#pamphletu558', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu558 */
Muse.Utils.initWidget('#pamphletu514', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu514 */
Muse.Utils.initWidget('#pamphletu657', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu657 */
Muse.Utils.initWidget('#pamphletu602', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu602 */
Muse.Utils.initWidget('#pamphletu470', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu470 */
Muse.Utils.initWidget('#pamphletu713', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu713 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4234670167" type="text/javascript" async data-main="scripts/museconfig.js?crc=3849126041" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
