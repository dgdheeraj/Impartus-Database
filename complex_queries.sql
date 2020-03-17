/*Find name who answered the question with q_id=q1*/
(select name from professor as p,questions as q where q_id='q1' and p.e_id=q.e_id)  
UNION 
(select name from student as s,questions as q where q_id='q1' and s.srn=q.e_id);


/*Find name of the karma points of suhas who is following the topic t_id=t1*/
select karma_points from student as s
where s.srn =(select srn from student_follows_topic as sft where sft.t_id='t1' INTERSECT select srn from student as s where s.name='suhas');

/*Find the department name of the professor in the video of v_id='v1'*/
select d_name from department 
where d_id = (select d_id from professor as p,videos as v  
                where v_id='v1' and p.e_id=v.e_id);

/* List the students who are in the same department as professor Aruna*/
select name from student as s
where s.d_id=(select d_id from professor as p where p.name='Aruna');

/*list the names of the students who have viewed the video with v_id='v5' m*/
select name from student as s
where s.srn= (select srn from student_views_videos where v_id='v5');

/*find department name of the course of the topic having topic t_id='t2'*/
select d_name from department as d 
where d_id=(select d_id from courses as c,topic as t 
                where t_id='t2' and t.c_id=c.c_id);

/*List the anchor of all courses offered by professor Shruti*/
select anchor from courses as c,professor_offers_courses as poc 
where c.c_id=poc.c_id and poc.e_id= (select e_id from professor where name='Shruti');

/*List all the answers answered by professor ajay*/
select answer from answers 
where e_id=(select e_id from professor where name='Ajay');

/* Display the name of the persons who answered questions in forum f1*/
(select name from professor as p,questions as q where f_id='f1' and q.e_id=p.e_id) 
UNION
(select name from student as s,questions as q where f_id='f1' and q.srn=s.srn); 

/*List all the topic of the course with course name= 'Web Tech'*/
select t_id,name from topic 
where c_id=(select c_id from courses where c_name='Web Tech');