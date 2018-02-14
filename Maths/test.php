<?php
include "functions.php";
session_start();

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
  <link rel="stylesheet" type="text/css" href="css/index.css?crc=3970675996" id="pagesheet"/>
    <!--HTML Widget code-->
    
<style>

.audioplayer
{
	height: 2.5em; /* 40 */
	position: relative;
	z-index: 1;
}
	.audioplayer-mini
	{
		width: 2.5em; /* 40 */
		margin: 0 auto;
	}
	.audioplayer > div
	{
		position: absolute;
	}
.audioplayer {
    color: #000000;
	background: #FFFFFF;
}
    
.audioplayer-playpause
{
	width: 2.5em; /* 40 */
	height: 100%;
	text-align: left;
	text-indent: -9999px;
	cursor: pointer;
	z-index: 2;
	top: 0;
	left: 0;
}
	.audioplayer-mini .audioplayer-playpause
	{
		width: 100%;
	}
    
    /* Color */
	.audioplayer-playpause:hover,
	.audioplayer-playpause:focus
	{
		background-color: 222222;
	}
	.audioplayer-playpause a
	{
		display: block;
	}

	.audioplayer:not(.audioplayer-playing) .audioplayer-playpause a
	{
		width: 0;
		height: 0;
		border: 0.5em solid transparent; /* 8 */
		border-right: none;
		border-left-color: #000000;
		content: '';
		position: absolute;
		top: 50%;
		left: 50%;
		margin: -0.5em 0 0 -0.25em; /* 8 4 */
	}

	.audioplayer-playing .audioplayer-playpause a
	{
		width: 0.75em; /* 12 */
		height: 0.75em; /* 12 */
		position: absolute;
		top: 50%;
		left: 50%;
		margin: -0.375em 0 0 -0.375em; /* 6 */
	}
    
		.audioplayer-playing .audioplayer-playpause a:before,
		.audioplayer-playing .audioplayer-playpause a:after
		{
			width: 40%;
			height: 100%;
			background-color: #000000;
			content: '';
			position: absolute;
			top: 0;
		}
		.audioplayer-playing .audioplayer-playpause a:before
		{
			left: 0;
		}
		.audioplayer-playing .audioplayer-playpause a:after
		{
			right: 0;
		}
        
        
.audioplayer-time
{
	width: 4.375em; /* 70 */
	height: 100%;
	line-height: 2.5em; /* 40 */
	text-align: center;
	z-index: 2;
	top: 0;
}
	.audioplayer-time-current
	{
		border-left: 1px solid #111111;
		left: 2.5em; /* 40 */
	}
	.audioplayer-time-duration
	{
		right: 2.5em; /* 40 */
	}
		.audioplayer-novolume .audioplayer-time-duration
		{
			border-right: 0;
			right: 0;
		}
        
       
.audioplayer-bar
{
	height: 0.875em; /* 14 */
	background-color: #222222;
	cursor: pointer;
	z-index: 1;
	top: 50%;
	right: 6.875em; /* 110 */
	left: 6.875em; /* 110 */
	margin-top: -0.438em; /* 7 */
}
	.audioplayer-novolume .audioplayer-bar
	{
		right: 4.375em; /* 70 */
	}
	.audioplayer-bar div
	{
		width: 0;
		height: 100%;
		position: absolute;
		left: 0;
		top: 0;
	}
    
	.audioplayer-bar-loaded
	{
		background-color: #555555;
		z-index: 1;
	}

	.audioplayer-bar-played
	{
        /* Accent Color */
		background: #00FF00;
		z-index: 2;
	}

