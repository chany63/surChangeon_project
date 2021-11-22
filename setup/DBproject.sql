drop table hospitalized;
drop table bedinfo;
drop table meditask;
drop table patient;
drop table employee;

create table employee(emp_no char(10) primary key not null, emp_name char(20) not null, emp_phone char(20), emp_type char(20) not null);
create table patient(pat_no char(10) primary key not null, pat_name char(20) not null, pat_phone char(20));
create table meditask(task_no char(10) primary key, pat_no char(10), disease char(30), emp_no char(10), medication char(20), medi_date char(10), foreign key(pat_no) references patient(pat_no) on delete cascade, foreign key(emp_no) references employee(emp_no) on delete cascade);
create table bedinfo(bed_no char(5) primary key not null, room_no char(5) not null, room_call char(20) not null);
create table hospitalized(pat_no char(10) primary key, pat_name char(20), hosp_date char(10), bed_no char(5), foreign key(pat_no) references patient(pat_no) on delete cascade on update cascade, foreign key(bed_no) references bedinfo(bed_no) on delete cascade);

insert into employee values ('1001', '전홍찬', '01063109906', '의사');
insert into employee values ('1002', '홍길동', '01011111111', '물리치료사');
insert into employee values ('1003', '이세경', '01022222222', '간호사');

insert into patient values ('551', '김민수', '01011111112');
insert into patient values ('523', '김철수', '01011111113');
insert into patient values ('124', '김진수', '01011111114');
insert into patient values ('131', '김길수', '01011111115');
insert into patient values ('521', '김민수', '01011111116');
insert into patient values ('216', '김범수', '01011111117');
insert into patient values ('687', '김고수', '01011111118');
insert into patient values ('318', '김경수', '01011111119');

insert into meditask values ('1', '523', '양다리에 쥐남', '1002', '전기치료', '211122');
insert into meditask values ('2', '551', '손목 골절', '1001', '수술', '211124');
insert into meditask values ('3', '124', '허리디스크', '1003', '주사', '211121');
insert into meditask values ('4', '551', '무릎관절 뻐근', '1001', '약처방', '211120');

insert into bedinfo values ('1','401호','#00041');
insert into bedinfo values ('2','401호','#00041');
insert into bedinfo values ('3','402호','#00042');
insert into bedinfo values ('4','402호','#00042');
insert into bedinfo values ('5','403호','#00043');
insert into bedinfo values ('6','403호','#00043');
insert into bedinfo values ('7','501호','#00051');
insert into bedinfo values ('8','501호','#00051');
insert into bedinfo values ('9','502호','#00052');
insert into bedinfo values ('10','502호','#00052');
insert into bedinfo values ('11','503호','#00053');
insert into bedinfo values ('12','503호','#00053');

insert into hospitalized values ('124', '김진수', '211005', '12');
insert into hospitalized values ('521', '김민수', '211027', '4');
insert into hospitalized values ('687', '김고수', '211105', '2');
insert into hospitalized values ('318', '김경수', '211118', '3');
