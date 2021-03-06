<?php 
    /*
    Plugin Name: Games
    Plugin URI: http://critic.net/wp-plugin/
    Description: Display up to 65 free HD Games in your website easily using unique shortcodes. Arcade games like Mario, Backgammon, Chess & more.
    Author: Critic Games
    Version: 2.3
    Author URI: http://critic.net/wp-plugin/
    */

add_shortcode('supermarioland', 'supermarioland');
add_shortcode('supermarioworld', 'supermarioworld');
add_shortcode('supermariobros', 'supermariobros');
add_shortcode('backyardsports', 'backyardsports');
add_shortcode('baseballteam', 'baseballteam');
add_shortcode('bicyclerun', 'bicyclerun');
add_shortcode('billiards', 'billiards');
add_shortcode('bmxextreme', 'bmxextreme');
add_shortcode('constructionbike', 'constructionbike');
add_shortcode('crescentsol', 'crescentsol');
add_shortcode('freecellgrey', 'freecellgrey');
add_shortcode('lakefishing', 'lakefishing');
add_shortcode('courtbasketbal', 'courtbasketbal');
add_shortcode('lightning', 'lightning');
add_shortcode('pinch2', 'pinch2');
add_shortcode('snooker', 'snooker');
add_shortcode('solcollection', 'solcollection');
add_shortcode('spidersol', 'spidersol');
add_shortcode('sprinter', 'sprinter');
add_shortcode('superbikex', 'superbikex');
add_shortcode('tablehockey', 'tablehockey');
add_shortcode('ultimatebaseball', 'ultimatebaseball');
add_shortcode('worldcuppenalty', 'worldcuppenalty');


function supermarioland(){
?>
<center><p><iframe name="Critic.net Super Mario Land" src="http://critic.net/game-super-mario-land" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Super Mario Land, <a href="http://critic.net/free-arcade-games/">http://critic.net/free-arcade-games/</a>.</div>' . "\n";
}
}

function supermariobros(){
?>
<center><p><iframe name="Critic.net Super Mario Bros" src="http://critic.net/game-super-mario-bros" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;">Super mario bros : <a href="http://critic.net/free-arcade-games/">http://critic.net/free-arcade-games/</a>.</div>' . "\n";
}
}

function supermarioworld(){
?>
<center><p><iframe name="Critic.net Super Mario World" src="http://critic.net/game-super-mario-world" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;">Super Mario World free game by <a href="http://critic.net/">http://critic.net/</a>.</div>' . "\n";
}
}

function backyardsports(){
?>
<center><p><iframe name="Critic.net Backyard Sports" src="http://critic.net/game-backyard-sports" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p align="center"><a href="http://critic.net/">http://critic.net/</a>.</p>' . "\n";
}
}

function baseballteam(){
?>
<center><p><iframe name="Critic.net Baseball Team" src="http://critic.net/game-baseball-team" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p>Game by <a href="http://www.critic.net/">http://www.critic.net/</a></p>' . "\n";
}
}
function bicyclerun(){
?>
<center><p><iframe name="Critic.net Bicycle Run" src="http://critic.net/game-bicycle-run" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div>Bicycle run game : <a href="http://critic.net/" target="_blank">http://critic.net/</a>.</div>' . "\n";
}
}
function billiards(){
?>
<center><p><iframe name="Critic.net Billiards" src="http://critic.net/game-billiards" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<strong>Billiards game = <a href="http://critic.net/free-arcade-games/">Free Arcade Games by Critic.net</a>.</strong>' . "\n";
}
}
function bmxextreme(){
?>
<center><p><iframe name="Critic.net BMX Extreme" src="http://critic.net/game-bmx-extreme" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/free-arcade-games/" target="_blank">http://critic.net/free-arcade-games/</a>.</div>' . "\n";
}
}


function lakefishing(){
?>
<center><p><iframe name="Critic.net Lake Fishing" src="http://critic.net/game-lake-fishing" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p align="center">Game hosted by <a href="http://www.critic.net/">http://www.critic.net/</a> - Lake Fishing.</p>' . "\n";
}
}

function freecellgrey(){
?>
<center><p><iframe name="Critic.net Freecell Grey" src="http://critic.net/game-freecell-grey" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/" title="Free Critic Games">http://critic.net/</a></p>' . "\n";
}
}
function crescentsol(){
?>
<center><p><iframe name="Critic.net Crescent Solitaire" src="http://critic.net/game-crescent-solitaire" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://www.critic.net/" title="Critic Games">http://www.critic.net/</a></div>' . "\n";
}
}

