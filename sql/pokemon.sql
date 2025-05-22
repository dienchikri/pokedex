    -- phpMyAdmin SQL Dump
    -- version 5.2.1
    -- https://www.phpmyadmin.net/
    --
    -- Host: 127.0.0.1
    -- Generation Time: Apr 07, 2025 at 02:59 PM
    -- Server version: 10.4.28-MariaDB
    -- PHP Version: 8.2.4

    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    START TRANSACTION;
    SET time_zone = "+00:00";


    /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
    /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
    /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
    /*!40101 SET NAMES utf8mb4 */;

    --
    -- Database: `pokedex`
    --

    -- --------------------------------------------------------

    --
    -- Table structure for table `pokemon`
    --

    CREATE TABLE `pokemon` (
      `id` int(11) NOT NULL,
      `name` varchar(50) NOT NULL,
      `type` varchar(50) NOT NULL,
      `hp` int(11) NOT NULL,
      `attack` int(11) NOT NULL,
      `defense` int(11) NOT NULL,
      `speed` int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

    --
    -- Dumping data for table `pokemon`
    --

    INSERT INTO `pokemon` (`id`, `name`, `type`, `hp`, `attack`, `defense`, `speed`) VALUES
    (1, 'Bulbasaur', 'Grass/Poison', 45, 49, 49, 45),
    (2, 'Charmander', 'Fire', 39, 52, 43, 65),
    (3, 'Squirtle', 'Water', 44, 48, 65, 43),
    (5, 'Ivysaur', 'Grass/Poison', 60, 62, 63, 60),
    (6, 'Venusaur', 'Grass/Poison', 80, 82, 83, 80),
    (7, 'Charmander', 'Fire', 39, 52, 43, 65),
    (8, 'Charmeleon', 'Fire', 58, 64, 58, 80),
    (9, 'Charizard', 'Fire/Flying', 78, 84, 78, 100),
    (10, 'Squirtle', 'Water', 44, 48, 65, 43),
    (11, 'Wartortle', 'Water', 59, 63, 80, 58),
    (12, 'Blastoise', 'Water', 79, 83, 100, 78),
    (13, 'Caterpie', 'Bug', 45, 30, 35, 45),
    (14, 'Metapod', 'Bug', 50, 20, 55, 30),
    (15, 'Butterfree', 'Bug/Flying', 60, 45, 50, 70),
    (16, 'Weedle', 'Bug/Poison', 40, 35, 30, 50),
    (17, 'Kakuna', 'Bug/Poison', 45, 25, 50, 35),
    (18, 'Beedrill', 'Bug/Poison', 65, 90, 40, 75),
    (19, 'Pidgey', 'Normal/Flying', 40, 45, 40, 56),
    (20, 'Pidgeotto', 'Normal/Flying', 63, 60, 55, 71),
    (21, 'Pidgeot', 'Normal/Flying', 83, 80, 75, 101),
    (22, 'Rattata', 'Normal', 30, 56, 35, 72),
    (23, 'Raticate', 'Normal', 55, 81, 60, 97),
    (24, 'Spearow', 'Normal/Flying', 40, 60, 30, 70),
    (25, 'Fearow', 'Normal/Flying', 65, 90, 65, 100),
    (26, 'Ekans', 'Poison', 35, 60, 44, 55),
    (27, 'Arbok', 'Poison', 60, 95, 69, 80),
    (28, 'Pikachu', 'Electric', 35, 55, 40, 90),
    (29, 'Raichu', 'Electric', 60, 90, 55, 110),
    (30, 'Sandshrew', 'Ground', 50, 75, 85, 40),
    (31, 'Sandslash', 'Ground', 75, 100, 110, 65),
    (32, 'Nidoran♀', 'Poison', 55, 47, 52, 41),
    (33, 'Nidorina', 'Poison', 70, 62, 67, 56),
    (34, 'Nidoqueen', 'Poison/Ground', 90, 82, 87, 76),
    (35, 'Nidoran♂', 'Poison', 46, 57, 40, 50),
    (36, 'Nidorino', 'Poison', 61, 72, 57, 65),
    (37, 'Nidoking', 'Poison/Ground', 81, 92, 77, 85),
    (38, 'Clefairy', 'Fairy', 70, 45, 48, 35),
    (39, 'Clefable', 'Fairy', 95, 70, 73, 60),
    (40, 'Vulpix', 'Fire', 38, 41, 40, 65),
    (41, 'Ninetales', 'Fire', 73, 76, 75, 100),
    (42, 'Jigglypuff', 'Normal/Fairy', 115, 45, 20, 20),
    (43, 'Wigglytuff', 'Normal/Fairy', 140, 70, 45, 45),
    (44, 'Zubat', 'Poison/Flying', 40, 45, 35, 55),
    (45, 'Golbat', 'Poison/Flying', 75, 80, 70, 90),
    (46, 'Oddish', 'Grass/Poison', 45, 50, 55, 30),
    (47, 'Gloom', 'Grass/Poison', 60, 65, 70, 40),
    (48, 'Vileplume', 'Grass/Poison', 75, 80, 85, 50),
    (49, 'Paras', 'Bug/Grass', 35, 70, 55, 25),
    (50, 'Parasect', 'Bug/Grass', 60, 95, 80, 30),
    (51, 'Venonat', 'Bug/Poison', 60, 55, 50, 45),
    (52, 'Venomoth', 'Bug/Poison', 70, 65, 60, 90),
    (53, 'Diglett', 'Ground', 10, 55, 25, 95),
    (54, 'Dugtrio', 'Ground', 35, 80, 50, 120),
    (55, 'Meowth', 'Normal', 40, 45, 35, 90),
    (56, 'Persian', 'Normal', 65, 70, 60, 115),
    (57, 'Psyduck', 'Water', 50, 52, 48, 55),
    (58, 'Golduck', 'Water', 80, 82, 78, 85),
    (59, 'Mankey', 'Fighting', 40, 80, 35, 70),
    (60, 'Primeape', 'Fighting', 65, 105, 60, 95),
    (61, 'Growlithe', 'Fire', 55, 70, 45, 60),
    (62, 'Arcanine', 'Fire', 90, 110, 80, 95),
    (63, 'Poliwag', 'Water', 40, 50, 40, 90),
    (64, 'Poliwhirl', 'Water', 65, 65, 65, 90),
    (65, 'Poliwrath', 'Water/Fighting', 90, 95, 95, 70),
    (66, 'Abra', 'Psychic', 25, 20, 15, 90),
    (67, 'Kadabra', 'Psychic', 40, 35, 30, 105),
    (68, 'Alakazam', 'Psychic', 55, 50, 45, 120),
    (69, 'Machop', 'Fighting', 70, 80, 50, 35),
    (70, 'Machoke', 'Fighting', 80, 100, 70, 45),
    (71, 'Machamp', 'Fighting', 90, 130, 80, 55),
    (72, 'Bellsprout', 'Grass/Poison', 50, 75, 35, 40),
    (73, 'Weepinbell', 'Grass/Poison', 65, 90, 50, 55),
    (74, 'Victreebel', 'Grass/Poison', 80, 105, 65, 70),
    (75, 'Tentacool', 'Water/Poison', 40, 40, 35, 70),
    (76, 'Tentacruel', 'Water/Poison', 80, 70, 65, 100),
    (77, 'Geodude', 'Rock/Ground', 40, 80, 100, 20),
    (78, 'Graveler', 'Rock/Ground', 55, 95, 115, 35),
    (79, 'Golem', 'Rock/Ground', 80, 120, 130, 45),
    (80, 'Ponyta', 'Fire', 50, 85, 55, 90),
    (81, 'Rapidash', 'Fire', 65, 100, 70, 105),
    (82, 'Slowpoke', 'Water/Psychic', 90, 65, 65, 15),
    (83, 'Slowbro', 'Water/Psychic', 95, 75, 110, 30),
    (84, 'Magnemite', 'Electric/Steel', 25, 35, 70, 45),
    (85, 'Magneton', 'Electric/Steel', 50, 60, 95, 70),
    (86, 'Farfetch\'d', 'Normal/Flying', 52, 65, 55, 60),
    (87, 'Doduo', 'Normal/Flying', 35, 85, 45, 75),
    (88, 'Dodrio', 'Normal/Flying', 60, 110, 70, 100),
    (89, 'Seel', 'Water', 65, 45, 55, 45),
    (90, 'Dewgong', 'Water/Ice', 90, 70, 80, 70),
    (91, 'Grimer', 'Poison', 80, 80, 50, 25),
    (92, 'Muk', 'Poison', 105, 105, 75, 50),
    (93, 'Shellder', 'Water', 30, 65, 100, 40),
    (94, 'Cloyster', 'Water/Ice', 50, 95, 180, 70),
    (95, 'Gastly', 'Ghost/Poison', 30, 35, 30, 80),
    (96, 'Haunter', 'Ghost/Poison', 45, 50, 45, 95),
    (97, 'Gengar', 'Ghost/Poison', 60, 65, 60, 110),
    (98, 'Onix', 'Rock/Ground', 35, 45, 160, 70),
    (99, 'Drowzee', 'Psychic', 60, 48, 45, 42),
    (100, 'Hypno', 'Psychic', 85, 73, 70, 67),
    (101, 'Krabby', 'Water', 30, 105, 90, 50),
    (102, 'Kingler', 'Water', 55, 130, 115, 75),
    (103, 'Voltorb', 'Electric', 40, 30, 50, 100),
    (104, 'Electrode', 'Electric', 60, 50, 70, 140),
    (105, 'Exeggcute', 'Grass/Psychic', 60, 40, 80, 40),
    (106, 'Exeggutor', 'Grass/Psychic', 95, 95, 85, 55),
    (107, 'Cubone', 'Ground', 50, 50, 95, 35),
    (108, 'Marowak', 'Ground', 60, 80, 110, 45),
    (109, 'Hitmonlee', 'Fighting', 50, 120, 53, 87),
    (110, 'Hitmonchan', 'Fighting', 50, 105, 79, 76),
    (111, 'Lickitung', 'Normal', 90, 55, 75, 30),
    (112, 'Koffing', 'Poison', 40, 65, 95, 35),
    (113, 'Weezing', 'Poison', 65, 90, 120, 60),
    (114, 'Rhyhorn', 'Ground/Rock', 80, 85, 95, 25),
    (115, 'Rhydon', 'Ground/Rock', 105, 130, 120, 40),
    (116, 'Chansey', 'Normal', 250, 5, 5, 50),
    (117, 'Tangela', 'Grass', 65, 55, 115, 60),
    (118, 'Kangaskhan', 'Normal', 105, 95, 80, 90),
    (119, 'Horsea', 'Water', 30, 40, 70, 60),
    (120, 'Seadra', 'Water', 55, 65, 95, 85),
    (121, 'Goldeen', 'Water', 45, 67, 60, 63),
    (122, 'Seaking', 'Water', 80, 92, 65, 68),
    (123, 'Staryu', 'Water', 30, 45, 55, 85),
    (124, 'Starmie', 'Water/Psychic', 60, 75, 85, 115),
    (125, 'Mr. Mime', 'Psychic/Fairy', 40, 45, 65, 90),
    (126, 'Scyther', 'Bug/Flying', 70, 110, 80, 105),
    (127, 'Jynx', 'Ice/Psychic', 65, 50, 35, 95),
    (128, 'Electabuzz', 'Electric', 65, 83, 57, 105),
    (129, 'Magmar', 'Fire', 65, 95, 57, 93),
    (130, 'Pinsir', 'Bug', 65, 125, 100, 85),
    (131, 'Tauros', 'Normal', 75, 100, 95, 110),
    (132, 'Magikarp', 'Water', 20, 10, 55, 80),
    (133, 'Gyarados', 'Water/Flying', 95, 125, 79, 81),
    (134, 'Lapras', 'Water/Ice', 130, 85, 80, 60),
    (135, 'Ditto', 'Normal', 48, 48, 48, 48),
    (136, 'Eevee', 'Normal', 55, 55, 50, 55),
    (137, 'Vaporeon', 'Water', 130, 65, 60, 65),
    (138, 'Jolteon', 'Electric', 65, 65, 60, 130),
    (139, 'Flareon', 'Fire', 65, 130, 60, 65),
    (140, 'Porygon', 'Normal', 65, 60, 70, 40),
    (141, 'Omanyte', 'Rock/Water', 35, 40, 100, 35),
    (142, 'Omastar', 'Rock/Water', 70, 60, 125, 55),
    (143, 'Kabuto', 'Rock/Water', 30, 80, 90, 55),
    (144, 'Kabutops', 'Rock/Water', 60, 115, 105, 80),
    (145, 'Aerodactyl', 'Rock/Flying', 80, 105, 65, 130),
    (146, 'Snorlax', 'Normal', 160, 110, 65, 30),
    (147, 'Articuno', 'Ice/Flying', 90, 85, 100, 85),
    (148, 'Zapdos', 'Electric/Flying', 90, 90, 85, 100),
    (149, 'Moltres', 'Fire/Flying', 90, 100, 90, 90),
    (150, 'Dratini', 'Dragon', 41, 64, 45, 50),
    (151, 'Dragonair', 'Dragon', 61, 84, 65, 70),
    (152, 'Dragonite', 'Dragon/Flying', 91, 134, 95, 80),
    (153, 'Mewtwo', 'Psychic', 106, 110, 90, 130),
    (154, 'Mew', 'Psychic', 100, 100, 100, 100);

    --
    -- Indexes for dumped tables
    --

    --
    -- Indexes for table `pokemon`
    --
    ALTER TABLE `pokemon`
      ADD PRIMARY KEY (`id`);

    --
    -- AUTO_INCREMENT for dumped tables
    --

    --
    -- AUTO_INCREMENT for table `pokemon`
    --
    ALTER TABLE `pokemon`
      MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
    COMMIT;

    /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
    /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
    /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
