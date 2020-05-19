-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 19-Maio-2020 às 03:59
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
  `descricao` varchar(255) NOT NULL,
  `img_anime` varchar(100) NOT NULL,
  `temporada` varchar(100) NOT NULL,
  PRIMARY KEY (`id_anime`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_anime`
--

INSERT INTO `tb_anime` (`id_anime`, `nome`, `genre`, `descricao`, `img_anime`, `temporada`) VALUES
(1, 'Out of Mind: The Stories of H.P. Lovecraft', 'Fantasy|Horror', 'enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus', 'https://robohash.org/rerumarchitectoquos.png?size=50x50&set=set1', 'Ecole Nationale d\'Ingénieurs de Metz'),
(2, 'Fearless Vampire Killers, The', 'Comedy|Horror', 'quisque arcu libero rutrum ac lobortis vel dapibus at diam nam tristique tortor eu', 'https://robohash.org/atnequemagnam.jpg?size=50x50&set=set1', 'Okanagan University College'),
(3, 'Bluebeard', 'Thriller', 'vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit', 'https://robohash.org/temporibusquiaeum.png?size=50x50&set=set1', 'University of Moncton, Shippagan'),
(4, 'Ride Beyond Vengeance', 'Western', 'bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo eu massa donec', 'https://robohash.org/etaccusantiumsint.jpg?size=50x50&set=set1', 'Academy of Art College'),
(5, 'Zardoz', 'Fantasy|Sci-Fi', 'leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu', 'https://robohash.org/odioeumpariatur.jpg?size=50x50&set=set1', 'Iwate Medical University'),
(6, 'Birds, The', 'Horror|Thriller', 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia', 'https://robohash.org/minimablanditiisprovident.bmp?size=50x50&set=set1', 'Huntington College'),
(7, 'Act in Question, The (Acto en cuestión, El)', 'Drama', 'hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis', 'https://robohash.org/voluptatemestiure.png?size=50x50&set=set1', 'Pomona College'),
(8, 'Bad Company', 'Western', 'faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam', 'https://robohash.org/autmolestiaeomnis.jpg?size=50x50&set=set1', 'Mennonite College of Nursing'),
(9, '49th Parallel', 'Adventure|Drama|Thriller|War', 'malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit', 'https://robohash.org/numquametperferendis.png?size=50x50&set=set1', 'University of Oxford'),
(10, 'Shrek the Third', 'Adventure|Animation|Children|Comedy|Fantasy', 'venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est', 'https://robohash.org/ipsumaperiamporro.bmp?size=50x50&set=set1', 'University of Bahrain'),
(11, 'Day of the Outlaw', 'Western', 'justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed', 'https://robohash.org/eumpossimusarchitecto.bmp?size=50x50&set=set1', 'Northrise University'),
(12, 'Make the Yuletide Gay', 'Comedy|Romance', 'pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas', 'https://robohash.org/facilismagnamaccusantium.png?size=50x50&set=set1', 'National University of Music'),
(13, 'Wonder Boys', 'Comedy|Drama', 'elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis', 'https://robohash.org/remsitporro.png?size=50x50&set=set1', 'Instituto Politécnico Nacional'),
(14, 'Stille nacht', 'Crime|Mystery|Thriller', 'in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus', 'https://robohash.org/estsuscipitvoluptas.bmp?size=50x50&set=set1', 'Kohat University of Science and Technology  (KUST)'),
(15, 'Brainstorm', 'Sci-Fi|Thriller', 'velit donec diam neque vestibulum eget vulputate ut ultrices vel augue', 'https://robohash.org/omnisquiet.bmp?size=50x50&set=set1', 'Perdana University'),
(16, 'Event Horizon', 'Horror|Sci-Fi|Thriller', 'ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo', 'https://robohash.org/nonfugiatvoluptate.bmp?size=50x50&set=set1', 'Politeknik Pos Indonesia'),
(17, 'Triad Election (Election 2) (Hak se wui yi wo wai kwai)', 'Crime|Drama|Thriller', 'maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis', 'https://robohash.org/utlaboriosamdoloremque.bmp?size=50x50&set=set1', 'York University'),
(18, 'Arizona Raiders', 'Western', 'ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est', 'https://robohash.org/quasivoluptatemquia.bmp?size=50x50&set=set1', 'TPM College'),
(19, 'Alex Cross', 'Action|Crime|Mystery|Thriller', 'amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus', 'https://robohash.org/estrerumexercitationem.bmp?size=50x50&set=set1', 'Notre Dame Women\'s College'),
(20, 'Cycling with Moliere (Alceste à bicyclette)', 'Comedy|Drama', 'cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam', 'https://robohash.org/illoaconsequatur.png?size=50x50&set=set1', 'University of Jyväskylä'),
(21, 'Breed Apart, A', 'Action|Drama', 'magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci', 'https://robohash.org/eumoptioassumenda.bmp?size=50x50&set=set1', 'Pädagogische Hochschule Freiburg'),
(22, 'Human Family Tree, The', 'Documentary', 'in felis donec semper sapien a libero nam dui proin leo odio porttitor id', 'https://robohash.org/temporaaliasveritatis.png?size=50x50&set=set1', 'University of Crete'),
(23, 'After Dark, My Sweet', 'Crime|Drama|Mystery', 'ac diam cras pellentesque volutpat dui maecenas tristique est et', 'https://robohash.org/quiaimpeditrepellendus.bmp?size=50x50&set=set1', 'University of Namibia'),
(24, 'Jazz Singer, The', 'Drama|Musical|Romance', 'lorem id ligula suspendisse ornare consequat lectus in est risus auctor', 'https://robohash.org/repudiandaenonofficiis.bmp?size=50x50&set=set1', 'Washington University in St. Louis'),
(25, 'Dangerous Place, A', 'Thriller', 'nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero', 'https://robohash.org/enimoccaecatiet.png?size=50x50&set=set1', 'Oakland University'),
(26, 'Map of the Human Heart', 'Drama|Romance', 'id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus', 'https://robohash.org/abautminima.png?size=50x50&set=set1', 'Technological University (West Yangon)'),
(27, 'Creation', 'Drama', 'lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet', 'https://robohash.org/consequuntureligendidolor.bmp?size=50x50&set=set1', 'Ohio University - Southern'),
(28, 'Alice Adams', 'Comedy|Drama', 'ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in hac', 'https://robohash.org/ametmolestiassit.jpg?size=50x50&set=set1', 'Indiana University at South Bend'),
(29, 'Quatermass Xperiment, The', 'Horror|Mystery|Sci-Fi|Thriller', 'nullam porttitor lacus at turpis donec posuere metus vitae ipsum', 'https://robohash.org/sitdoloremomnis.jpg?size=50x50&set=set1', 'Zonguldak Karaelmas University'),
(30, 'Some Like It Hot', 'Comedy|Crime', 'enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae', 'https://robohash.org/dolorquisquameius.jpg?size=50x50&set=set1', 'Preston University'),
(31, 'Change of Habit', 'Drama', 'mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a', 'https://robohash.org/officiaconsecteturlaboriosam.jpg?size=50x50&set=set1', 'Universidad Mayor'),
(32, 'Mrs. Brown (a.k.a. Her Majesty, Mrs. Brown)', 'Drama|Romance', 'donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu', 'https://robohash.org/sitquiest.jpg?size=50x50&set=set1', 'Divine Word College of Legazpi'),
(33, 'Julie Johnson', 'Drama', 'aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis', 'https://robohash.org/suscipitsaepeaperiam.png?size=50x50&set=set1', 'Bohai University'),
(34, 'It\'s a Free World...', 'Drama', 'neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum', 'https://robohash.org/etmaximevoluptas.jpg?size=50x50&set=set1', 'The Superior College '),
(35, 'Babymother', 'Drama', 'purus sit amet nulla quisque arcu libero rutrum ac lobortis vel', 'https://robohash.org/nemosuntsed.png?size=50x50&set=set1', 'City University'),
(36, 'Signal, The', 'Sci-Fi|Thriller', 'non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis', 'https://robohash.org/ataliquidquo.png?size=50x50&set=set1', 'New York University'),
(37, 'And the Band Played On', 'Drama', 'sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in', 'https://robohash.org/beataelaboriosamut.png?size=50x50&set=set1', 'University of Applied Sciences Chur'),
(38, 'Ivan\'s Childhood (a.k.a. My Name is Ivan) (Ivanovo detstvo)', 'Drama|War', 'ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque', 'https://robohash.org/quoidullam.png?size=50x50&set=set1', 'Universidade Portucalense Infante D. Henrique'),
(39, 'Taken', 'Sci-Fi', 'sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non', 'https://robohash.org/quiaanimialiquam.jpg?size=50x50&set=set1', 'Osaka University of Education'),
(40, 'Crude Oasis, The', 'Drama|Romance', 'ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend', 'https://robohash.org/errormaioresab.png?size=50x50&set=set1', 'Université de Provence (Aix-Marseille I)'),
(41, 'Bad Girls (Biches, Les)', 'Drama|Mystery', 'in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat', 'https://robohash.org/inventoreestnon.bmp?size=50x50&set=set1', 'Shanghai City College'),
(42, 'Thirteen', 'Drama', 'nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat', 'https://robohash.org/etisteexplicabo.jpg?size=50x50&set=set1', 'Université de Chlef'),
(43, 'Ben-Hur: A Tale of the Christ', 'Adventure|Drama', 'porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac', 'https://robohash.org/nihilexcepturineque.bmp?size=50x50&set=set1', 'Newschool of Architecture and Design'),
(44, 'Crime Busters', 'Action|Adventure|Comedy|Crime', 'laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper', 'https://robohash.org/abettenetur.bmp?size=50x50&set=set1', 'Fashion Institute of New York'),
(45, 'Honeymooners, The', 'Comedy', 'tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero', 'https://robohash.org/doloremquedelenitirepellendus.jpg?size=50x50&set=set1', 'Muskingum College'),
(46, 'Alphabet', 'Documentary', 'varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt', 'https://robohash.org/laboriosamvoluptatemassumenda.png?size=50x50&set=set1', 'Deutsche Telekom Fachhochschule Leipzig'),
(47, 'Like Stars on Earth (Taare Zameen Par)', 'Drama', 'sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus', 'https://robohash.org/omnisaperiameum.png?size=50x50&set=set1', 'Wright State University'),
(48, 'Prime Suspect 3', 'Crime|Drama|Mystery', 'platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut', 'https://robohash.org/facilistotamest.jpg?size=50x50&set=set1', 'Keele University'),
(49, 'Titfield Thunderbolt, The', 'Comedy', 'vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue', 'https://robohash.org/rerummodipariatur.jpg?size=50x50&set=set1', 'Chubu University'),
(50, 'Split Second', 'Action|Sci-Fi|Thriller', 'erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in', 'https://robohash.org/suntdoloremveniam.jpg?size=50x50&set=set1', 'Yanbian University'),
(51, 'Bright Eyes', 'Comedy|Drama', 'ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque', 'https://robohash.org/quiautsequi.jpg?size=50x50&set=set1', 'Ecole Polytechnique Universitaire de Lille'),
(52, 'Linotype: The Film', 'Documentary', 'cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor', 'https://robohash.org/ipsumrationeullam.png?size=50x50&set=set1', 'Universidad Nacional de Cuyo'),
(53, 'Something Like Happiness (Stestí)', 'Comedy|Drama', 'pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat', 'https://robohash.org/ullamquoea.bmp?size=50x50&set=set1', 'University of Oslo'),
(54, 'Sinbad: The Fifth Voyage', 'Action|Adventure|Fantasy', 'nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero', 'https://robohash.org/sedquodvoluptatibus.bmp?size=50x50&set=set1', 'Academia de Studii Economice din Bucuresti'),
(55, 'When a Stranger Calls', 'Horror|Thriller', 'pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit', 'https://robohash.org/reiciendisnecessitatibusconsequuntur.jpg?size=50x50&set=set1', 'Southwest Petroleum University'),
(56, 'Bartleby', 'Comedy|Drama', 'suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet', 'https://robohash.org/nullaprovidentdolorem.png?size=50x50&set=set1', 'College of St. Mary'),
(57, 'Top Hat', 'Comedy|Musical|Romance', 'penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque', 'https://robohash.org/iureculpavoluptatem.jpg?size=50x50&set=set1', 'Southern Adventist University'),
(58, 'Elizabeth: The Golden Age', 'Drama', 'sit amet diam in magna bibendum imperdiet nullam orci pede', 'https://robohash.org/reiciendisetiste.png?size=50x50&set=set1', 'Albright College'),
(59, 'Item, The', 'Action|Horror', 'metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis', 'https://robohash.org/magnamvoluptasveniam.jpg?size=50x50&set=set1', 'Higher Colleges of Technology'),
(60, 'Man Who Laughs, The', 'Drama|Romance', 'at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci', 'https://robohash.org/doloresvoluptasdicta.bmp?size=50x50&set=set1', 'Western Oregon University'),
(61, 'Smashed', 'Comedy|Drama', 'accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula', 'https://robohash.org/nonetet.bmp?size=50x50&set=set1', 'Tabor College'),
(62, 'Rounders', 'Drama', 'vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque', 'https://robohash.org/expeditanihilcum.bmp?size=50x50&set=set1', 'Nortre Dame Seishin University'),
(63, 'Denise Calls Up', 'Comedy', 'mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non quam', 'https://robohash.org/architectoquosut.jpg?size=50x50&set=set1', 'Maharaja Sayajirao University of Baroda'),
(64, 'Penthouse', 'Comedy|Crime|Drama', 'rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede', 'https://robohash.org/facilisvoluptatemsed.jpg?size=50x50&set=set1', 'China Agriculture University East'),
(65, 'Rembrandt', 'Drama', 'lorem id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit', 'https://robohash.org/eaquefaciliseius.jpg?size=50x50&set=set1', 'Boston College'),
(66, 'Joe and Max', 'Drama|War', 'convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id', 'https://robohash.org/necessitatibusrecusandaequam.bmp?size=50x50&set=set1', 'University of Science and Technology Beijing'),
(67, 'Hiding Place, The', 'Drama|War', 'eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam', 'https://robohash.org/eosearumeos.bmp?size=50x50&set=set1', 'International Business School of Scandinavia'),
(68, 'Ghidorah, the Three-Headed Monster (San daikaijû: Chikyû sai', 'Action|Adventure|Fantasy|Sci-Fi', 'pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra', 'https://robohash.org/etnonea.bmp?size=50x50&set=set1', 'Universidad Nacional Experimental de Guayana'),
(69, 'Screamers', 'Action|Sci-Fi|Thriller', 'placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor', 'https://robohash.org/nesciuntcupiditatenihil.jpg?size=50x50&set=set1', 'Savannah State University'),
(70, 'Good Luck. And Take Care of Each Other', 'Comedy|Drama', 'luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo', 'https://robohash.org/architectoeiusut.jpg?size=50x50&set=set1', 'Universidad Nacional Evangélica'),
(71, 'Mysterious Lady, The', 'Drama|Romance', 'eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus', 'https://robohash.org/velitautvoluptas.bmp?size=50x50&set=set1', 'Temple University Japan'),
(72, 'Lauderdale (a.k.a. Spring Break USA) (a.k.a. Spring Fever US', 'Comedy', 'lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin', 'https://robohash.org/etaccusantiumexcepturi.bmp?size=50x50&set=set1', 'State University of New York College of Environmental Science and Forestry'),
(73, 'Song of the Thin Man', 'Comedy|Crime|Drama|Musical|Mystery|Romance', 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla', 'https://robohash.org/quiavoluptasdicta.bmp?size=50x50&set=set1', 'Dong Yang University of Technology'),
(74, 'Agent Cody Banks', 'Action|Adventure|Children|Fantasy', 'faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur', 'https://robohash.org/corruptiasperioresin.jpg?size=50x50&set=set1', 'Champlain College'),
(75, 'The Hunchback of Paris', 'Action|Adventure', 'pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac', 'https://robohash.org/adipiscisitquia.bmp?size=50x50&set=set1', 'Barclay College'),
(76, 'Uncle Sam', 'Horror', 'pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis', 'https://robohash.org/iustoexcepturiquo.bmp?size=50x50&set=set1', 'Westminster College Fulton'),
(77, 'Run Lola Run (Lola rennt)', 'Action|Crime', 'proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing', 'https://robohash.org/evenietipsumiusto.bmp?size=50x50&set=set1', 'Taipei Municipal Teachers College'),
(78, 'All Is Forgiven (Tout est pardonné)', 'Drama', 'enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id', 'https://robohash.org/suntestaliquam.png?size=50x50&set=set1', 'Azerbaijan State Economic University'),
(79, 'Housefull 2', 'Comedy|Romance', 'in leo maecenas pulvinar lobortis est phasellus sit amet erat', 'https://robohash.org/architectoutqui.png?size=50x50&set=set1', 'Persian Gulf University'),
(80, 'Game, The', 'Drama|Mystery|Thriller', 'vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes', 'https://robohash.org/cupiditatequasimodi.jpg?size=50x50&set=set1', 'Oklahoma State University - Oklahoma City'),
(81, 'Charter Trip, The (a.k.a. Package Tour, The) (Sällskapsresan', 'Comedy', 'tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam', 'https://robohash.org/quasautvoluptatem.png?size=50x50&set=set1', 'Universidade Regional de Blumenau'),
(82, 'Felicity', 'Drama', 'ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque', 'https://robohash.org/consequatursitmolestiae.png?size=50x50&set=set1', 'Middle Tennessee State University'),
(83, 'Rapture (Arrebato)', 'Drama|Horror', 'erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla', 'https://robohash.org/quisimiliquerem.jpg?size=50x50&set=set1', 'Eastern Mennonite University'),
(84, 'Jewtopia', 'Comedy|Romance', 'faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae', 'https://robohash.org/oditiuresed.png?size=50x50&set=set1', 'Universidad del Magdalena'),
(85, '3 Penny Opera, The (Threepenny Opera, The) (3 Groschen-Oper,', 'Crime|Musical', 'at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum', 'https://robohash.org/cupiditateofficiiseos.bmp?size=50x50&set=set1', 'Northern Virginia Community College'),
(86, 'Good Son, The', 'Drama|Thriller', 'odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem', 'https://robohash.org/mollitiasitaut.jpg?size=50x50&set=set1', 'Winthrop University'),
(87, 'Flintstones in Viva Rock Vegas, The', 'Children|Comedy', 'nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel', 'https://robohash.org/etquiimpedit.png?size=50x50&set=set1', 'King Mongkut\'s University of Technology Thonburi'),
(88, 'Warning from Space (Uchûjin Tôkyô ni arawaru)', 'Sci-Fi', 'duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor', 'https://robohash.org/adipisciodioiure.jpg?size=50x50&set=set1', 'Islamic Azad University, Lahijan'),
(89, 'Slingshot, The (Kådisbellan)', 'Comedy|Drama', 'massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi', 'https://robohash.org/dolorutexercitationem.jpg?size=50x50&set=set1', 'Universidad Central'),
(90, 'Arthur Newman', 'Comedy|Drama', 'orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu', 'https://robohash.org/ullamestmodi.png?size=50x50&set=set1', 'Instituto Superior de Ciências Educativas'),
(91, 'Brass Monkey', 'Comedy|Crime|Drama|Mystery', 'eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque', 'https://robohash.org/doloremqueconsequaturquos.bmp?size=50x50&set=set1', 'University of Finance and Management in Bialystok'),
(92, 'Generation X', 'Action|Adventure|Sci-Fi', 'dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi', 'https://robohash.org/quiavoluptatumcommodi.bmp?size=50x50&set=set1', 'Instituto Politécnico de Lisboa'),
(93, 'Toys in the Attic', 'Drama', 'condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu', 'https://robohash.org/teneturfaceredelectus.bmp?size=50x50&set=set1', 'Universidad San Francisco de Quito'),
(94, 'Tiny Toon Adventures: How I Spent My Vacation', 'Adventure|Animation|Comedy', 'sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis', 'https://robohash.org/etquinihil.bmp?size=50x50&set=set1', 'Huaihua Medical College'),
(95, '29th Street', 'Comedy', 'duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse', 'https://robohash.org/magnamaccusantiumaut.png?size=50x50&set=set1', 'Moscow State Textile University A.N. Kosygin'),
(96, 'Girls Will Be Girls', 'Comedy', 'auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio', 'https://robohash.org/eligendiinciduntaliquid.bmp?size=50x50&set=set1', 'Universidad de Huánuco'),
(97, 'Sons of Perdition', 'Documentary', 'enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem', 'https://robohash.org/voluptatemfugitest.bmp?size=50x50&set=set1', 'Anhui University of Finance and Economics'),
(98, 'Chaos', 'Comedy|Crime|Drama', 'eleifend quam a odio in hac habitasse platea dictumst maecenas ut', 'https://robohash.org/molestiaeinventoreaut.bmp?size=50x50&set=set1', 'Universidad de Guadalajara'),
(99, 'Her Alibi', 'Comedy|Romance', 'mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam', 'https://robohash.org/quiainexplicabo.bmp?size=50x50&set=set1', 'National Museum Institute of History of Art, Conservation and Museology'),
(100, 'City for Conquest', 'Drama', 'odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam', 'https://robohash.org/quiainsunt.jpg?size=50x50&set=set1', 'Universidad San Juan de la Cruz'),
(101, 'Intermission', 'Comedy|Crime|Drama', 'odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at', 'https://robohash.org/temporautut.bmp?size=50x50&set=set1', 'Northwestern College Iowa'),
(102, 'Good Bye (Bé omid é didar)', 'Drama', 'sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl', 'https://robohash.org/eligendisedfacilis.bmp?size=50x50&set=set1', 'Berea College'),
(103, 'Private Lives', 'Comedy|Drama', 'quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna', 'https://robohash.org/ullammolestiastempora.jpg?size=50x50&set=set1', 'Anhui University'),
(104, 'Sparrows Dance', 'Drama|Romance', 'nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo', 'https://robohash.org/quiestodio.bmp?size=50x50&set=set1', 'North China Electric Power University'),
(105, 'Snakes on a Plane', 'Action|Comedy|Horror|Thriller', 'justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus', 'https://robohash.org/officiaquaeconsequatur.jpg?size=50x50&set=set1', 'University of Arkansas at Monticello'),
(106, 'Forgiveness of Blood, The (Falja e gjakut)', 'Drama', 'quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam', 'https://robohash.org/minusquasenim.jpg?size=50x50&set=set1', 'October 6 university'),
(107, 'How Green Was My Valley', 'Drama|Musical|Romance', 'maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat', 'https://robohash.org/estexquasi.png?size=50x50&set=set1', 'Institut d\'Etudes Politiques de Bordeaux'),
(108, 'Dylan Moran: Like, Totally', 'Comedy', 'vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum', 'https://robohash.org/abporroconsequatur.bmp?size=50x50&set=set1', 'Handelshochschule Leipzig'),
(109, 'Investigating Sex (a.k.a. Intimate Affairs)', 'Comedy|Drama', 'vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et', 'https://robohash.org/estminimafugiat.bmp?size=50x50&set=set1', 'Northeast Agricultural University'),
(110, 'Strangler, The', 'Horror', 'quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse', 'https://robohash.org/etsaepecumque.jpg?size=50x50&set=set1', 'Fachhochschule für Wirtschaft Berlin'),
(111, 'Hand Gun', 'Action|Crime|Drama|Thriller', 'fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien', 'https://robohash.org/quosinciduntquam.png?size=50x50&set=set1', 'Sultan Salahuddin Abdul Aziz Shah Polytechnic'),
(112, 'I Think We\'re Alone Now', 'Documentary', 'quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae', 'https://robohash.org/corruptirerumquaerat.jpg?size=50x50&set=set1', 'Universidad Nacional del Nordeste'),
(113, 'Puppet Masters, The', 'Horror|Sci-Fi', 'tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean', 'https://robohash.org/cumnonconsequuntur.bmp?size=50x50&set=set1', 'Technological University (Pathein)'),
(114, 'After Sex', 'Drama|Romance', 'nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam', 'https://robohash.org/adatqueitaque.jpg?size=50x50&set=set1', 'Fachhochschule Bielefeld'),
(115, 'Bell, Book and Candle', 'Comedy|Fantasy|Romance', 'gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi', 'https://robohash.org/providentconsequaturvero.png?size=50x50&set=set1', 'National University of Science and Technology Bulawayo'),
(116, 'Invisible Sign, An', 'Comedy|Drama', 'nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend', 'https://robohash.org/etdelenitioccaecati.bmp?size=50x50&set=set1', 'University College of the Fraser Valley'),
(117, 'Source Family, The', 'Documentary|Musical', 'platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt', 'https://robohash.org/magnialiquidquos.png?size=50x50&set=set1', 'Beijing Sport University'),
(118, 'Dane Cook: Vicious Circle', 'Comedy', 'nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim', 'https://robohash.org/ipsamsimiliqueeaque.bmp?size=50x50&set=set1', 'Athens School of Fine Arts'),
(119, 'The Admirable Crichton', 'Comedy', 'quam suspendisse potenti nullam porttitor lacus at turpis donec posuere', 'https://robohash.org/laborumullammolestiae.png?size=50x50&set=set1', 'Fachhochschule Aachen'),
(120, 'Final Destination', 'Drama|Thriller', 'id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at', 'https://robohash.org/veritatismollitiaomnis.bmp?size=50x50&set=set1', 'Joetsu University of Education'),
(121, 'SIS', 'Action|Crime|Drama|Thriller', 'sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis', 'https://robohash.org/quoipsumquasi.png?size=50x50&set=set1', 'Awadhesh Pratap Singh University'),
(122, 'Farmer\'s Daughter, The', 'Comedy', 'ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa', 'https://robohash.org/nihilharumveritatis.png?size=50x50&set=set1', 'Vellore Institute of Technology'),
(123, 'Biloxi Blues', 'Comedy|Drama', 'duis mattis egestas metus aenean fermentum donec ut mauris eget', 'https://robohash.org/autquoea.bmp?size=50x50&set=set1', 'Benadir University'),
(124, 'Noroi: The Curse ', 'Horror', 'ligula sit amet eleifend pede libero quis orci nullam molestie nibh in', 'https://robohash.org/etdoloreeveniet.jpg?size=50x50&set=set1', 'Burlington College'),
(125, 'Thirty Day Princess', 'Comedy|Romance', 'nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh', 'https://robohash.org/culpaeumquas.jpg?size=50x50&set=set1', 'Gomel State Technical University Pavel Sukhoi'),
(126, 'Stalag 17', 'Drama|War', 'massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo', 'https://robohash.org/doloresipsamunde.bmp?size=50x50&set=set1', 'Shaw University'),
(127, 'Forever Mine', 'Crime|Drama|Romance|Thriller', 'lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis', 'https://robohash.org/omnisnemoenim.jpg?size=50x50&set=set1', 'Universidad del Mar'),
(128, 'Double, Double, Toil and Trouble', 'Adventure|Children|Comedy|Fantasy|Horror', 'condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse', 'https://robohash.org/eumeaquenecessitatibus.bmp?size=50x50&set=set1', 'Wuhan Technical University of Surveying and Mapping'),
(129, 'Out Cold', 'Comedy', 'pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus', 'https://robohash.org/sedquaeratrerum.jpg?size=50x50&set=set1', 'College of Technology at Jeddah'),
(130, 'Life and Times of Hank Greenberg, The', 'Documentary', 'donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique', 'https://robohash.org/etquiavelit.png?size=50x50&set=set1', 'Kagawa University'),
(131, 'Claudine', 'Drama', 'sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes', 'https://robohash.org/nesciuntofficiisdoloremque.bmp?size=50x50&set=set1', 'Maritime University Constanta'),
(132, 'Toys', 'Comedy|Fantasy', 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non', 'https://robohash.org/exessedolores.jpg?size=50x50&set=set1', 'Halmstad University College'),
(133, '19th Wife, The', 'Drama', 'erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus', 'https://robohash.org/ametvelitut.bmp?size=50x50&set=set1', 'Universidad Autónoma de Tlaxcala'),
(134, 'Jeepers Creepers 2', 'Horror|Thriller', 'arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci', 'https://robohash.org/solutavoluptateanimi.bmp?size=50x50&set=set1', 'Siberian State University of Telecommunications and Informatics'),
(135, 'Trouble with Harry, The', 'Comedy|Mystery', 'orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus', 'https://robohash.org/expeditaerroraspernatur.png?size=50x50&set=set1', ' Huaihua University'),
(136, 'Doctor Dolittle', 'Adventure|Children|Musical', 'enim sit amet nunc viverra dapibus nulla suscipit ligula in', 'https://robohash.org/estaccusantiumnam.jpg?size=50x50&set=set1', 'Central Connecticut State University'),
(137, 'To End All Wars', 'Action|Drama|War', 'fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa', 'https://robohash.org/deserunttemporibusconsequatur.png?size=50x50&set=set1', 'Roanoke Bible College'),
(138, 'September', 'Drama', 'in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt', 'https://robohash.org/facerenonrecusandae.jpg?size=50x50&set=set1', 'Jinnah University for Women'),
(139, 'Young People Fucking (a.k.a. YPF)', 'Comedy', 'eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies', 'https://robohash.org/deseruntseddolor.bmp?size=50x50&set=set1', 'London School of Hygiene & Tropical Medicine, University of London'),
(140, 'Absolute Beginners', 'Musical', 'at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in', 'https://robohash.org/reiciendisinventoreillo.jpg?size=50x50&set=set1', 'Universitas Komputer Indonesia'),
(141, 'Glengarry Glen Ross', 'Drama', 'a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices', 'https://robohash.org/placeatrerumsint.bmp?size=50x50&set=set1', 'University of Missouri - Saint Louis'),
(142, 'All for the Winner (Dou sing)', 'Action|Comedy', 'volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar', 'https://robohash.org/quisquammagniquia.png?size=50x50&set=set1', 'Vrije Universiteit Brussel'),
(143, 'Crime Busters', 'Action|Adventure|Comedy|Crime', 'turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis', 'https://robohash.org/cumasperiorestemporibus.jpg?size=50x50&set=set1', 'Technische Universität Graz'),
(144, 'Soap Girl', 'Drama|Romance', 'consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed', 'https://robohash.org/delenititemporaa.jpg?size=50x50&set=set1', 'Gonzaga University'),
(145, 'Dry Season (Daratt)', 'Drama', 'turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget', 'https://robohash.org/eaquoasperiores.jpg?size=50x50&set=set1', 'Universidad del Norte'),
(146, 'Kino-Eye (Kinoglaz)', 'Documentary', 'in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim', 'https://robohash.org/sequiasperioresblanditiis.bmp?size=50x50&set=set1', 'Vaal University of Technology'),
(147, 'Silver Bears', 'Comedy|Crime', 'in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat', 'https://robohash.org/adipiscihiciure.jpg?size=50x50&set=set1', 'Institute of Education, University of London'),
(148, 'Sarafina!', 'Drama', 'pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam', 'https://robohash.org/numquamipsumrerum.png?size=50x50&set=set1', 'Rivier College'),
(149, 'Running Free', 'Adventure|Children|Drama', 'interdum venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus', 'https://robohash.org/expeditanameum.jpg?size=50x50&set=set1', 'Fachhochschule Kärnten'),
(150, 'In the Basement', 'Documentary', 'eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at', 'https://robohash.org/architectooptiotempore.jpg?size=50x50&set=set1', 'Hunan University'),
(151, 'Black Roses ', 'Horror|Musical', 'sapien sapien non mi integer ac neque duis bibendum morbi non quam', 'https://robohash.org/consequaturetrerum.png?size=50x50&set=set1', 'Anglia Ruskin University'),
(152, 'Dogtooth (Kynodontas)', 'Drama', 'donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in', 'https://robohash.org/minusessedolorum.bmp?size=50x50&set=set1', 'Zhongnan University of Technology'),
(153, 'Pentimento', 'Drama', 'cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem', 'https://robohash.org/quoddoloremagnam.bmp?size=50x50&set=set1', 'California Institute of Technology'),
(154, 'Ambushers, The', 'Comedy|Sci-Fi|Thriller', 'quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere', 'https://robohash.org/possimusvoluptasoccaecati.png?size=50x50&set=set1', 'Fakir Mohan University'),
(155, 'The Lost Prince', 'Drama', 'dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi', 'https://robohash.org/laudantiumeiusanimi.png?size=50x50&set=set1', 'Evangelische Fachhochschule Ludwigshafen Hochschule für Sozial- und Gesundheitswesen'),
(156, 'Tennessee', 'Drama', 'vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac', 'https://robohash.org/veldelectusodio.jpg?size=50x50&set=set1', 'Universidade Santa Úrsula'),
(157, 'North Shore', 'Drama|Romance', 'massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et', 'https://robohash.org/dolorquododio.jpg?size=50x50&set=set1', 'Stanford University'),
(158, 'God Grew Tired of Us', 'Documentary|Drama', 'luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci', 'https://robohash.org/commodicumquedolores.jpg?size=50x50&set=set1', 'Davenport College of Business, Kalamazoo'),
(159, 'Archangel', 'Comedy', 'tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est risus', 'https://robohash.org/quosexplicabominus.png?size=50x50&set=set1', 'Kursk State Technical University'),
(160, 'I Belong (Som du ser meg)', 'Drama', 'nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem', 'https://robohash.org/inciduntvoluptatesqui.png?size=50x50&set=set1', 'Xi\'an University of Architecture and Technology'),
(161, 'Crimson Rivers, The (Rivières pourpres, Les)', 'Crime|Drama|Mystery|Thriller', 'libero convallis eget eleifend luctus ultricies eu nibh quisque id', 'https://robohash.org/eosrepellendussequi.png?size=50x50&set=set1', 'Universidade Católica de Salvador'),
(162, 'Cinderella Liberty', 'Drama|Romance', 'vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est', 'https://robohash.org/magnamteneturodio.jpg?size=50x50&set=set1', 'Fachhochschule Bingen'),
(163, 'Toy Story That Time Forgot', 'Animation|Children', 'turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem', 'https://robohash.org/eosetimpedit.jpg?size=50x50&set=set1', 'Griffith College'),
(164, 'In the Realms of the Unreal', 'Animation|Documentary', 'libero quis orci nullam molestie nibh in lectus pellentesque at nulla', 'https://robohash.org/voluptatemquoeum.bmp?size=50x50&set=set1', 'Alaska Bible College'),
(165, 'Festival Express', 'Documentary|Musical', 'viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis', 'https://robohash.org/etquaminventore.bmp?size=50x50&set=set1', 'Vyatka State Pedagogical University'),
(166, 'Groundhog Day', 'Comedy|Fantasy|Romance', 'neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi', 'https://robohash.org/doloremqueperspiciatismolestiae.png?size=50x50&set=set1', 'Universidad Autónoma Tomás Frías'),
(167, 'Best of Ernie and Bert, The', 'Children', 'posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien', 'https://robohash.org/eumquidolor.png?size=50x50&set=set1', 'Katholieke Hogeschool Kempen'),
(168, 'Family Honeymoon', 'Comedy|Romance', 'vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis', 'https://robohash.org/eumnumquammaxime.bmp?size=50x50&set=set1', 'Nebraska Methodist College of Nursing and Allied Health'),
(169, 'Sharpe\'s Gold', 'Action|Adventure|War', 'porta volutpat erat quisque erat eros viverra eget congue eget', 'https://robohash.org/essedictaut.bmp?size=50x50&set=set1', 'Iowa Wesleyan College'),
(170, 'Feast of All Saints', 'Drama|Romance', 'posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis', 'https://robohash.org/atquererumfacilis.bmp?size=50x50&set=set1', 'Mehran University of Engineering & Technology'),
(171, 'Earthlings', 'Documentary', 'suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus', 'https://robohash.org/numquamvoluptatumeius.png?size=50x50&set=set1', 'Instituto Universitario CEMA'),
(172, 'Get Low', 'Comedy|Drama|Mystery', 'diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus sapien', 'https://robohash.org/doloribusrationebeatae.jpg?size=50x50&set=set1', 'Monterey Institute of International Studies'),
(173, 'Stanley Kubrick: A Life in Pictures', 'Documentary', 'dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet', 'https://robohash.org/ipsameiusfacere.bmp?size=50x50&set=set1', 'Universidad Peruana Union'),
(174, 'Dogs', 'Horror|Thriller', 'in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus', 'https://robohash.org/adrerumvoluptas.jpg?size=50x50&set=set1', 'Williams Baptist College'),
(175, 'Cake', 'Comedy|Romance', 'id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy', 'https://robohash.org/doloreseosiusto.png?size=50x50&set=set1', 'Ecole Supérieure de Commerce de Sophia Antipolis'),
(176, 'Chronicles (Crónicas)', 'Crime|Drama', 'cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet', 'https://robohash.org/voluptatumullamquos.bmp?size=50x50&set=set1', 'Kanagawa Institute of Technology'),
(177, 'Secret Ceremony', 'Drama|Thriller', 'dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque', 'https://robohash.org/excepturiinciduntsed.png?size=50x50&set=set1', 'University of the Philippines Diliman'),
(178, 'Boca', 'Action|Crime|Drama', 'ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing', 'https://robohash.org/asperioresquibusdamat.bmp?size=50x50&set=set1', 'St. Francis College, Fort Wayne'),
(179, 'Monkey\'s Paw, The', 'Horror|Thriller', 'arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum', 'https://robohash.org/dolorrerumsunt.jpg?size=50x50&set=set1', 'Courtauld Institute of Art, University of London'),
(180, 'Dark of the Sun', 'Action|Adventure|Drama|War', 'tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus', 'https://robohash.org/repudiandaererumodio.bmp?size=50x50&set=set1', 'Belarussian State University of Informatics and Radioelectronics'),
(181, 'Five Pennies, The', 'Drama', 'laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus', 'https://robohash.org/etablaboriosam.jpg?size=50x50&set=set1', 'Universidad Francisco de Aguirre'),
(182, 'Children of Glory (Szabadság, szerelem)', 'Drama|Romance|War', 'id pretium iaculis diam erat fermentum justo nec condimentum neque', 'https://robohash.org/autmolestiaeet.png?size=50x50&set=set1', 'Evangelische Fachhochschule für Religionspädagogik, und Gemeindediakonie Moritzburg'),
(183, 'Mail Order Bride', 'Comedy', 'viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam', 'https://robohash.org/cumsedet.png?size=50x50&set=set1', 'Mount Mercy College'),
(184, 'For Love of the Game', 'Comedy|Drama', 'a pede posuere nonummy integer non velit donec diam neque vestibulum', 'https://robohash.org/temporerepudiandaeomnis.png?size=50x50&set=set1', 'Dr. YS Parmar University of Horticulture and Forestry'),
(185, 'Nymph', 'Fantasy|Horror', 'vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum', 'https://robohash.org/quiasapientecupiditate.bmp?size=50x50&set=set1', 'Omsk State Technical University'),
(186, 'Little Dieter Needs to Fly', 'Documentary', 'venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et', 'https://robohash.org/deseruntquiquis.png?size=50x50&set=set1', 'Roosevelt University'),
(187, 'City of Fear', 'Crime|Thriller', 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae', 'https://robohash.org/minusetvoluptates.png?size=50x50&set=set1', 'Inje University'),
(188, 'Brother 2 (Brat 2)', 'Crime|Drama', 'integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper', 'https://robohash.org/voluptatemsedunde.png?size=50x50&set=set1', 'Luhansk State Medical University'),
(189, 'No Greater Love', 'Drama|Romance', 'nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit', 'https://robohash.org/voluptasexercitationemquia.bmp?size=50x50&set=set1', 'Michael Okpara University of Agriculture'),
(190, 'RoboCop 3', 'Action|Crime|Drama|Sci-Fi|Thriller', 'semper porta volutpat quam pede lobortis ligula sit amet eleifend pede', 'https://robohash.org/corruptiautqui.jpg?size=50x50&set=set1', 'University of Ioannina'),
(191, 'Spring Breakers', 'Comedy|Crime|Drama', 'posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi', 'https://robohash.org/verodolorearchitecto.png?size=50x50&set=set1', 'University of Witwatersrand'),
(192, 'Friday the 13th Part 3: 3D', 'Horror', 'ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti', 'https://robohash.org/remaliasmaiores.bmp?size=50x50&set=set1', 'Arab Open University'),
(193, 'Good Guys Wear Black', 'Action', 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla', 'https://robohash.org/possimustemporaconsequuntur.bmp?size=50x50&set=set1', 'King\'s College London, University of London'),
(194, 'David et Madame Hansen', 'Comedy|Drama', 'tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis', 'https://robohash.org/velitfugaqui.bmp?size=50x50&set=set1', 'University of Wales, Lampeter'),
(195, 'Swamp Women', 'Adventure|Crime|Horror', 'primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis', 'https://robohash.org/nihilquiaeaque.jpg?size=50x50&set=set1', 'Wadi International University'),
(196, 'Fatherland', 'Action|Drama', 'congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec', 'https://robohash.org/voluptatesasperioresvoluptatem.jpg?size=50x50&set=set1', 'University Institute of Architecture Venice'),
(197, 'Hori Smoku Sailor Jerry: The Life of Norman K. Collins ', 'Documentary', 'eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc', 'https://robohash.org/quodeumbeatae.jpg?size=50x50&set=set1', 'University of Michigan - Ann Arbor'),
(198, 'Surfwise', 'Documentary', 'ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin', 'https://robohash.org/solutautconsequatur.png?size=50x50&set=set1', 'St. Luke\' s College of Nursing'),
(199, 'The Vanishing American', 'Western', 'morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus', 'https://robohash.org/velmodiquam.bmp?size=50x50&set=set1', 'National Academy for Physical Education and Sports Bucharest'),
(200, 'You, the Living (Du levande)', 'Comedy|Drama|Musical', 'nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis', 'https://robohash.org/ametimpeditipsam.jpg?size=50x50&set=set1', 'Azad Jammu and Kashmir University');

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
  `senha` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nascimento` date DEFAULT NULL,
  `raca` varchar(60) DEFAULT 'Human',
  `classe` varchar(50) DEFAULT 'Adventurer',
  `descricao` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'sem descrição.',
  `personagem` varchar(60) DEFAULT 'não definido',
  `animefav` varchar(60) DEFAULT 'não definido',
  `img_perfil` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Imagens/server/empty_profile.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `email`, `senha`, `nascimento`, `raca`, `classe`, `descricao`, `personagem`, `animefav`, `img_perfil`) VALUES
(1, 'Eduardo R. de Matos', 'eduardoooax@gmail.com', '$2y$10$IuSNQKlJCZg6eKW2wobn.OjMKbM9jb1LXPOD4eS9ctehhyRstpmFC', '2003-04-17', 'Human', 'Adventurer', 'sem descrição.', 'não definido', 'não definido', 'Imagens/users/1empty_profile.jpg'),
(2, 'Gayzão', 'gayzao@jebanabunda.paitaon.com.ru', '$2y$10$W7Py/rBa6CBDRg3AZFuCgu337pKhJHoW8Y0/NA9JBOnTaV.IddcR2', '1945-04-30', 'Human', 'Adventurer', 'sem descrição.', 'não definido', 'não definido', 'Imagens/server/empty_profile.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
