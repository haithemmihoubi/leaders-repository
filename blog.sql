-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 05 juin 2021 à 02:07
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'modo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `token`, `role`) VALUES
(1, 'haithem', 'haithemmihoubi1234@gmail.com', 'haithem', 'admin', 'admin'),
(2, 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin'),
(3, 'haithem Mihoubi', 'haithemmihoubi12345@gmail.com', 'admin12345', '7dZiS3EFYB5Wg1d2RHY9r2J9WQOczn', 'admin'),
(7, 'sami', 'sami@gmail.com', '6ba92875148bf292f766e69bacdbbb9b1dd5ba89', '1N4GbNaG4NrejyggtscPNEGZPK7l08', 'modo'),
(8, 's', 's@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'tiaYDs8gn7mL2c5OnhdUxNthhPhpCS', 'admin'),
(9, 'sara', 'sara@gmail.com', 'dea04453c249149b5fc772d9528fe61afaf7441c', 'wYjzekyY3S2UBd5CairuE7LMEZwoUk', 'modo');

-- --------------------------------------------------------

--
-- Structure de la table `bulletin`
--

CREATE TABLE `bulletin` (
  `id_bulletin` int(11) NOT NULL,
  `cin_etudiant` int(11) NOT NULL,
  `moyenneGeneral` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bulletin`
--

INSERT INTO `bulletin` (`id_bulletin`, `cin_etudiant`, `moyenneGeneral`) VALUES
(4, 2364820, 12.5),
(5, 9632949, 12.86),
(6, 12480565, 12.5);

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(100) NOT NULL,
  `nom_classe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `nom_classe`) VALUES
(32, 'l2dsi4'),
(33, 'l2dsi3'),
(34, 'l2dsi1'),
(35, 'l2dsi2');

-- --------------------------------------------------------

--
-- Structure de la table `classe_prof`
--

CREATE TABLE `classe_prof` (
  `id` int(11) NOT NULL,
  `cin_prof` int(11) NOT NULL,
  `nom_classe` varchar(255) NOT NULL,
  `id_classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe_prof`
--

INSERT INTO `classe_prof` (`id`, `cin_prof`, `nom_classe`, `id_classe`) VALUES
(6, 12058746, 'l2dsi4', 32),
(7, 12066987, 'l2dsi1', 34),
(8, 15479003, 'l2dsi3', 33),
(9, 33658874, 'l2dsi1', 34);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `post_id`, `date`, `seen`) VALUES
(2, 'haithem Mihoubi', 'haithemmihoubi1234@gmail.com', 'good', 3, '2021-03-19 01:31:06', 1),
(4, 'reca', 'haithemmihoubi1234@gmail.com', 'dscsqc', 20, '2021-03-19 12:37:48', 1),
(5, 'haithem Mihoubi', 'haithemmihoubi1234@gmail.com', 'fffff', 20, '2021-03-19 12:45:09', 1),
(6, 'haithem Mihoubi', 'haithemmihoubi1234@gmail.com', 'tg tgt', 4, '2021-03-19 23:16:57', 1),
(7, 'sami', 's@gmail.com', 'salut c\'est sami', 3, '2021-03-20 00:14:36', 1),
(8, 'sara', 'sara@gmail.com', 'sar sar', 4, '2021-03-21 18:11:17', 1),
(9, 'haithem Mihoubi', 'haithemmihoubi1234@gmail.com', 'fvrsff', 25, '2021-03-21 18:19:47', 1),
(13, 'haithem Mihoubi', 'haithemmihoubi1234@gmail.com', 'system', 4, '2021-04-28 12:27:34', 0),
(15, 'haithem Mihoubi', 'haithemmihoubi1234@gmail.com', 'hhh', 28, '2021-05-24 23:24:15', 0),
(16, 'haithem Mihoubi', 'haithemmihoubi1234@gmail.com', 'mmmm', 25, '2021-05-29 16:03:49', 0),
(17, 'haithem Mihoubi', 'haithemmihoubi1234@gmail.com', 'yjnuj', 3, '2021-06-02 23:54:25', 0);

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `id_cour` int(100) NOT NULL,
  `id_matiere` int(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `lienCour` varchar(100) NOT NULL,
  `nomCour` varchar(100) NOT NULL,
  `nom_enseignant` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`id_cour`, `id_matiere`, `nom_matiere`, `lienCour`, `nomCour`, `nom_enseignant`) VALUES
(142, 69, 'java', 'devoir_synthese_2019_BD_final.docx', 'Atelier1', 'admin'),
(143, 70, 'jee', 'Corrigé-Tdpatternsf.docx', 'Atelier1', 'admin'),
(144, 70, 'jee', 'TD-patterns.docx', 'Atelier2', 'admin'),
(145, 69, 'java', 'devoir_synthese_2019_BD_final.docx', 'Atelier1', 'cheikh eya'),
(146, 72, 'Web', 'devoir_synthese_2019_BD_final.docx', 'Atelier3', 'lassoued mohamed'),
(147, 70, 'jee', 'Corrigé-Tdpatternsf.docx', 'Atelier1', 'hichri donia');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `cin` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `imageEnseignant` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`cin`, `nom`, `prenom`, `imageEnseignant`) VALUES
(12058746, 'lassoued', 'mohamed', 'enseignant-tableau-bureau-ordinateur.jpg'),
(12066987, 'cheikh', 'eya', 'images.jfif'),
(15479003, 'bacouch', 'mariem', 'role-de-lenseignant.jpg'),
(33658874, 'hichri', 'donia', 'sdfsd.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `cin` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naiss` date NOT NULL,
  `imageEtudiant` varchar(100) NOT NULL,
  `nom_classe` varchar(100) NOT NULL,
  `id_classe` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`cin`, `nom`, `prenom`, `date_naiss`, `imageEtudiant`, `nom_classe`, `id_classe`) VALUES
(2364820, 'khila', 'ali', '1999-01-02', 'img1.png', 'l2dsi2', 35),
(9632949, 'trojette', 'moataz', '1998-05-13', 'iStock-810599234-min-750x500.jpg', 'l2dsi4', 32),
(12055874, 'wajdi', 'ghrida', '1999-05-13', 'iStock-810599234-min-750x500.jpg', 'l2dsi1', 34),
(12480565, 'bachouel', 'sara', '1998-06-02', 'img3.jpg', 'l2dsi4', 32);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id_matiere` int(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `coef` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom_matiere`, `coef`) VALUES
(69, 'java', 2),
(70, 'jee', 2),
(71, 'architecture', 3),
(72, 'Web', 5);

