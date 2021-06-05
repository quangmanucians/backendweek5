-- câu a
SELECT  *
FROM teacher
JOIN user
ON teacher.user_id = user.id; 

-- câu b
SELECT  *
FROM student
JOIN user
ON student.user_id = user.id; 

-- câu c
SELECT  *
FROM courses; 

-- câu d
SELECT  *
FROM teachers
JOIN courses
ON teachers.courses_id = courses.courses_id
WHERE teachers.teacher_name = "Nguyễn Văn A"; 

-- câu e 
SELECT  *
FROM teacher
JOIN student
ON teacher.user_name = student
WHERE user_name = 'Nguyen Van A';

-- câu f 
SELECT  *
FROM companies
JOIN students
ON companies.company_id = students.company_id
JOIN classes
ON students.class_id = classes.class_id
JOIN teachers
ON classes.teacher_id = teachers.teacher_id
JOIN courses
ON courses.course_id = classes.course_id
WHERE teachers.teacher_name = 'Nguyen Van A' 
AND courses.course_year = '2020-2021' 
AND courses.course_semester = 'Hoc ky 1';

-- câu g 
SELECT  *
FROM internship_diary
JOIN students
ON internship_diary.user_id = students.user_id
JOIN user
ON students.user_id = user.user_id
WHERE user.user_name = " Nguyen Van A";

-- câu h 
SELECT  *
FROM internship_diary
JOIN courses
ON internship_diary.couse_id = courses.course_id
WHERE courses.course_year = "2020 - 2021" 
AND courses.course_semester = "1";

-- câu i
SELECT  diary_content.diary_content_teacher_comment
FROM internship_diary
JOIN student
ON student.user_id = internship_diary.user_id
JOIN user
ON student.user_id = user.id
JOIN weeks
ON weeks.internship_diary_id = internship_diary.id
JOIN courses
ON courses.course_id = internship_diary.course_id
JOIN diary_content
ON diary_content.week_id = weeks.week_id
WHERE user.user_name = 'Nguyễn Văn B' 
AND courses.course_year = "2020 - 
2021"AND courses.course_semester = "1"; 

-- câu j
SELECT  diary_content.diary_content_trainer_comment
FROM internship_diary
JOIN student
ON student.user_id = internship_diary.user_id
JOIN user
ON student.user_id = user.id
JOIN weeks
ON weeks.internship_diary_id = internship_diary.id
JOIN courses
ON courses.course_id = internship_diary.course_id
JOIN diary_content
ON diary_content.week_id = weeks.week_id
WHERE user.user_name = 'Nguyễn Văn B' 
AND courses.course_year = "2020 - 
2021"AND courses.course_semester = "1"; 