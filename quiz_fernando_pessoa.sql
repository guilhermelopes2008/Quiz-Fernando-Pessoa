-- Criar base de dados
CREATE DATABASE IF NOT EXISTS quiz_fernando_pessoa;
USE quiz_fernando_pessoa;

-- Tabela de utilizadores
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de rankings
CREATE TABLE rankings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    score INT NOT NULL,
    total_questions INT DEFAULT 40,
    time_taken INT, -- tempo em segundos
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Tabela de perguntas
CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question_text TEXT NOT NULL,
    question_type ENUM('direct', 'multiple', 'truefalse') NOT NULL,
    correct_answer TEXT NOT NULL,
    options JSON, -- Para perguntas de múltipla escolha
    explanation TEXT -- Explicação da resposta
);

-- Tabela de respostas dos utilizadores
CREATE TABLE user_answers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    question_id INT NOT NULL,
    user_answer TEXT,
    is_correct BOOLEAN,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (question_id) REFERENCES questions(id) ON DELETE CASCADE
);
CREATE TABLE scores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    score INT NOT NULL,
    level VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);


-- Inserir perguntas de resposta direta (1-27)
INSERT INTO questions (question_text, question_type, correct_answer, explanation) VALUES
('Quem foi Fernando Pessoa?', 'direct', 'Um dos maiores poetas portugueses do século XX.', 'Fernando Pessoa é considerado um dos maiores poetas da língua portuguesa.'),
('Em que ano nasceu Fernando Pessoa?', 'direct', '1888', 'Fernando Pessoa nasceu a 13 de junho de 1888.'),
('Em que cidade nasceu Fernando Pessoa?', 'direct', 'Lisboa', 'Nasceu em Lisboa, Portugal.'),
('O que são heterónimos?', 'direct', 'Personagens fictícias com personalidade, biografia e estilo literário próprios.', 'Diferente de pseudónimos, os heterónimos têm vida e estilo próprios.'),
('Quais são os três heterónimos mais conhecidos de Pessoa?', 'direct', 'Alberto Caeiro, Ricardo Reis e Álvaro de Campos', 'Estes são os três heterónimos principais de Fernando Pessoa.'),
('Qual é o heterónimo considerado o "mestre"?', 'direct', 'Alberto Caeiro', 'Alberto Caeiro é considerado o mestre pelos outros heterónimos.'),
('Que heterónimo é engenheiro e escreve com influência futurista?', 'direct', 'Álvaro de Campos', 'Álvaro de Campos era engenheiro naval e influenciado pelo futurismo.'),
('Qual é o heterónimo com estilo clássico e linguagem elevada?', 'direct', 'Ricardo Reis', 'Ricardo Reis tinha um estilo clássico e horaciano.'),
('Qual o estilo de escrita de Alberto Caeiro?', 'direct', 'Simples, direto, ligado à natureza', 'Caeiro pregava uma visão simples e direta da realidade.'),
('Que visão do mundo tem Alberto Caeiro?', 'direct', 'Realista e sensorial, rejeita a metafísica', 'Caeiro acreditava em ver as coisas como são, sem interpretações.'),
('Onde viveu Alberto Caeiro, segundo a sua biografia fictícia?', 'direct', 'No campo, apesar de ter nascido em Lisboa', 'Vivia uma vida simples no campo.'),
('Como se caracteriza a escrita de Ricardo Reis?', 'direct', 'Equilibrada, racional, com influência da Antiguidade clássica', 'Estilo horaciano, com influência latina.'),
('Em que país se exilou Ricardo Reis, segundo Pessoa?', 'direct', 'No Brasil', 'Exilou-se no Brasil por motivos políticos.'),
('Qual a filosofia associada a Ricardo Reis?', 'direct', 'Estoicismo e epicurismo moderado', 'Filosofia de aceitação serena do destino.'),
('O que defende Ricardo Reis na sua poesia?', 'direct', 'A serenidade, a razão e a aceitação do destino', 'Defende o carpe diem de forma moderada.'),
('Qual o tom da poesia de Álvaro de Campos na fase futurista?', 'direct', 'Exaltado, intenso e celebrando a modernidade', 'Fase influenciada pelo futurismo de Marinetti.'),
('Qual é o poema mais conhecido de Álvaro de Campos?', 'direct', '"Ode Triunfal"', 'Poema que celebra a máquina e a modernidade.'),
('Em que línguas escrevia Fernando Pessoa além do português?', 'direct', 'Inglês e francês', 'Escreveu bastante em inglês, especialmente na juventude.'),
('O que é um semi-heterónimo?', 'direct', 'Uma figura com personalidade literária próxima do autor real (ex: Bernardo Soares)', 'Bernardo Soares é considerado um semi-heterónimo.'),
('Qual a obra atribuída a Bernardo Soares?', 'direct', 'Livro do Desassossego', 'Obra fundamental da literatura portuguesa.'),
('Que heterónimo diz "pensar é estar doente dos olhos"?', 'direct', 'Alberto Caeiro', 'Frase emblemática da filosofia de Caeiro.'),
('Qual é o heterónimo que representa melhor a emoção intensa?', 'direct', 'Álvaro de Campos', 'Campos representa a emotividade e a modernidade.'),
('Qual é o heterónimo que valoriza o equilíbrio e a contenção?', 'direct', 'Ricardo Reis', 'Reis prega a moderação e o equilíbrio.'),
('Que heterónimo tem uma visão angustiada e moderna da vida?', 'direct', 'Álvaro de Campos', 'Especialmente na sua fase decadentista.'),
('Como se chama a fase mais pessimista de Álvaro de Campos?', 'direct', 'Fase intimista ou melancólica', 'Fase de desencanto com a modernidade.'),
('O que distingue um heterónimo de um pseudónimo?', 'direct', 'O heterónimo tem personalidade e estilo próprios; o pseudónimo é apenas um nome falso', 'Diferença fundamental na obra pessoana.'),
('Que heterónimo representa o "eu racional"?', 'direct', 'Ricardo Reis', 'Reis representa a razão e o classicismo.');

