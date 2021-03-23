create table if not exists tb_participantes(
    id int auto_increment not null primary key,
    nome varchar(40) not null,
    nome_pai varchar (40),
    nascimento varchar (11) not null,
    nome_mae varchar (40) not null,
    cpf varchar(14) not null,
    tel_number varchar (11),
    celular varchar (11) not null, 
    email varchar (40) not null,
    redesocial varchar (12) null,
    youtube varchar (10) null,
    outros varchar (10) null,
    especifique varchar (80)

)default charset utf8;