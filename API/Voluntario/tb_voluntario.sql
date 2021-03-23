create table if not exists tb_voluntario(
    id int auto_increment not null primary key,
    nome varchar(40) not null,
    nascimento varchar (11) not null,
    cpf varchar(14) not null,
    rg varchar(14) not null,
    tel_number varchar (11),
    celular varchar (11) not null, 
    email varchar (40) not null,
    voluntario varchar (12) null,
    especialidade varchar (80)

)default charset utf8;