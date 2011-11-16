<?php
	/*-------- Download images from gallery --------*/
	if(isset($_GET["imgname"]))
	{
		  $file = $_GET["imgname"];
		  header('Content-Description: File Transfer');
		  header('Content-Type: application/octet-stream');
		  header('Content-Disposition: attachment; filename='.basename($file));
		  header('Content-Transfer-Encoding: binary');
		  header('Expires: 0');
		  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		  header('Pragma: public');
		  ob_clean();
		  flush();
		  readfile($file);
		  exit;
	}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Homepage | 100 WOOD STREET</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" media="screen" href="../css/style.css" >
<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-1.3.4.css" media="screen" />
<script src="../js/libs/modernizr-2.0.6.min.js"></script>
<script type="text/javascript" src="../js/libs/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
function loaded()
{
	$(".big_image img").show().css({"visibility":"visible"});
}
$(document).ready(function() {
	$(".wpdf_fp").click(function(){
		var str = $(".wood_floorplan a.footer_tab_selected").attr("rel");
		str = "index.php?imgname=../pdfs/woodstreet/floorplans/"+str+".pdf"
		$(".wpdf_fp").attr('href', str);
	});
	$(".wpdf_sp").click(function(){
		var str = $(".wood_footerspaceplan a.footer_tab_selected").attr("rel");
		str = "index.php?imgname=../pdfs/woodstreet/spaceplans/"+str+".pdf"
		$(".wpdf_sp").attr('href', str);
	});
});
</script>
</head>
<body>
<div class="container_44" dir="ltr">
  <div id="main" role="main">
    <section class="grid_39_user"> <img class="top_left_logo alpha" src="../img/London-Wall-Logo_1.jpg" alt="London Wall Logo" /> <img class="top_right_logo omega" src="../img/Finsbury-Logo_1.jpg" alt="Finsbury Logo" />
      <div class="clear"></div>
      <div class="middle_logo">s <img src="../img/logo.jpg" alt="Portfolio Logo" /> </div>
      <a href="../index.php"><img class="bottom_left_logo alpha" src="../img/Wood-Street-Logo-copy-10.jpg" alt="Wood Street Logo" /></a>
      <aside class="grid_37_user" id="bigContent4">
        <h2 class="prefix_1"><a class="woodstreet_back" href="index.php"></a></h2>
        <div class="clear"></div>
        <div id="Wood_menu" class="grid_6 prefix_1">
          <ul>
            <li class="selected"><a rel="wood_home" href="#">Home</a></li>
            <li><a rel="wood_location" href="#">Location</a></li>
            <li><a rel="wood_soa" href="#">Schedule of Areas </a></li>
            <li id="wood_fp"><a rel="wood_floorplans" href="#">Floor Plans</a></li>
            <li><a rel="wood_spaceplan" href="#">Space Plans</a></li>
            <li><a rel="wood_gallery" id="galleryopen" href="#">Gallery</a></li>
            <li class="last"> <a rel="wood_contact" href="#">Contact</a></li>
          </ul>
          <div class="bottom_logo"> <a class="bottom_logo_image" href="../index.php"></a>
            <div id="backtoHome"><span>Back to Portfolio</span><span>Home Page</span></div>
          </div>
        </div>
        <img class="left_close_button" src="../img/close_btn.png" alt="Close Button" />
        <div id="wood_home" style="display:block;" class="pageContent"> <span class="big_image"><img style="display:none" onload="loaded();" src="../img/WoodStreet_big_image.jpg" alt="WoodStreet Home" /></span>
          <div class="text2">
            <h4>High quality design.<br/>
              High level business performance.</h4>
            <p>With a dramatic western fa&ccedil;ade raked to maximise natural light and a striking diagrid curved roof, 100 Wood Street combines form and function to deliver unique, Foster + Partners designed Grade A office space. </p>
            <p>100 Wood Street provides 15,319 sq ft to 31,560 sq ft available on flexible leasing terms from December 2012.</p>
          </div>
        </div>
        <div id="wood_location" style="display:none;" class="pageContent"> <img class="loc_image" src="../img/100WoodStreet/100WS_location.jpg" alt="Location" /> </div>
        <div id="wood_soa" style="display:none;" class="pageContent">
          <div class="soa_table">
            <h1>SCHEDULE OF AREAS</h1>
            <ul>
              <li class="li_border"><span class="title">FLOOR</span><span class="sqft">SQ FT</span><span class="sqm">SQ M</span></li>
              <li id="WS_07"><span class="title">07</span><span class="sqft">15,319</span><span class="sqm">1,423</span></li>
              <li id="WS_06"><span class="title">06</span><span class="sqft">16,241</span><span class="sqm">1,509</span></li>
              <li class="li_border"><span class="title">TOTAL</span><span class="sqft">31,560</span><span class="sqm">2,932</span></li>
            </ul>
          </div>
        </div>
        
        <div id="wood_floorplans" style="display:none;" class="pageContent">
          <div class="floorplan">
            <h1 class="wfp_head">SIXTH FLOOR PLAN</h1><a class="various1 enlarge wood_en" href="#inline107">Enlarge</a>
            <h1 class="wfp_area change_color">16,241 sq ft (1,509 sq m)</h1>
            <span class="wood_fp"><img class="wood_floorImg" height="335" src="../img/100WoodStreet/largefloorplan/WS_06.jpg" alt="" /></span>
            <div class="footer_plans">
              <div class="nottoscale"> <img src="../img/100WoodStreet/nottoscale.jpg" alt="NOT TO SCALE" /> <span>Not to Scale</span> </div>
               <a href="index.php?imgname=LW_03.jpg" class="downloadpdf wpdf_fp w_big">Download Plan</a>
              <div class="wood_floorplan footer_tabs"> <a rel="WS_06" title="SIXTH FLOOR PLAN" href="Javascript:void(0)" class="footer_tab_selected">Sixth Floor</a>/  <a rel="WS_07" title="SEVENTH FLOOR PLAN" href="Javascript:void(0)">Seventh Floor</a> </div>
            </div>
          </div>
          <div style="display: none;">
			<div id="inline107" style="width:816px;height:610px;overflow:auto; background:#fff;">
          <div class="floorplan">
            <h1 class="wfp_head">SIXTH FLOOR PLAN</h1>
            <h1 class="wfp_area change_color">16,241 sq ft (1,509 sq m)</h1>
            <span class="wood_fp wood_fp_big"><img class="wood_floorImg" height="505" src="../img/100WoodStreet/largefloorplan/WS_06.jpg" alt="" /></span>
            <div class="footer_plans">
              <div class="nottoscale"> <img src="../img/100WoodStreet/nottoscale.jpg" alt="NOT TO SCALE" /> <span>Not to Scale</span> </div>
               <a href="index.php?imgname=LW_03.jpg" class="downloadpdf wpdf_fp w_big">Download Plan</a>
              <div class="wood_floorplan footer_tabs"> <a rel="WS_06" title="SIXTH FLOOR PLAN" href="Javascript:void(0)" class="footer_tab_selected">Sixth Floor</a>/  <a rel="WS_07" title="SEVENTH FLOOR PLAN" href="Javascript:void(0)">Seventh Floor</a> </div>
            </div>
          </div>
          </div>
          </div>
          
        </div>
        <div id="wood_spaceplan" style="display:none;" class="pageContent">
          <div class="floorplan"><a class="various1 enlarge wood_en" href="#inline108">Enlarge</a>
            <div class="WS_06_UK-Legal-Conf space_details"  >
              <h1>UK LEGAL LAYOUT - FLOOR 6</h1>
              <p>16,241  sq ft  (1,508.8  sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> 
              <span class="character">Double Fee Earner Offices</span><span class="numeric">50</span>
               <span class="character">Secretaries </span><span class="numeric">13</span> 
               <span class="character">Legal Assistants</span><span class="numeric">4</span> 
               <span class="character">Support Staff in Offices</span><span class="numeric">8</span> 
               <span class="character">Support Staff Single Offices</span><span class="numeric">8</span>
               <span class="character">Support Staff in Open Plan</span><span class="numeric">9</span> 
               <span class="character">Reception & Post Staff</span><span class="numeric">2</span> 
               <span class="line"></span>
               <span class="character last">Total Headcount</span><span class="numeric last">94</span></div> 
            </div>
            <!--US Hybird Legal Layout Floor 6 -->
            <div class="WS_06_US-Legal space_details" >
              <h1>US HYBRID LEGAL LAYOUT - FLOOR 6</h1>
              <p>16,241 sq ft  (1,508.8 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu">
               <span class="character">Partner Offices x 10 </span><span class="numeric">10</span> 
               <span class="character">Double Fee Earner Offices</span><span class="numeric">40</span> 
               <span class="character">Double Associate Offices</span><span class="numeric">16</span> 
               <span class="character">Secretaries</span><span class="numeric">5</span>
               <span class="character">Legal Assistants</span><span class="numeric">13</span>
               <span class="character">Business Support Staff</span><span class="numeric">2</span>
               <span class="character">Receptionists</span><span class="numeric">2</span>
               <span class="line"></span>
               <span class="character last">Total Headcount</span><span class="numeric last">86</span> </div>
            </div>
            <!--Financial Layout Floor 6 -->
            <div class="WS_06_Financial space_details" >
              <h1>FINANCIAL LAYOUT - FLOOR 6</h1>
              <p>16,241 sq ft  (1,508.8 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> 
              <span class="character">Trader Workstations</span><span class="numeric">149</span>
              <span class="character">Cellular Offices</span><span class="numeric">8</span>
              <span class="character">Receptionists</span><span class="numeric">2</span>
              <span class="line"></span>
              <span class="character last">Total Headcount</span><span class="numeric last">159</span> </div>
            </div>

            <!--Corporate Open Plan Floor 7 -->
            <div class="WS_07_CorporateOpen space_details" >
              <h1>CORPORATE OPEN PLAN - FLOOR 7</h1>
              <p>15,319 sq ft  (1,423.2 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> 
              <span class="character">Open Plan Workstations </span><span class="numeric">140</span> 
              <span class="character">Cellular Offices</span><span class="numeric">2</span> 
              <span class="line"></span> 
              <span class="character last">Total Headcount</span><span class="numeric last">142</span> </div>
            </div>
            <!--Corporate Cellular Layout Floor 6 -->
            <div class="WS_06_CorpCellular-with-Conf space_details" >
              <h1>CORPORATE CELLULAR PLAN - FLOOR 6</h1>
              <p>16,241 sq ft  (1,508.8 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> 
              <span class="character">Open Plan Workstations </span><span class="numeric">75</span> 
              <span class="character">Cellular Offices</span><span class="numeric">22</span> 
              <span class="character">Receptionists</span><span class="numeric">3</span>
              <span class="line"></span> 
              <span class="character last">Total Headcount</span><span class="numeric last">100</span> </div>
            </div>
            <span class="wood_sp"><img class="wood_spaceimg" height="335" src="../img/100WoodStreet/largespaceplan/WS_06_UK-Legal-Conf.jpg" alt="" /></span>
            <div class="footer_plans">
              <div class="nottoscale"> <img src="../img/100WoodStreet/nottoscale.jpg" alt="NOT TO SCALE" /> <span>Not to Scale</span> </div>
               <a href="index.php?imgname=LW_03.jpg" class="downloadpdf wpdf_sp w_big">Download Plan</a>
              
              <div class="wood_footerspaceplan footer_tabs"> <a rel="WS_06_UK-Legal-Conf" href="JavaScript:void(0)" class="footer_tab_selected">UK Legal</a> / <a rel="WS_06_Financial" href="JavaScript:void(0)">Financial</a> / <a rel="WS_07_CorporateOpen" href="JavaScript:void(0)">Corporate Open</a> / <a rel="WS_06_CorpCellular-with-Conf" href="JavaScript:void(0)">Corporate Cellular</a> / <a rel="WS_06_US-Legal" href="JavaScript:void(0)">US Legal</a> </div>
            </div>
          </div>
          
           <div style="display: none;">
          <div id="inline108" style="width:816px;height:620px;overflow:auto; background:#fff;">
          <div class="floorplan">
           <div class="WS_06_UK-Legal-Conf space_details"  >
              <h1>UK LEGAL LAYOUT - FLOOR 6</h1>
              <p>16,241  sq ft  (1,508.8  sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> 
              <span class="character">Double Fee Earner Offices</span><span class="numeric">50</span>
               <span class="character">Secretaries </span><span class="numeric">13</span> 
               <span class="character">Legal Assistants</span><span class="numeric">4</span> 
               <span class="character">Support Staff in Offices</span><span class="numeric">8</span> 
               <span class="character">Support Staff Single Offices</span><span class="numeric">8</span>
               <span class="character">Support Staff in Open Plan</span><span class="numeric">9</span> 
               <span class="character">Reception & Post Staff</span><span class="numeric">2</span> 
               <span class="line"></span>
               <span class="character last">Total Headcount</span><span class="numeric last">94</span></div> 
            </div>
            <!--US Hybird Legal Layout Floor 6 -->
            <div class="WS_06_US-Legal space_details" >
              <h1>US HYBRID LEGAL LAYOUT - FLOOR 6</h1>
              <p>16,241 sq ft  (1,508.8 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu">
               <span class="character">Partner Offices x 10 </span><span class="numeric">10</span> 
               <span class="character">Double Fee Earner Offices</span><span class="numeric">40</span> 
               <span class="character">Double Associate Offices</span><span class="numeric">16</span> 
               <span class="character">Secretaries</span><span class="numeric">5</span>
               <span class="character">Legal Assistants</span><span class="numeric">13</span>
               <span class="character">Business Support Staff</span><span class="numeric">2</span>
               <span class="character">Receptionists</span><span class="numeric">2</span>
               <span class="line"></span>
               <span class="character last">Total Headcount</span><span class="numeric last">86</span> </div>
            </div>
            <!--Financial Layout Floor 6 -->
            <div class="WS_06_Financial space_details" >
              <h1>FINANCIAL LAYOUT - FLOOR 6</h1>
              <p>16,241 sq ft  (1,508.8 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> 
              <span class="character">Trader Workstations</span><span class="numeric">149</span>
              <span class="character">Cellular Offices</span><span class="numeric">8</span>
              <span class="character">Receptionists</span><span class="numeric">2</span>
              <span class="line"></span>
              <span class="character last">Total Headcount</span><span class="numeric last">159</span> </div>
            </div>

            <!--Corporate Open Plan Floor 7 -->
            <div class="WS_07_CorporateOpen space_details" >
              <h1>CORPORATE OPEN PLAN - FLOOR 7</h1>
              <p>15,319 sq ft  (1,423.2 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> 
              <span class="character">Open Plan Workstations </span><span class="numeric">140</span> 
              <span class="character">Cellular Offices</span><span class="numeric">2</span> 
              <span class="line"></span> 
              <span class="character last">Total Headcount</span><span class="numeric last">142</span> </div>
            </div>
            <!--Corporate Cellular Layout Floor 6 -->
            <div class="WS_06_CorpCellular-with-Conf space_details" >
              <h1>CORPORATE CELLULAR PLAN - FLOOR 6</h1>
              <p>16,241 sq ft  (1,508.8 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> 
              <span class="character">Open Plan Workstations </span><span class="numeric">75</span> 
              <span class="character">Cellular Offices</span><span class="numeric">22</span> 
              <span class="character">Receptionists</span><span class="numeric">3</span>
              <span class="line"></span> 
              <span class="character last">Total Headcount</span><span class="numeric last">100</span> </div>
            </div>
            <span class="wood_sp wood_sp_big"><img class="wood_spaceimg" height="505" src="../img/100WoodStreet/largespaceplan/WS_06_UK-Legal-Conf.jpg" alt="" /></span>
            <div class="footer_plans">
              <div class="nottoscale"> <img src="../img/100WoodStreet/nottoscale.jpg" alt="NOT TO SCALE" /> <span>Not to Scale</span> </div>
               <a href="index.php?imgname=LW_03.jpg" class="downloadpdf wpdf_sp w_big">Download Plan</a>
              <div class="wood_footerspaceplan footer_tabs"> <a rel="WS_06_UK-Legal-Conf" href="JavaScript:void(0)" class="footer_tab_selected">UK Legal</a> / <a rel="WS_06_Financial" href="JavaScript:void(0)">Financial</a> / <a rel="WS_07_CorporateOpen" href="JavaScript:void(0)">Corporate Open</a> / <a rel="WS_06_CorpCellular-with-Conf" href="JavaScript:void(0)">Corporate Cellular</a> / <a rel="WS_06_US-Legal" href="JavaScript:void(0)">US Legal</a> </div>
            </div>
          </div>
          </div></div>
          
        </div>
        <div id="wood_gallery" class="pageContent">
          <div class="gallery_content">
            <div id="bigPic2">
              <div class="bigactive2">
                <div class="img_wrapper">
                  <div id="content_1">
                    <p> <a rel="example_group" class="various1" href="#inline1" ><img alt="Gallery Image 1" src="../img/ws_1.jpg"  /></a> <a rel="example_group" class="various1" href="#inline2" ><img alt="Gallery Image 2"  src="../img/ws_2.jpg"/></a> <a rel="example_group" class="various1" href="#inline3" ><img alt="Gallery Image 3" src="../img/ws_3.jpg" /></a> <a rel="example_group" class="various1" href="#inline4" ><img alt="Gallery Image 4" src="../img/ws_4.jpg" /></a> <a rel="example_group" class="various1" href="#inline5" ><img alt="Gallery Image 5" src="../img/ws_5.jpg" /></a> <a rel="example_group" class="various1" href="#inline6" ><img alt="Gallery Image 6" src="../img/ws_6.jpg" /></a> <a rel="example_group" class="various1" href="#inline7" ><img alt="Gallery Image 7" src="../img/ws_7.jpg" /></a> <a rel="example_group" class="various1" href="#inline8" ><img alt="Gallery Image 8" src="../img/ws_8.jpg" /></a> <a rel="example_group" class="various1" href="#inline9" ><img alt="Gallery Image 9" src="../img/ws_9.jpg" /></a> </p>
                    <div id="inline1"> <img alt="Gallery Image 1" src="../img/ws_1_big.jpg"/></div>
                    <div id="inline2" > <img alt="Gallery Image 2" src="../img/ws_2_big.jpg"  /></div>
                    <div id="inline3" > <img alt="Gallery Image 3" src="../img/ws_3_big.jpg"  /></div>
                    <div id="inline4" > <img alt="Gallery Image 4" src="../img/ws_4_big.jpg"  /></div>
                    <div id="inline5"> <img alt="Gallery Image 5" src="../img/ws_5_big.jpg"  /></div>
                    <div id="inline6" > <img alt="Gallery Image 6" src="../img/ws_6_big.jpg"  /></div>
                    <div id="inline7" > <img alt="Gallery Image 7" src="../img/ws_7_big.jpg"  /></div>
                    <div id="inline8" > <img alt="Gallery Image 8" src="../img/ws_8_big.jpg"  /></div>
                    <div id="inline9" > <img alt="Gallery Image 9" src="../img/ws_9_big.jpg"  /></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="wood_contact" style="display:none;" class="pageContent">
          <div class="contacts">
            <h1>CONTACT</h1>
            <div class="contact_left"> <img id="dtz" src="../img/contact_logo1.jpg" alt="DTZ" />
              <div class="contact_address">
                <h2>JAMES OLIVER</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 3296 2004</span><br />
                <span><span class="char">E</span>&nbsp; <a href="mailto:james.oliver@dtz.com">james.oliver@dtz.com</a></span> </div>
              <div class="contact_address">
                <h2>ALISTAIR BROWN</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 3296 2007</span><br />
                <span><span class="char">E</span>&nbsp; <a href="mailto:alistair.brown@dtz.com">alistair.brown@dtz.com</a></span> </div>
            </div>
            <div class="contact_right"> <img id="cush" src="../img/contact_logo2.jpg" alt="Crushman and WakeField" />
              <div class="contact_address">
                <h2>BILL PEACH</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 7152 5373</span><br />
                <span><span class="char">E</span>&nbsp; <a href="mailto:bill.peach@eur.cushwake.com">bill.peach@eur.cushwake.com</a></span> </div>
              <div class="contact_address">
                <h2>REX CONYERS-SILVERTHORN</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 7152 5301</span><br />
                <span><span class="char">E</span>&nbsp; <a href="rex.conyers-silverthorn@eur.cushwake.com"> rex.conyers-silverthorn@eur.cushwake.com</a></span> </div>
            </div>
          </div>
        </div>
      </aside>
      <img class="bottom_right_logo omega" src="../img/Moorgate-Logo_1.jpg" alt="Moorgate Logo" />
      <hr />
      <div class="clear"></div>
      <footer class="grid_39 alpha">
        <div class="footer_img1"> <a class="dtz_logo" target="_blank" href="http://www.dtz.com"></a> </div>
        <div class="footer_img2"> <a class="cush_logo" target="_blank" href="http://www.cushwake.com"></a> </div>
        <div class="footer_right"> <!--<a href="#"><span>Terms and Conditions</span></a>--> <a href="#"><span>&copy;Wordsearch 2011</span></a> </div>
      </footer>
    </section>
  </div>
</div>

<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			
			$(".various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			
		});
	</script>
<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>
</body>
</html>
