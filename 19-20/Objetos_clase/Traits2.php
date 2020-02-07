<?php

    /*
     * Los traits pueden estar copuestos de otros traits, incluso soportar miembros
     * abstractos y estáticos
     */

    trait A {

        public static $contador = 0;

        public function metodoA() {
            return self::$contador;
        }

    }

    trait B {

        use A;

        abstract public function metodoB();
    }

    class C {

        use B;

        public function metodoB() {
            return self::$contador;
        }

    }

    $c = new C();
    $c::$contador++;
    echo $c->metodoA() . "<br>"; // 1
    $c::$contador++;
    $c::$contador++;
    echo $c->metodoB(); // 3