function constructionbike(){
?>
<center><p><iframe name="Critic.net Construction Bike" src="http://critic.net/game-construction-bike" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Credits: <a href="http://critic.net/">Visit http://critic.net/</a>.</div>' . "\n";
}
}

function worldcuppenalty(){
?>
<center><p><iframe name="Critic.net World Cup Penalty" src="http://critic.net/game-world-cup-penalty" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div>Source: <a href="http://critic.net/" target="_blank">http://critic.net/</a>.</div>' . "\n";
}
}
function ultimatebaseball(){
?>
<center><p><iframe name="Critic.net Ultimate Baseball" src="http://critic.net/game-ultimate-baseball" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div name="link">Ultimate Baseball game, <a href="http://critic.net/">http://critic.net/</a>.</div>' . "\n";
}
}

function tablehockey(){
?>
<center><p><iframe name="Critic.net Table Hockey" src="http://critic.net/game-table-hockey" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p>Table Hockey provided by <a href="http://critic.net/" target="_blank">Critic</a> games.</p>' . "\n";
}
}

function superbikex(){
?>
<center><p><iframe name="Critic.net Super Bike X" src="http://critic.net/game-super-bike-x" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/" target="_blank">http://critic.net</a>.</p>' . "\n";
}
}

function sprinter(){
?>
<center><p><iframe name="Critic.net Sprinter" src="http://critic.net/game-sprinter" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/" target="_blank">Critic.net</a>.</p>' . "\n";
}
}

function spidersol(){
?>
<center><p><iframe name="Critic.net Spider Solitaire" src="http://critic.net/game-spider-solitaire" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;">Spider solitaire game from <a href="http://www.critic.net/">www.critic.net</a>.</div>' . "\n";
}
}

function solcollection(){
?>
<center><p><iframe name="Critic.net Solitaire Collection" src="http://critic.net/game-solitaire-collection" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Free solitaire by <a href="http://critic.net/">http://critic.net/</a>.</div>' . "\n";
}
}

function snooker(){
?>
<center><p><iframe name="Critic.net Snooker" src="http://critic.net/game-snooker" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;">The snooker game is hosted via <a href="http://critic.net/">Critic Games</a>.</div>' . "\n";
}
}

function pinch2(){
?>
<center><p><iframe name="Critic.net Pinch Hitter 2" src="http://critic.net/game-pinch-hitter-2" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;">Pinch Hitter 2 free game by <a href="http://critic.net/">http://critic.net/</a>.</div>' . "\n";
}
}

function lightning(){
?>
<center><p><iframe name="Critic.net Lightning" src="http://critic.net/game-lightning" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Lightning game hosted free at <a href="http://www.critic.net" title="Games at Critic.net">http://www.critic.net</a>.</div>' . "\n";
}
}
function courtbasketbal(){
?>
<center><p><iframe name="Critic.net Court Basketball" src="http://critic.net/game-court-basketball" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;">Court Basketball Game : <a href="http://critic.net/" title="Free online games at Critic.net">critic.net/</a>.</div>' . "\n";
}
}

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
echo '<div>Free Chess by <a href="http://critic.net/chess/" target="_blank">http://critic.net/chess/</a>.</div>' . "\n";
}
}

function backgammon(){
?>
<center><p><iframe name="Critic.net Backgammon" src="http://critic.net/game-backgammon" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p align="right"><a href="http://critic.net/backgammon/" target="_blank">http://critic.net/backgammon/</a></p>' . "\n";
}
}

function batmandefendgotham(){
?>
<center><p><iframe name="Critic.net Batman Defend Gotham" src="http://critic.net/game-batman-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<center><a href="http://critic.net/batman/">http://critic.net/batman/</a> by Critic.</center>' . "\n";
}
}

function codcrossfire(){
?>
<center><p><iframe name="Critic.net Call of duty Crossfire" src="http://critic.net/game-cod-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;">Game credits : <a href="http://critic.net/call-of-duty-crossfire/">http://critic.net/call-of-duty-crossfire/</a></div>' . "\n";
}
}

function falltimesudoku(){
?>
<center><p><iframe name="Critic.net" src="http://critic.net/game-sudoko-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/sudoku/">http://critic.net/sudoku/</a>.</p>' . "\n";
}
}

