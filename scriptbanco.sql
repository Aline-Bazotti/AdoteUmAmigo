create database adoteamigo;

create table Tabela_Usuario(
id serial not null,
nome varchar(50),
endereco varchar(70),
login varchar(20),
senha varchar(255),
ong boolean,
telefone integer,
email varchar(30),
CONSTRAINT idusuario_pk PRIMARY KEY (id)
);

create table Tabela_Animal(
id serial not null,
descricao varchar(50),
sexo char(1),
castrado boolean,
raca varchar(20),
adotado boolean,
apadrinhar boolean,
idUsuario integer not null,
foto varchar(255),
especie varchar(50),
deficiencia boolean,
historico varchar(255),
CONSTRAINT idanimal_pk PRIMARY KEY (id),
CONSTRAINT id_usuario_fk FOREIGN KEY (idUsuario) REFERENCES Tabela_Usuario(id)
);