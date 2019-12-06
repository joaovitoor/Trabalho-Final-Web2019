CREATE TABLE estado(
    
	id_estado integer primary key AUTO_INCREMENT,
    nome varchar(30) not null,
    uf char(2),
    regiao varchar(20) not null,
    total_pop integer not null,
    homens_pop integer not null,
    mulheres_pop integer not null

)