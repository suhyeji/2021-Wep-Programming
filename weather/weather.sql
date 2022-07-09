create table weather (
    num int not null auto_increment,
    city char(20) not null,
    high_temp int,
    low_temp int,
    rain_ratio int,
	rain_mm int,
    primary key(num)
);

insert into weather (city, high_temp, low_temp, rain_ratio, rain_mm) values
('과천', 12, -4, 10, 0), ('서울', 11, -5,  0, 0), ('성남', 14, -3, 20, 2),
('수원', 14, -3, 20, 2), ('용인', 15, -3, 20, 3), ('인천', 10, -5,  0, 0);
