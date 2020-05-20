-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 20-Maio-2020 às 18:04
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_animematch`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_anime`
--

DROP TABLE IF EXISTS `tb_anime`;
CREATE TABLE IF NOT EXISTS `tb_anime` (
  `id_anime` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `img_anime` text NOT NULL,
  `Autor` varchar(100) NOT NULL,
  PRIMARY KEY (`id_anime`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_anime`
--

INSERT INTO `tb_anime` (`id_anime`, `nome`, `genre`, `descricao`, `img_anime`, `Autor`) VALUES
(1, 'Naruto Clássico', 'Ação, Artes Marciais, Aventura, Comédia, Fantasia, Shounen', 'Naruto Uzumaki é um menino que vive em Konohagakure no Sato ou simplesmente Konoha ou Vila Oculta da Folha, a vila ninja do País do Fogo. Quando ainda bebê, Naruto teve aprisionada em seu corpo a Kyuubi no Youko por Minato Namikaze (quarto Hokage, e seu pai), com a finalidade de salvar a Vila da Folha. Desde então, Naruto é visto por muitas pessoas como um monstro, não só pelos familiares das pessoas mortas pela Kyuubi, mas também por pessoas que não toleram suas brincadeiras, já que o mesmo é extremamente hiperativo, incompreendido e solitário. Naruto sonha em se tornar o Hokage de sua vila, um ninja poderoso e respeitado, para assim poder ser reconhecido por todos. Ele entra na academia ninja, onde sofre com as notas baixas, mas é ajudado por seu professor, Iruka Umino, que posteriormente se torna seu amigo. Consegue finalmente se tornar Gennin, e a partir daí passa a ser ensinado por um Jounin, Kakashi Hatake, e forma uma equipe com Sasuke Uchiha (que no começo não se dão bem) e Sakura Haruno, sua grande paixão....', 'https://animesonline.games/wp-content/uploads/2019/01/naruto-classico-dublado-todos-os-episodios-animes-online-games.jpg', 'Masashi Kishimoto.'),
(2, 'Naruto Shippuden', 'Ação, Artes Marciais, Aventura, Comédia, Shounen, Super Poder', 'Dois anos e meio se passaram após a partida de Uzumaki Naruto e Jiraiya da vila de Konoha, para um treinamento a parte com Naruto. Logo ao voltar à vila os primeiros a encontrá-lo foram Sakura e Konohamaru. Agora Naruto e seus amigos não tem apenas que se preocupar com o resgate de Sasuke, mas também com uma organização chamada Akatsuki, que está atrás dos Jinchuurikis (ninjas que carregam um Bijuu em seus corpos... junto a isso inumeros outros acontecimentos ocorrem ao longo da série.', 'https://4icdn.com/?src=img/animes/BrfN-large.jpg&w152', 'Masashi Kishimoto.'),
(3, 'Bleach', 'Ação, Comédia, Shounen, Sobrenatural, Super Poder', 'A história conta com Kurosaki Ichigo como personagem principal. Após uma série de incidentes ele acaba se tornando um Shinigami, que são responsáveis pelo fluxo de almas do mundo real até a Soul Society, assim como combater os espíritos malígnos, Hollows. Porém, conforme ele começa a se envolver com o mundo espiritual, ele acaba no meio de uma trama que ameaça a existência de ambos os mundos.', 'https://animedao.com/images/bleach.jpg', 'Tite Kubo'),
(4, 'Love Live! School Idol Project', ' Comédia, Drama, Escolar, Musical', 'O Colégio Otonokizaka está em crise! Com o número de estudantes inscritos caindo mais e mais a cada ano, a escola está se preparando para fechar. Mas Honoka Kosaka ama sua escola e para atrair mais estudantes, ela decide iniciar um \"grupo escolar de idol\", que certamente irá atrair a atenção do público. Para tornar este sonho uma realidade, ela reúne suas amigas e colegas próximas para fazer a melhor unidade ídolo possível.', 'https://i.pinimg.com/236x/69/53/0d/69530db80765acd9abda1212835ed0ae.jpg', 'Yatate Hajime');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_genre`
--

DROP TABLE IF EXISTS `tb_genre`;
CREATE TABLE IF NOT EXISTS `tb_genre` (
  `genero` varchar(255) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `user_pesquisa` int(11) DEFAULT NULL,
  `pesquisa` int(11) DEFAULT NULL,
  PRIMARY KEY (`genero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pesquisa`
--

DROP TABLE IF EXISTS `tb_pesquisa`;
CREATE TABLE IF NOT EXISTS `tb_pesquisa` (
  `genero` varchar(255) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `pesquisa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `raca` varchar(60) DEFAULT 'Human',
  `classe` varchar(50) DEFAULT 'Adventurer',
  `descricao` varchar(255) DEFAULT 'sem descrição.',
  `personagem` varchar(60) DEFAULT 'não definido',
  `animefav` varchar(60) DEFAULT 'não definido',
  `img_perfil` varchar(255) NOT NULL DEFAULT 'Imagens/server/empty_profile.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `email`, `senha`, `nascimento`, `raca`, `classe`, `descricao`, `personagem`, `animefav`, `img_perfil`) VALUES
(1, 'Eduardo R. de Matos', 'eduardoooax@gmail.com', '$2y$10$IuSNQKlJCZg6eKW2wobn.OjMKbM9jb1LXPOD4eS9ctehhyRstpmFC', '2003-04-17', 'Human', 'Adventurer', 'sem descrição.', 'não definido', 'não definido', 'Imagens/users/1empty_profile.jpg'),
(2, 'Gayzão', 'gayzao@jebanabunda.paitaon.com.ru', '$2y$10$W7Py/rBa6CBDRg3AZFuCgu337pKhJHoW8Y0/NA9JBOnTaV.IddcR2', '1945-04-30', 'Human', 'Adventurer', 'sem descrição.', 'não definido', 'não definido', 'Imagens/server/empty_profile.jpg'),
(3, 'Jefferson Santos', 'jefferson@gmail.com', '$2y$10$k.fcyg.1rUoD8A.IRUC4PejXHqLBuyWBgGIlPYBkLY5q1Z6yy9SUm', '2000-05-08', 'Human', 'Adventurer', 'sem descrição.', 'não definido', 'não definido', 'Imagens/users/3aizen.jpg'),
(4, 'Gustavo', 'gusanches601@gmail.com', '$2y$10$fAU.B.8t8H2UHjuzJ43yBeau9ADTLFnYLQCgwExQO1b4HKRZQws.C', '1999-11-12', 'Human', 'Adventurer', 'sem descrição.', 'não definido', 'não definido', 'Imagens/server/empty_profile.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
