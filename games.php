<?php 
    /*
    Plugin Name: Games
    Plugin URI: http://critic.net/wp-plugin/
    Description: Display up to 45 free HD Games in your website easily using unique shortcodes. Arcade games like Mario, Solitaire, Backgammon, Chess & more.
    Author: Critic Games
    Version: 2.2
    Author URI: http://critic.net/wp-plugin/
    */

add_shortcode('pacman', 'pacman');
add_shortcode('cartwisteddreams', 'cartwisteddreams');
add_shortcode('pokemon1', 'pokemon1');
add_shortcode('chess', 'chess');
add_shortcode('backgammon', 'backgammon');
add_shortcode('batmandefendgotham', 'batmandefendgotham');
add_shortcode('codcrossfire', 'codcrossfire');
add_shortcode('falltimesudoku', 'falltimesudoku');
add_shortcode('ninjabattle3', 'ninjabattle3');
add_shortcode('mahjong', 'mahjong');
add_shortcode('happywheels', 'happywheels');
add_shortcode('dragonball1', 'dragonball1');
add_shortcode('pharaohking', 'pharaohking');
add_shortcode('onceuponatime', 'onceuponatime');
add_shortcode('lost', 'lost');
add_shortcode('rockstar', 'rockstar');
add_shortcode('gladiator', 'gladiator');
add_shortcode('boomanji', 'boomanji');
add_shortcode('safarisam', 'safarisam');
add_shortcode('heist', 'heist');
add_shortcode('vikingage', 'vikingage');
add_shortcode('threewishes', 'threewishes');
add_shortcode('ghoulsgold', 'ghoulsgold');
add_shortcode('royalreels', 'royalreels');
add_shortcode('safarisam', 'safarisam');
add_shortcode('thetruesheriff', 'thetruesheriff');
add_shortcode('tycoons', 'tycoons');
add_shortcode('afternightfalls', 'afternightfalls');
add_shortcode('underthebed', 'underthebed');
add_shortcode('atthecopa', 'atthecopa');
add_shortcode('gypsyrose', 'gypsyrose');
add_shortcode('puppylove', 'puppylove');
add_shortcode('anightinparis', 'anightinparis');
add_shortcode('houseoffun', 'houseoffun');
add_shortcode('madscientist', 'madscientist');
add_shortcode('trueillusions', 'trueillusions');
add_shortcode('governorofpoker2', 'governorofpoker2');
add_shortcode('rainforestsolitaire', 'rainforestsolitaire');
add_shortcode('twistedtennis', 'twistedtennis');
add_shortcode('spiderman3', 'spiderman3');
add_shortcode('sonic1', 'sonic1');
add_shortcode('tomandjerrypuzzle', 'tomandjerrypuzzle');

function chess(){
?>
<center><p><iframe name="Critic.net Chess" src="http://critic.net/game-chess" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;"><a href="http://critic.net/chess/">http://critic.net/chess/</a> - Free chess game from <a href="http://critic.net/">Critic.net</a>.</div>' . "\n";
}
}

function backgammon(){
?>
<center><p><iframe name="Critic.net Backgammon" src="http://critic.net/game-backgammon" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/backgammon">http://critic.net/backgammon/</a> - The backgammon game is hosted at Critic.net.</div>' . "\n";
}
}

function batmandefendgotham(){
?>
<center><p><iframe name="Critic.net Batman Defend Gotham" src="http://critic.net/game-batman-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;"><a href="http://critic.net/batman/">http://critic.net/batman/</a> game by www.criitc.net.</div>' . "\n";
}
}

function codcrossfire(){
?>
<center><p><iframe name="Critic.net Call of duty Crossfire" src="http://critic.net/game-cod-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Free game from <a href="http://critic.net/call-of-duty-crossfire/">http://critic.net/call-of-duty-crossfire/</a>.</div>' . "\n";
}
}

function falltimesudoku(){
?>
<center><p><iframe name="Critic.net" src="http://critic.net/game-sudoko-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Game is hosted by <a href="http://critic.net/sudoku/">http://critic.net/sudoku/</a>.</div>' . "\n";
}
}

function ninjabattle3(){
?>
<center><p><iframe name="Critic.net" src="http://critic.net/game-ninja-3" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">This game is hosted at <a href="http://critic.net/ninja-battle-3/">http://critic.net/ninja-battle-3/</a>.</div>' . "\n";
}
}

function mahjong(){
?>
<center><p><iframe name="Critic.net Mahjong" src="http://critic.net/game-mahjong" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;">Hosted for free at <a href="http://critic.net/mahjong/">http://critic.net/mahjong/</a>.</div>' . "\n";
}
}

function happywheels(){
?>
<center><p><iframe name="Critic.net Happy Wheels" src="http://critic.net/game-happy-wheels" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;">Game is hosted by <a href="http://critic.net/happy-wheels/">http://critic.net/happy-wheels/</a>.</div>' . "\n";
}
}

