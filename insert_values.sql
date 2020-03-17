insert into department values('d1' , 'cse', 'btech', 'b-block ground floor');
insert into department values('d2' , 'ece', 'btech', 'b-block third floor');
insert into department values('d3' , 'mech', 'btech', 'b-block fifth floor');
insert into department values('d4' , 'eee', 'btech', 'b-block seventh floor');
insert into department values('d5' , 'biotech', 'btech', 'tech park ground floor');
insert into department values('d6' , 'cse', 'mtech', 'b-block second floor');
insert into department values('d7' , 'ece', 'mtech', 'b-block fourth floor');
insert into department values('d8' , 'mech', 'mtech', 'b-block sixth floor');
insert into department values('d9' , 'eee', 'mtech', 'b-block eigth floor');
insert into department values('d10' , 'biotech', 'mtech', 'tech park first floor');

insert into student values('s1','dheeraj', '2', '1000','d1');
insert into student values('s2','suhas', '2', '500','d2');
insert into student values('s3','mukesh', '4', '0','d3');
insert into student values('s4','nishchay', '4', '200','d4');
insert into student values('s5','suman', '6', '2000','d5');
insert into student values('s6','manikanta', '2', '1000','d6');
insert into student values('s7','samarth', '2', '500','d7');
insert into student values('s8','syed', '4', '0','d8');
insert into student values('s9','kushal', '4', '200','d9');
insert into student values('s10','chandan', '4', '2000','d10');
insert into student values('s11','deeksha', '2', '1000','d1');
insert into student values('s12','pavithra', '2', '500','d2');
insert into student values('s13','vismaya', '4', '0','d3');
insert into student values('s14','swathi', '4', '200','d4');
insert into student values('s15','bhoomika', '6', '2000','d5');
insert into student values('s16','vishrutha', '2', '1000','d6');
insert into student values('s17','namratha', '2', '500','d7');
insert into student values('s18','dhanya', '2', '0','d8');
insert into student values('s19','ananya', '4', '200','d9');
insert into student values('s20','gowri', '4', '2000','d10');

insert into courses values('c1', 'Web Tech','2019','4','Shruti',NULL,'d1' );
insert into courses values('c2', 'Computer Organisation ','2019','4','Pallavi',NULL,'d2' );
insert into courses values('c3', 'Thermodynamics','2019','4','Ajay',NULL,'d3' );
insert into courses values('c4', 'PCB','2019','4','Jyothi',NULL,'d4' );
insert into courses values('c5', 'Zoology','2019','4','Sharath',NULL,'d5' );
insert into courses values('c6', 'Cryptography','2019','6','Kumar',NULL,'d1' );
insert into courses values('c7', 'Digital Design','2019','6','Divya',NULL,'d2' );
insert into courses values('c8', 'Aerospace','2019','6','Krishna',NULL,'d3' );
insert into courses values('c9', 'Electromagnetism','2019','6','Sanjesh',NULL,'d4' );
insert into courses values('c10', 'DNA','2019','6','Aruna',NULL,'d5' );
insert into courses values('c11', 'Artificial Intelligence','2019','2','Snehanshu',NULL,'d6' );
insert into courses values('c12', 'Advanced PCB','2019','2','Ravikanth',NULL,'d7' );
insert into courses values('c13', 'Advanced Thermodynamics','2019','2','Anuradha',NULL,'d8' );
insert into courses values('c14', 'AC Machines','2019','2','Bhuvan',NULL,'d9' );
insert into courses values('c15', 'Advanced Zoology','2019','2','Mithun',NULL,'d10' );
insert into courses values('c16', 'Machine Learning','2019','4','Subash',NULL,'d6' );
insert into courses values('c17', 'Advanced VLSI','2019','4','Neel',NULL,'d7' );
insert into courses values('c18', 'Fluids','2019','4','Karthik',NULL,'d8' );
insert into courses values('c19', 'Power Electronic','2019','4','Somnath',NULL,'d9' );
insert into courses values('c20', 'Botany','2019','4','Arjun Reddy',NULL,'d10' );

