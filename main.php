<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Main</title>
</head>
	<style>
		p  {color: grey; text-align:justify;}
	</style>

<?php include_once('./inc/head.inc.php'); ?>
<body>
<div data-role="page" class="ui-responsive-panel" id="main" data-title="Main">

    <div data-role="header">
        <h1 style="color:RED; font-family:Arial Black, san-serif;">AIDS/HIV</h1>
        <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <a href="#add-form" data-icon="user" data-iconpos="notext">Add</a>
      </div><!-- /header -->
	    <div role="main" class="ui-content jqm-content jqm-fullwidth">
    		<div style="text-align:center;">
            	<img src="./images/Homepage.jpg">
  			</div>
        <!--<h1 style="color:RED; font-family:Arial Black, san-serif;">AIDS/HIV</h1> -->
        <div>
			<p><center>AIDS stands for “Acquired Immune Deficiency Syndrome”. It is caused by a virus called “Human Immunodeficiency Virus”, or HIV.</center></p>
            <!--
			<p></p>
			<p>HIV is incapable of causing direct symptoms, but once the virus enters the body through blood vessels, they will begin to attack the “T4 			Lymphocytes” (white blood cells and macrophages) reside within the immune system, weakening the immune system’s ability to self-repair. Meanwhile, some harmless disease such as pneumocystis carinii pneumonia (PCP), which normally do not affect healthy person, begins their infection and thus turning HIV positive individual into AIDS patient. Currently there are no definitive effective cure that can completely eradicate HIV virus, yet several adopted treatments have greatly expand AIDS patients life expectancy and quality of life.</p>
			<p></p>
			<p>HIV exists within the carrier’s bodily fluids, such as semen, blood and vaginal prostate secretory, which the infected person can infect other person through bodily fluid transmission. Besides, the virus count of HIV exists in saliva, sweat, tears and urine are insignificant to cause infection. An person living with HIV may not have any initial symptoms and they cannot be identified by any external features, therefore only through HIV screening test we can confirm whether a person has been infected.</p> -->
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div><!-- /content -->
    <div data-role="panel" data-display="overlay" data-theme="b" id="nav-panel">
        <ul data-role="listview">
            <li data-icon="delete"><a href="#" data-rel="close">CLOSE MENU</a></li>
                <li><a href="#panel-responsive-page2">COMMON SYMPTOMS</a></li>
                <li><a href="#panel-responsive-page2">PREVENTION</a></li>
                <li><a href="#panel-responsive-page2">TESTING</a></li>
                <li><a href="#panel-responsive-page2">TREATMENT</a></li>
                <li><a href="#panel-responsive-page2">STI INFORMATION</a></li>
        </ul>
   </div><!-- /panel -->
    <div data-role="panel" data-position="right" data-display="overlay" data-theme="a" id="add-form">
        <form class="userform">
            <h2>Login</h2>
            <label for="name">Username:</label>
            <input type="text" name="name" id="name" value="" data-clear-btn="true" data-mini="true">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="" data-clear-btn="true" autocomplete="off" data-mini="true">
            <div class="ui-grid-a">
                <div class="ui-block-a"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-b ui-mini">Login</a></div>
                <div class="ui-block-b"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-mini">Create an Account</a></div>
            </div>
        </form>
    </div><!-- /panel -->
 </div>
</body>
</html>