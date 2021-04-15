create table if not exists tb_contato(
    id int auto_increment not null primary key,
    nome varchar(40) not null,
    celular varchar (11) not null, 
    email varchar (40) not null,
    descriçao varchar (230) not null
)default charset utf8;