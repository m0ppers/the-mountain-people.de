<html>
<body text="#FFFFFF" bgcolor="#000000" link="#0000EF" vlink="#33CC00" alink="#FF0000">
<?
	function zeile($user,$user_won,$user_loss,$user_dis)
	{
	

$stats=($user_won+$user_loss+$user_dis)*0.5+$user_won*0.5-$user_loss-$user_dis*0.25;  	
echo
("<tr><th>$user</th><td>$user_won</td><td>$user_loss</td><td>$user_dis</td><th>$stats</th></tr>");
	}	
	
	echo("<TABLE BORDER CELLSPACING=2 BORDERCOLOR=\"#000000\">");
	echo("<tr><th>Name</th><th>Games won</th><th>Games
lost</th><th>Disconnects</th><th>Stats</th></tr>");
$fdf = fdf_open("../gfx/stats_lu.txt");
$luminus_won = fdf_get_value($fdf, "twon");
$luminus_loss = fdf_get_value($fdf, "tlost");
$luminus_dis = fdf_get_value($fdf, "tdisc");
	zeile(Azrael,$azrael_won,$azrael_loss,$azrael_dis);
	zeile(Bestrafer,$bestrafer_won,$bestrafer_loss,$bestrafer_dis);
	zeile(Crossbreed,$crossbreed_won,$crossbreed_loss,$crossbreed_dis);
	zeile(Gorlord,$gorlord_won,$gorlord_loss,$gorlord_dis);
	zeile(Juggernaut,$juggernaut_won,$juggernaut_loss,$juggernaut_dis);
	zeile(MOP,$mop_won,$mop_loss,$mop_dis);
	zeile(North,$north_won,$north_loss,$north_dis);
	zeile(PW,$pw_won,$pw_loss,$pw_dis);
	zeile(Runelord,$runelord_won,$runelord_loss,$runelord_dis);
zeile(Luminus,$luminus_won,$luminus_loss,$luminus_dis);
fdf_close($fdf);
?>
<h2>

Rating System:<br>
Game played - 0.5 Points<br>
Game won - 0.5 Points<br>
Game lost - 1 Point Penalty<br>
Disconnect - 0.25 Points Penalty<br>
</h2></body>
</html>