function ninjabattle3(){
?>
<center><p><iframe name="Critic.net" src="http://critic.net/game-ninja-3" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p align="center">Game source: <a href="http://critic.net/ninja-battle-3/">http://critic.net/ninja-battle-3/</a></div>' . "\n";
}
}

function mahjong(){
?>
<center><p><iframe name="Critic.net Mahjong" src="http://critic.net/game-mahjong" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p align="center"><a href="http://critic.net/mahjong/">http://critic.net/mahjong/</a></div>' . "\n";
}
}

function happywheels(){
?>
<center><p><iframe name="Critic.net Happy Wheels" src="http://critic.net/game-happy-wheels" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div align="right"><a href="http://critic.net/happy-wheels/">http://critic.net/happy-wheels/</a></div>' . "\n";
}
}

function dragonball1(){
?>
<center><p><iframe name="Critic.net Dragon Ball 1" src="http://critic.net/game-dbz-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/dragon-ball-1/">http://critic.net/dragon-ball-1/</a></div>' . "\n";
}
}

function pacman(){
?>
<center><p><iframe name="Critic.net Pacman" src="http://critic.net/game-pacman" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/pacman/">http://critic.net/pacman/</a></div>' . "\n";
}
}

function cartwisteddreams(){
?>
<center><p><iframe name="Critic.net Car Twisted Dreams" src="http://critic.net/game-car-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/car-twisted-dreams/">http://critic.net/car-twisted-dreams/</a>.</div>' . "\n";
}
}

function pokemon1(){
?>
<center><p><iframe name="Critic.net Pokemon 1" src="http://critic.net/game-pokemon-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/pokemon/" target="_blank">http://critic.net/pokemon/</a></p>' . "\n";
}
}

function governorofpoker2(){
?>
<center><p><iframe name="Critic.net Governor 2" src="http://critic.net/game-governor-2" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/texas-hold-em-poker/">http://critic.net/texas-hold-em-poker/</a>.</p>' . "\n";
}
}

function rainforestsolitaire(){
?>
<center><p><iframe name="Critic.net Rainforest Solitaire" src="http://critic.net/game-solitaire-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/rainforest-solitaire/">http://critic.net/rainforest-solitaire/</a></p>' . "\n";
}
}

function twistedtennis(){
?>
<center><p><iframe name="Critic.net" src="http://critic.net/game-twisted-tennis" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<center>Twisted Tennis = <a href="http://critic.net/twisted-tennis/">http://critic.net/twisted-tennis/</a>.</div>' . "\n";
}
}

function spiderman3(){
?>
<center><p><iframe name="Critic.net Spider Man 3" src="http://critic.net/game-spider-man-3" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/rainforest-solitaire/">http://critic.net/rainforest-solitaire/</a>.</p>' . "\n";
}
}

function sonic1(){
?>
<center><p><iframe name="Critic.net Sonic 1" src="http://critic.net/game-sonic-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/sonic/">http://critic.net/sonic/</a>.</div>' . "\n";
}
}

function tomandjerrypuzzle(){
?>
<center><p><iframe name="Critic.net Tom 1" src="http://critic.net/game-tom-1" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/tom-and-jerry-puzzle/">http://critic.net/tom-and-jerry-puzzle/</a></div>' . "\n";
}
}

function safarisam(){
?>
<center><p><iframe name="Safari Sam" src="http://critic.net/game-safari-sam" style="background-color:#000" width="100%" height="550" marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/safari-sam/">http://critic.net/safari-sam/</a></div>' . "\n";
}
}
function thetruesheriff(){
?>
<center><p><iframe name="The True Sheriff" src="http://critic.net/game-the-true-sheriff" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/the-true-sheriff/">The True Sheriff</a></p>' . "\n";
}
}
function tycoons(){
?>
<center><p><iframe name="Tycoons" src="http://critic.net/game-tycoons" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/tycoons/">http://critic.net/tycoons/</a></div>' . "\n";
}
}
function afternightfalls(){
?>
<center><p><iframe name="After Night Falls" src="http://critic.net/game-after-night-falls" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<center><a href="http://critic.net/after-night-falls/">http://critic.net/after-night-falls/</a></center>' . "\n";
}
}
function underthebed(){
?>
<center><p><iframe name="Under The Bed" src="http://critic.net/game-under-the-bed" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/under-the-bed/">http://critic.net/under-the-bed/</a></div>' . "\n";
}
}
function atthecopa(){
?>
<center><p><iframe name="At the Copa" src="http://critic.net/game-at-the-copa" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/at-the-copa/">http://critic.net/at-the-copa/</a></p>' . "\n";
}
}
function gypsyrose(){
?>
<center><p><iframe name="Gypsy Rose" src="http://critic.net/game-gypsy-rose" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/gypsy-rose/">http://critic.net/gypsy-rose/</a></p>' . "\n";
}
}
function houseoffun(){
?>
<center><p><iframe name="House of fun" src="http://critic.net/game-house-of-fun" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/house-of-fun/">http://critic.net/house-of-fun/</a></div>' . "\n";
}
}