-- --------------------------------------------------------

--
-- Structure de la table `matiere_prof`
--

CREATE TABLE `matiere_prof` (
  `id` int(11) NOT NULL,
  `cin_prof` int(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `id_matiere` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere_prof`
--

INSERT INTO `matiere_prof` (`id`, `cin_prof`, `nom_matiere`, `id_matiere`) VALUES
(15, 12058746, 'Web', 72),
(16, 12066987, 'java', 69),
(17, 15479003, 'architecture', 71),
(18, 33658874, 'jee', 70),
(19, 33658874, 'java', 69);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1399543998, 1399543998, 'helllo'),
(2, 1399543998, 1399543998, 'hello'),
(3, 1399543998, 1399543998, 'chat'),
(4, 1399543998, 1399543998, 'chat'),
(5, 1399543998, 1399543998, 'chat'),
(6, 1399543998, 1399543998, 'chat'),
(7, 1399543998, 1399543998, 'hii'),
(8, 1399543998, 1399543998, 'sarah'),
(9, 702501944, 1399543998, 'hello'),
(10, 1399543998, 1444662784, 'salem'),
(11, 702501944, 1444662784, 'salem'),
(12, 1399543998, 1399543998, 'salem'),
(13, 1444662784, 1399543998, 'ca va '),
(14, 702501944, 1399543998, 'aslema'),
(15, 702501944, 1399543998, 'ca va '),
(16, 1399543998, 702501944, 'hany ca va '),
(17, 1399543998, 702501944, 'wynkk ?? '),
(18, 1399543998, 702501944, 'hanyyy shneya jaw '),
(19, 702501944, 1399543998, 'cv '),
(20, 702501944, 1399543998, 'aslema'),
(21, 702501944, 1399543998, 'ca va '),
(22, 702501944, 1399543998, 'wynk shaaml '),
(23, 1444662784, 1399543998, 'aslema '),
(24, 1444662784, 1399543998, 'sneya jaw '),
(25, 1444662784, 1399543998, '?? '),
(26, 1444662784, 1399543998, 'ca va !??n'),
(27, 1444662784, 1399543998, 'meshya '),
(28, 1444662784, 1399543998, 'denya '),
(29, 1444662784, 1399543998, '?? '),
(30, 1444662784, 1399543998, 'allo '),
(31, 1444662784, 1399543998, 'allo '),
(32, 1444662784, 1399543998, 'wynnekk ??? '),
(33, 229370374, 1399543998, 'ahla'),
(34, 739867046, 1041565097, 'salut '),
(35, 702501944, 1399543998, 'salem'),
(36, 1399543998, 702501944, 'salem'),
(37, 702501944, 702501944, 'salem'),
(38, 1399543998, 702501944, 'lebes'),
(39, 1399543998, 702501944, 'hamdoulah '),
(40, 702501944, 1399543998, 'salem'),
(41, 616766412, 1399543998, 'hello ');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_note` int(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `note_dc` int(100) NOT NULL,
  `note_ds` int(100) NOT NULL,
  `cin_etudiant` int(100) NOT NULL,
  `note_np` int(11) NOT NULL,
  `moyenne` float NOT NULL,
  `id_matiere` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `nom_matiere`, `note_dc`, `note_ds`, `cin_etudiant`, `note_np`, `moyenne`, `id_matiere`) VALUES
(115, 'Web', 12, 12, 9632949, 12, 12, 72),
(118, 'Web', 10, 15, 2364820, 10, 12.5, 72),
(119, 'jee', 15, 15, 12480565, 15, 15, 70),
(120, 'jee', 15, 15, 9632949, 15, 15, 70),
(121, 'Web', 10, 12, 12480565, 12, 11.5, 72),
(122, 'jee', 10, 10, 12055874, 10, 10, 70),
(123, 'java', 15, 15, 12055874, 15, 15, 69);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `writer` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.png',
  `date` datetime NOT NULL,
  `posted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `writer`, `image`, `date`, `posted`) VALUES
(1, 'Offre de Stage : Ingénieur Génie Informatique', 'PX, Editeur & Intégrateur de la Suite MS Dynamics 365 de Microsoft.\r\n\r\nNous cherchons un stagiaire pour intégrer une équipe motivée.\r\n\r\nExigences de l\'emploi\r\n\r\nProfil demandé:\r\n\r\nDe formation supérieure en informatique (Bac +5), vous êtes à la recherche d’un stage d’une durée minimale de 3 mois, Vous êtes rigoureux (se), proactif (ve) et autonome.\r\n\r\nVous êtes doté(e) d\'un esprit de synthèse, vous êtes organisé(e), impliqué(e) et curieux (se).', 'admin@localhost', '3.jpg', '2016-01-08 20:55:14', 1),
(2, 'Slnee offre Stage Développement Informatique ODOO\r\n', 'Profil:\r\n?-? Ingénieur ENSI, INSAT, Fac de Sciences, SupCom, Polytechnique, ENIS, etc. ou ?Master en Informatique ; ?\r\n?-? Travailleur et bon développeur.?\r\n?-? Connaissance autour des ERP, Odoo (Pyhton, XML, JavaScript, JQuery, PostgreSQL ??…) sera très appréciée', 'admin@localhost', '20.jpg', '2016-01-08 20:54:46', 1),
(3, 'Certification  delf', 'Les certifications de langues officiellement reconnues par des organismes certificateurs permettent d’attester ses compétences linguistiques que ce soit pour poursuivre des études à l’étranger ou pour trouver un emploi dans un contexte professionnel européen.\r\n\r\nPlus d’informations sur les certifications en 13 langues d’ALTE : Cadre de référence des examens de langues d’ALTE.\r\n\r\nPour information :\r\n\r\nUn test de langue a une durée limitée dans le temps (exemple : le score au TOEFL est valable 2 ans).\r\nUn diplôme de langue est acquis de manière définitive (exemples : les Certificats de Cambridge Assessment English ou les CLES délivrés dans les Universités françaises).', 'haithemmihoubi1234@gmail.com', 'post.jpg', '2021-03-11 01:43:00', 1),
(25, 'startup  ISET RADES', 'Un nouvel espace d’entrainement pédagogique a été implanté récemment à l’institut supérieur des Etudes Technologique de rades (ISET), annonce le ministère de l’enseignement supérieur et de la recherche scientifique.', 's@gmail.com', 'post.jpg', '2021-03-20 00:15:44', 1),
(26, 'La Tunisie Qui Gagne] Startup : «Ce qui fera la différence entre les nations c’est la capacité de créer, d’innover et d’inventer», Karim Jouini', '«Le meilleur moyen de prévoir le futur, c’est de le créer , disait Peter Drucker, professeur en management d’entreprises. Karim Jouini, fondateur d’Expensya, a commencé à 15 ans à créer le futur, en mettant en place des applications informatiques intelligentes et novatrices.\r\n\r\nAujourd’hui, grâce à son logiciel, de grands groupes internationaux sont libérés de la charge du calcul des notes de frais qui dévore du temps et de l’argent.\r\n\r\nKarim Jouini fait partie de cette Tunisie qui crée et qui innove pour accompagner les mutations technologiques qui avancent à pas géants dans un monde en mouvement perpétuel. Entretien.\r\n\r\nWMC : Et l’impact de cette application pour faciliter la vie des entreprises, vous avez fait une étude pour voir quels sont les gains par rapport à l’entreprise et aux salariés.\r\n\r\nKarim Jouini : L’application fait gagner aux salariés 90% du temps dépensé dans la gestion des dépenses. Pour info, un consultant passe quatre heures par mois à gérer les dépenses qu’il fait au sein de l’entreprise, Expensya fait gagner à l’entreprise une meilleure gestion des droits de TVA et beaucoup d’argent à récupérer sur la TVA.\r\n\r\nLe risque de fraude est minime, notre application récupère les factures photoshopées et notre technologie est intelligente et traite mieux que les comptables ce genre de pratiques. Elle peut faire le calcul des prix d’un pays à l’autre.\r\n\r\nY a-t-il eu des entreprises publiques qui ont fait appel à vos services ?\r\n\r\nEn Tunisie, non. Nous avons quelques clients comme Talents, Vermeg ou SPE Capital, mais nous sommes quasi-exclusivement tournés vers les groupes européens que nous équipons à l’international, dont le Crédit Agricole, Sephora, Natexis, Dominos Pizza et autres.\r\n\r\nLe démarrage d’Expensya s’est fait où ?\r\n\r\nA Tunis en 2014. Nous avons très vite ouvert une filiale en France, suivie d’autres en Espagne et en Allemagne en 2019. Nous avons choisi Tunis comme site principal pour la recherche et développement. Notre vœu et notre objectif personnel, c’est d’attirer les talents. Nous avons annoncé le recrutement de 100 personnes.\r\n\r\nSachez aussi que nous sommes en train de rapatrier de très hautes compétences vers notre pays. 11 compatriotes à ce jour et ils intègrent nos équipes commerciales.\r\n\r\nJe veux participer activement au développement de l’écosystème. Un jeune qui pense à créer une startup doit s’inspirer d’entrepreneurs comme nous pour savoir qu’il peut réussir, que ça marche lorsqu’on y croit, lorsque c’est bien réfléchi et lorsque c’est utile.\r\n\r\nNous voulons pousser nos jeunes à avoir foi en leurs capacités à changer la réalité et à ne pas avoir de complexes ou à sous-estimer leur intelligence et leur créativité.\r\n\r\nLes leaders politiques font des jeunes plus des victimes impuissantes qu’une force de changement. Qu’en pensez-vous ?\r\n\r\nJe n’ai aucune ambition politique mais j’ai vraiment envie de dire “arrêtez avec votre médiocrité et laissez-nous travailler et créer. C’est faisable et c’est réalisable”. Il faut bouger et trouver des solutions ensemble pour que nos talents restent sur place, avancent et fassent avancer le pays. Les 11 compatriotes que nous avons rapatriés viennent du Canada, de France, de Suisse et d’Allemagne.\r\n\r\nNous employons 150 salariés, 100 à Tunis et 50 à l’international. Tous nos salariés sont des bac+5, ingénieurs, commerciaux, ou support clients.\r\n\r\nVotre taux de croissance d’une année à l’autre ?\r\n\r\nAu début, nous faisions 200% de taux de croissance d’une année à l’autre, avec l’avènement de la pandémie Covid-19, c’est 100% de croissance. La dernière levée de fonds de 20 millions de dollars est la quatrième et la deuxième professionnelle dans laquelle il y a des fonds d’investissement.\r\n\r\nAuparavant, nous avions fait deux levées, soit avec des amis ou avec des Business Angels. Celle entre amis n’a jamais été rendue publique ; la deuxième s’élevait à un million d’euros ; la troisième c’est quatre millions d’euros ; la dernière, comme vous le savez, 20 millions de dollars avec un fonds américain.\r\n\r\nQu’allez-vous en faire ?\r\n\r\nNous allons investir dans la R&D, essentiellement dans de hautes compétences pour continuer à être les meilleurs sur la place et dans l’effort commercial pour nous étendre plus en Europe. Nous comptons conquérir toute l’Europe de l’Ouest.\r\n\r\nLa culture RSE est très présente à Expensya\r\n\r\nPour nous, elle est capitale. D’ores et déjà, nous accompagnons les anciens d’Expensya, j’investis personnellement à ce niveau. Dans le programme d’achat, nous repérons les petites startups et nous les challengeons. Nous leur imposons nos conditions pour les encourager à s’améliorer. Nous l’avons fait avec une dizaine de startups en Tunisie, sinon nous finançons à notre petite échelle des associations orientées hautes technologies à travers des concours en informatique que nous finançons.\r\n\r\nNous encourageons les associations qui apprennent l’informatique aux enfants et aux lycéens, comme ITA. Nos salariés sont très impliqués dans ces activités. Nous soutenons aussi, depuis Paris, les startups tunisiennes que nous aidons à percer et à se développer.\r\n\r\nDans le monde de demain, ce qui fera la différence entre les nations c’est la capacité de créer, d’innover et d’inventer. Notre devoir à nous est de faire en sorte que la Tunisie ne soit pas écartée de l’enjeu technologie du futur.\r\n\r\nEntretien conduit par Amel Belhadj Ali', 'haithemmihoubi1234@gmail.com', 'post.png', '2021-04-01 13:16:39', 0),
(27, 'hello', 'haithem', 'admin@gmail.com', 'post.png', '2021-04-28 12:25:58', 0),
(29, 'projet symfony', 'date de projet', 'admin@gmail.com', 'post.png', '2021-05-26 13:01:49', 0);

-- --------------------------------------------------------

--
-- Structure de la table `seancecours`
--

CREATE TABLE `seancecours` (
  `id_seance` int(100) NOT NULL,
  `dateDebut` date NOT NULL,
  `duree` varchar(100) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `lienCour` varchar(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `nom_prof` varchar(100) NOT NULL,
  `cin_enseignant` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `seancecours`
--

INSERT INTO `seancecours` (`id_seance`, `dateDebut`, `duree`, `id_matiere`, `lienCour`, `nom_matiere`, `nom_prof`, `cin_enseignant`) VALUES
(11, '2021-05-05', '2h', 72, 'Corrigé-Tdpatternsf.docx', 'Web', 'lassoued mohamed', 12058746),
(12, '2020-08-06', '1h', 69, 'devoir_synthese_2019_BD_final.docx', 'java', 'cheikh eya', 12066987),
(13, '2021-01-12', '1h', 70, 'TD-patterns.docx', 'jee', 'hichri donia', 33658874);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1399543998, 'haithem', 'mihoubi', 'haithem.mihoubi@gmail.com', 'sarahh', '1616108296pexels-artem-beliaikin-1122868.jpg', 'Active now'),
(2, 702501944, 'MOATAR', 'trojette', 'trpjette8@gmail.com', '85555', '1616161560pexels-artem-beliaikin-1122868.jpg', 'offline now'),
(3, 229370374, 'coding ', 'pnl', 'moataz@gmail.com', 'sarah', '1616161771pexels-joshua-135018.jpg', 'Offline now'),
(4, 616766412, 'coding ', 'pnl', 'trojette@gmail.com', 'sarah', '1616161827pexels-joshua-135018.jpg', 'Offline now'),
(9, 1444662784, 'bachouel', 'mariem', 'bachouelmariem@gmail.com', 'sarah250470', '1616332694pexels-artem-beliaikin-1122868.jpg', 'Offline now'),
(10, 435156506, 'aziz', 'toujeni', 'aziztoujani.contact@gmail.com', '250470', '1616363494pexels-artem-beliaikin-1122868.jpg', 'offline now'),
(11, 1560465828, 'aziz', 'toujeni', 'aziztoujani@gmail.com', '250470', '1616363508pexels-artem-beliaikin-1122868.jpg', 'Offline now'),
(12, 739867046, 'sarah', 'bachouel', 'bachouelsarra1998@gmail.com', '250470', '1616536885pexels-photo-4050284.jpeg', 'offline now'),
(13, 1499164461, 'rihab', 'ba', 'ba@gmail.com', 'ss', '1616537219pexels-artem-beliaikin-1122868.jpg', 'connecté maintenant'),
(14, 522523218, 'rihab', 'baa', 'bas@gmail.com', 'ssaa', '1616537402pexels-artem-beliaikin-1122868.jpg', 'connecté maintenant'),
(15, 1613536345, 'rihab', 'baach', 'bash@gmail.com', 'ssaa', '1616537737pexels-artem-beliaikin-1122868.jpg', 'offline now'),
(16, 1041565097, 'raouf', 'ben yahia ', 'raouf@gmail.com', '0000', '1616575854pexels-photo-4050284.jpeg', 'offline now'),
(17, 253014917, 'moataz ', 'trojette ', 'troj@gmail.com', 'trojette', '1619607998pexels-cottonbro-6054109.jpg', 'offline now');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`id_bulletin`),
  ADD KEY `cin_etudiant` (`cin_etudiant`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`);

--
-- Index pour la table `classe_prof`
--
ALTER TABLE `classe_prof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cin_prof` (`cin_prof`),
  ADD KEY `id_classe` (`id_classe`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`id_cour`),
  ADD KEY `id_matiere` (`id_matiere`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`cin`),
  ADD KEY `fk_classe` (`id_classe`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id_matiere`);

--
-- Index pour la table `matiere_prof`
--
ALTER TABLE `matiere_prof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cin_prof` (`cin_prof`),
  ADD KEY `id_matiere` (`id_matiere`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `cin_etudiant` (`cin_etudiant`),
  ADD KEY `fk_Mat` (`id_matiere`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `seancecours`
--
ALTER TABLE `seancecours`
  ADD PRIMARY KEY (`id_seance`),
  ADD KEY `id_matiere` (`id_matiere`),
  ADD KEY `cin_ensFK` (`cin_enseignant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `id_bulletin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `classe_prof`
--
ALTER TABLE `classe_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `id_cour` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id_matiere` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `matiere_prof`
--
ALTER TABLE `matiere_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `seancecours`
--
ALTER TABLE `seancecours`
  MODIFY `id_seance` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bulletin`
--
ALTER TABLE `bulletin`
  ADD CONSTRAINT `bulletin_ibfk_1` FOREIGN KEY (`cin_etudiant`) REFERENCES `etudiant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `classe_prof`
--
ALTER TABLE `classe_prof`
  ADD CONSTRAINT `classe_prof_ibfk_1` FOREIGN KEY (`cin_prof`) REFERENCES `enseignant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classe_prof_ibfk_2` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `cour_ibfk_1` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_classe` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `matiere_prof`
--
ALTER TABLE `matiere_prof`
  ADD CONSTRAINT `matiere_prof_ibfk_1` FOREIGN KEY (`cin_prof`) REFERENCES `enseignant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matiere_prof_ibfk_2` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_Mat` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`cin_etudiant`) REFERENCES `etudiant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `seancecours`
--
ALTER TABLE `seancecours`
  ADD CONSTRAINT `cin_ensFK` FOREIGN KEY (`cin_enseignant`) REFERENCES `enseignant` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seancecours_ibfk_1` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
