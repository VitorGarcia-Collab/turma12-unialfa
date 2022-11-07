<?php

namespace UniAlfa\Trabalho;

class Detalhes {


    private int $id;
    private string $modelo;
    private bool $carroCarburado;
    private bool $manual;

    public function setId($id):void
    {
        $this->id = $id;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setModelo($modelo):void
    {
        $this->modelo = $modelo;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }


    public function setCarroCarburado($carroCarburado): void
    {
        $this->carroCarburado = $carroCarburado;
    }

    public function getCarroCarburado() : bool
    {
        return $this->carroCarburado;
    }


    public function setManual($manual): void
    {
        $this->manual = $manual;
    }

    public function getManual() : bool
    {
        return $this->manual;
    }

}



?>