function dragonball1(){
?>
<center><p><iframe name="Critic.net Dragon Ball 1" src="http://critic.net/game-dbz-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;">Free Game by <a href="http://critic.net/dragon-ball-1/">http://critic.net/dragon-ball-1/</a>.</div>' . "\n";
}
}

function pacman(){
?>
<center><p><iframe name="Critic.net Pacman" src="http://critic.net/game-pacman" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Hosted at <a href="http://critic.net/">http://critic.net/</a>.</div>' . "\n";
}
}

function cartwisteddreams(){
?>
<center><p><iframe name="Critic.net Car Twisted Dreams" src="http://critic.net/game-car-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Free Game Hosted by <a href="http://critic.net/">http://critic.net/</a>.</div>' . "\n";
}
}

function pokemon1(){
?>
<center><p><iframe name="Critic.net Pokemon 1" src="http://critic.net/game-pokemon-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Game is hosted from <a href="http://www.critic.net/">http://www.critic.net/</a>.</div>' . "\n";
}
}

function governorofpoker2(){
?>
<center><p><iframe name="Critic.net Governor 2" src="http://critic.net/game-governor-2" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Governor of Poker 2 is a hosted game from <a href="http://critic.net/online-slots/">Critic.net</a>.</div>' . "\n";
}
}

function rainforestsolitaire(){
?>
<center><p><iframe name="Critic.net Rainforest Solitaire" src="http://critic.net/game-solitaire-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;"><a href="http://critic.net/rainforest-solitaire/">Rainforest Solitaire game</a> from <a href="http://critic.net/online-slots/" target="_blank">http://critic.net/</a>.</div>' . "\n";
}
}

function twistedtennis(){
?>
<center><p><iframe name="Critic.net" src="http://critic.net/game-twisted-tennis" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Twisted Tennis game by <a href="http://critic.net/twisted-tennis/">http://critic.net/twisted-tennis/</a>.</div>' . "\n";
}
}

function spiderman3(){
?>
<center><p><iframe name="Critic.net Spider Man 3" src="http://critic.net/game-spider-man-3" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;">Free Spider Man Game from <a href="http://critic.net/online-slots/" title="Critic.NET">Critic Games</a>.</div>' . "\n";
}
}

function sonic1(){
?>
<center><p><iframe name="Critic.net Sonic 1" src="http://critic.net/game-sonic-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;">Sonic game hosted for free at <a href="http://critic.net/online-slots/" title="Critic Games">www.critic.net</a>.</div>' . "\n";
}
}

function tomandjerrypuzzle(){
?>
<center><p><iframe name="Critic.net Tom 1" src="http://critic.net/game-tom-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;">Free Game by <a href="http://critic.net/">http://critic.net/</a>.</div>' . "\n";
}
}

function safarisam(){
?>
<center><p><iframe name="Safari Sam" src="http://critic.net/game-safari-sam" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/safari-sam/">Safari Sam</a> provided by <a href="http://critic.net/">Critic.Net</a></div>' . "\n";
}
}
function thetruesheriff(){
?>
<center><p><iframe name="The True Sheriff" src="http://critic.net/game-the-true-sheriff" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/the-true-sheriff/">The True Sheriff</a> game by <a href="http://critic.net/">http://critic.net/</a></div>' . "\n";
}
}
function tycoons(){
?>
<center><p><iframe name="Tycoons" src="http://critic.net/game-tycoons" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/tycoons/">Tycoons</a> betsoft game provided by <a href="http://www.critic.net/">www.critic.net</a></div>' . "\n";
}
}
function afternightfalls(){
?>
<center><p><iframe name="After Night Falls" src="http://critic.net/game-after-night-falls" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/after-night-falls/">After Night Falls</a> game from <a href="http://critic.net" target="_blank">http://critic.net</a></div>' . "\n";
}
}
function underthebed(){
?>
<center><p><iframe name="Under The Bed" src="http://critic.net/game-under-the-bed" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/under-the-bed/">Under the bed</a> game by <a href="http://critic.net/online-slots/">http://critic.net/online-slots/</a></div>' . "\n";
}
}
function atthecopa(){
?>
<center><p><iframe name="At the Copa" src="http://critic.net/game-at-the-copa" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;"><a href="http://critic.net/at-the-copa/">At the copa</a> from <a href="http://critic.net/online-slots/">Critic.net</a></div>' . "\n";
}
}
function gypsyrose(){
?>
<center><p><iframe name="Gypsy Rose" src="http://critic.net/game-gypsy-rose" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;"><a href="http://critic.net/gypsy-rose/">Gypsy rose</a> game from <a href="http://critic.net/online-slots/">Critic.NET</a></div>' . "\n";
}
}
function houseoffun(){
?>
<center><p><iframe name="House of fun" src="http://critic.net/game-house-of-fun" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;"><a href="http://critic.net/house-of-fun/">House of fun</a> game by <a href="http://critic.net/online-slots/">Critic slots.</a></div>' . "\n";
}
}

