<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function getPrice() {
        return $this->price;
    }
}

class TaxCalc {
    public $product;
    public $country;
    
    private $taxCountry = [
        // Preço menor que 150 reais, não cobrará taxa. Caso maior cobrará 15%
        "BR" => [
            "limit"  => 150,
            "tax"    => 0.15
        ],
        // Preço menor que 100 reais, não cobrará taxa. Caso maior cobrará 7%
        "USA" => [
            "limit"  => 100,
            "tax"    => 0.07
        ],
        // Preço menor que 300 reais, não cobrará taxa. Caso maior cobrará 40%
        "UK" => [
            "limit"  => 300,
            "tax"    => 0.4
        ],
    ];
    
    public function calcTax($product, $country)
    {
        return $this->taxCountry[$country]["limit"] < $product->getPrice() 
                                                ? $product->getPrice() * $this->taxCountry[$country]["tax"] 
                                                : 0;
    }
}

$notebook = new Product("Acer Nitro 5", 4000);
echo "Valor total do produto com taxa BR: " . TaxCalc::calcTax($notebook, "BR");
echo "Valor total do produto com taxa UK: " . TaxCalc::calcTax($notebook, "UK");