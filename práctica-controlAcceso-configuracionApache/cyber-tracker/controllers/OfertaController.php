<?php
    require_once "models/Oferta.php";

    class OfertaController {

        private Oferta $modelo; // MODELO DE OFERTA

        // CONSTRUCTOR PARA INICIALIZAR EL MODELO
        public function __construct(PDO $conexion) {
            $this->modelo = new Oferta($conexion);
        }

        // MÉTODO PARA LISTAR OFERTAS
        public function index() {
            $resultados = [];

            // REGISTRAR OFERTA POST
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["guardar"])) {

                $nombre = trim($_POST["nombre"]);
                $precio = floatval($_POST["precio"]);
                $web = trim($_POST["web"]);

                if ($nombre && $precio && $web) {
                    $this->modelo->registrar($nombre, $precio, $web);
                }
            }

            // BUSCAR OFERTAS GET
            if (isset($_GET["buscar"])) {
                $termino = trim($_GET["buscar"]);
                $resultados = $this->modelo->buscar($termino);

            } else {
                $resultados = $this->modelo->buscar();
            }

            // CARGAR LA VISTA
            require "views/panel.php";
        }
    }
?>