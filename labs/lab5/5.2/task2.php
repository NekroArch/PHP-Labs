<?php
	function myfun($columns,$rows)
	{
		if(is_int($rows)==true && is_int($columns)==true){
			echo '<table border="0">';
    	for ($tr = 1; $tr <= $rows; $tr++)
		{
		    // Проходим по каждой ячейке строки
		    echo '<tr>';
		    for($td = 1; $td <= $columns; $td++)
		    {
		    	if ($tr===1 or $td===1)
		       // echo $td * $tr, ' | ';
		        echo '<td  style="color:#06d9f5; font-weight: bold; font-size:20px; width: 92px; padding:10px; background-color:
				#fd03e5; text-align:center">' . $tr*$td .'</td>';
		        else
		        {
		        	 echo '<td style="color:white;  font-size:18px; width: 92px; padding:10px; background-color:#6067ef; text-align:center">' . $tr*$td .'</td>';
		        }
		    }

		        echo '</tr>';
		}
			echo '</table>';}
		else
		{
			echo 'числа не целые';
		}

	}


echo myfun(4, 3);
?>
