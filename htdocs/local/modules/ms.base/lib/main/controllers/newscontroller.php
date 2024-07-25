<?

namespace Ms\Base\Main\Controllers;

use Bitrix\Highloadblock\HighloadBlock;
use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Engine\ActionFilter\Csrf;
use \Bitrix\Main\Engine\Controller;
use \Bitrix\Main\Error;
// use Ms\Base\Main\Models\NewsModel;

class NewsController extends Controller
{

	public function configureActions(): array
    {
        return [
            'popular' => [
                'prefilters' => [
                    new Csrf(false),
                ],
            ],
			'popular' => [
                'prefilters' => [
                    new Csrf(false),
                ],
            ],
			'popular' => [
                'prefilters' => [
                    new Csrf(false),
                ],
            ],
			'popular' => [
                'prefilters' => [
                    new Csrf(false),
                ],
            ],
			'popular' => [
                'prefilters' => [
                    new Csrf(false),
                ],
            ],


        ];
    }

	
	public function popularAction(){

		// NewsModel::query()->where(
		// 	[
		// 		'ACTIVE' => 'Y',
		// 	]
		// )

		return true;
	}

	// public function addAction(array $fields):? array
	// {
	// 	$item = Item::add($fields);
	// 	if (!$item)
	// 	{
	// 		$this->addError(new Error('Could not create item.', {код_ошибки}));
	// 		return null;
	// 	}
	// 	return $item->toArray();
	// }
	// public function viewAction($id):? array
	// {
	// 	$item = Item::getById($id);
	// 	if (!$item)
	// 	{
	// 		$this->addError(new Error('Could not find item.', {код_ошибки}));
					
	// 		return null;
	// 	} 
	// 	return $item->toArray();
	// }
}