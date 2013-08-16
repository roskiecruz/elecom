--SQL statements that I might need

--selects all user whose degree is 'ABCA'
SELECT *
	FROM student_info AS si NATURAL JOIN degree_program AS dp 
		WHERE si.deg_prog_id = '18' 
mysql_query("

SELECT *
	FROM student_info AS si NATURAL JOIN degree_program AS dp 
		WHERE si.deg_prog_id = '18' 

");
		
		
		
		-- 'si.deg_prog_id' selects a particular ID of a student
		

mysql_query("

INSERT INTO `tally` (student_id, candidate_name) VALUES
( '" . $var1 . "' , '" . $pres ."' ),
( '" . $var1 . "' , '" . $LA ."' ),
( '" . $var1 . "' , '" . $Batch ."' );

")	

