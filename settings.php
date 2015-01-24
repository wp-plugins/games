<div>
 <?php echo "<h2>" . __( 'Critic Games - Settings', 'oscimp_trdom' ) . "</h2>"; ?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
</style>
<p>Get ready for more quality games. We will be adding new fresh games every week, so make sure you update our plugin.</p>
<h3>Help to keep this plugin for free. Link to us - Say Thanks to Critic.NET from hosting the games for you.</h3>
		<div class="form-group">
			<label class="col-sm-1 control-label"></label>
			<div class="col-sm-11">
				<label style="width: 100%;">

					<input type="checkbox" onclick="wgames_click_credit_link();" id="wgames_author_linking" <?php echo wgames_Main::$settings['wgames_author_linking'] == 1? 'checked':'';?>>
					Enable it and contribute to our free games project.
				</label>
			</div>
		</div>
<br />

<font size="2">Sports Games</font>	<table style="width:100%;"  class="tg">
<tr>
	<td>BackYard Sports</td>
	<td>Baseball Team</td>
	<td>Bicycle Run</td>
    <td>Billiards</td>

	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/backyard-sports.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/baseball-team.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/bicycle-run.jpg'; ?>" /></td>
		<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/billiards-master-pro.jpg'; ?>" /></td>

	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [backyardsports]</td>
	<td><strong>Shortcode:</strong> [baseballteam]</td>
	<td><strong>Shortcode:</strong> [bicyclerun]</td>
	<td><strong>Shortcode:</strong> [billiards]</td>

	</tr>

	<br />
	
	<tr>
	<td>BMX Extreme</td>
	<td>Construction Bike</td>
	<td>Court Basketball</td>
		<td>Lake Fishing</td>

	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/bmx-extreme.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/construction-yard-bike.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/hardcourt-basketball.jpg'; ?>" /></td>
		<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/lake-fishing.jpg'; ?>" /></td>

	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [bmxextreme]</td>
	<td><strong>Shortcode:</strong> [constructionbike]</td>
	<td><strong>Shortcode:</strong> [courtbasketbal]</td>
		<td><strong>Shortcode:</strong> [lakefishing]</td>

	</tr>

	<br />
	
	<tr>
	<td>Pinch Hitter 2</td>
	<td>Snooker</td>
	<td>Sprinter</td>
	<td>Twisted Tennis</td>

	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/pinch-hitter-2.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/snooker.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/sprinter.jpg'; ?>" /></td>
		<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/twisted-tennis.png'; ?>" /></td>

	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [pinch2]</td>
	<td><strong>Shortcode:</strong> [snooker]</td>
	<td><strong>Shortcode:</strong> [sprinter]</td>
		<td><strong>Shortcode:</strong> [twistedtennis]</td>

	</tr>

	<br />
	
	<tr>
	<td>Super Bike X</td>
	<td>Table Hockey</td></td>
	<td>Ultimate Baseball</td>
		<td>WorldCup Penalty</td>

	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/super-bike-x.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/table-hockey-extreme.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/ultimate-baseball.jpg'; ?>" /></td>
		<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/world-cup-penalty.jpg'; ?>" /></td>

	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [superbikex]</td>
	<td><strong>Shortcode:</strong> [tablehockey]</td>
	<td><strong>Shortcode:</strong> [ultimatebaseball]</td>
	<td><strong>Shortcode:</strong> [worldcuppenalty]</td>
	</tr>
</table><br /><br /><br />
<font size="2">Arcade / Cards / Boards</font>	<table style="width:100%;"  class="tg">
	<td>Rainforest Solitaire</td>
	<td>Crescent Solitaire</td>
		<td>FreeCell Grey</td>
	<td>Governor of Poker 2</td>

	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/rainforest-solitaire.png'; ?>" /></td>
		<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/crescent-solitaire.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/freecell-grey.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/governor-of-poker-2.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [rainforestsolitaire]</td>
		<td><strong>Shortcode:</strong> [crescentsol]</td>
	<td><strong>Shortcode:</strong> [freecellgrey]</td>
	<td><strong>Shortcode:</strong> [governorofpoker2]</td>
	</tr>
	<br />

	<tr>
	<td>Lightning</td>
	<td>Pokemon Tower Defense</td>
	<td>Car Twisted Dreams</td>
	<td>Pacman</td>
	</tr>
	<tr>
		<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/lightning.jpg'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/pokemon-tower-defense.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/car-twisted-dreams.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/pacman.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [lightning]</td>
	<td><strong>Shortcode:</strong> [pokemon1]</td>
	<td><strong>Shortcode:</strong> [cartwisteddreams]</td>
	<td><strong>Shortcode:</strong> [pacman]</td>
	</tr>
	<br />
	<tr>
	<td>Dragonball 1</td>
	<td>Happy Wheels</td>
	<td>Mahjong</td>
	<td>Solitaire Collection 12 Games</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/dragonball1.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/happy-wheels.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/mahjong.png'; ?>" /></td>
		<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/solitaire-collection.jpg'; ?>" /></td>

	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [dragonball1]</td>
	<td><strong>Shortcode:</strong> [happywheels]</td>
	<td><strong>Shortcode:</strong> [mahjong]</td>
		<td><strong>Shortcode:</strong> [solcollection]</td>

	</tr>
	<br />
	<tr>
	<td>Ninja Battle 3</td>
	<td>Batman Defend Gotham</td>
	<td>Call of Duty Crossfire</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/ninja-battle-3.png'; ?>" /></td>
		<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/batman-defend-gotham.png'; ?>" /></td>

	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/call-of-duty-crossfire.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [ninjabattle3]</td>
	<td><strong>Shortcode:</strong> [batmandefendgotham]</td>
	<td><strong>Shortcode:</strong> [codcrossfire]</td>
	</tr>

	<br />
	<tr>
		<td>Fall Time Sudoku</td>
	<td>Backgammon</td>
	<td>Chess</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/fall-time-sudoku.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/backgammon.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/chess.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [falltimesudoku]</td>
	<td><strong>Shortcode:</strong> [backgammon]</td>
	<td><strong>Shortcode:</strong> [chess]</td>
	</tr>
	</table><br /><br /><br /><br />
