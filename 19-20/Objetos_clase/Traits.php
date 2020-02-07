<?php

    /*
     * El uso de múltiples traits puede llevar a conflictos ya que el mismo nombre de
     * método puede aparecer en más de un trait. Se puede usar las palabras reservadas
     * insteadof y as para solucionar etos conflictos
     */

    trait ManejadorCsv {

        public function import() {
            echo 'ManejadorCsv > import' . "<br>";
        }

        public function export() {
            echo 'ManejadorCsv > export' . "<br>";
        }

    }

    trait ManejadorXML {

        public function import() {
            echo 'ManejadorXML > import' . "<br>";
        }

        public function export() {
            echo 'ManejadorXML > export' . "<br>";
        }

    }

    class SalesOrder {

        use ManejadorCsv,
            ManejadorXML {
            ManejadorXML::import insteadof ManejadorCsv;
            ManejadorCsv::export insteadof ManejadorXML;
            ManejadorXML::export as exp;
        }

        public function initImport() {
            $this->import();
        }

        public function initExport() {
            $this->export();
            $this->exp();
        }

    }

    $order = new SalesOrder();
    $order->initImport();
    $order->initExport();

//ManejadorXML > import
//ManejadorCsv > export
//ManejadorXML > export