-- Inserir perguntas de múltipla escolha (28-30)
INSERT INTO questions (question_text, question_type, correct_answer, options, explanation) VALUES
('Qual destes heterónimos celebra a modernidade e a máquina?', 'multiple', '2', '["Ricardo Reis", "Alberto Caeiro", "Álvaro de Campos", "Bernardo Soares"]', 'Álvaro de Campos era influenciado pelo futurismo.'),
('Qual dos seguintes temas é central na poesia de Ricardo Reis?', 'multiple', '2', '["Angústia existencial", "Tecnologia e futuro", "Harmonia e contenção", "Simplicidade da natureza"]', 'Reis defendia a harmonia e o equilíbrio clássico.'),
('Qual destes é considerado um semi-heterónimo de Fernando Pessoa?', 'multiple', '1', '["Álvaro de Campos", "Bernardo Soares", "Alberto Caeiro", "António Mora"]', 'Bernardo Soares é considerado um semi-heterónimo.');

-- Inserir perguntas de verdadeiro/falso (31-40)
INSERT INTO questions (question_text, question_type, correct_answer, explanation) VALUES
('Fernando Pessoa nasceu no Porto.', 'truefalse', 'false', 'Fernando Pessoa nasceu em Lisboa.'),
('Alberto Caeiro rejeitava a razão e a filosofia.', 'truefalse', 'true', 'Caeiro defendia uma visão sensorial direta da realidade.'),
('Ricardo Reis era defensor da monarquia.', 'truefalse', 'true', 'Reis era monárquico e exilou-se por isso.'),
('Álvaro de Campos escreveu poemas ligados à natureza e ao campo.', 'truefalse', 'false', 'Campos era urbano e modernista.'),
('O ortónimo de Fernando Pessoa é Álvaro de Campos.', 'truefalse', 'false', 'Ortónimo é o próprio Fernando Pessoa.'),
('Ricardo Reis utilizava uma linguagem rebuscada e clássica.', 'truefalse', 'true', 'Linguagem clássica e horaciana.'),
('Álvaro de Campos viveu em Londres e formou-se em engenharia naval.', 'truefalse', 'true', 'Segundo sua biografia fictícia.'),
('Alberto Caeiro usava muita pontuação e metáforas complexas.', 'truefalse', 'false', 'Estilo simples e direto, sem complexidades.'),
('Bernardo Soares é um heterónimo de Fernando Pessoa.', 'truefalse', 'false', 'É considerado um semi-heterónimo.'),
('Fernando Pessoa foi um dos principais autores do modernismo português.', 'truefalse', 'true', 'Figura central do modernismo em Portugal.');