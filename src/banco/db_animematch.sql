-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 20-Maio-2020 às 18:34
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_anime`
--

INSERT INTO `tb_anime` (`id_anime`, `nome`, `genre`, `descricao`, `img_anime`, `Autor`) VALUES
(1, 'Naruto Clássico', 'Ação, Artes Marciais, Aventura, Comédia, Fantasia, Shounen', 'Naruto Uzumaki é um menino que vive em Konohagakure no Sato ou simplesmente Konoha ou Vila Oculta da Folha, a vila ninja do País do Fogo. Quando ainda bebê, Naruto teve aprisionada em seu corpo a Kyuubi no Youko por Minato Namikaze (quarto Hokage, e seu pai), com a finalidade de salvar a Vila da Folha. Desde então, Naruto é visto por muitas pessoas como um monstro, não só pelos familiares das pessoas mortas pela Kyuubi, mas também por pessoas que não toleram suas brincadeiras, já que o mesmo é extremamente hiperativo, incompreendido e solitário. Naruto sonha em se tornar o Hokage de sua vila, um ninja poderoso e respeitado, para assim poder ser reconhecido por todos. Ele entra na academia ninja, onde sofre com as notas baixas, mas é ajudado por seu professor, Iruka Umino, que posteriormente se torna seu amigo. Consegue finalmente se tornar Gennin, e a partir daí passa a ser ensinado por um Jounin, Kakashi Hatake, e forma uma equipe com Sasuke Uchiha (que no começo não se dão bem) e Sakura Haruno, sua grande paixão....', 'https://animesonline.games/wp-content/uploads/2019/01/naruto-classico-dublado-todos-os-episodios-animes-online-games.jpg', 'Masashi Kishimoto.'),
(2, 'Naruto Shippuden', 'Ação, Artes Marciais, Aventura, Comédia, Shounen, Super Poder', 'Dois anos e meio se passaram após a partida de Uzumaki Naruto e Jiraiya da vila de Konoha, para um treinamento a parte com Naruto. Logo ao voltar à vila os primeiros a encontrá-lo foram Sakura e Konohamaru. Agora Naruto e seus amigos não tem apenas que se preocupar com o resgate de Sasuke, mas também com uma organização chamada Akatsuki, que está atrás dos Jinchuurikis (ninjas que carregam um Bijuu em seus corpos... junto a isso inumeros outros acontecimentos ocorrem ao longo da série.', 'https://4icdn.com/?src=img/animes/BrfN-large.jpg&w152', 'Masashi Kishimoto.'),
(3, 'Bleach', 'Ação, Comédia, Shounen, Sobrenatural, Super Poder', 'A história conta com Kurosaki Ichigo como personagem principal. Após uma série de incidentes ele acaba se tornando um Shinigami, que são responsáveis pelo fluxo de almas do mundo real até a Soul Society, assim como combater os espíritos malígnos, Hollows. Porém, conforme ele começa a se envolver com o mundo espiritual, ele acaba no meio de uma trama que ameaça a existência de ambos os mundos.', 'https://animedao.com/images/bleach.jpg', 'Tite Kubo'),
(4, 'Love Live! School Idol Project', ' Comédia, Drama, Escolar, Musical', 'O Colégio Otonokizaka está em crise! Com o número de estudantes inscritos caindo mais e mais a cada ano, a escola está se preparando para fechar. Mas Honoka Kosaka ama sua escola e para atrair mais estudantes, ela decide iniciar um \"grupo escolar de idol\", que certamente irá atrair a atenção do público. Para tornar este sonho uma realidade, ela reúne suas amigas e colegas próximas para fazer a melhor unidade ídolo possível.', 'https://i.pinimg.com/236x/69/53/0d/69530db80765acd9abda1212835ed0ae.jpg', 'Yatate Hajime'),
(5, 'Darling in the FranXX', ' Ação, Drama, Ficção Científica, Mecha, Romance', 'Eles sonham um dia voar pelo céu sem fim, mesmo cientes do quão imenso é o céu além da vidraça que bloqueia seu voo. Futuro distante: a humanidade se estabeleceu na cidade-fortaleza de Plantation, erguida sobre os destroços da guerra, e a civilização floresceu. Nessa cidade, há o Mistilteinn, um quartel de pilotos também conhecido como Gaiola. É lá que as crianças vivem... Alheios ao mundo de fora e da vastidão dos céus. Sua única missão em vida é lutar. Seus inimigos são os Kyoryu, gigantescos organismos misteriosos. As crianças operam robôs chamados FRANXX para enfrentar esses inimigos desconhecidos, crentes de que esse é seu objetivo de vida. Dentre eles, um garoto era considerado um prodígio: Hiro, serial 016. Contudo, agora ele é considerado uma falha, alguém desnecessário. Aqueles incapazes de pilotar FRANXX basicamente não existem. Um dia, uma misteriosa garota chamada 02 aparece para Hiro. De seu rosto, crescem dois curiosos chifres. \"Eu te encontrei, meu Querido.\"', 'https://i.pinimg.com/236x/b2/da/c7/b2dac7d41b187617971e2089f13f161b.jpg', ' A-1 Pictures'),
(6, 'Kuroshitsuji', ' Ação, Comédia, Demônios, Fantasia, Histórico', 'Phantomhive é um jovem de apenas 12 anos de idade, pertencente a uma das mais nobres famílias da Inglaterra. Kuroshitsuji conta a história de Ciel e Sebastian, um impecável mordomo que pode realizar praticamente qualquer tarefa que seu mestre ordene, além de um impecável mordomo, ele é também um demônio. Sebastian é obrigado a servir Ciel por conta de um contrato malígno que fez com ele.', 'https://images4.alphacoders.com/154/thumb-1920-154688.jpg', 'Toboso Yana'),
(7, 'Akame ga Kill!', 'Ação, Aventura, Fantasia', 'um lutador que sai para a Capital em busca de uma maneira de ganhar dinheiro para ajudar a sua aldeia pobre, apenas para descobrir a corrupção profunda lá. Depois de ser vítima de um assalto por uma mulher e perder todo o seu dinheiro, Tatsumi é levado por uma menina aristocrática nobre com o nome de Aria. Na noite seguinte, o lugar de Aria é atacado por um grupo de assassinos conhecidos como Noite Raid.Enquanto Tatsumi no primeiro tenta defender Aria do Akame assassino, um outro membro do grupo pára a luta. Ela revela que Aria raptou vários aldeões e tortura-los para se divertir. Vendo o potencial no Tatsumi, Noite Raid convida o rapaz para o seu aviso grupo que, independentemente de como eles querem assassino pessoas corrompidas, eles são assassinos. Tatsumi aceita, a fim de se tornar mais forte e proteger sua aldeia. Como resultado, Tatsumi começa a treinar, não só para se tornar um lutador melhor, mas assim como assassino frio. Em sua luta contra o Império, Noite Raid começa antagonizar uma organização conhecida como The Jaegars liderados por Edese, o lutador mais poderoso do Império.', 'https://i.pinimg.com/236x/eb/bd/e6/ebbde6f904d07fd6891c5a3883181505.jpg', ' ???'),
(8, 'Shingeki no Kyojin', 'Ação, Drama, Fantasia, Terror', 'várias décadas atrás, a humanidade foi quase exterminada pelo súbito aparecimento de seres humanoides, conhecido como Titãs. Criaturas de tamanho enorme e de inteligência aparentemente baixa, que comiam humanos por prazer. No entanto, um pequeno grupo de seres humanos sobreviveu no interior de uma cidade protegida por paredes superiores a três vezes a altura dos maiores Titãs registados até à data. Durante 107 anos, a cidade fortificada foi testemunha de ataques dos Titãs sem sucesso, até que um dia, o jovem Eren Jaeger e sua irmã adotiva, Mikasa Ackerman, foram testemunhas da aparição de um Titã colossal, fazendo uma abertura em uma das paredes exteriores da cidade, o que permitiu a entrada de um grande grupo de Titãs menores. Ambos os filhos presenciam o horror de ver sua mãe sendo comida viva por um deles. Desde aquele dia, Eren jurou vingança contra cada um dos Titãs.', 'https://i.pinimg.com/236x/e9/be/b8/e9beb85194e3ee3a7b4009eb5b264fb8.jpg', ' Hajime Isayama'),
(9, 'Kimetsu no Yaiba', 'Ação, Demônios, Shounen, Sobrenatural', 'Desde a antiguidade, sempre houve rumores de demônios devoradores de homens à espreita na floresta. Isso fez com que os habitantes da cidade não ousassem se aventurar nela à noite, mas a lenda diz que há um caçador de demônios que se dedica a viajar pelos lugares impensáveis para os outros enquanto termina com todo demônio maligno que é. O jovem Tanjiro verá em sua própria carne que a existência de demônios não era apenas rumores.', 'https://i.pinimg.com/236x/8d/f6/1c/8df61cf7fc7bce419c4c83687f08ca1e.jpg', ' Koyoharu Gotouge'),
(10, 'Nanatsu no Taizai: Tenkuu no Torawarebito Dublado', 'Ação, Aventura, Fantasia', 'Os Sete Pecados Mortais viajam para uma terra remota em busca do ingrediente fantasma \"peixe do céu\". Meliodas e Hawk acabam em um \"Sky Palace\" que existe acima das nuvens, onde todos os moradores têm asas. Meliodas é confundido com um menino que cometeu um crime e é jogado na prisão. Enquanto isso, os moradores estão preparando uma cerimônia de defesa contra uma fera feroz que desperta uma vez a cada 3.000 anos. Mas os Seis Cavaleiros do Negro, um exército do Clã Demoníaco, chegam e retiram o selo da fera para ameaçar as vidas dos moradores do Sky Palace. Meliodas e seus aliados encontram os Seis Cavaleiros do Negro em batalha.', 'https://i.pinimg.com/236x/e9/b7/e5/e9b7e53de9856069ea226415b0a63972.jpg', 'Suzuki Nakaba');

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
