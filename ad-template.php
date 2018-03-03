<?php  // template to show the ad
header("X-Robots-Tag: noindex,nofollow");
?><html>
    <head>
	<meta name="robots" content="noindex,nofollow">
    </head>
    <body style="margin: 0;" >
	<div id="ad"><?php

	    echo Advanced_Ads_Select::get_instance()->get_ad_by_id( array( 'id' => get_the_ID() ) );
	?></div>
    ?></body>
</html>