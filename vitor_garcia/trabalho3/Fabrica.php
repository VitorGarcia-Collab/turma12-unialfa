<?php

namespace UniAlfa\Trabalho;

use DateTime;

class Fabrica {


    public function fabricar(): Carro {


        $detalhes = new Detalhes();
        $detalhes->setId(1);
        $detalhes->setModelo('Uno de Firma');
        $detalhes->setCarroCarburado(true);
        $detalhes->setManual(true);


        $marca = new Marca();
        $marca->setId(1);
        $marca->setDescricao('Uno');
        $marca->setDesde(new DateTime('19/12/1998'));
        $marca->setAte(null);

        $carro = new Carro();
        $carro->setId(1);
        $carro->setMarca($marca);
        $carro->setDetalhes($detalhes);

        return $carro;

    }

}

$this->fabricar();



?>