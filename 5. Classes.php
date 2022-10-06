<?php
echo "<h3>Classes</h3>";
class Movie{
	var $title;
	private $rating;
	// constructor
	function __construct($title, $rating){
		$this->title = $title;
		$this->setRating($rating);
	}
	// functions
	function getRating(){
		return $this->rating;
	}
	function setRating($rating){
		if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
			$this->rating = $rating;
		} else{
			$this->rating = "NR";
		}
	}
	function disp(){
		echo $this->title,"<br>";
		echo $this->getRating(), "<br>";
	}
}

$movie = new Movie("Avengers", "PG-13");
$movie->disp();

//	use extend keyword for inheritance

?>