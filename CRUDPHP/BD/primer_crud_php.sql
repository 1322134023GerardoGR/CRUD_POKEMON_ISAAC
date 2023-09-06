-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2023 a las 09:19:41
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `primer_crud_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemones`
--

CREATE TABLE `pokemones` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `level` int(6) NOT NULL,
  `team_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pokemones`
--

INSERT INTO `pokemones` (`id`, `name`, `type`, `level`, `team_id`) VALUES
(10, 'Snorlax', 'Normal', 150, 1),
(11, 'Pika', 'Electric', 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon_skills`
--

CREATE TABLE `pokemon_skills` (
  `id` int(11) NOT NULL,
  `id_pokemon` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pokemon_skills`
--

INSERT INTO `pokemon_skills` (`id`, `id_pokemon`, `id_skill`) VALUES
(8, 10, 20),
(9, 11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name_skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `skills`
--

INSERT INTO `skills` (`id`, `name_skill`) VALUES
(1, 'Ataque Rápido'),
(2, 'Lanzallamas'),
(3, 'Rayo'),
(4, 'Hidrobomba'),
(5, 'Giga Impacto'),
(6, 'Tajo Umbrío'),
(7, 'Terremoto'),
(8, 'Psíquico'),
(9, 'Avalancha'),
(10, 'Lanzarrocío'),
(11, 'Hojas Navaja'),
(12, 'Gruñido'),
(13, 'Golpe Aéreo'),
(14, 'Trueno'),
(15, 'Drenadoras'),
(16, 'Ciclón'),
(17, 'Lanzarrocas'),
(18, 'Patada Baja'),
(19, 'Garra Dragón'),
(20, 'Viento Aciago'),
(21, 'Danza Espada'),
(22, 'Surf'),
(23, 'Puño Trueno'),
(24, 'Látigo Cepa'),
(25, 'Lanzamiento'),
(26, 'Rayo Hielo'),
(27, 'Hiperrayo'),
(28, 'Corte'),
(29, 'Cola Dragón'),
(30, 'Giro Bola'),
(31, 'Pulso Umbrío'),
(32, 'Bomba Lodo'),
(33, 'Chispa'),
(34, 'Golpe Cabeza'),
(35, 'Furia'),
(36, 'Ala de Acero'),
(37, 'Golpe Bajo'),
(38, 'Puño Fuego'),
(39, 'Triturar'),
(40, 'Buceo'),
(41, 'Terremoto'),
(42, 'Alarido'),
(43, 'Golpe Afilado'),
(44, 'Aerochorro'),
(45, 'Giga Drenado'),
(46, 'Golpe Roca'),
(47, 'Viento Plata'),
(48, 'Onda Tóxica'),
(49, 'Psicorrayo'),
(50, 'Sofoco'),
(51, 'Ataque Aéreo'),
(52, 'Golpe Rápido'),
(53, 'Lanzamiento Lodo'),
(54, 'Lanza Mugre'),
(55, 'Danza Lluvia'),
(56, 'Puño Trueno'),
(57, 'Hoja Aguda'),
(58, 'Pisotón'),
(59, 'Giro Fuego'),
(60, 'Vendaval'),
(61, 'Tinieblas'),
(62, 'Beso Amoroso'),
(63, 'Ala Mortal'),
(64, 'Rayo Confuso'),
(65, 'Corte X'),
(66, 'Gruñido'),
(67, 'Avalancha'),
(68, 'Tajo Cruzado'),
(69, 'Lanzarrocas'),
(70, 'Foco Energía'),
(71, 'Disparo Lodo'),
(72, 'Golpe Roca'),
(73, 'Viento Hielo'),
(74, 'Llamarada'),
(75, 'Tajo Umbrío'),
(76, 'Estallido'),
(77, 'Ventisca'),
(78, 'Onda Trueno'),
(79, 'Bola Sombra'),
(80, 'Avalancha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`id`, `name`, `age`, `region`) VALUES
(1, 'Marco', 20, 'Sinnoh'),
(2, 'Gerardo Gutierrez R', 15, 'Jhoto'),
(3, 'Gerardo', 22, 'Kanto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indices de la tabla `pokemon_skills`
--
ALTER TABLE `pokemon_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pokemon` (`id_pokemon`),
  ADD KEY `id_skill` (`id_skill`);

--
-- Indices de la tabla `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pokemon_skills`
--
ALTER TABLE `pokemon_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pokemones`
--
ALTER TABLE `pokemones`
  ADD CONSTRAINT `pokemones_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Filtros para la tabla `pokemon_skills`
--
ALTER TABLE `pokemon_skills`
  ADD CONSTRAINT `pokemon_skills_ibfk_1` FOREIGN KEY (`id_pokemon`) REFERENCES `pokemones` (`id`),
  ADD CONSTRAINT `pokemon_skills_ibfk_2` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
