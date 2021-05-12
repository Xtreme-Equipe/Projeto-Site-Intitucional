create table if not exists tb_doacao(
    id int auto_increment not null primary key,
    nome varchar(40) not null,
    cpf varchar(14) not null,
    tel_number varchar (11) not null,
    celular varchar (11) not null, 
    endereco varchar (40) not null,
    anonimo varchar (10) null

)default charset utf8;

create table if not exists tb_conteudo(
    id int auto_increment not null primary key,
    pagina varchar(255) not null,
    localizacao varchar(255) not null,
    conteudo text not null   

)default charset utf8;
INSERT INTO `tb_conteudo` (`id`, `pagina`, `localizacao`, `conteudo`) VALUES (NULL, 'formulario_doador', 'esquerda', 'Seja um voluntário do nosso centro comunitário, qualquer ajuda é válida. Não é apenas quem é “especialista” em alguma atividade que pode ser voluntário. Todos podem participar e contribuir. O que conta é a motivação solidária, o desejo de ajudar, o prazer de se sentir útil.\r\n\r\n– Você pode compartilhar apenas com as crianças os seus talentos e paixões, abrindo para elas um mundo totalmente diferente.');