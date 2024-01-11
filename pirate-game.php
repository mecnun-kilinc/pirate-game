<?php

// function starts
function pirates ($countOfPirates, $totalGold) {
        
		// Define variables and arrays here
		$countPiratesVotes = [];
		$evetOylar  = 0;
		$hayirOylar = 0;
		$arrayGold  = [];
		$votesCount = 1;

		// Pirates are voting 
		for($i = 1; $i <= $countOfPirates; $i++) {
			// We put pirates votes in to array 
			$countPiratesVotes[] = mt_rand(0,1);
		}

		// We are counting yes and no votes 
		foreach ($countPiratesVotes as $vote) {
		   if ($vote) {
		   	 $evetOylar++;
		   }  else {
		   	 $hayirOylar++;
		  }
		}
       
	    // Senior is using his right to vote.
        if ($hayirOylar == $evetOylar) {
             // Senior gave a yes vote here. 
		     $evetOylar+1; 
		 }
		   
        // If no votes are bigger than yes, enter here.
		if ($hayirOylar > $evetOylar) {	
			// Senior killed and make voting again.
			$votesCount++;
			pirates($countOfPirates-1, 100);
		}  else {
			// We are distributing the gold coins.
			for($i = 1; $i <= $countOfPirates; $i++) { 			
				  $arrayGold[] =  $totalGold / $countOfPirates; // Equal amounts of gold were distributed
			}				
		}			
	
		if ($arrayGold) {
        echo "<br>>>>>>>> <b>" .$votesCount ."</b> Vote Results<br>";
        echo "<br>Number of Game " . 10-$countOfPirates . "    ";
		echo "Total Gold  100<br>";
		 
		$key = 0;
        echo "<hr >";		 
		foreach($arrayGold as $gold){
			$key++;
			echo 	"<b> $key </b> Pirates : </b> took number of $gold  gold <br />";
		}
	 }
		

} // function ends

 
  pirates(10,100);
  echo "<hr ><b>Game Completed</b><br>";