<?php
require_once './config.php';

class Model {
    protected $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=".MYSQL_HOST . ";dbname=".MYSQL_DB.";charset=utf8", MYSQL_USER, MYSQL_PASS);
        $this->_deploy();
    }

    private function _deploy() {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if(count($tables) == 0) {
            $J163vglOAky8t3AB7ihSz = '$J163vglOAky8t3AB7ihSz';
            $xdvIp = '$xdvIp';
            $r2Rf6fbW7Xe05lECwn5v0uJa3j9Yw6hc0QQ0tW = '$r2Rf6fbW7Xe05lECwn5v0uJa3j9Yw6hc0QQ0tW';
            $sql =<<<END

                SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
                START TRANSACTION;
                SET time_zone = "+00:00";

                CREATE TABLE `categorias` (
                `id_categoria` int(11) NOT NULL,
                `nombre_categoria` varchar(50) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

                INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
                (1, 'Alimento'),
                (6, 'Bebida'),
                (7, 'Farmacia'),
                (8, 'Limpieza');

                CREATE TABLE `productos` (
                `id_producto` int(11) NOT NULL,
                `nombre_producto` varchar(50) NOT NULL,
                `precio_producto` int(10) NOT NULL,
                `id_categoria` int(11) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

                INSERT INTO `productos` (`id_producto`, `nombre_producto`, `precio_producto`, `id_categoria`) VALUES
                (1, 'Detergente', 3665, 8),
                (2, 'Pasta de dientes', 5995, 7),
                (3, 'Lavandina', 4750, 8),
                (4, 'Lentejas', 995, 1),
                (5, 'Arroz', 1250, 1),
                (6, 'Coca Cola', 1500, 6),
                (7, 'Curitas', 300, 7),
                (8, 'Bolsa', 200, 1);

                CREATE TABLE `usuarios` (
                `id` int(11) NOT NULL,
                `nombre` varchar(50) NOT NULL,
                `contrasenia_hash` varchar(60) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

                INSERT INTO `usuarios` (`id`, `nombre`, `contrasenia_hash`) VALUES
                (1, 'Tomas', '$2y$10$J163vglOAky8t3AB7ihSz.507YfN7yDVWrgu2/DoSzvG0dlNxq9Im'),
                (2, 'webadmin', '$2y$10$xdvIp/2SZQkHinpqckCTcu37JmOUaOORER9sXIksxz/Eo29fegd.y'),
                (3, 'Milagros', '$2y$10$r2Rf6fbW7Xe05lECwn5v0uJa3j9Yw6hc0QQ0tW/jzjtH7w1k.pLy.');

                ALTER TABLE `categorias`
                ADD PRIMARY KEY (`id_categoria`);

                ALTER TABLE `productos`
                ADD PRIMARY KEY (`id_producto`),
                ADD KEY `id_categoria` (`id_categoria`);

                ALTER TABLE `usuarios`
                ADD PRIMARY KEY (`id`);

                ALTER TABLE `categorias`
                MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

                ALTER TABLE `productos`
                MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

                ALTER TABLE `usuarios`
                MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

                ALTER TABLE `productos`
                ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
                COMMIT;
            END;
            $this->db->query($sql);
        }
    }

}