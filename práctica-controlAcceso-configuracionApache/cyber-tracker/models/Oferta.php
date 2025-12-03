<?php
    class Oferta {

        private PDO $conexion;

        // CONSTRUCTOR PARA INICIALIZAR LA CONEXIÓN A LA BASE DE DATOS
        public function __construct(PDO $conexion) {
            $this->conexion = $conexion;
        }

        // MÉTODO PARA REGISTRAR UNA NUEVA OFERTA
        public function registrar(string $nombre, float $precio, string $web): bool {
            $sql = "INSERT INTO ofertas (nombre, precio, web) VALUES (:nombre, :precio, :web)";
            $sentencia = $this->conexion->prepare($sql);

            return $sentencia->execute([
                ":nombre" => $nombre,
                ":precio" => $precio,
                ":web"    => $web
            ]);
        }

        // MÉTODO PARA BUSCAR OFERTAS POR NOMBRE
        public function buscar(?string $termino = null): array {
            if ($termino) {
                $sql = "SELECT * FROM ofertas WHERE nombre LIKE :termino";
                $sentencia = $this->conexion->prepare($sql);
                $sentencia->execute([":termino" => "%$termino%"]);
                
            } else {
                $sql = "SELECT * FROM ofertas";
                $sentencia = $this->conexion->query($sql);
            }

            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>