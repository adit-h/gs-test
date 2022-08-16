<?php

Class Hero {

	/*
	 * Check if Number is Prime
	 */
	public function checkNumber($num)
	{
	    if($num == 1)
	    {
	        return false;
	    }
	    for ($i = 2; $i * $i <= $num; $i++)
	    {
	        if ($num % $i == 0)
	        {
	            return false;
	        }
	    }
	    return true;
	}

	/*
	 * Count sum of first $r Prime number
	 */
	public function numberSum($r)
	{
		$c = 1;		// counter
		$i = 2;
	    $sum = 0;
	    while ($c < $r)
	    {
	        // Check number
	        $isOk = $this->checkNumber($i);
	        if ($isOk)
	        {
	            // Sum the number
	            $sum += $i;
	            $c++;
	        }
	        $i++;
	    }
	    return $sum;
	}

	/*
	 *	Count the kill for the year
	 */
	public function countKill($year) {
		$res = 1;

		if ($year == 1) {
			$res = 1;
		} else {
			$res = $this->numberSum($year-1);
			$res += 2;
		}

		return $res;
	}

	public function training() {
		for ($y=1; $y<=10; $y++) {
			$result = $this->countKill($y);

			echo "year $y is $result kill <br>";
		}
	}

	/*
	 * Read from input file
	 * first line is number of test cases
	 * next line  
	 */
	public function readMagic() {
		$res = [];
		$fh = fopen('input.txt','r');
		//$count = fgets($fh);	// get first line
		while ($line = fgets($fh)) {
		  //echo($line);
		  $res[] = $line;
		}
		fclose($fh);

		return $res;
	}

	/*
	 * Count average number
	 */
	public function slash($p1, $p2) {
		$res = 0;
		$y1 = intval($p1->getYOD()) - intval($p1->getAOD());
		$y2 = intval($p2->getYOD()) - intval($p2->getAOD());

		if ($y1 > 0 && $y2 > 0) {
			$res = ($this->countKill($y1) + $this->countKill($y2)) / 2;
		} else {
			$res = -1;
		}

		return $res;
	}
}