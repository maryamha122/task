-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 27, 2020 at 05:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `activity_type` varchar(800) NOT NULL,
  `photo` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activity_type`, `photo`) VALUES
(3, 'Dates Marketing Festival', 'img/recipes/Cap.jpg'),
(78, 'AlAhsa Creative', 'img/recipes/p2.jpeg'),
(79, ' Al-Qaysaria Festival', 'img/recipes/span.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Password`, `Email`, `Phone`, `Name`) VALUES
(2020, 'admin2020', '', 567874334, 'fatimah');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(700) NOT NULL,
  `date` varchar(100) NOT NULL,
  `text` longtext NOT NULL,
  `photo` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `date`, `text`, `photo`) VALUES
('35 thousand conclude the third edition of \"Al-Qaisariya Market Festival\"', '2019-07-24', 'The visit of the 35,000 visitors was concluded in the third edition of Al-Qaisariya Market Festival, in cooperation with Al-Ahsa Governorate, for three days. The festival coincided with the selection of Al-Ahsa as the capital of Arab Tourism 2019. And its membership in the global creative cities network of UNESCO in the field of creative handicrafts and folk arts, and testify the corridors of the market and its grounds to establish several events and programs to enhance the status of Ahsa tourism, heritage and cultural folklore of Al_ahsa. as well as the participation of handicraft artisans and a number of a visual artistic to express about the heritage and cultural of Al_ahsa and other things, historical and popular activities.\r\n \r\nAl-Ahsa Municipality stressed that the festival and the continuity of its organization annually represents one of the initiatives of the community of the municipality and its contribution to the tourism activation of Al-Ahsa and to enhance its objectives in preserving heritage and folklore.', 'img/recipes/news8.jpg'),
('Al Ahsa cloak and dates attract representatives of creative cities in China', '2020-06-06', 'The representative of member\'s cities of UNESCO\'s Creative Cities Network met at Al-Ahsa Creative Center at the 8th China Suzhou Creative & Design Cultural Expo, on Friday, April 19, 2019. Considering Al Hasa as a member of the global network of creative arts and crafts at the initiative from Al-Ahsa Municipality.\r\n \r\nAt the same exhibition, the * Hasawi style Bisht  \"was the focus on it in the expo from the participants\' admiration. The creativity and skill in the *Bisht* was attractive to them, expressing their delight in taking commemorative pictures beside him. He stood in the front of the corner of Al Ahsa and described its handicrafts and products as an economic industry with social depth.  Al-Ahsa municipality presented models of other handicrafts such as the palm wicker fan, the palm-tree cage, and a piece of sado, a carpentry sculpture, and Arabic characters, which impressed the participants.\r\n \r\nThe representative of Al-Ahsa delegation in the meeting said that the Municipality\'s keenness to participate internationally to enhance the heritage, tourism and cultural aspects through exchanging international experiences and developing handicrafts in Al-Ahsa and instilling these concepts through raising awareness of the importance of Al Ahsa national heritage, .\r\n \r\nIn another Chinese city on the same day, Al-Ahsa participated in the arts and crafts exhibition in Weifang City, China, represented by the creative coordinator of the creative cities network, Eng. Ahmed Al-Matar, who confirmed that Al-Ahsa owns more than 60 different handcrafts and 12 folklore, stating that  Al Ahsa Municipality in partnership with the concerned government agencies, seeks to sustain, develop and transmit handicrafts for future generations, as well as the colors of the folk arts that were known about the history of Al Ahsa heritage.\r\n ', 'img/recipes/news3.jpg'),
('Al Ahsa creative recreates the folk arts amid a broad presence', '2019-07-24', 'In an exceptional phenomenon, more than 15,000 visitors arrived on Thursday, March 21, 2019, Al Ahsa Heritage Citadel overcrowded to watch the shows the folklore and handicrafts within the Al Ahsa creative festival.\r\n \r\nIn the yards of the citadel, the folklores present their performances, where visitors receive the Water of roses over their head and other popular folklores.\r\n \r\nWhile the voice of the \"oboe\" is high, announcing the beginning of an art known as( Laboh) its known by beautiful art, and lyrics , which the visitors overcame and memorized the words of the song , mixing with the sea and palm In the form of interaction with lovers of folk arts.\r\n \r\nIn another corner, more than fifty men stand in opposite rows, performing the popular dance known as ( Ardah ) through the rhythm of the drums, chanting slogans of joy and victory, singing and dances, raising their swords, expressing their joy.\r\n \r\nlute and the violin performers at the corners of the festival lead you to the theater in the Central of Al Ahsa creative, to playing the tunes of the music, the ancient art known as \"Majilis\", which was known for the heritage of Al Ahsa and its association with weddings and happy celebration events, led by a poet and artist from Al Ahsa to recreate the old art and songs Popular to keep them from extinction and revive.', 'img/recipes/new4.jpg'),
('Al Ahsa Creative Retrieves history Cross Handicrafts and Folk Arts', '2019-07-24', 'Al-Ahsa Creative Festival for handicrafts and folklore, in the center of Al-Ahsa Heritage Castle, as part of a series of activities offered by the Eastern Province in 2019.\r\n \r\nThe festival is organized by Al-Ahsa municipality, as part of the objectives of the Eastern season aimed at introducing the ancient heritage and civilization that the region stores and transmitting it to future generations. The Eastern season is also a valuable opportunity to introduce the rich history of Ahsa and the old popular activities. UNESCO World Heritage List, selected as the capital of Arab tourism for 2019\r\n \r\nIn a folk winter atmosphere, the tunes of the ancient peasants, the visitors of Al-Ahsa, create the original folk songs in a heritage, cultural and social scene through the mud walls of the citadel\'s traditional shops. Forty handcrafts tell stories and stories of Al-Ahsa\'s life spanning hundreds of years, ending through the \"Hassawi house\", which embodies the reality of the old Hassawi life, which includes the life of the old family with their possessions and effects, in an atmosphere that smelled of the past.\r\n \r\nWhile the nostalgia and attachment to the past, Many young men and women from al Ahsa revive the handicrafts emanating from the ancient heritage, to see young people practicing these professions with their parents in the center of the shops of the traditional heritage, The festival witnessed an unusually large attendance in the social and economic scene in Al Ahsa, and achieve the goal of raising the culture and Preserving the handicrafts and heritage value of Al-Ahsa history records.\r\n \r\nThe festival came to preserve the historical and heritage of Al-Ahsa and to boast about it. In addition to enhancing the municipality objectives in preserving heritage and folklore, Al-Ahsa extended membership to join UNESCO\'s global creative cities network, Handicrafts and folk arts as the first Gulf city and the third in Arab cities, The mayor of Al-Ahsa Municipality, Eng. Adel Bin Mohammed Al-Mulhem, said.\r\n \r\nadded that Al-Ahsa\'s membership in the global cities is a positive indicator of Al Ahsa Internationally, Which was achieved through registration within the list of urban heritage in UNESCO, and chosen Al Ahsa as the capital of Arab tourism for 2019', 'img/recipes/news6.jpg'),
('Al Ahsa presents its creative experience in the arts and crafts in China', '2019-07-24', 'The Mayor of Al-Ahsa, Eng. Adel bin Mohammed Al-Mulhem left to participate  in the eighteenth Creative & Design Cultural Expo, in Suzhou, China, the capital city of handicrafts and folklore in the world, as a member of the global network in the creative field of handicrafts and folk arts initiated by Al-Ahsa municipality\r\n \r\nThe forum will include a conference and exhibition in which Al Ahsa will share some of its distinctive craft products, as well as a panel discussion to discuss ways of enhancing communication and cooperation between the 37 cities of crafts and arts in the network around the world and how to employ culture and creativity to contribute achieving the UN goals of sustainable development. With the vision of the Kingdom 2030 to promote the leading role of the Kingdom at the international level, also coordinator of the Al Ahsa in the network of creative cities in UNESCO Ahmed Al-Matar accompanied the mayor of Al Ahsa  \r\n \r\nThe international forum will see the presenting in preserving heritage activities in the field of handicrafts and folklore, which it consistent with the objective of the creative and cultural network in the implementation of target 11 from the United Nations 2030 to Sustainable Development meaningful to make cities more humane, inclusive, safety in addition the opportunity to share ideas and experiences among the creative cities in the world that related to creativity and culture.\r\n \r\nHe stressed that the Al-Ahsa municipality  was keen to deepen its social role in providing services to craftsmen and to involve them in most events, festivals and events, in counterpart for what Al-Ahsa possesses of creative ingredients, which makes it in the ranks of its counterparts from around the world.\r\n \r\nIn another Chinese area, Al-Ahsa will participate in the first forum of handicrafts and folk arts, hosted by Weifang, Chinese. represented by the coordinator of Al-Ahsa in UNESCO\'s Creative cities network, Eng. Ahmed Al-Matar, which opened on April 18th with the participation of a number of creative cities in the handcraft and arts from Asia, Europe, Middle East and Africa, includes an exhibition for participating cities and panel discussions on topics of mutual interest, which aimed to promoting direct cooperation and exchanging experiences and perspectives to achieve the objectives of the network.', 'img/recipes/news5.jpg'),
('Al-Ahsa at the UNESCO meeting, confirms the sustainability of arts and crafts globally', '2020-06-24', 'The Mayor of Al-Ahsa, the head of the delegation of Al-Ahsa creative Adel bin Mohammed Al-Melhem, said that Al-Ahsa keen to achieve the objectives in the preservation of creativity in handicrafts and folklore at the local level, through several projects and programs, which worked to sustain creativity, Which has given Al Ahsa its achievements over the past four years and it is the member of the Creative Cities Network in 2015 and the registration of Al-Ahsa Oasis as a World Heritage Site 2018, in addition that has been selected to be the  Capital of Arab Tourism 2019.\r\n \r\nThis came during the opening of the 13th UNESCO Network of Innovative Cities from the Italian President Sergio Mattarella, which includes 180 cities from 72 countries, in a large ceremony hosting in Fabriano city, Italian, in a distinguished presence for the creative Al-Ahsa, represented by Adel bin Mohammed Al Melhem, Eng. Ahmed Al-Matar, and Eng. Ali Al-Sulaiman, where Al-Ahsa is participating in a special exhibition of handicrafts and folklore.\r\n \r\nThe opening ceremony included speeches by the UNESCO representative and city mayor of Fibriano, and it is concluding with a speech by Italian President Sergio Mattarella, who said: \"Confrontation, cultural dialogue and knowledge exchange are mutually enriching in the international community, benefiting everyone.\" Creative cities, to present their perceptions and ideas on the importance of integrating culture and creativity as important drivers in achieving the goals of sustainable development 2030 prepared by the United Nations.\r\n \r\nOn the sidelines of the opening ceremony, the head of Al Ahsa creative delegation, Eng. Adel Al Melhem, presented a souvenir to the Italian President, \"Besht Hasawi\", as one of the most important crafts and handicrafts in the world, to remain today a source of pride for handicrafts and a symbol of global creativity.\r\n \r\nOn this occasion, the mayor of Al-Ahsa expressed his thanks and appreciation for the wise leadership, led by Custodian of the Two Holy Mosques King Salman bin Abdulaziz Al Saud and His Royal Highness Prince Mohammed bin Salman bin Abdulaziz, for their unlimited support for Al Hasa and the other cities in Saudi Arabia.\r\n \r\nAl-Mulhim also expressed his thanks and appreciation to Prince Saud bin Nayef bin Abdulaziz Al Saud, Prince of the Eastern Region, and to His Deputy Prince Ahmed bin Fahad bin Salman bin Abdulaziz and the Governor of Al-Ahsa Prince Badr bin Mohammed bin Jalawi for following up on this important file, considering Al-Ahsa as the first Saudi and Gulf city registered in the network of creative cities of UNESCO, at the initiative of Al-Ahsa municipality. \r\n \r\nThe Mayor of Al-Ahsa thanked the Minister of Municipal and Rural Affairs Dr. Majid bin Abdullah Al-Qasabi for his support, follow-up and encouragement of this file, which was instrumental in achieving this level.', 'img/recipes/news1.png'),
('The arts and crafts of Al Ahsa are part of the agenda of the UNESCO meeting in Italy', '2019-07-24', 'Al-Ahsa Municipality will participate in the 13th annual meeting of the member cities of UNESCO\'s Creative Cities Network, which will be held from 9 to 15 June 2019 in Fabriano, Italian, in the presence of deans and representatives from 180 creative cities from 72 countries around the world. The role of creativity and culture to achieve the goals of sustainable development 2030 issued by the United Nations.\r\n \r\nThe participation comes with the support of the Minister of Municipal and Rural Affairs Dr. Majid Al-Qasabi as Al-Ahsa being a member of the network in the creative field of handicrafts and folklore. The international meeting will include the presentation of Al-Ahsa experience in preserving the heritage as the first Gulf city and the third Arab through many executive programs and community contributions from festivals, aiming to the importance of culture and creativity in shaping future cities and the role of crafts and arts in sustainable urban development.\r\n \r\nAlso, the festival stressed the role of creativity and culture in implementing UN Development target 11, which aims to \"make cities more humane, inclusive, safe and sustainable\" and to highlight the true desire and enthusiasm to implement Al Ahsa creative plan by 10 joint governmental and private sectors, enabling the achievement of network objectives.\r\n \r\nThe Mayor of Al-Ahsa, the head of the delegation at the meeting, Eng. Adel bin Mohammed Al-Mulhem, stressed that Al-Ahsa Municipality seeks to deepen its social role in providing services to craftsmen and to involve them in most festivals and events. Al-Ahsa owns the creative ingredients that make it in the ranks of its counterparts from the countries of the world, He also praised the support of His Royal Highness Prince Saud bin Nayef, Prince of the Eastern Region, and His Royal Highness Prince Ahmed bin Fahad bin Salman, and the continuous follow-up by His Highness Prince Badr bin Mohammed bin Jalawi.\r\n \r\nIt is worth mentioning that the delegation participating in the meeting will include Al-Ahsa coordinator in the network, the creative cities engineer Ahmed Al-Matar, and the director of the World Heritage Office in Al-Ahsa, Engineer Ali Al-Sulaiman.', 'img/recipes/news2.jpg'),
('Wife of the Prince of the eastern region opens \"Abeer Al Ahsa\" Fine Art Exhibition', '2019-04-26', 'Her Highness Princess Abeer Bint Faisal Bin Turki Al Saud, Chairperson of the Board of Trustees of the Eastern Region Council for Social Responsibility, opened the Abeer Al Ahsa Fine Arts Exhibition, entitled \"Multiple Directions for One City\" in Al Ahsa Dates Marketing Festival.\r\nHer Highness Princess Abeer affirmed that the exhibition reflects the diversity of the eastern region in the field of folklore, with the presence of more than 100 works of art that seeks to consolidate the plastic art and its role in preserving this heritage through the use of many artistic trends and plastic paths such as sculpture, art Digital, impressionist art, the art of objects of imagination and the art of geometric shapes, the art of forming in original script).\r\nIt is worth noting that the exhibition focuses on the implementation of 20 artistic trends in twenty days, during which the workshops will attract all segments of the society, including children, and the site of the exhibition accompanying the festival Ahsa manufactured 2019 at the International Exhibition Center.', 'img/recipes/news7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
