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
            $sql =<<<END

                CREATE TABLE `categorias` (
                `id_categoria` int(11) NOT NULL,
                `nombre_categoria` varchar(50) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

                CREATE TABLE `productos` (
                `id_producto` int(11) NOT NULL,
                `nombre_producto` varchar(50) NOT NULL,
                `precio_producto` int(10) NOT NULL,
                `id_categoria` int(11) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


                CREATE TABLE `usuarios` (
                `id` int(11) NOT NULL,
                `nombre` varchar(50) NOT NULL,
                `contrasenia_hash` varchar(60) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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