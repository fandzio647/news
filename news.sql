-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 07, 2023 at 04:48 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wpisy`
--

CREATE TABLE `wpisy` (
  `id` int(11) NOT NULL,
  `tytul` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wpisy`
--

INSERT INTO `wpisy` (`id`, `tytul`, `data`, `tresc`) VALUES
(1, 'Odkryto nowe dowody na istnienie średniowiecznego zamku', '2022-06-06', 'W Gdańsku, w pobliżu Dworca Głównego, odkryto nowe dowody na istnienie średniowiecznego zamku. Badania archeologiczne prowadzone przez Muzeum Gdańska wykazały, że pod obecnym hotelem \"Dwór Artusa\" znajduje się pozostałości XIII-wiecznej budowli.\r\nDo odkrycia doszło podczas prac remontowych w hotelu. Podczas przekopywania fundamentów natrafiono na fundamenty murów o grubości do 2 metrów. Badania wykazały, że mury stanowiły część zamku, który został wzniesiony w XIII wieku.\r\n\r\nZamek był najprawdopodobniej siedzibą ówczesnego księcia gdańskiego. Był to jeden z największych i najważniejszych zamków w regionie. Zamek został zniszczony w XIV wieku, ale jego pozostałości zachowały się do dziś.'),
(2, 'Zbigniew Wodecki patrzy ze ściany na ul. Tylnej Mariackiej. Nowy mural w centrum Katowic', '2023-09-05', 'Na remontowanym właśnie budynku przy ul. Tylnej Mariackiej powstał mural z wizerunkiem Zbigniewa Wodeckiego. Jeszcze do niedawna w tym samym miejscy znajdował się charakterystyczny mural przedstawiający kurę.\r\nZbigniew Wodecki przez większość swojego życia związany był z Krakowem, ale w Katowicach spędził część swojego dzieciństwa. Jego ojciec był pierwszym trębaczem w Wielkiej Orkiestrze Symfonicznej Polskiego Radia (obecnie NOSPR).\r\nMural to działo Marka Greli i Marty Piróg, artystów z „Czary-Mury”. To oni byli odpowiedzialni za projekt i jego wykonanie. W charakterystycznych włosach Wodeckiego umieścili wszystko to, co przez lata kojarzyło się z artystą, czyli skrzypce, trąbkę i mikrofon. Z kolei nad głową muzyka frunie pszczółka Maja. U dołu muralu artyści umieścili wnętrze fortepianu, czyli kolejnego instrumentu, na którym grywał Wodecki.'),
(3, 'Święto Niepodległości. Gdzie otrzymasz flagi i patriotyczne akcenty?', '2023-11-17', 'Zbliża się 105. rocznica odzyskania niepodległości przez Polskę. Z tej okazji w piątek (10 listopada) na Górze Gradowej i w sobotę (11 listopada), przed rozpoczęciem Parady Niepodległości będzie można otrzymać flagi Polski, Gdańska oraz biało - czerwone kotyliony.\r\nGdzie można dostać flagę narodową i flagę Gdańska?\r\nDla mieszkańców przygotowano w sumie 1200 flag biało czerwonych i 600 flag Gdańska oraz ok. 3 tys. kotylionów i kokard w barwach narodowych do wpięcia w połę płaszcza, czy kurtki. Będzie można je otrzymać bezpłatnie w dwóch miejscach.\r\nW piątek, 10 listopada o godz. 15 na Górze Gradowej odbędzie się uroczystość wciągnięcia flagi narodowej na stojący tu najwyższy maszt w naszym mieście. Wystarczy pojawić się podczas tego wydarzenia, by odebrać flagę bądź kotylion. \r\nPo flagę bądź patriotyczny akcent stawić się można także w sobotę, 11 listopada, na Placu Kobzdeja. Początek wręczania flag ok. godz. 9.45. \r\nW akcji udział weźmie prezydent Gdańska Aleksandra Dulkiewicz (w piątek i w sobotę), przewodnicząca Rady Miasta Gdańska Agnieszka Owczarczak (w sobotę) oraz grono miejskich radnych.\r\n\r\nRozdawaniu flag i kotylionów towarzyszyć będzie zbiórka prowadzona przez wolontariuszy na rzecz podopiecznych Hospicjum im. ks. E. Dutkiewicza SAC w Gdańsku, które już od 40 lat towarzyszy osobom u kresu życia - dorosłym i ciężko chorym dzieciom.\r\nZatrzęsienie pięknych kotylionów i kokard zawdzięczamy wolontariuszom i wolontariuszkom z dwóch gdańskich klubów seniora. Klub Seniora “Motława” ze Śródmieścia od lat “produkuje” kotyliony na gdańską Paradę Niepodległości. Klub Seniora “Rajska Panorama” z Wrzeszcza Dolnego debiutuje w tym roku.'),
(4, 'Uroczyście przed Świętem Niepodległości - w piątek przyjdź pod pomnik marszałka Piłsudskiego', '2023-11-07', 'Prezydent Aleksandra Dulkiewicz oraz Związek Piłsudczyków RP Okręg Gdański w Gdańsku zapraszają na uroczystość z okazji zbliżającego się Narodowego Święta Niepodległości. Czas i miejsce spotkania: piątek, 10 listopada, godz. 11.00. pod pomnikiem marszałka Piłsudskiego na Strzyży.\r\nDla Piłsudskiego, trzy razy w roku\r\nKwiaty upamiętniające Marszałka są w Gdańsku składane trzy razy do roku:\r\n12 maja (rocznice śmierci)\r\n10 listopada (w wigilię Święta Niepodległości) \r\n22 lipca\r\nTa ostatnia data stanowi pamiątkę krótkiego, ale dramatycznego, epizodu, który miał w swoim życiu Józef Piłsudski w związku z Gdańskiem. W 1917 roku został przez Niemców uwięziony - wraz z adiutantem, Kazimierzem Sosnkowskim - w areszcie śledczym przy dzisiejszej ul. Kurkowej. Następnie przewieziono ich w głąb Niemiec.\r\nAdiutant Marszałka gdańszczaninem\r\nGdańsk z Marszałkiem łączy także postać prof. Włodzimierza Mozołowskiego, który po II wojnie światowej przyjechał tutaj z Wilna i stał się jednym z założycieli gdańskiej Akademii Medycznej. W latach 1919-1921 był dowódcą Kompanii Przybocznej Naczelnego Wodza Józefa Piłsudskiego, uczestniczył w walkach o Wilno. Był to człowiek bliski Marszałkowi. Latem 1920 r. komendant Józef Piłsudski trzymał do chrztu Janka, jedynego syna Włodzimierza Mozołowskiego.\r\n\r\nObydwaj - ojciec i syn - zmarli w latach 70., mają wspólny grób na gdańskim Srebrzysku, w kwaterze profesorów AMG. Chrześniak Marszałka, Jan Mozołowski, w latach II wojny światowej był w Wielkiej Brytanii pilotem  318. Dywizjonu Myśliwsko-Rozpoznawczego, którego znakiem stał się herb Gdańska z numerem dywizjonu i skrzydłami - stąd określenie \"Gdański\".\r\nPROGRAM UROCZYSTOŚCI:\r\ngodz. 9.00 - msza św. w intencji Ojczyzny w Kościele Garnizonowym Św. Apostołów Piotra i Pawła, ul. Sobótki 20 we Wrzeszczu\r\ngodz. 10.45 - zbiórka pocztów sztandarowych oraz uczestników uroczystości przy pomniku marszałka Józefa Piłsudskiego na Strzyży\r\ngodz. 11 - odegranie hymnu państwowego Rzeczypospolitej Polskiej\r\nwystąpienia oficjalne\r\nmodlitwa\r\nzłożenie wieńców i wiązanek kwiatów u stóp pomnika (prośba organizatorów o przygotowanie wizytówek)\r\nodegranie Marsza I Brygady\r\nzakończenie uroczystości');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `wpisy`
--
ALTER TABLE `wpisy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wpisy`
--
ALTER TABLE `wpisy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
