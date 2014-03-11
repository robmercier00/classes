<html>
<?php
	//include_once('Sites/json/sample.json');
	$songArray = json_decode(file_get_contents('sample.json'),true);
	for ($i = 0 ; $i < count($songArray['catalog']['song']) ; $i++) {
		echo '"' . $songArray['catalog']['song'][$i]['title'] . '" by ';
		echo "<em>" . $songArray['catalog']['song'][$i]['artist'] . "</em> has a rating of ";
		echo "<strong>" . $songArray['catalog']['song'][$i]['rating'] . "</strong><br /><br />";
	}
	echo ('<input type="input" id="firstSong" /><input type="input" id="firstArtist" /><input type="input" id="firstRating" /><br />');
	echo '<input type="input" id="secondSong" /><input type="input" id="secondArtist" /><input type="input" id="secondRating" /><br />';
	echo '<input type="input" id="thirdSong" /><input type="input" id="thirdArtist" /><input type="input" id="thirdRating" /><br />';
	echo '<input type="button" value="Add New Songs" onClick="addSongs()" />';
	//print_r($songArray);

?>
<script type="text/javascript" language="javascript">
	function addSongs() {
		var jsonSongs = '{';
		jsonSongs += '"title":' + '"' + document.getElementById('firstSong').value + '",';
		jsonSongs += '"artist":' + '"' + document.getElementById('firstArtist').value + '",';
		jsonSongs += '"rating":' + '"' + document.getElementById('firstRating').value + '"},{';
		jsonSongs += '"title":' + '"' + document.getElementById('secondSong').value + '",';
		jsonSongs += '"artist":' + '"' + document.getElementById('secondArtist').value + '",';
		jsonSongs += '"rating":' + '"' + document.getElementById('secondRating').value + '"},{';
		jsonSongs += '"title":' + '"' + document.getElementById('thirdSong').value + '",';
		jsonSongs += '"artist":' + '"' + document.getElementById('thirdArtist').value + '",';
		jsonSongs += '"rating":' + '"' + document.getElementById('thirdRating').value + '"}';

		console.log(jsonSongs);
		//sendJson(jsonSongs);
	}

	/*function sendJson() {
		xmlhttp = XMLHttpRequest();

	}*/

</script>
</html>