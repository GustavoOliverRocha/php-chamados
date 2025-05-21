CREATE TABLE `chamado` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `status` TINYINT(1) DEFAULT 1,
  `prioridade` TINYINT(1) NOT NULL,
  `setor_solicitante` int,
  `setor_atendente` int,
  `usuario_solicitante` int,
  `usuario_atendente` int,
  `assunto` varchar(200) NOT NULL,
  `desc` longtext,
  `dt_fechamento` date,
  `tempo_aberto` int,
  `gestor_id` int,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE `chamado_mensagem` (
  `id` int NOT NULL,
  `usuario_id` int NOT NULL,
  `chamado_id` int NOT NULL,
  `mensagem` longtext NOT NULL,
  `ticketstatus` TINYINT(1) DEFAULT 0,
  `atendente_lida` TINYINT(1) DEFAULT 1,
  `solicitante_lida` TINYINT(1) DEFAULT 1,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE `chamado_anexo` (
  `id` int NOT NULL,
  `chamado_id` int NOT NULL COMMENT 'Se preenchido anexo pertence ao chamado',
  `resposta_id` int NOT NULL COMMENT 'Se preenchido anexo pertence a resposta do chamado',
  `ext` varchar(20),
  `dir` varchar(200) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE `setor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL COMMENT 'Nome do setor',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

INSERT INTO `setor` (`nome`) VALUES
('Recursos Humanos'),
('Financeiro'),
('TI - Suporte Técnico'),
('TI - Desenvolvimento'),
('Comercial'),
('Marketing'),
('Jurídico'),
('Logística'),
('Operações'),
('Atendimento ao Cliente');

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `setor` int NOT NULL,
  `login` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`setor`) REFERENCES `setor`(`id`)
);

INSERT INTO `user` (`nome`, `cpf`, `setor`, `login`, `senha`) VALUES
('Ana Paula Souza', '12345678901', 1, 'ana.souza', 'senha123'),
('Bruno Almeida', '23456789012', 2, 'bruno.almeida', 'senha123'),
('Carla Mendes', '34567890123', 3, 'carla.mendes', 'senha123'),
('Daniel Costa', '45678901234', 4, 'daniel.costa', 'senha123'),
('Elaine Rocha', '56789012345', 5, 'elaine.rocha', 'senha123'),
('Felipe Martins', '67890123456', 6, 'felipe.martins', 'senha123'),
('Gabriela Lima', '78901234567', 7, 'gabriela.lima', 'senha123'),
('Henrique Dias', '89012345678', 8, 'henrique.dias', 'senha123'),
('Isabela Nunes', '90123456789', 9, 'isabela.nunes', 'senha123'),
('João Pedro', '01234567890', 10, 'joao.pedro', 'senha123');
