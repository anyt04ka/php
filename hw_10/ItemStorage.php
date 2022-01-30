<?php

class ItemStorage{
    private $items = [];

    // добавление товара в хранилище,
    // товары в массиве хранятся по значению id:
    // id товара => товар
    public function add_item(Item $item){
        $this->items[$item->getId()] = $item;

    }

   
    public function get_by_id(string $id){
        // возвращает товар по id
        return $this->items[$id];
    }

    public function get_by_title(string $title){
        // возвращает товар по названию (title)
        foreach ($this->items as $itemm) {
            if ($itemm->getTitle() === $title)
                return$this->items[$itemm];
        }
        return null;
    }

    public function get_by_price(int $price_from, int $price_to){
        // возвращает товары, стоимость которых находится в диапазоне от $price_from до $price_to
        $result = [];
        foreach ($this->items as $one) {
            if ($one->getPrice() >= $price_from && $one->getPrice() <= $price_to)
                array_push($result, $one);
        }
        return $result;
    }

    public function get_by_material(...$materials){
        // возвращает товары, которые изготовлены из материалов, перечисленных в $materials
        
        $result = [];
        foreach ($this->items as $itemm) {
            if (in_array($itemm->getMaterial(), $materials))
                array_push($result, $itemm);
        }
        return $result;
    }

    public function get_by_price_and_material(int $price_to, string $material){
        // возвращает товары, стоимость которых не превышает $price_to и
        // материал, из которого изготовлен товар соответствует $material
        $result = [];
        foreach ($this->items as $itemm) {
            if ($itemm->getPrice() <= $price_to && $itemm->getMaterial() === $material)
                array_push($result, $itemm);
        }
        return $result;
    }
}