.audioplayer-volume
{
	width: 2.5em; /* 40 */
	height: 100%;
	border-left: 1px solid #111111;
	text-align: left;
	text-indent: -9999px;
	cursor: pointer;
	z-index: 2;
	top: 0;
	right: 0;
}


	.audioplayer-volume:hover,
	.audioplayer-volume:focus
	{
		background-color: #222222;
        

	}
	.audioplayer-volume-button
	{
		width: 100%;
		height: 100%;
	}


		.audioplayer-volume-button a
		{
			width: 0.313em; /* 5 */
			height: 0.375em; /* 6 */
			background-color: #000000;
			display: block;
			position: relative;
			z-index: 1;
			top: 40%;
			left: 35%;
		}
			.audioplayer-volume-button a:before,
			.audioplayer-volume-button a:after
			{
				content: '';
				position: absolute;
			}
            
			.audioplayer-volume-button a:before
			{
				width: 0;
				height: 0;
				border: 0.5em solid transparent; /* 8 */
				border-left: none;
				border-right-color: #000000;
				z-index: 2;
				top: 50%;
				right: -0.25em;
				margin-top: -0.5em; /* 8 */
			}
            
            /* Color */
			.audioplayer:not(.audioplayer-mute) .audioplayer-volume-button a:after
			{
				/* "volume" icon by Nicolas Gallagher, http://nicolasgallagher.com/pure-css-gui-icons */
				width: 0.313em; /* 5 */
				height: 0.313em; /* 5 */
				border: 0.25em double #000000; /* 4 */
				border-width: 0.25em 0.25em 0 0; /* 4 */
				left: 0.563em; /* 9 */
				top: -0.063em; /* 1 */
				-webkit-border-radius: 0 0.938em 0 0; /* 15 */
				-moz-border-radius: 0 0.938em 0 0; /* 15 */
				border-radius: 0 0.938em 0 0; /* 15 */
				-webkit-transform: rotate( 45deg );
				-moz-transform: rotate( 45deg );
				-ms-transform: rotate( 45deg );
				-o-transform: rotate( 45deg );
				transform: rotate( 45deg );
			}

	.audioplayer-volume-adjust
	{
		width: 100%;
		height: 6.25em; /* 100 */
		cursor: default;
		position: absolute;
		left: 0;
		top: -9999px;
		background: #222222;
        

        
	}
		.audioplayer-volume:not(:hover) .audioplayer-volume-adjust
		{
			opacity: 0;
		}
		.audioplayer-volume:hover .audioplayer-volume-adjust
		{
			top: auto;
			bottom: 100%;
		}
		.audioplayer-volume-adjust > div
		{
			width: 40%;
			height: 80%;
			background-color: #555555;
			cursor: pointer;
			position: relative;
			z-index: 1;
			margin: 30% auto 0;
		}
        

			.audioplayer-volume-adjust div div
			{
				width: 100%;
				height: 100%;
				position: absolute;
				bottom: 0;
				left: 0;
                /* Accent Color */
				background: #00FF00;
			}
	.audioplayer-novolume .audioplayer-volume
	{
		display: none;
	} 
