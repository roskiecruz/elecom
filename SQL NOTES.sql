--SQL statements that I might need

--selects all user whose degree is 'ABCA'
SELECT *
	FROM student_info AS si NATURAL JOIN degree_program AS dp 
		WHERE si.deg_prog_id = '18' -- 'si.deg_prog_id' selects a particular ID of a student
		