insert into professor values('p1','Shruti','shruti@pes.edu',NULL,'Web Technology','d1');
insert into professor values('p2','Pallavi','pallavi@pes.edu',NULL,'Computer Organisation','d2');
insert into professor values('p3','Ajay','ajay@pes.edu',NULL,'Thermodynamics','d3');
insert into professor values('p4','Jyothi','jyothi@pes.edu',NULL,'PCB','d4');
insert into professor values('p5','Sharath','sharath@pes.edu',NULL,'Zoology','d5');
insert into professor values('p6','Kumar','kumar@pes.edu',NULL,'Cryptography','d1');
insert into professor values('p7','Divya','divya@pes.edu',NULL,'PCB','d2');
insert into professor values('p8','Krishna','krishna@pes.edu',NULL,'Aerospace','d3');
insert into professor values('p9','Sanjesh','sanjesh@pes.edu',NULL,'Magnetism','d4');
insert into professor values('p10','Aruna','aruna@pes.edu',NULL,'DNA','d5');
insert into professor values('p11','Snehanshu','sh@pes.edu',NULL,'ML','d6');
insert into professor values('p12','Ravikanth','rv@pes.edu',NULL,'CO','d7');
insert into professor values('p13','Anuradha','anuradha@pes.edu',NULL,'Thermodynamics','d8');
insert into professor values('p14','Bhuvan','bhu@pes.edu',NULL,'AC Machines','d9');
insert into professor values('p15','Mithun','mith@pes.edu',NULL,'DNA','d10');
insert into professor values('p16','Subash','subh@pes.edu',NULL,'AI','d6');
insert into professor values('p17','Neel','neel@pes.edu',NULL,'PCB','d7');
insert into professor values('p18','Karthik','ktik@pes.edu',NULL,'Fluids','d8');
insert into professor values('p19','Somnath','somnath@pes.edu',NULL,'DC Machines','d9');
insert into professor values('p20','Arjun Reddy','arjun@pes.edu',NULL,'Zoology','d10');

insert into videos values('v1','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p1');
insert into videos values('v2','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p2');
insert into videos values('v3','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p3');
insert into videos values('v4','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p4');
insert into videos values('v5','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p5');
insert into videos values('v6','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p6');
insert into videos values('v7','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p7');
insert into videos values('v8','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p8');
insert into videos values('v9','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p9');
insert into videos values('v10','Introduction',60,'Intro to Subject',NULL,'2019-1-14','p10');

insert into discussion_forum values('f1','2019-1-14','v1');
insert into discussion_forum values('f2','2019-1-14','v2');
insert into discussion_forum values('f3','2019-1-14','v3');
insert into discussion_forum values('f4','2019-1-14','v4');
insert into discussion_forum values('f5','2019-1-14','v5');
insert into discussion_forum values('f6','2019-1-14','v6');
insert into discussion_forum values('f7','2019-1-14','v7');
insert into discussion_forum values('f8','2019-1-14','v8');
insert into discussion_forum values('f9','2019-1-14','v9');
insert into discussion_forum values('f10','2019-1-14','v10');

insert into topic values('t1','Shruti','4E WT',1,1,'c1');
insert into topic values('t2','Pallavi','4D CO',1,1,'c2');
insert into topic values('t3','Ajay','4C Th',1,1,'c3');
insert into topic values('t4','Jyothi','4B PCB',1,1,'c4');
insert into topic values('t5','Sharath','4A Zoo',1,1,'c5');
insert into topic values('t6','Kumar','6A Cry',1,1,'c6');
insert into topic values('t7','Divya','6B DD',1,1,'c7');
insert into topic values('t8','Krishna','6C AS',1,1,'c8');
insert into topic values('t9','Sanjesh','6D EM',1,1,'c9');
insert into topic values('t10','Aruna','6E DNA',1,1,'c10');
insert into topic values('t11','Snehanshu','2D AI',1,1,'c11');
insert into topic values('t12','Ravikanth','2C Adv PCB',1,1,'c12');
insert into topic values('t13','Anuradha','2B Adv Th',1,1,'c13');
insert into topic values('t14','Bhuvan','2A ACM',1,1,'c14');
insert into topic values('t15','Mithun','2E Adv Zoo',1,1,'c15');
insert into topic values('t16','Subhash','4A ML',1,1,'c16');
insert into topic values('t17','Neel','4B Adv VLSI',1,1,'c17');
insert into topic values('t18','Karthik','4C Fluids',1,1,'c18');
insert into topic values('t19','Somnath','4D PE',1,1,'c19');
insert into topic values('t20','Arjun Reddy','4E Bot',1,1,'c20');

