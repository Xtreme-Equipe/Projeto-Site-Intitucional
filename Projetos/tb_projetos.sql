create table if not exists tb_projetos(
    id int auto_increment not null primary key,
    nome_empreendedor varchar(40) not null,
    nome_empresa varchar(40) not null,
    cpf varchar(14) not null,
    email varchar (40) not null,
    tel_number varchar (11),
    celular varchar (11) not null, 
    cidade varchar (40) not null,
    estado varchar (40) not null,
    fisica_juridica varchar (10) null,
    descriçao varchar (230) not null

)default charset utf8;