<font size="2">HD Games</font><table style="width:100%;"  class="tg"><tr>
	<td>Royal Reels</td>
	<td>Gold Diggers</td>
	<td>Ghouls Gold</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/royal-reels.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/gold-diggers.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/ghouls-gold.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [royalreels]</td>
	<td><strong>Shortcode:</strong> [golddiggers]</td>
	<td><strong>Shortcode:</strong> [ghoulsgold]</td>
	</tr>
	<br />
	<tr>
	<td>Three Wishes</td>
	<td>Heist</td>
	<td>Viking Age</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/three-wishes.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/heist.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/viking-age.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [threewishes]</td>
	<td><strong>Shortcode:</strong> [heist]</td>
	<td><strong>Shortcode:</strong> [vikingage]</td>
	</tr>
	<br />
	<tr>
	<td>Boomanji</td>
	<td>Gladiator</td>
	<td>Rock Star</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/boomanji.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/gladiator.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/rock-star.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [boomanji]</td>
	<td><strong>Shortcode:</strong> [gladiator]</td>
	<td><strong>Shortcode:</strong> [rockstar]</td>
	</tr>
	<br />
	<tr>
	<td>Lost</td>
	<td>Upon a Time</td>
	<td>Pharaoh King</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/lost.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/once-upon-a-time.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/pharaoh-king.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [lost]</td>
	<td><strong>Shortcode:</strong> [onceuponatime]</td>
	<td><strong>Shortcode:</strong> [pharaohking]</td>
	</tr>
	<br />
	<tr>
	<td>True Illusions</td>
	<td>Mad Scientist</td>
	<td>House of Fun</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/true-illusions.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/mad-scientist.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/house-of-fun.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [trueillusions]</td>
	<td><strong>Shortcode:</strong> [madscientist]</td>
	<td><strong>Shortcode:</strong> [houseoffun]</td>
	</tr>
	<br />
	<tr>
	<td>Gypsy Rose</td>
	<td>At the Copa</td>
	<td>A Night in Paris</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/gypsy-rose.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/at-the-copa.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/a-night-in-paris.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [gypsyrose]</td>
	<td><strong>Shortcode:</strong> [atthecopa]</td>
	<td><strong>Shortcode:</strong> [anightinparis]</td>
	</tr>
	<br />
	<tr>
	<td>After Night Falls</td>
	<td>Under The Bed</td>
	<td>Tycoons</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/after-night-falls.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/under-the-bed.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/tycoons.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [afternightfalls]</td>
	<td><strong>Shortcode:</strong> [underthebed]</td>
	<td><strong>Shortcode:</strong> [tycoons]</td>
	</tr>
	<br />
	<tr>
	<td>The True Sheriff</td>
	<td>Safari Sam</td>
	<td>Puppy Love</td>
	</tr>
	<tr>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/the-true-sheriff.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/safari-sam.png'; ?>" /></td>
	<td><img src="<?php echo plugin_dir_url( __FILE__ ) . '/images/puppy-love.png'; ?>" /></td>
	</tr>
	<tr>
	<td><strong>Shortcode:</strong> [thetruesheriff]</td>
	<td><strong>Shortcode:</strong> [safarisam]</td>
	<td><strong>Shortcode:</strong> [puppylove]</td>
	</tr>
	</table>
	<br />
<h3>Help to keep this plugin for free. Link to us - Say Thanks to Critic.NET from hosting the games for you.</h3>
		<div class="form-group">
			<label class="col-sm-1 control-label"></label>
			<div class="col-sm-11">
				<label style="width: 100%;">

					<input type="checkbox" onclick="wgames_click_credit_link();" id="wgames_author_linking" <?php echo wgames_Main::$settings['wgames_author_linking'] == 1? 'checked':'';?>>
					Enable it and contribute to our free games project.
				</label>
			</div>
		</div>
<p align="center">Thank you for using our free games plugin.</p>
</div>
