<?php


namespace Ms\Base\Main\Models;

use Bitrix\Main\Type\Contract\Arrayable;
use Bitrix\Main\Entity;

class NewsModel extends Entity\DataManager implements Arrayable 
{
    public static function getTableName(){
        return 'highload_news';
    }

    protected ?int $id;


    public function __construct(int $id = null)
    {
        // HighloadBlockTable::getList();

        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function toArray(): array
    {
        return [

        ];
    }

}
