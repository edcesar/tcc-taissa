CREATE DATABASE ACCESS;
USE ACCESS;



CREATE TABLE CURSO(
	ID_CURSO INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50) NOT NULL
);

CREATE TABLE PERIODO(
	ID_PERIODO INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50) NOT NULL
);

insert into PERIODO (NOME) values
('Manhã'),
('Tarde'),
('Noite')

CREATE TABLE CARTAO(
	ID_CARTAO INT PRIMARY KEY AUTO_INCREMENT,
    ESTADO VARCHAR(50) NOT NULL
);


CREATE TABLE ADM(
	ID_ADM INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(80) NOT NULL,
    CPF CHAR(14),
    EMAIL VARCHAR(50),
    DATA_NASC CHAR(8)
);



CREATE TABLE ALUNO(	
	ID_ALUNO INT PRIMARY KEY,
    NOME VARCHAR(80) NOT NULL,
    DATA_NASC DATE NOT NULL,
    FOTO VARCHAR(255) NOT NULL,
    SERIE INT NOT NULL,
    BIOMETRIA VARCHAR(255),
    ID_CURSO INT,
    CONSTRAINT FK_ID_CURSO FOREIGN KEY 
    (ID_CURSO) REFERENCES CURSO(ID_CURSO),
    ID_PERIODO INT,
    CONSTRAINT FK_ID_PERIODO FOREIGN KEY
    (ID_PERIODO) REFERENCES PERIODO(ID_PERIODO),
	ID_CARTAO INT,
    CONSTRAINT FK_ID_CARTAO FOREIGN KEY 
    (ID_CARTAO) REFERENCES CARTAO(ID_CARTAO),
    ID_ADM INT,
    CONSTRAINT FK_ID_ADM FOREIGN KEY
    (ID_ADM) REFERENCES ADM(ID_ADM)
);

CREATE TABLE FREQUENCIA(
	ID_FREQUENCIA INT PRIMARY KEY AUTO_INCREMENT,
    HORARIO_ENTRADA DATE NOT NULL,
    HORARIO_SAIDA DATE NOT NULL,
    DIA DATE NOT NULL,
    ID_ALUNO INT,
	CONSTRAINT FK_ID_ALUNO FOREIGN KEY 
    (ID_ALUNO) REFERENCES ALUNO(ID_ALUNO)
);