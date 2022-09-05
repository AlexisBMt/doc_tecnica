CREATE TABLE doc_tecnica (
  id int not null primary key auto_increment,
  fecha_recibido date,
  zona varchar(40),
  proyecto varchar(50),
  constratista varchar(50),
  subcontrata bit,
  documento varchar(100),
  estatus int,
  dias_contados int
);

insert into doc_tecnica (fecha_recibido, zona, proyecto, constratista, subcontrata, documento, estatus, dias_contados)
values ('2021/11/11', 'Veracruz', 'Proyecto 3', '093A22FDFAFKJ', 1, 'registro_obra.pdf', 1, 43),
('2021/12/02', 'Baja California', 'Proyecto 4', '093A21FDFAFKJ', 0, 'registro_obra.pdf', 1, 56),
('2021/02/01', 'Sonora', 'Proyecto 5', '093A12FDFAFKJ', 1, 'registro_obra.pdf', 1, 70),
('2021/10/23', 'Monterrey', 'Proyecto 6', '093A89FDFAFKJ', 0, 'registro_obra.pdf', 1, 60),
('2021/09/15', 'Guadalajara', 'Proyecto 6', '093B902FDFAFKJ', 1, 'registro_obra.pdf', 1, 60),
('2021/08/16', 'Chihuahua', 'Proyecto 13', '093B34FDFAFKJ', 1, 'registro_obra.pdf', 1, 45),
('2021/07/22', 'Mexico', 'Proyecto 11', '093A22GGFAFKJ', 0, 'registro_obra.pdf', 1, 56),
('2022/03/24', 'Puebla', 'Proyecto 18', '093A22ASFAFKJ', 0, 'registro_obra.pdf', 1, 39),
('2022/04/27', 'Puebla', 'Proyecto 25', '093A22ASDFFKJ', 0, 'registro_obra.pdf', 1, 45),
('2022/01/30', 'San Luis Potosi', 'Proyecto 31', '093A30DDFAFKJ', 1, 'registro_obra.pdf', 1, 87);