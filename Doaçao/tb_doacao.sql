create table if not exists tb_doacao(
    id int auto_increment not null primary key,
    nome varchar(40) not null,
    cpf varchar(14) not null,
    tel_number varchar (11) not null,
    celular varchar (11) not null, 
    endereco varchar (40) not null,
    anonimo varchar (10) null

)default charset utf8;