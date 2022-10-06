-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-10-2018 a las 01:29:49
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `titulo` text NOT NULL,
  `autor` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria` text NOT NULL,
  `texto` text NOT NULL,
  `n_imagen` text NOT NULL,
  `activo` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `autor`, `fecha`, `categoria`, `texto`, `n_imagen`, `activo`) VALUES
(7, 'La pintura', 'Juana', '2018-10-22 16:02:33', 'PIntura', 'La pintura es el arte de la representación gráfica utilizando pigmentos mezclados con otras sustancias aglutinantes orgánicas o sintéticas. En este arte se emplean técnicas de pintura, conocimientos de teoría del color y de composición pictórica, y el dibujo. La práctica del arte de pintar, consiste en aplicar, en una superficie determinada —una hoja de papel, un lienzo, un muro, una madera, un fragmento de tejido, etc.— una técnica determinada, para obtener una composición de formas, colores, texturas, dibujos, etc. dando lugar a una obra de arte según algunos principios estéticos.', '24203749_1622782454476972_908184755_n.jpg', 'S'),
(8, 'Los paisajes', 'John', '2018-10-22 16:07:38', 'Paisaje', 'El concepto de paisaje (extensión de terreno que se ve desde un lugar o sitio)1​ se utiliza de manera diferente por varios campos de estudio, aunque todos los usos del término llevan implícita la existencia de un sujeto observador (el que visualiza) y de un objeto observado (el terreno), del que se destacan fundamentalmente sus cualidades visuales, espaciales.\r\n\r\nEl paisaje, desde el punto de vista geográfico, es el objeto de estudio primordial y el documento geográfico básico a partir del cual se hace la geografía. En general, se entiende por paisaje cualquier área de la superficie terrestre producto de la interacción de los diferentes factores presentes en ella y que tienen un reflejo visual en el espacio. El paisaje geográfico es por tanto el aspecto que adquiere el espacio geográfico. El paisaje, desde el punto de vista artístico, sobre todo pictórico, es la representación gráfica de un terreno extenso. Con el mismo significado se utiliza el término país (no debe confundirse con el concepto político de país). El paisaje también puede ser el objeto material a crear o modificar por el arte mismo.\r\n\r\nEn literatura, la descripción del paisaje es una forma literaria que se denomina topografía (término que también da nombre a la topografía como ciencia y técnica que se emplea para la representación gráfica de la superficie terrestre). En construcciones literarias y ensayísticas es habitual comparar el paisaje con el paisanaje (de paisano), es decir, el medio con los grupos humanos.', 'gallery-7.jpg', 'N'),
(9, 'Concepto de Persona', 'Mr Nobody', '2018-10-22 16:12:23', 'Humanidad', 'El término persona proviene del latín persōna, y éste probablemente del etrusco phersu (‘máscara del actor’, ‘personaje’), el cual —según el Diccionario de la lengua española— procede del griego πρóσωπον [prósôpon].1​ El concepto de persona es un concepto principalmente filosófico, que expresa la singularidad de cada individuo de la especie humana en contraposición al concepto filosófico de «naturaleza humana» que expresa lo supuestamente común que hay en ellos. Sin embargo, en Ética y en Derecho no solo existen personas de la especie humana.2​\r\n\r\nEl significado actual de persona tiene su origen en las controversias cristológicas de los siglos IV y V. En el transcurso del debate entre las diferentes escuelas teológicas, se desarrollaron conceptos hasta entonces no conocidos. Se trataba de disponer de herramientas de pensamiento filosófico, sobre las que mantener un debate intelectual honesto y riguroso acerca de los dogmas referidos al Λóγος (Logos: «Palabra»), y que permitiesen esclarecer sus diferencias o similitudes con Dios Padre. Para ello la filosofía tomó prestado del teatro griego el término πρόσωπον [prósôpon], y lo convirtió en un término filosófico, definiendo al Λóγος (Logos) como Persona divina. Por afinidad, el concepto fue posteriormente aplicado al Espíritu Santo, a los ángeles y a los hombres.', '', 'N');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
