<?php

namespace itbe;

class Vimeo extends api{


	function search($keyword){
		include 'VimeoAPI.php';
		$consKey = "aa14f452fdfeb91dd811b4768b3b560f65750174";
		$secret = "7403f4b8f1b93c4791bda7ef08e4693f563b6d47";
		$vimeo = new \phpVimeo($consKey,$secret);
		$videos = $vimeo->call('vimeo.videos.search', array('query' => $keyword));
		echo json_encode($videos);
	}
}
?>