</style>
<style type="text/css">#u3444.size_fluid_width_height iframe { position:absolute; left:0; top:0; }</style>
 </head>
 <body>

  <div class="clearfix" id="page"><!-- group -->
   <div class="PamphletWidget clearfix grpelem" id="pamphletu1500"><!-- none box -->
    <div class="popup_anchor" id="u1503popup">
     <div class="ContainerGroup clearfix" id="u1503"><!-- none box -->
      <div class="Container invi clearfix grpelem" id="u1514"><!-- group -->
       <div class="clip_frame grpelem" id="u1602"><!-- svg -->
        <img class="svg" id="u1603" src="images/asset-10.svg?crc=24649891" width="584" height="431" alt="" data-mu-svgfallback="images/asset%2010_poster_.png?crc=3938733387"/>
       </div>
       <div class="PamphletWidget clearfix grpelem" id="pamphletu1604"><!-- none box -->
        <div class="popup_anchor" id="u1610popup">
         <div class="ContainerGroup clearfix" id="u1610"><!-- none box -->
          <div class="Container invi clearfix grpelem" id="u1611"><!-- group -->
           <div class="clip_frame grpelem" id="u1612"><!-- svg -->
            <img class="svg" id="u1613" src="images/fluid-mechanics.svg?crc=174487815" width="193" height="101" alt="" data-mu-svgfallback="images/fluid%20mechanics_poster_.png?crc=264391900"/>
           </div>
           <div class="PamphletWidget clearfix grpelem" id="pamphletu1614"><!-- none box -->
            <div class="popup_anchor" id="u1615popup">
             <div class="ContainerGroup clearfix" id="u1615"><!-- none box -->
              <div class="Container invi clearfix grpelem" id="u1616"><!-- group -->
               <div class="size_fixed grpelem" id="u1617"><!-- custom html -->
                
		<div id="wrapper">
			<audio preload="auto" controls>
             <source src="assets/2-chainz---it-s-a-vibe-ft.mp3"><!-- Hide -->
			<!--<source src="Add File"><!-- Hide -->
			<!--<source src="Add File"><!-- Hide -->
			</audio>

			</div>

               </div>
              </div>
             </div>
            </div>
            <div class="ThumbGroup clearfix grpelem" id="u1618"><!-- none box -->
             <div class="popup_anchor" id="u1619popup">
              <div class="Thumb popup_element museBGSize" id="u1619"><!-- simple frame --></div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="ThumbGroup clearfix grpelem" id="u1605"><!-- none box -->
         <div class="popup_anchor" id="u1606popup">
          <div class="Thumb popup_element museBGSize" id="u1606"><!-- simple frame --></div>
         </div>
        </div>
       </div>
       <div class="PamphletWidget clearfix grpelem" id="pamphletu1623"><!-- none box -->
        <div class="popup_anchor" id="u1624popup">
         <div class="ContainerGroup clearfix" id="u1624"><!-- none box -->
          <div class="Container invi clearfix grpelem" id="u1625"><!-- group -->
           <div class="clip_frame grpelem" id="u1626"><!-- svg -->
            <img class="svg" id="u1627" src="images/force-exerted.svg?crc=4263517645" width="152" height="20" alt="" data-mu-svgfallback="images/force%20exerted_poster_.png?crc=4092869947"/>
           </div>
          </div>
         </div>
        </div>
        <div class="ThumbGroup clearfix grpelem" id="u1631"><!-- none box -->
         <div class="popup_anchor" id="u1632popup">
          <div class="Thumb popup_element museBGSize" id="u1632"><!-- simple frame --></div>
         </div>
        </div>
       </div>
       <div class="PamphletWidget clearfix grpelem" id="pamphletu1633"><!-- none box -->
        <div class="popup_anchor" id="u1637popup">
         <div class="ContainerGroup clearfix" id="u1637"><!-- none box -->
          <div class="Container invi clearfix grpelem" id="u1638"><!-- group -->
           <div class="clip_frame grpelem" id="u1639"><!-- svg -->
            <img class="svg" id="u1640" src="images/trust-acting.svg?crc=94754023" width="194" height="147" alt="" data-mu-svgfallback="images/trust%20acting_poster_.png?crc=3786071697"/>
           </div>
          </div>
         </div>
        </div>
        <div class="ThumbGroup clearfix grpelem" id="u1634"><!-- none box -->
         <div class="popup_anchor" id="u1635popup">
          <div class="Thumb popup_element museBGSize" id="u1635"><!-- simple frame --></div>
         </div>
        </div>
       </div>
       <div class="PamphletWidget clearfix grpelem" id="pamphletu1643"><!-- none box -->
        <div class="popup_anchor" id="u1644popup">
         <div class="ContainerGroup clearfix" id="u1644"><!-- none box -->
          <div class="Container invi clearfix grpelem" id="u1645"><!-- group -->
           <div class="clip_frame grpelem" id="u1646"><!-- svg -->
            <img class="svg" id="u1647" src="images/p%3dpgh.svg?crc=4288357494" width="85" height="15" alt="" data-mu-svgfallback="images/p%3dpgh_poster_.png?crc=4239245310"/>
           </div>
          </div>
         </div>
        </div>
        <div class="ThumbGroup clearfix grpelem" id="u1649"><!-- none box -->
         <div class="popup_anchor" id="u1650popup">
          <div class="Thumb popup_element museBGSize" id="u1650"><!-- simple frame --></div>
         </div>
        </div>
       </div>
       <div class="PamphletWidget clearfix grpelem" id="pamphletu1653"><!-- none box -->
        <div class="popup_anchor" id="u1657popup">
         <div class="ContainerGroup clearfix" id="u1657"><!-- none box -->
          <div class="Container invi clearfix grpelem" id="u1658"><!-- group -->
           <div class="clip_frame grpelem" id="u1659"><!-- svg -->
            <img class="svg" id="u1660" src="images/artmosphere-(atm)-%3d-1%2c01105-pa.svg?crc=4169064597" width="165" height="81" alt="" data-mu-svgfallback="images/artmosphere%20(atm)%20%3d%201%2c01105%20pa_poster_.png?crc=3983150782"/>
           </div>
          </div>
         </div>
        </div>
        <div class="ThumbGroup clearfix grpelem" id="u1661"><!-- none box -->
         <div class="popup_anchor" id="u1662popup">
          <div class="Thumb popup_element museBGSize" id="u1662"><!-- simple frame --></div>
         </div>
        </div>
       </div>
       <div class="PamphletWidget clearfix grpelem" id="pamphletu1663"><!-- none box -->
        <div class="popup_anchor" id="u1666popup">
         <div class="ContainerGroup clearfix" id="u1666"><!-- none box -->
          <div class="Container invi clearfix grpelem" id="u1667"><!-- group -->
           <div class="clip_frame grpelem" id="u1668"><!-- svg -->
            <img class="svg" id="u1669" src="images/definition.svg?crc=4148664808" width="111" height="15" alt="" data-mu-svgfallback="images/definition_poster_.png?crc=4195019380"/>
           </div>
           <div class="PamphletWidget clearfix grpelem" id="pamphletu1670"><!-- none box -->
            <div class="popup_anchor" id="u1675popup">
             <div class="ContainerGroup clearfix" id="u1675"><!-- none box -->
              <div class="Container invi clearfix grpelem" id="u1676"><!-- group -->
               <div class="clip_frame grpelem" id="u1677"><!-- svg -->
                <img class="svg" id="u1678" src="images/infobox.svg?crc=4193767376" width="157" height="118" alt="" data-mu-svgfallback="images/infobox_poster_.png?crc=4274550655"/>
               </div>
               <div class="clearfix grpelem" id="u1679"><!-- group -->
                <div class="clearfix grpelem" id="u1680-4"><!-- content -->
                 <p>Pascal's law states that in a continuous liquid at equilibriums. the pressure applied at any point is transmitted equally to their parts of the liquid</p>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="ThumbGroup clearfix grpelem" id="u1671"><!-- none box -->
             <div class="popup_anchor" id="u1672popup">
              <div class="Thumb popup_element museBGSize" id="u1672"><!-- simple frame --></div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="ThumbGroup clearfix grpelem" id="u1683"><!-- none box -->
         <div class="popup_anchor" id="u1684popup">
          <div class="Thumb popup_element museBGSize" id="u1684"><!-- simple frame --></div>
         </div>
        </div>
       </div>
       <div class="PamphletWidget clearfix grpelem" id="pamphletu1685"><!-- none box -->
        <div class="popup_anchor" id="u1690popup">
         <div class="ContainerGroup clearfix" id="u1690"><!-- none box -->
          <div class="Container invi clearfix grpelem" id="u1691"><!-- group -->
           <div class="clip_frame grpelem" id="u1692"><!-- svg -->
            <img class="svg" id="u1693" src="images/used.svg?crc=470128680" width="162" height="61" alt="" data-mu-svgfallback="images/used_poster_.png?crc=495047694"/>
           </div>
           <div class="PamphletWidget clearfix grpelem" id="pamphletu1694"><!-- none box -->
            <div class="popup_anchor" id="u1699popup">
             <div class="ContainerGroup clearfix" id="u1699"><!-- none box -->
              <div class="Container invi clearfix grpelem" id="u1700"><!-- group -->
               <a class="nonblock nontext clip_frame grpelem" id="u1701" href="assets/pascals-law.png"><!-- image --><img class="block" id="u1701_img" src="images/pascals-law.jpg?crc=4035923428" alt="" width="84" height="49"/></a>
               <div class="clip_frame grpelem" id="u1703"><!-- svg -->
                <img class="svg" id="u1704" src="images/a2.svg?crc=262318585" width="70" height="15" alt="" data-mu-svgfallback="images/a2_poster_.png?crc=3882517862"/>
               </div>
              </div>
             </div>
            </div>
            <div class="ThumbGroup clearfix grpelem" id="u1696"><!-- none box -->
             <div class="popup_anchor" id="u1697popup">
              <div class="Thumb popup_element museBGSize" id="u1697"><!-- simple frame --></div>
             </div>
            </div>
           </div>
           <div class="PamphletWidget clearfix widget_invisible grpelem" id="pamphletu3335"><!-- none box -->
            <div class="ThumbGroup clearfix grpelem" id="u3336"><!-- none box -->
             <div class="popup_anchor" id="u3339popup">
              <div class="Thumb popup_element museBGSize" id="u3339"><!-- simple frame --></div>
             </div>
            </div>
            <div class="popup_anchor" id="u3346popup">
             <div class="ContainerGroup rgba-background clearfix" id="u3346"><!-- stack box -->
              <div class="Container clearfix grpelem" id="u3351"><!-- column -->
               <div class="position_content" id="u3351_position_content">
                <a class="nonblock nontext clip_frame colelem" id="u1713" href="assets/hydraulics.pdf"><!-- image --><img class="block" id="u1713_img" src="images/screen%20shot%202018-02-08%20at%20092813.jpg?crc=4124544202" alt="" width="334" height="429"/></a>
                <div class="clearfix colelem" id="u3352-3"><!-- content -->
                 <p>&nbsp;</p>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="popup_anchor" id="u3340popup">
             <div class="PamphletCloseButton PamphletLightboxPart popup_element clearfix" id="u3340"><!-- group -->
              <div class="clearfix grpelem" id="u3341-4"><!-- content -->
               <p>x</p>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="ThumbGroup clearfix grpelem" id="u1687"><!-- none box -->
         <div class="popup_anchor" id="u1688popup">
          <div class="Thumb popup_element museBGSize" id="u1688"><!-- simple frame --></div>
         </div>
        </div>
       </div>
       <div class="PamphletWidget clearfix widget_invisible grpelem" id="pamphletu3390"><!-- none box -->
        <div class="ThumbGroup clearfix grpelem" id="u3393"><!-- none box -->
         <div class="popup_anchor" id="u3394popup">
          <div class="Thumb popup_element museBGSize" id="u3394"><!-- simple frame --></div>
         </div>
        </div>
        <div class="popup_anchor" id="u3397popup">
         <div class="ContainerGroup rgba-background clearfix" id="u3397"><!-- stack box -->
          <div class="Container clearfix grpelem" id="u3398"><!-- column -->
           <div class="rounded-corners size_fixed colelem" id="u3444"><!-- custom html -->
            
