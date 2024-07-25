<?php


namespace Ms\Base\Main\Models;

use Bitrix\Main\Type\Contract\Arrayable;
use Bitrix\Main\Entity;

class FaqModel extends Entity\DataManager 
{
    public static function getTableName(){
        return 'hl_faq';
    }

    public static function getMap()
	{
		return array(
			new Entity\IntegerField('ID',
            [
                'primary' => true,
                'autocomplete' => true
            ]),
			new Entity\StringField('QUESTION',
            [
                'require' => true,
            ]),
            new Entity\StringField('ANSWER',
            [
                'require' => true,
            ]),
            // new Entity\StringField('ICON'),
		);
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

    // public function getName(): string
    // {
    //     return $this->name;
    // }

    // public function setName(string $name): void
    // {
    //     $this->name = $name;
    // }


    // public function toArray(): array
    // {
    //     return [

    //     ];
    // }

}
