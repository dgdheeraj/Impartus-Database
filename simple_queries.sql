/*Selecting departments of btech*/
select d_name from department where program='btech';

/*Listing students having karma points greater than 50*/
select srn, name from student where karma_points > 50 ;

/*Listing out videos of the professor of p_id='p2'*/
select v_id,title from videos where e_id='p2';

/*selecting the forum with start date ='2019/1/14'*/ 
select f_id from discussion_forum where start_date='2019/1/14';

/*Listing students who follow the topic t2*/
select srn from student_follows_topic where t_id='t2';

/* Listing questions posted by student rn s2*/ 
select question from questions where srn='s2';

/*List out all the students following the topic ' 4E WT' */
select srn from student_follows_topic as sft, topic as t
where t.name='4E WT' and t.t_id=sft.t_id; 

/*selecting all the answer ids where upvote is 0*/
select a_id from answers where upvote = 0;

/* selecting email of professor arjun reddy*/
select email from professor where name='Arjun Reddy';

/*finding anchor teacher of course fluids*/
select anchor from courses where c_name='Fluids';