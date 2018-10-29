CREATE DATABASE pratica05
  WITH ENCODING='UTF8'
   		 CONNECTION LIMIT=-1;

select current_time;

select sqrt(49);

select current_schema;
select current_database();

select current_user;


create sequence minha_seq increment by 10 minvalue 1 maxvalue 100 NO CYCLE; 

select nextval('minha_seq');
select setval('minha_seq',50);
select currval('minha_seq');
select nextval('minha_seq');
ALTER SEQUENCE minha_seq INCREMENT BY 1;

alter sequence minha_seq cycle;

create table dados_multimidia(
codigo SERIAL,
nome varchar,
tipo varchar,
oid_dados oid,
primary key(codigo));


insert into(nome, tipo, oid_dados)values('imo', 'png', lo_import('C:\Users\Jonas\Desktop\IMO interface\Asset1.png'));

INSERT INTO imagem (nome_imagem, oid_imagem)
VALUES (‘Asset1’, lo_import(‘C:\Users\Jonas\Desktop\IMO interface\Asset1.png’));


SELECT lo_export(oid_dados,
'C:\Users\Jonas\Desktop\IMO interface\Asset1.png')
FROM imagem
WHERE nome = 'imo';