<iframe class="actAsDiv" style="width:100%;height:100%;" src="//www.youtube.com/embed/G9k8aua86To?autoplay=0&loop=0&showinfo=0&theme=dark&color=red&controls=1&modestbranding=0&start=0&fs=1&iv_load_policy=1&wmode=transparent&rel=1" frameborder="0" allowfullscreen></iframe>

           </div>
           <div class="clearfix colelem" id="u3399-3"><!-- content -->
            <p>&nbsp;</p>
           </div>
          </div>
         </div>
        </div>
        <div class="popup_anchor" id="u3395popup">
         <div class="PamphletCloseButton PamphletLightboxPart popup_element clearfix" id="u3395"><!-- group -->
          <div class="clearfix grpelem" id="u3396-4"><!-- content -->
           <p>x</p>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="ThumbGroup clearfix grpelem" id="u1523"><!-- none box -->
     <div class="popup_anchor" id="u1525popup">
      <div class="Thumb popup_element" id="u1525"><!-- simple frame --></div>
     </div>
    </div>
   </div>
   <div class="clearfix grpelem" id="u821-4"><!-- content -->
    <p>
	
	
	
	
	
	
	
	
	
	
	
	
	
	

<a href="index.php" class="btn btn-warning btn-lg" >Reset Questions</a>
	
	
	
	
	
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
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



