function madscientist(){
?>
<center><p><iframe name="Mad Scientist" src="http://critic.net/game-mad-scientist" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/mad-scientist/">Mad Scientist</a> game is created by Betsoft & provided by <a href="http://critic.net/">http://critic.net</a>.</div>' . "\n";
}
}

function puppylove(){
?>
<center><p><iframe name="Puppy Love" src="http://critic.net/game-puppy-love" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/puppy-love/">Puppy Love</a> is a Betsoft game provided by <a href="http://critic.net/">http://critic.net/</a></div>' . "\n";
}
}

function trueillusions(){
?>
<center><p><iframe name="True Illusions" src="http://critic.net/game-true-illusions" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/true-illusions/">True Illusions</a> is a free game by Betsoft.</div>' . "\n";
}}

function anightinparis(){
?>
<center><p><iframe name="A night in paris" src="http://critic.net/game-a-night-in-paris" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/a-night-in-paris/">A night in paris</a> free game from <a href="http://critic.net">http://critic.net</a></div>' . "\n";
}}


function critic_plugin_menu(){
    	add_options_page('Critic Options', 'Critic Games', 'manage_options', 'critic-plugin-menu', 'critic_plugin_options');
}

add_action('admin_menu','critic_plugin_menu');

function critic_plugin_options(){
    	include('settings.php');
}

function pharaohking(){
?>
<center><p><iframe name="Pharaoh King" src="http://critic.net/game-pharaoh-king" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;"><a href="http://critic.net/pharaoh-king/">http://critic.net/pharaoh-king/</a> provided by <a href="http://critic.net/">Critic.Net</a></div>' . "\n";
}
}
function onceuponatime(){
?>
<center><p><iframe name="Once upon a time" src="http://critic.net/game-once-upon-a-time" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/once-upon-a-time/">http://critic.net/once-upon-a-time/</a> game by <a href="http://critic.net/">http://critic.net/</a></div>' . "\n";
}
}
function lost(){
?>
<center><p><iframe name="Lost" src="http://critic.net/game-lost" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;"><a href="http://critic.net/lost/">http://critic.net/lost/</a> betsoft game provided by <a href="http://www.critic.net/">www.critic.net</a></div>' . "\n";
}
}
function rockstar(){
?>
<center><p><iframe name="Rock Star" src="http://critic.net/game-rock-star" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/rock-star/">http://critic.net/rock-star/</a> game from <a href="http://critic.net" target="_blank">http://critic.net</a></div>' . "\n";
}
}
function gladiator(){
?>
<center><p><iframe name="Gladiator" src="http://critic.net/game-gladiator" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;"><a href="http://critic.net/gladiator/">http://critic.net/gladiator/</a> game by <a href="http://critic.net/online-slots/">http://critic.net/online-slots/</a></div>' . "\n";
}
}
function boomanji(){
?>
<center><p><iframe name="Boomanji" src="http://critic.net/game-boomanji" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;"><a href="http://critic.net/boomanji/">http://critic.net/boomanji/</a> game created by Betsoft.</div>' . "\n";
}
}
function heist(){
?>
<center><p><iframe name="Heist" src="http://critic.net/game-heist" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/heist/">http://critic.net/heist/</a> game free by <a href="http://critic.net/">Critic.NET</a></div>' . "\n";
}
}
function vikingage(){
?>
<center><p><iframe name="Viking Age" src="http://critic.net/game-viking-age" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/viking-age/">http://critic.net/viking-age/</a> free game from <a href="http://critic.net/online-slots/">Critic Slots.</a></div>' . "\n";
}
}

function threewishes(){
?>
<center><p><iframe name="Three Wishes" src="http://critic.net/game-three-wishes" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/three-wishes/">http://critic.net/three-wishes/</a> game is created by Betsoft & promoted by <a href="http://critic.net/">critic</a>.</div>' . "\n";
}
}

function ghoulsgold(){
?>
<center><p><iframe name="Ghouls Gold" src="http://critic.net/game-ghouls-gold" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/ghouls-gold/">http://critic.net/ghouls-gold/</a> is a betsoft game promoted by <a href="http://critic.net/">Critic</a></div>' . "\n";
}
}

function royalreels(){
?>
<center><p><iframe name="Royal Reels" src="http://critic.net/game-royal-reels" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/royal-reels/">http://critic.net/royal-reels/</a> is a free game by Betsoft.</div><br />' . "\n";
}}


// Include Files
$files = array(
    '/classes/wgames-module',
    '/classes/wgames-main',
    '/classes/wgames-show',
    '/classes/wgames-setting',
    '/includes/admin-notice-helper/admin-notice-helper'
);

foreach ($files as $file) {
    require_once plugin_dir_path( __FILE__ ).$file.'.php';
}
if ( class_exists( 'wgames_Main' ) ) {
    wgames_Main::get_instance();
 }

?>