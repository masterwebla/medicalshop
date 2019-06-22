-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 22, 2019 at 05:55 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `medicalshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `estado_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorias_productos`
--

CREATE TABLE `categorias_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ciudades`
--

CREATE TABLE `ciudades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ciudades`
--

INSERT INTO `ciudades` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Bogota', '2019-06-20 00:37:03', '2019-06-20 00:37:03'),
(2, 'Medellin', '2019-06-20 00:37:03', '2019-06-20 00:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `numero_compra` int(11) NOT NULL,
  `proveedor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compras_detalles`
--

CREATE TABLE `compras_detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `compra_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deseos`
--

CREATE TABLE `deseos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devoluciones`
--

CREATE TABLE `devoluciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `detalle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estados_pedidos`
--

CREATE TABLE `estados_pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estados_productos`
--

CREATE TABLE `estados_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estados_productos`
--

INSERT INTO `estados_productos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Disponible', '2019-05-30 00:54:18', '2019-05-30 00:54:18'),
(2, 'Agotado', '2019-05-30 00:54:18', '2019-05-30 00:54:18'),
(3, 'Inactivo', '2019-05-31 01:45:35', '2019-05-31 01:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `estados_usuarios`
--

CREATE TABLE `estados_usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estados_usuarios`
--

INSERT INTO `estados_usuarios` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Activo', '2019-06-20 00:46:43', '2019-06-20 00:46:43'),
(2, 'Inactivo', '2019-06-20 00:46:43', '2019-06-20 00:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `imagenes_productos`
--

CREATE TABLE `imagenes_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metodos_pago`
--

CREATE TABLE `metodos_pago` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_05_29_161157_metodos_pago', 1),
(2, '2014_05_29_161257_regimenes', 1),
(3, '2019_04_24_013132_ciudades', 1),
(4, '2019_04_24_013201_estados_usuarios', 1),
(5, '2019_04_29_161012_estados_pedidos', 1),
(6, '2019_04_29_161918_estados_productos', 1),
(7, '2019_05_24_012455_perfiles', 1),
(8, '2019_05_24_012629_unidades', 1),
(9, '2019_05_24_012643_categorias', 1),
(10, '2019_05_24_012659_productos', 1),
(11, '2019_05_24_012717_imagenesproductos', 1),
(12, '2019_05_29_161123_categorias_productos', 1),
(13, '2019_05_29_161323_proveedores', 1),
(14, '2019_05_29_161515_compras', 1),
(15, '2019_05_29_161527_compras_detalles', 1),
(16, '2019_05_29_161604_ofertas', 1),
(17, '2020_10_12_000000_create_users_table', 1),
(18, '2020_10_12_100000_create_password_resets_table', 1),
(19, '2020_11_29_161720_deseos', 1),
(20, '2020_12_29_161409_pedidos', 1),
(21, '2020_12_29_161421_pedidos_detalles', 1),
(22, '2021_05_29_161627_notificaciones', 1),
(23, '2021_05_29_161648_devoluciones', 1),
(24, '2019_05_24_012717_productosimagenes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ofertas`
--

CREATE TABLE `ofertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nro_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `precio_total` int(11) NOT NULL,
  `direccion_envio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_envio` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `metodo_id` bigint(20) UNSIGNED NOT NULL,
  `estado_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos_detalles`
--

CREATE TABLE `pedidos_detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perfiles`
--

CREATE TABLE `perfiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perfiles`
--

INSERT INTO `perfiles` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2019-06-20 00:11:28', '2019-06-20 00:11:28'),
(2, 'Operario', '2019-06-20 00:11:28', '2019-06-20 00:11:28'),
(3, 'Cliente', '2019-06-20 00:11:42', '2019-06-20 00:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_larga` text COLLATE utf8mb4_unicode_ci,
  `costo` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad_id` bigint(20) UNSIGNED NOT NULL,
  `estado_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `descripcion_larga`, `costo`, `precio`, `cantidad`, `unidad_id`, `estado_id`, `created_at`, `updated_at`) VALUES
(1, 'Gel Antiacne 2', 'Gel Antiacne con detalles 2', 'Gel Antiacne con detalles y maa', 8000, 15000, 12, 1, 1, '2019-05-30 00:55:07', '2019-06-22 16:49:01'),
(2, 'Crema antiarrugas', 'Crema antiarrugas', 'Crema antiarrugas', 12000, 24000, 12, 2, 1, '2019-05-30 06:55:21', '2019-05-31 01:48:03'),
(3, 'Crema 2', 'Descripcion de la Crema 2', 'Descripcion de la Crema 2', 15000, 19000, 12, 1, 1, '2019-06-07 00:43:26', '2019-06-07 00:43:26'),
(4, 'Cepillo dientes', 'Descripcion cepillo', 'Descripcion cepillo', 1000, 2000, 30, 1, 1, '2019-06-07 00:44:06', '2019-06-07 00:44:06'),
(5, 'Café late', 'sdfdsf', 'adfadsfds', 12000, 15000, 12, 1, 1, '2019-06-22 15:34:26', '2019-06-22 15:34:26'),
(6, 'Producto 111', 'afadfa', 'dsagfasdfads', 1200, 1500, 12, 1, 1, '2019-06-22 15:36:39', '2019-06-22 15:36:39'),
(7, 'Producto YYY', 'Descripcion producto YYY', 'Descripcion producto YYY', 2300, 3400, 10, 1, 1, '2019-06-22 15:47:36', '2019-06-22 15:47:36'),
(8, 'Producto ZZZ', 'Descripcion producto ZZZ', 'Descripcion producto ZZZ', 1230, 5670, 12, 1, 3, '2019-06-22 15:53:11', '2019-06-22 16:50:33'),
(9, 'Producto WWW', 'Descripcion producto WWW', 'Descripcion producto WWW', 23232, 35353, 12, 1, 1, '2019-06-22 15:56:05', '2019-06-22 15:56:05'),
(10, 'Producto 100', 'Descripcion 100', 'Descripcion larga 100', 1000, 2000, 12, 1, 1, '2019-06-22 17:54:26', '2019-06-22 17:54:26'),
(11, 'Producto 101', 'Descripcion 101', 'Descripcion larga 101', 1000, 2000, 12, 1, 1, '2019-06-22 17:54:26', '2019-06-22 17:54:26'),
(12, 'Producto 102', 'Descripcion 102', 'Descripcion larga 102', 1000, 2000, 12, 1, 1, '2019-06-22 17:54:26', '2019-06-22 17:54:26'),
(13, 'Producto 103', 'Descripcion 103', 'Descripcion larga 103', 1000, 2000, 12, 1, 1, '2019-06-22 17:54:26', '2019-06-22 17:54:26'),
(14, 'Producto 104', 'Descripcion 104', 'Descripcion larga 104', 1000, 2000, 12, 1, 1, '2019-06-22 17:54:26', '2019-06-22 17:54:26'),
(15, 'Producto 105', 'Descripcion 105', 'Descripcion larga 105', 1000, 2000, 12, 1, 1, '2019-06-22 17:54:26', '2019-06-22 17:54:26'),
(16, 'Producto 106', 'Descripcion 106', 'Descripcion larga 106', 1000, 2000, 12, 1, 1, '2019-06-22 17:54:26', '2019-06-22 17:54:26'),
(17, 'Producto 107', 'Descripcion 107', 'Descripcion larga 107', 1000, 2000, 12, 1, 1, '2019-06-22 17:54:26', '2019-06-22 17:54:26'),
(18, 'Producto 108', 'Descripcion 108', 'Descripcion larga 108', 1000, 2000, 12, 1, 1, '2019-06-22 17:54:26', '2019-06-22 17:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `productos_imagenes`
--

CREATE TABLE `productos_imagenes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `archivo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `principal` tinyint(1) NOT NULL DEFAULT '0',
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos_imagenes`
--

INSERT INTO `productos_imagenes` (`id`, `archivo`, `principal`, `producto_id`, `created_at`, `updated_at`) VALUES
(1, '1-5cf075d1e9caf-crema1.jpeg', 1, 1, '2019-05-31 05:31:13', '2019-05-31 05:31:13'),
(3, '1-5cf07baea2f9f-crema2.jpeg', 0, 1, '2019-05-31 05:56:14', '2019-05-31 05:56:14'),
(4, '1-5cf07bb3c6cd0-crema3.jpeg', 0, 1, '2019-05-31 05:56:19', '2019-05-31 05:56:19'),
(5, '1-5cf07bcaa7945-crema2.jpeg', 0, 1, '2019-05-31 05:56:42', '2019-05-31 05:56:42'),
(7, '4-5cf9b37ac5668-cepillo.jpeg', 1, 4, '2019-06-07 00:44:42', '2019-06-07 00:44:42'),
(8, '3-5cf9b3b97712a-crema2.jpeg', 1, 3, '2019-06-07 00:45:45', '2019-06-07 00:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad_id` bigint(20) UNSIGNED NOT NULL,
  `regimen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regimenes`
--

CREATE TABLE `regimenes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unidades`
--

CREATE TABLE `unidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unidades`
--

INSERT INTO `unidades` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Unidad', '2019-05-30 00:49:53', '2019-05-30 00:49:53'),
(2, 'Kilogramo', '2019-05-30 00:49:53', '2019-05-30 00:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad_id` bigint(20) UNSIGNED NOT NULL,
  `perfil_id` bigint(20) UNSIGNED NOT NULL,
  `estado_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `email`, `email_verified_at`, `password`, `direccion`, `telefono`, `ciudad_id`, `perfil_id`, `estado_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Mauricio', 'Rodriguez', 'info@masterweb.la', NULL, '$2y$10$tXZnY4RdFPTj9x5K7UhmLOMV9R1bmIGDtjN4NpIDsfJOwox7qdnyy', 'Cra 15', '554545', 1, 1, 1, NULL, '2019-06-20 00:47:11', '2019-06-20 00:47:11'),
(3, 'Mauricio 2', 'Rodriguez', 'mauricio.rodriguez1016@gmail.com', NULL, '$2y$10$DIx7BP1r9hXs5pykHcJmq.UdtUKZwD2OBSQ7aPQDZm/p8W6tKFud6', 'Cra 15', '4545454', 1, 1, 1, NULL, '2019-06-22 15:46:33', '2019-06-22 15:46:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_estado_id_foreign` (`estado_id`);

--
-- Indexes for table `categorias_productos`
--
ALTER TABLE `categorias_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_productos_categoria_id_foreign` (`categoria_id`),
  ADD KEY `categorias_productos_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compras_proveedor_id_foreign` (`proveedor_id`);

--
-- Indexes for table `compras_detalles`
--
ALTER TABLE `compras_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compras_detalles_compra_id_foreign` (`compra_id`),
  ADD KEY `compras_detalles_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `deseos`
--
ALTER TABLE `deseos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deseos_user_id_foreign` (`user_id`),
  ADD KEY `deseos_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `devoluciones_pedido_id_foreign` (`pedido_id`),
  ADD KEY `devoluciones_producto_id_foreign` (`producto_id`),
  ADD KEY `devoluciones_user_id_foreign` (`user_id`);

--
-- Indexes for table `estados_pedidos`
--
ALTER TABLE `estados_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estados_productos`
--
ALTER TABLE `estados_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estados_usuarios`
--
ALTER TABLE `estados_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagenes_productos_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `metodos_pago`
--
ALTER TABLE `metodos_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notificaciones_user_id_foreign` (`user_id`),
  ADD KEY `notificaciones_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_user_id_foreign` (`user_id`),
  ADD KEY `pedidos_metodo_id_foreign` (`metodo_id`),
  ADD KEY `pedidos_estado_id_foreign` (`estado_id`);

--
-- Indexes for table `pedidos_detalles`
--
ALTER TABLE `pedidos_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_detalles_pedido_id_foreign` (`pedido_id`),
  ADD KEY `pedidos_detalles_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_unidad_id_foreign` (`unidad_id`),
  ADD KEY `productos_estado_id_foreign` (`estado_id`);

--
-- Indexes for table `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_imagenes_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proveedores_ciudad_id_foreign` (`ciudad_id`),
  ADD KEY `proveedores_regimen_id_foreign` (`regimen_id`);

--
-- Indexes for table `regimenes`
--
ALTER TABLE `regimenes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_ciudad_id_foreign` (`ciudad_id`),
  ADD KEY `users_perfil_id_foreign` (`perfil_id`),
  ADD KEY `users_estado_id_foreign` (`estado_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorias_productos`
--
ALTER TABLE `categorias_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compras_detalles`
--
ALTER TABLE `compras_detalles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deseos`
--
ALTER TABLE `deseos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `devoluciones`
--
ALTER TABLE `devoluciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estados_pedidos`
--
ALTER TABLE `estados_pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estados_productos`
--
ALTER TABLE `estados_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estados_usuarios`
--
ALTER TABLE `estados_usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metodos_pago`
--
ALTER TABLE `metodos_pago`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos_detalles`
--
ALTER TABLE `pedidos_detalles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regimenes`
--
ALTER TABLE `regimenes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estados_productos` (`id`);

--
-- Constraints for table `categorias_productos`
--
ALTER TABLE `categorias_productos`
  ADD CONSTRAINT `categorias_productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `categorias_productos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Constraints for table `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_proveedor_id_foreign` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores` (`id`);

--
-- Constraints for table `compras_detalles`
--
ALTER TABLE `compras_detalles`
  ADD CONSTRAINT `compras_detalles_compra_id_foreign` FOREIGN KEY (`compra_id`) REFERENCES `compras` (`id`),
  ADD CONSTRAINT `compras_detalles_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Constraints for table `deseos`
--
ALTER TABLE `deseos`
  ADD CONSTRAINT `deseos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `deseos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD CONSTRAINT `devoluciones_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `devoluciones_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `devoluciones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  ADD CONSTRAINT `imagenes_productos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Constraints for table `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `notificaciones_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `notificaciones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estados_pedidos` (`id`),
  ADD CONSTRAINT `pedidos_metodo_id_foreign` FOREIGN KEY (`metodo_id`) REFERENCES `metodos_pago` (`id`),
  ADD CONSTRAINT `pedidos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pedidos_detalles`
--
ALTER TABLE `pedidos_detalles`
  ADD CONSTRAINT `pedidos_detalles_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `pedidos_detalles_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estados_productos` (`id`),
  ADD CONSTRAINT `productos_unidad_id_foreign` FOREIGN KEY (`unidad_id`) REFERENCES `unidades` (`id`);

--
-- Constraints for table `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  ADD CONSTRAINT `productos_imagenes_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Constraints for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ciudad_id_foreign` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`id`),
  ADD CONSTRAINT `proveedores_regimen_id_foreign` FOREIGN KEY (`regimen_id`) REFERENCES `regimenes` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ciudad_id_foreign` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`id`),
  ADD CONSTRAINT `users_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estados_usuarios` (`id`),
  ADD CONSTRAINT `users_perfil_id_foreign` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`);