</p>
   </div>
   <div class="verticalspacer" data-offset-top="756" data-content-above-spacer="756" data-content-below-spacer="61"></div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
</script>
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
Muse.Utils.initWidget('#pamphletu1614', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1614 */
Muse.Utils.initWidget('#pamphletu1604', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1604 */
Muse.Utils.initWidget('#pamphletu1623', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1623 */
Muse.Utils.initWidget('#pamphletu1633', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1633 */
Muse.Utils.initWidget('#pamphletu1643', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1643 */
Muse.Utils.initWidget('#pamphletu1653', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1653 */
Muse.Utils.initWidget('#pamphletu1670', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1670 */
Muse.Utils.initWidget('#pamphletu1663', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1663 */
Muse.Utils.initWidget('#pamphletu1694', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1694 */
Muse.Utils.initWidget('#pamphletu3335', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'lightbox',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu3335 */
Muse.Utils.initWidget('#pamphletu1685', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1685 */
Muse.Utils.initWidget('#pamphletu3390', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'lightbox',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu3390 */
Muse.Utils.initWidget('#pamphletu1500', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu1500 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4234670167" type="text/javascript" async data-main="scripts/museconfig.js?crc=3849126041" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
  <!--HTML Widget code-->
  
<script>
!function(e,t,a){var i="ontouchstart"in t,n=i?"touchstart":"mousedown",o=i?"touchmove":"mousemove",d=i?"touchcancel":"mouseup",u=function(e){var t=e/3600,a=Math.floor(t),i=e%3600/60,n=Math.floor(i),o=Math.ceil(e%3600%60);return o>59&&(o=0,n=Math.ceil(i)),n>59&&(n=0,a=Math.ceil(t)),(0==a?"":a>0&&a.toString().length<2?"0"+a+":":a+":")+(n.toString().length<2?"0"+n:n)+":"+(o.toString().length<2?"0"+o:o)},l=function(e){var t=a.createElement("audio");return!(!t.canPlayType||!t.canPlayType("audio/"+e.split(".").pop().toLowerCase()+";").replace(/no/,""))};e.fn.audioPlayer=function(t){var t=e.extend({classPrefix:"audioplayer",strPlay:"Play",strPause:"Pause",strVolume:"Volume"},t),a={},r={playPause:"playpause",playing:"playing",stopped:"stopped",time:"time",timeCurrent:"time-current",timeDuration:"time-duration",bar:"bar",barLoaded:"bar-loaded",barPlayed:"bar-played",volume:"volume",volumeButton:"volume-button",volumeAdjust:"volume-adjust",noVolume:"novolume",muted:"muted",mini:"mini"};for(var s in r)a[s]=t.classPrefix+"-"+r[s];return this.each(function(){if("audio"!=e(this).prop("tagName").toLowerCase())return!1;var r=e(this),s=r.attr("src"),v=r.get(0).getAttribute("autoplay"),v=""===v||"autoplay"===v?!0:!1,m=r.get(0).getAttribute("loop"),m=""===m||"loop"===m?!0:!1,c=!1;"undefined"==typeof s?r.find("source").each(function(){return s=e(this).attr("src"),"undefined"!=typeof s&&l(s)?(c=!0,!1):void 0}):l(s)&&(c=!0);var h=e('<div class="'+t.classPrefix+'">'+(c?e("<div>").append(r.eq(0).clone()).html():'<embed src="'+s+'" width="0" height="0" volume="100" autostart="'+v.toString()+'" loop="'+m.toString()+'" />')+'<div class="'+a.playPause+'" title="'+t.strPlay+'"><a href="#">'+t.strPlay+"</a></div></div>"),f=h.find(c?"audio":"embed"),f=f.get(0);if(c){h.find("audio").css({width:0,height:0,visibility:"hidden"}),h.append('<div class="'+a.time+" "+a.timeCurrent+'"></div><div class="'+a.bar+'"><div class="'+a.barLoaded+'"></div><div class="'+a.barPlayed+'"></div></div><div class="'+a.time+" "+a.timeDuration+'"></div><div class="'+a.volume+'"><div class="'+a.volumeButton+'" title="'+t.strVolume+'"><a href="#">'+t.strVolume+'</a></div><div class="'+a.volumeAdjust+'"><div><div></div></div></div></div>');var p=h.find("."+a.bar),y=h.find("."+a.barPlayed),g=h.find("."+a.barLoaded),b=h.find("."+a.timeCurrent),P=h.find("."+a.timeDuration),C=h.find("."+a.volumeButton),E=h.find("."+a.volumeAdjust+" > div"),w=0,M=function(e){theRealEvent=i?e.originalEvent.touches[0]:e,f.currentTime=Math.round(f.duration*(theRealEvent.pageX-p.offset().left)/p.width())},L=function(e){theRealEvent=i?e.originalEvent.touches[0]:e,f.volume=Math.abs((theRealEvent.pageY-(E.offset().top+E.height()))/E.height())},S=function(){var e=setInterval(function(){return f.buffered.length<1?!0:(g.width(f.buffered.end(0)/f.duration*100+"%"),void(Math.floor(f.buffered.end(0))>=Math.floor(f.duration)&&clearInterval(e)))},100)},V=f.volume,j=f.volume=.111;Math.round(1e3*f.volume)/1e3==j?f.volume=V:h.addClass(a.noVolume),P.html("…"),b.html(u(0)),f.addEventListener("loadeddata",function(){S(),P.html(e.isNumeric(f.duration)?u(f.duration):"…"),E.find("div").height(100*f.volume+"%"),w=f.volume}),f.addEventListener("timeupdate",function(){b.html(u(f.currentTime)),y.width(f.currentTime/f.duration*100+"%")}),f.addEventListener("volumechange",function(){E.find("div").height(100*f.volume+"%"),f.volume>0&&h.hasClass(a.muted)&&h.removeClass(a.muted),f.volume<=0&&!h.hasClass(a.muted)&&h.addClass(a.muted)}),f.addEventListener("ended",function(){h.removeClass(a.playing).addClass(a.stopped)}),p.on(n,function(e){M(e),p.on(o,function(e){M(e)})}).on(d,function(){p.unbind(o)}),C.on("click",function(){return h.hasClass(a.muted)?(h.removeClass(a.muted),f.volume=w):(h.addClass(a.muted),w=f.volume,f.volume=0),!1}),E.on(n,function(e){L(e),E.on(o,function(e){L(e)})}).on(d,function(){E.unbind(o)})}else h.addClass(a.mini);h.addClass(v?a.playing:a.stopped),h.find("."+a.playPause).on("click",function(){return h.hasClass(a.playing)?(e(this).attr("title",t.strPlay).find("a").html(t.strPlay),h.removeClass(a.playing).addClass(a.stopped),c?f.pause():f.Stop()):(e(this).attr("title",t.strPause).find("a").html(t.strPause),h.addClass(a.playing).removeClass(a.stopped),c?f.play():f.Play()),!1}),r.replaceWith(h)}),this}}(jQuery,window,document);
</script>
<script>
$( 'audio' ).audioPlayer(
{
	strPlay: 'Play', // default value: 'Play'
	strPause: 'Pause', // default value: 'Pause'
	strVolume: 'Volume', // default value: 'Volume'
});
</script>


   </body>
</html>