insert into questions values('q1','What is WebTech?','2019-1-14','p1','f1',NULL);
insert into questions values('q2','What is CO?','2019-1-14',NULL,'f2','s1');
insert into questions values('q3','What is Thermodynamics?','2019-1-14',NULL,'f3','s2');
insert into questions values('q4','What is PCB?','2019-1-14','p8','f4',NULL);
insert into questions values('q5','How to Zoology?','2019-1-14',NULL,'f5','s15');
insert into questions values('q6','What is Cryptography?','2019-1-14',NULL,'f6','s6');
insert into questions values('q7','What is Digital Design?','2019-1-14',NULL,'f7','s7');
insert into questions values('q8','What is Aerospace?','2019-1-14',NULL,'f8','s8');
insert into questions values('q9','What is Electromagnetism?','2019-1-14',NULL,'f9','s10');
insert into questions values('q10','What is DNA?','2019-1-14','p12','f10',NULL);

insert into answers values('a1','2019-1-14',0,'It is the name of the Course',NULL,'q1','p1');
insert into answers values('a2','2019-1-14',0,'It is the name of the Course',NULL,'q2','p2');
insert into answers values('a3','2019-1-14',0,'It is the name of the Course',NULL,'q3','p3');
insert into answers values('a4','2019-1-14',0,'It is the name of the Course',NULL,'q4','p4');
insert into answers values('a5','2019-1-14',0,'It is the name of the Course',NULL,'q5','p5');
insert into answers values('a6','2019-1-14',0,'It is the name of the Course',NULL,'q6','p6');
insert into answers values('a7','2019-1-14',0,'It is the name of the Course',NULL,'q7','p7');
insert into answers values('a8','2019-1-14',0,'It is the name of the Course',NULL,'q8','p8');
insert into answers values('a9','2019-1-14',0,'It is the name of the Course',NULL,'q9','p9');
insert into answers values('a10','2019-1-14',0,'It is the name of the Course',NULL,'q10','p10');

insert into  admin values('admin','password');

insert into  student_follows_topic values('s1','t1');
insert into  student_follows_topic values('s2','t1');
insert into  student_follows_topic values('s3','t2');
insert into  student_follows_topic values('s4','t2');
insert into  student_follows_topic values('s1','t3');
insert into  student_follows_topic values('s2','t3');
insert into  student_follows_topic values('s3','t4');
insert into  student_follows_topic values('s4','t4');
insert into  student_follows_topic values('s5','t5');

insert into  student_views_videos values('s3','v1');
insert into  student_views_videos values('s4','v1');
insert into  student_views_videos values('s5','v2');
insert into  student_views_videos values('s6','v2');
insert into  student_views_videos values('s7','v3');
insert into  student_views_videos values('s3','v3');
insert into  student_views_videos values('s4','v4');
insert into  student_views_videos values('s5','v4');
insert into  student_views_videos values('s6','v5');

insert into  professor_offers_courses values('p1','c2');
insert into  professor_offers_courses values('p3','c4');
insert into  professor_offers_courses values('p5','c6');
insert into  professor_offers_courses values('p7','c8');
insert into  professor_offers_courses values('p9','c10');
insert into  professor_offers_courses values('p11','c12');
insert into  professor_offers_courses values('p13','c14');
insert into  professor_offers_courses values('p15','c16');
insert into  professor_offers_courses values('p1','c1');
insert into  professor_offers_courses values('p3','c3');
insert into  professor_offers_courses values('p5','c5');
insert into  professor_offers_courses values('p7','c7');
insert into  professor_offers_courses values('p9','c9');
insert into  professor_offers_courses values('p11','c11');
insert into  professor_offers_courses values('p13','c13');
insert into  professor_offers_courses values('p15','c15');









