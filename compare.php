<?php

class Point {
	private $x;
	private $y;

	public function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}

	public function setX($x) {
		$this->x = $x;
	}

	public function getX() {
		return $this->x;
	}

	public function setY($y) {
		$this->y = $y;
	}

	public function getY() {
		return $this->y;
	}

	public static function compare($p1, $p2) {
		return $p1 == $p2;
	}
}

$p1 = new Point(10, 20);
$p2 = new Point(10, 20);

if (Point::compare($p1, $p2)) {
	echo 'p1 and p2 are equal <br/>';
} else {
	echo 'p1 and p2 are not equal <br/>';
}

$p3 = $p2;

if (Point::compare($p2, $p3)) {
	echo 'p2 and p3 are equal <br/>';
} else {
	echo 'p2 and p3 are not equal <br/>';
}

$p4 = new Point(20, 10);

if (Point::compare($p3, $p4)) {
	echo 'p3 and p4 are equal <br/>';
} else {
	echo 'p3 and p4 are not equal <br/>';
}

$p5 = new Point(10, 20);
$p6 = $p5;

if ($p5 === $p6) {
	echo '$p5 and $p6 are identical';
} else {
	echo '$p5 and $p6 are not identical';
}

$p7 = new Point(10, 20);

if ($p5 === $p7) {
	echo '$p5 and $p7 are identical';
} else {
	echo '$p5 and $p7 are not identical';
}

?>