function madscientist(){
?>
<center><p><iframe name="Mad Scientist" src="http://critic.net/game-mad-scientist" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/mad-scientist/">http://critic.net/mad-scientist/</a>.</div>' . "\n";
}
}

function puppylove(){
?>
<center><p><iframe name="Puppy Love" src="http://critic.net/game-puppy-love" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/puppy-love/">http://critic.net/puppy-love/</a></div>' . "\n";
}
}

function trueillusions(){
?>
<center><p><iframe name="True Illusions" src="http://critic.net/game-true-illusions" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/true-illusions/">http://critic.net/true-illusions/</a>.</div>' . "\n";
}}

function anightinparis(){
?>
<center><p><iframe name="A night in paris" src="http://critic.net/game-a-night-in-paris" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/a-night-in-paris/">http://critic.net/a-night-in-paris/</a></div>' . "\n";
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
echo '<div style="text-align: right;"><a href="http://critic.net/pharaoh-king/">http://critic.net/pharaoh-king/</a></div>' . "\n";
}
}
function onceuponatime(){
?>
<center><p><iframe name="Once upon a time" src="http://critic.net/game-once-upon-a-time" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/once-upon-a-time/">http://critic.net/once-upon-a-time/</a></div>' . "\n";
}
}
function lost(){
?>
<center><p><iframe name="Lost" src="http://critic.net/game-lost" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;"><a href="http://critic.net/lost/">http://critic.net/lost/</a></div>' . "\n";
}
}
function rockstar(){
?>
<center><p><iframe name="Rock Star" src="http://critic.net/game-rock-star" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/rock-star/">http://critic.net/rock-star/</a></div>' . "\n";
}
}
function gladiator(){
?>
<center><p><iframe name="Gladiator" src="http://critic.net/game-gladiator" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: right;"><a href="http://critic.net/gladiator/">http://critic.net/gladiator/</a></div>' . "\n";
}
}
function boomanji(){
?>
<center><p><iframe name="Boomanji" src="http://critic.net/game-boomanji" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: left;"><a href="http://critic.net/boomanji/">http://critic.net/boomanji/</a>.</div>' . "\n";
}
}
function heist(){
?>
<center><p><iframe name="Heist" src="http://critic.net/game-heist" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div style="text-align: center;"><a href="http://critic.net/heist/">http://critic.net/heist/</a></div>' . "\n";
}
}
function vikingage(){
?>
<center><p><iframe name="Viking Age" src="http://critic.net/game-viking-age" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/viking-age/">http://critic.net/viking-age/</a></p>' . "\n";
}
}

function threewishes(){
?>
<center><p><iframe name="Three Wishes" src="http://critic.net/game-three-wishes" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<p><a href="http://critic.net/three-wishes/" target="_blank">http://critic.net/three-wishes/</a></p>' . "\n";
}
}

function ghoulsgold(){
?>
<center><p><iframe name="Ghouls Gold" src="http://critic.net/game-ghouls-gold" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/ghouls-gold/">http://critic.net/ghouls-gold/</a></div>' . "\n";
}
}

function royalreels(){
?>
<center><p><iframe name="Royal Reels" src="http://critic.net/game-royal-reels" style="background-color:#000"width="100%" height="550"marginwidth="0" marginheight="0" scrolling="no" border="0" frameborder="0"></iframe></p></center>
<?php
if (wgames_Main::$settings['wgames_author_linking'] == '1') {
echo '<div><a href="http://critic.net/royal-reels/">http://critic.net/royal-reels/</a></div>' . "\n";
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