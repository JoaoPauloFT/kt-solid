<?php

class Product
{
    public $name;
    public $price;
    public $country;

    public function __construct($name, $price, $country)
    {
        $this->name = $name;
        $this->price = $price;
        $this->country = $country;
    }

    public function calcTax()
    {
        switch ($this->country) {
            case "BR":
                // Preço menor que 150 reais, não cobrará taxa. Caso maior cobrará 15%
                return 150 < $this->price ? $this->price * 0.15 : 0;
                break;
            case "USA":
                // Preço menor que 100 reais, não cobrará taxa. Caso maior cobrará 7%
                return 100 < $this->price ? $this->price * 0.07 : 0;
                break;
            case "UK":
                // Preço menor que 300 reais, não cobrará taxa. Caso maior cobrará 40%
                return 300 < $this->price ? $this->price * 0.4 : 0;
                break;
            default:
                // Demais paises, taxa de 12%
                return $this->price * 0.12;
        }
    }
}

$notebook = new Product("Acer Nitro 5", 4000, "BR");
echo "Valor total do produto com taxa: " . $notebook->calcTax();