-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2020 at 09:42 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_animematch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anime`
--

CREATE TABLE `tb_anime` (
  `id_anime` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `img_anime` text NOT NULL,
  `Autor` varchar(100) NOT NULL,
  `Data_lancamento` varchar(10) DEFAULT '???'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anime`
--

INSERT INTO `tb_anime` (`id_anime`, `nome`, `genre`, `descricao`, `img_anime`, `Autor`, `Data_lancamento`) VALUES
(1, 'Naruto Clássico', 'Ação, Artes Marciais, Aventura, Comédia, Fantasia, Shounen', 'Naruto Uzumaki é um menino que vive em Konohagakure no Sato ou simplesmente Konoha ou Vila Oculta da Folha, a vila ninja do País do Fogo. Quando ainda bebê, Naruto teve aprisionada em seu corpo a Kyuubi no Youko por Minato Namikaze (quarto Hokage, e seu pai), com a finalidade de salvar a Vila da Folha. Desde então, Naruto é visto por muitas pessoas como um monstro, não só pelos familiares das pessoas mortas pela Kyuubi, mas também por pessoas que não toleram suas brincadeiras, já que o mesmo é extremamente hiperativo, incompreendido e solitário. Naruto sonha em se tornar o Hokage de sua vila, um ninja poderoso e respeitado, para assim poder ser reconhecido por todos. Ele entra na academia ninja, onde sofre com as notas baixas, mas é ajudado por seu professor, Iruka Umino, que posteriormente se torna seu amigo. Consegue finalmente se tornar Gennin, e a partir daí passa a ser ensinado por um Jounin, Kakashi Hatake, e forma uma equipe com Sasuke Uchiha (que no começo não se dão bem) e Sakura Haruno, sua grande paixão....', 'Imagens/animes/naruto.jpg', 'Masashi Kishimoto.', '2002'),
(2, 'Naruto Shippuden', 'Ação, Artes Marciais, Aventura, Comédia, Shounen, Super Poder', 'Dois anos e meio se passaram após a partida de Uzumaki Naruto e Jiraiya da vila de Konoha, para um treinamento a parte com Naruto. Logo ao voltar à vila os primeiros a encontrá-lo foram Sakura e Konohamaru. Agora Naruto e seus amigos não tem apenas que se preocupar com o resgate de Sasuke, mas também com uma organização chamada Akatsuki, que está atrás dos Jinchuurikis (ninjas que carregam um Bijuu em seus corpos... junto a isso inumeros outros acontecimentos ocorrem ao longo da série.', 'Imagens/animes/narutoShipuden.jpg', 'Masashi Kishimoto.', '2007'),
(3, 'Bleach', 'Ação, Comédia, Shounen, Sobrenatural, Super Poder', 'A história conta com Kurosaki Ichigo como personagem principal. Após uma série de incidentes ele acaba se tornando um Shinigami, que são responsáveis pelo fluxo de almas do mundo real até a Soul Society, assim como combater os espíritos malígnos, Hollows. Porém, conforme ele começa a se envolver com o mundo espiritual, ele acaba no meio de uma trama que ameaça a existência de ambos os mundos.', 'Imagens/animes/bleach.jpg', 'Tite Kubo', '2004'),
(4, 'Love Live! ', ' Comédia, Drama, Escolar, Musical', 'O Colégio Otonokizaka está em crise! Com o número de estudantes inscritos caindo mais e mais a cada ano, a escola está se preparando para fechar. Mas Honoka Kosaka ama sua escola e para atrair mais estudantes, ela decide iniciar um \"grupo escolar de idol\", que certamente irá atrair a atenção do público. Para tornar este sonho uma realidade, ela reúne suas amigas e colegas próximas para fazer a melhor unidade ídolo possível.', 'Imagens/animes/lovelive.jpg', 'Yatate Hajime', '2016'),
(5, 'Darling in the FranXX', ' Ação, Drama, Ficção Científica, Mecha, Romance', 'Eles sonham um dia voar pelo céu sem fim, mesmo cientes do quão imenso é o céu além da vidraça que bloqueia seu voo. Futuro distante: a humanidade se estabeleceu na cidade-fortaleza de Plantation, erguida sobre os destroços da guerra, e a civilização floresceu. Nessa cidade, há o Mistilteinn, um quartel de pilotos também conhecido como Gaiola. É lá que as crianças vivem... Alheios ao mundo de fora e da vastidão dos céus. Sua única missão em vida é lutar. Seus inimigos são os Kyoryu, gigantescos organismos misteriosos. As crianças operam robôs chamados FRANXX para enfrentar esses inimigos desconhecidos, crentes de que esse é seu objetivo de vida. Dentre eles, um garoto era considerado um prodígio: Hiro, serial 016. Contudo, agora ele é considerado uma falha, alguém desnecessário. Aqueles incapazes de pilotar FRANXX basicamente não existem. Um dia, uma misteriosa garota chamada 02 aparece para Hiro. De seu rosto, crescem dois curiosos chifres. \"Eu te encontrei, meu Querido.\"', 'Imagens/animes/daring.jpg', ' A-1 Pictures', '2018'),
(6, 'Kuroshitsuji', ' Ação, Comédia, Demônios, Fantasia, Histórico', 'Phantomhive é um jovem de apenas 12 anos de idade, pertencente a uma das mais nobres famílias da Inglaterra. Kuroshitsuji conta a história de Ciel e Sebastian, um impecável mordomo que pode realizar praticamente qualquer tarefa que seu mestre ordene, além de um impecável mordomo, ele é também um demônio. Sebastian é obrigado a servir Ciel por conta de um contrato malígno que fez com ele.', 'Imagens/animes/kuroshitsuji.jpg', 'Toboso Yana', '2014'),
(7, 'Akame ga Kill!', 'Ação, Aventura, Fantasia', 'um lutador que sai para a Capital em busca de uma maneira de ganhar dinheiro para ajudar a sua aldeia pobre, apenas para descobrir a corrupção profunda lá. Depois de ser vítima de um assalto por uma mulher e perder todo o seu dinheiro, Tatsumi é levado por uma menina aristocrática nobre com o nome de Aria. Na noite seguinte, o lugar de Aria é atacado por um grupo de assassinos conhecidos como Noite Raid.Enquanto Tatsumi no primeiro tenta defender Aria do Akame assassino, um outro membro do grupo pára a luta. Ela revela que Aria raptou vários aldeões e tortura-los para se divertir. Vendo o potencial no Tatsumi, Noite Raid convida o rapaz para o seu aviso grupo que, independentemente de como eles querem assassino pessoas corrompidas, eles são assassinos. Tatsumi aceita, a fim de se tornar mais forte e proteger sua aldeia. Como resultado, Tatsumi começa a treinar, não só para se tornar um lutador melhor, mas assim como assassino frio. Em sua luta contra o Império, Noite Raid começa antagonizar uma organização conhecida como The Jaegars liderados por Edese, o lutador mais poderoso do Império.', 'Imagens/animes/akamegakill.jpg', 'Makoto Uezu\n', '2014'),
(8, 'Shingeki no Kyojin', 'Ação, Drama, Fantasia, Terror', 'várias décadas atrás, a humanidade foi quase exterminada pelo súbito aparecimento de seres humanoides, conhecido como Titãs. Criaturas de tamanho enorme e de inteligência aparentemente baixa, que comiam humanos por prazer. No entanto, um pequeno grupo de seres humanos sobreviveu no interior de uma cidade protegida por paredes superiores a três vezes a altura dos maiores Titãs registados até à data. Durante 107 anos, a cidade fortificada foi testemunha de ataques dos Titãs sem sucesso, até que um dia, o jovem Eren Jaeger e sua irmã adotiva, Mikasa Ackerman, foram testemunhas da aparição de um Titã colossal, fazendo uma abertura em uma das paredes exteriores da cidade, o que permitiu a entrada de um grande grupo de Titãs menores. Ambos os filhos presenciam o horror de ver sua mãe sendo comida viva por um deles. Desde aquele dia, Eren jurou vingança contra cada um dos Titãs.', 'Imagens/animes/atacktitan.jpg', ' Hajime Isayama', '2013'),
(9, 'Kimetsu no Yaiba', 'Ação, Demônios, Shounen, Sobrenatural', 'Desde a antiguidade, sempre houve rumores de demônios devoradores de homens à espreita na floresta. Isso fez com que os habitantes da cidade não ousassem se aventurar nela à noite, mas a lenda diz que há um caçador de demônios que se dedica a viajar pelos lugares impensáveis para os outros enquanto termina com todo demônio maligno que é. O jovem Tanjiro verá em sua própria carne que a existência de demônios não era apenas rumores.', 'Imagens/animes/kimetsu.jpg', ' Koyoharu Gotouge', '2019'),
(10, 'Nanatsu no Taizai', 'Ação, Aventura, Fantasia', 'Os Sete Pecados Mortais viajam para uma terra remota em busca do ingrediente fantasma \"peixe do céu\". Meliodas e Hawk acabam em um \"Sky Palace\" que existe acima das nuvens, onde todos os moradores têm asas. Meliodas é confundido com um menino que cometeu um crime e é jogado na prisão. Enquanto isso, os moradores estão preparando uma cerimônia de defesa contra uma fera feroz que desperta uma vez a cada 3.000 anos. Mas os Seis Cavaleiros do Negro, um exército do Clã Demoníaco, chegam e retiram o selo da fera para ameaçar as vidas dos moradores do Sky Palace. Meliodas e seus aliados encontram os Seis Cavaleiros do Negro em batalha.', 'Imagens/animes/nanatsu.jpg', 'Suzuki Nakaba', '2019'),
(11, 'BNA', '\r\nFantasia\r\n', '\r\n\r\nNa história do anime, no século 21, a existência de animais-humanos veio à tona depois de estar escondida na escuridão da história. Michiru viveu a vida como um ser humano normal, até que um dia ela de repente se transforma em um humano-tanuki.\r\n', 'Imagens/animes/BNA.jpg\r\n', '???', '2020'),
(12, 'fruits basket', 'Comédia\r\nDrama\r\nRomance\r\nShoujo\r\nSlice Of Life\r\nSobrenatural\r\n', '\r\nSegundo a lenda do Juunishii (horóscopo Chinês), Deus daria uma festa e todos os animais foram convidados, recomendando-lhes que não se atrasassem de jeito algum. Então o rato, traiçoeiro, enganou o gato dizendo que a festa seria no outro dia. No dia seguinte, na festa, todos os animais chegaram ao local (a ordem que cada animal chegou, se tornou a ordem do Juunishii), menos o gato que foi enganado e que mal esperava a festa que para ele nunca iria acontecer. Então o gato ficou de fora do Juunishii. No Japão atual, existe uma brincadeira muito popular chamada Fruits Basket (Cesta de Frutas), onde para cada pessoa é atribuído o nome de uma fruta. Porém Tohru Honda, uma jovem deslocada, recebia como nome Onigiri (Bolinho de Arroz) como \"fruta\", por sarro das demais crianças. Inocente, a menina esperava pacientemente que sua \"fruta\" fosse chamada para que ela pudesse participar da brincadeira, coisa que nunca ocorria.', 'Imagens/animes/Fruits-Basket-2nd-Season.jpg', '\r\nTakaya Natsuki\r\n', '2020'),
(13, 'Gleipnir', '\r\nAção\r\nEcchi\r\nMistério\r\nSeinen\r\nSobrenatural\r\n', 'O que se considera ser um monstro? Um vampiro sugador de sangue horrível? A criação de Frankenstein? Shuichi Kagaya tem um segredo. Além de ter ótimas notas e ser habilidoso em esportes, ele não é o que se chamaria de normal. Na verdade, Shuichi não pode ser considerado humano. Numa manhã fatídica, ele acordou como um monstro. Com força bruta, um olfato anormalmente forte, grandes patas fofas, e a depressão e o ódio que vem depois de perder a humanidade, sua vida foi subitamente virada de cabeça para baixo. Claire Aoki, a garota que ele decidiu salvar, agora guarda seu segredo sobre sua cabeça. Claire é uma garota sádica e totalmente distorcida, sem senso de empatia pela vida dos outros. Antes de conhecer Shuichi, ela estava em busca de monstros, esperando encontrar sua irmã monstro. Apesar de se tornar um monstro, Shuichi ingenuamente continua a manter sua moral humana, mas quanto tempo pode durar neste modo insuportável de viver?', 'Imagens/animes/Gleipnir.jpg', '???', '2020'),
(14, 'Honzuki No Gekokujou: Shisho Ni Naru Tame Ni Wa Shudan Wo Erandeiraremasen', '\r\nFantasia\r\nSlice Of Life\r\n', 'Urano, uma viciada em livros que finalmente conseguiu um emprego como bibliotecária na universidade, tristemente morreu logo após terminar a faculdade. Ela renasceu como a filha de um soldado num mundo onde a taxa de alfabetismo é baixa e livros são escassos. Não importa o quanto ela quisesse ler, não havia nenhum livro a sua volta. O que uma rato de biblioteca fará sem livros? Fazê-los, é claro. Seu objetivo é virar uma bibliotecária! Então para poder mais uma vez viver rodeada de livros, ela mesma precisa começar a fazê-los.', '\r\nImagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg', 'Kazuki Miya\r\n', '2019'),
(15, 'Kaguya-sama', '\r\nComédia\r\nPsicológico\r\nRomance\r\nSeinen\r\nVida Escolar\r\n', 'Veio de boa família? Sim! Tem uma personalidade promissora? Sim! Todos os jovens de elite com futuros brilhantes acabam indo parar na Academia Shuchiin. E ambos os líderes do conselho estudantil, Kaguya Shinomiya e Miyuki Shirogane, estão apaixonados um pelo outro. Mas seis meses se passaram e nada aconteceu?! Ambos são orgulhosos demais para confessar seu amor. Esse orgulho só piorou com o tempo, e agora ambos estão brigando pra ver quem faz o outro se declarar primeiro! A parte mais divertida do amor é o jogo da conquista! Uma nova comédia romântica, sobre as batalhas intelectuais de dois estudantes de elite apaixonados.', 'Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg', '\r\nAkasaka Aka\r\n', '2019'),
(16, 'One piece', '\r\nAção\r\nAventura\r\nComédia\r\nDrama\r\nFantasia\r\nShounen\r\nSuperpoder\r\n', 'Houve um homem que conquistou tudo aquilo que o mundo tinha a oferecer, o lendário Rei dos Piratas, Gold Roger. Capturado e condenado à execução pelo Governo Mundial, suas últimas palavras lançaram legiões aos mares. \"Meu tesouro? Se quiserem, podem pegá-lo. Procurem-no! Ele contém tudo que este mundo pode oferecer!\". Foi a revelação do maior tesouro, o One Piece, cobiçado por homens de todo o mundo, sonhando com fama e riqueza imensuráveis... Assim começou a Grande Era dos Piratas! Monkey D. Luffy de 17 anos, desafia a definição de pirata. Sem a típica personalidade vil e cruel, suas motivações são simples: a aventura e as possibilidades de conhecer novos amigos. Luffy e seus companheiros partem em direção à Grand Line, a mais perigosa das rotas do mundo, em incríveis aventuras, revelando mistérios e enfrentando poderosos oponentes em busca do One Piece.', 'Imagens/animes/onepiece.jpg', '\r\nOda Eiichiro\r\n', '1999'),
(17, 'Otome Game No Hametsu Flag Shika Nai Akuyaku Reijou Ni Tensei Shiteshimatta...', '\r\nComédia\r\nDrama\r\nFantasia\r\nRomance\r\nVida Escolar\r\n', 'Uma jovem descobre que renasceu como a vilã do jogo de romance que comprou antes de morrer! E para a sua tristeza, ela só possui dois finais infelizes: ser exilada ou a morte. Decidida a não morrer jovem de novo neste mundo, ela se esforçará para não interferir na vida da protagonista do jogo.', 'Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg', '', '???'),
(18, 'Shokugeki No Souma', '\r\nEcchi\r\nSchool\r\nShounen\r\n', 'O sonho de Yukihira Souma é se tornar um chef no restaurante de seu pai e superar a culinária dele. Mas assim que Yukihira se forma no ensino fundamental, seu pai, Jouichirou, fecha o restaurante para ir cozinhar na Europa. Apesar de estar para baixo, o espírito lutador de Souma reacende quando seu pai o desafia a sobreviver numa escola de culinária de elite onde só 10% dos alunos se formam. Será que Souma sobreviverá?', 'Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg', '\r\n\r\nMorisaki Yuki\r\nTsukuda Yuuto\r\n', '2020'),
(19, 'Sword art online', '\r\nAção\r\nAventura\r\nFantasia\r\nJogos\r\nRomance\r\n', 'No ano de 2022, a Realidade Virtual Massive Multiplayer RPG Online (VRMMORPG), Sword Art Online (SAO), é lançado. Com o equipamento Nerve Gear, um capacete de realidade virtual que estimula no usuário cinco sentidos através de seu cérebro, os jogadores podem experimentar e controlar seus personagens no jogo com suas mentes. Em 6 de novembro de 2022, todos os jogadores ao entrar pela primeira vez, descobrem que eles são incapazes de sair. Eles são então informados por Kayaba Akihiko, o criador do SAO, que se eles desejam ser livres, eles devem chegar ao 100 º andar da torre do jogo e derrotar o chefe final. No entanto, se os seus avatares morrerem no jogo, seus corpos também morrerão no mundo real. A história segue com Kirito, um jogador habilidoso, que está determinado a vencer o jogo. Conforme o jogo avança, Kirito eventualmente se torna amigo de uma jogadora chamada Asuna que se torna sua parceira. Após a dupla descobrir a identidade do avatar Kayaba em SAO, eles enfrentam e derrotam, libertando-se e os outros jogadores do jogo. Ao voltar para o mundo real, Kirito descobre que Asuna e um pequeno grupo de jogadores SAO estão presos em outra VRMMORPG chamado Alfheim Online (ALO). Sua prisão em ALO é parte de um plano concebido por Nobuyuki Sugo para subjugar Asuna e casar com ela, em uma tentativa de assumir a empresa de sua família. Ajudado por velhos amigos de SAO juntamente com novos aliados, os planos de Kirito frustra Nobuyuki e finalmente se reúne com Asuna no mundo real. Logo depois, Kirito desempenha um outro VRMMORPG chamado Gun Gale Online (GGO) para investigar a misteriosa ligação entre o jogo e as mortes que ocorrem no mundo real. Ele finalmente descobre que os culpados são ex-membros de uma guilda assassina que já tinha encontrado em SAO. Depois de resolver os assassinatos em GGO, Kirito é recrutado para ajudar no desenvolvimento de um jogo de state-of-the-art, UnderWorld (UW), que tem uma interface que é muito mais realista e complexa do que a dos jogos anteriores que ele tinha jogado. Em UW, o fluxo do tempo procede milhares de vezes mais rápido do que no mundo real. No entanto, Kirito acaba caindo para uma armadilha e acorda dentro do jogo, incapaz de sair ele começa a procurar um caminho de volta para a realidade.', 'Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg', '???', '2018'),
(20, 'Yahari Ore No Seishun Love Come Wa Machigatteiru', '\r\nComédia\r\nDrama\r\nRomance\r\nSchool\r\nSlice Of Life\r\n', 'É uma história de um menino adolescente anti-social de alta chamado Hachiman Hikigaya com uma visão distorcida sobre a vida e não tem amigos ou namorada. Quando ele vê seus colegas conversando animadamente sobre viver suas vidas de adolescentes, ele murmura: “Eles são um bando de mentirosos.” Quando ele é questionado sobre seus sonhos futuros, ele responde: “Não está funcionando.” Um professor recebe Hachiman para se juntar ao voluntário “clube de serviço”, que acontece de ter garota mais bonita da escola, Yukino Yukinoshita.', 'Imagens/animes/Yahari-Ore-no-Seishun-Love-Comedy-wa-Machigatteiru.-Kan.jpg', '\r\nShotaro Suga\r\n', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `tb_genre`
--

CREATE TABLE `tb_genre` (
  `genero` varchar(255) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `user_pesquisa` int(11) DEFAULT NULL,
  `pesquisa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesquisa`
--

CREATE TABLE `tb_pesquisa` (
  `genero` varchar(255) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `pesquisa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
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
  `img_capa` varchar(255) NOT NULL DEFAULT 'Imagens/server/capa_default.jpg',
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `email`, `senha`, `nascimento`, `raca`, `classe`, `descricao`, `personagem`, `animefav`, `img_perfil`, `img_capa`, `last_update`) VALUES
(1, 'gustavo', 'gusanches601@gmail.com', '$2y$10$aqbQmoP9DxooloxTeWwS9O3IxJb6jHaPfJTXx2mhe28TB/1k1A0A6', '1945-12-11', 'Human', 'Adventurer', 'sem descrição.', 'não definido', 'não definido', 'Imagens/server/empty_profile.jpg', 'Imagens/users/capa/1nanatsu.jpg', NULL),
(2, 'teste@teste.com', 'gusanches@gmail.com', '$2y$10$HWfWcJc/LQq3/AqO5AcubuWkRpTmtME/rUNFBgzSKmtpsKFOTkBbq', '2019-12-31', 'Human', 'Adventurer', 'sem descrição.', 'não definido', 'não definido', 'Imagens/server/empty_profile.jpg', 'Imagens/server/capa_default.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anime`
--
ALTER TABLE `tb_anime`
  ADD PRIMARY KEY (`id_anime`);

--
-- Indexes for table `tb_genre`
--
ALTER TABLE `tb_genre`
  ADD PRIMARY KEY (`genero`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anime`
--
ALTER TABLE `tb_anime`
  MODIFY `id_anime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
