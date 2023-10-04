<?php
if (isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['operacion'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $operacion = $_GET['operacion'];


    class calculadora {
        private $a;
        private $b;
    
        public function __construct($a, $b) {
            $this->a = $a;
            $this->b = $b;
        }
    
        public function sumar() {
            return $this->a + $this->b;
        }
    
        public function restar() {
            return $this->a - $this->b;
        }
    
        public function multiplicar() {
            return $this->a * $this->b;
        }
    
        public function dividir() {
            if ($this->b == 0) {
                return "Error: división por cero";
            } else {
                return $this->a / $this->b;
            }
        }
    }



    $calculadora = new calculadora($numero1, $numero2);

    switch ($operacion) {
        case 'sumar':
            $resultado = $calculadora->sumar();
            break;
        case 'restar':
            $resultado = $calculadora->restar();
            break;
        case 'multiplicar':
            $resultado = $calculadora->multiplicar();
            break;
        case 'dividir':
            $resultado = $calculadora->dividir();
            break;
        default:
            $resultado = "Operación inválida";
            break;
    }

    echo "El resultado de la operación es: $resultado";
}
?>