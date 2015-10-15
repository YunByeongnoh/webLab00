<!DOCTYPE html>
<html>

<head>
	<title>Music Library</title>
	<meta charset="utf-8" />
	<link href="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/images/4/music.jpg" type="image/jpeg" rel="shortcut icon" />
	<link href="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/pResources/music.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>My Music Page</h1>

	<!-- Ex 1: Number of Songs (Variables) -->
	<?php 
	$song_count = 5678;
	$hour = $song_count/10;?>
	<p>
		I love music.
		I have <?=$song_count?> total songs,
		which is over <?=$hour?> hours of music!
	</p>


	

	<!-- Ex 2: Top Music News (Loops) -->
	<!-- Ex 3: Query Variable -->
	<div class="section">
		<h2>Yahoo! Top Music News</h2>
		
		<ol>
			<?php 
			$news_pages = (int)$_GET["newspages"];
			if (empty($_GET)){
				$news_pages = 5;
			};?>

			<?php for ($i = 1; $i < $news_pages+1; $i++) {?>
			<li><a href=http://music.yahoo.com/news/archive/?page=<?=$i?>>Page <?=$i?></a></li>
			<?php };?>
		</ol>
	</div>

	<!-- Ex 4: Favorite Artists (Arrays) -->
	<!-- Ex 5: Favorite Artists from a File (Files) -->
	<div class="section">
		<h2>My Favorite Artists</h2>


		<ol>
			<?php
			foreach (file("favorite.txt") as $name) {
				$tokens = explode(" ", $name);
				$merges = implode("_", $tokens);
				?>
				<li><a href="http://en.wikipedia.org/wiki/<?=$merges?>"><?=$name?></a></li>
				<?php
			}
			?>
		</ol>
	</div>

	<!-- Ex 6: Music (Multiple Files) -->
	<!-- Ex 7: MP3 Formatting -->
	<div class="section">
		<h2>My Music and Playlists</h2>


		<ul id="musiclist">
			<?php
			
			$Songs = glob("problem4/musicPHP/songs/*.mp3");
			foreach ($Songs as $Songsfile) {
				//$song = file_get_contents($Songsfile);
				$Songname = basename($Songsfile);
				$size = (int)(filesize($Songsfile)/ 1024);
				array_push($sizearray, $song);
				array_push($songarray, $Songname);
				$combine = array_combine($songarray, $sizearray);
				?>
				
				<?php
				$size_original[] = (int)(filesize($Songsfile)/ 1024);
				$size_sort[] = (int)(filesize($Songsfile)/ 1024);
				rsort($size_sort);
			}
			for ($i=0; $i <7 ; $i++) { 
				$position = array_search($size_sort[$i], $size_original);
				
				?>
				<li class=mp3item ><a href="<?=$Songs[$position]?>"</a><?=basename($Songs[$position])?>(<?=$size_original[$position]?> KB)</li>
				<?php
			}
			?>
			
		</ul>
		<!-- Exercise 8: Playlists (Files) -->

		<?php
		$m3u = glob("problem4/musicPHP/songs/*.m3u");
		$m3u = array_reverse($m3u);
		$listcount = 0;
		foreach ($m3u as $m3uSongs){
			$count = 0;
			$listcount +=1;
			$List = strrpos($m3uSongs, "m3u");
			$m3uname = basename("$m3uSongs");
			?>
			<li class=playlistitem> <?=$m3uname?> </li>
			<ul>
				<?php
				if (($file = fopen("$m3uSongs", "r")) !== FALSE) {
					
					while (($data = fgetcsv($file)) !== FALSE) {
						foreach($data as $value) {

							$List = strrpos($value,"mp3");


							if($List === FALSE){
								echo "";
							}else {
								$count = $count+1;
								?>
								
								<?php
								if ($listcount ==1) {
									$test[]= $value;
								}else if($listcount ==2){
									$test2[] = $value;
								}else if($listcount == 3){
									$test3[] = $value;
								}
								
							}
						};
						//$test[] = "//";
					}
				}
				shuffle($test);
				shuffle($test2);
				shuffle($test3);
				for ($i=0; $i < $count ; $i++) { 
					if ($listcount ==1) {
						?>
						<li><?=$test[$i]?></li>
						<?php
					}else if ($listcount ==2) {
						?>
						<li><?=$test2[$i]?></li>
						<?php
					}else if ($listcount ==3) {
						?>
						<li><?=$test3[$i]?></li>
						<?php
					}
				}
				?>
			</ul>
			<?php
		};
		
		?>
	</div>

	<div>
		<a href="http://validator.w3.org/check/referer">
			<img src="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/images/w3c-html.png" alt="Valid HTML5" />
		</a>
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img src="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/images/w3c-css.png" alt="Valid CSS" />
		</a>
	</div>
</body>
</html>
