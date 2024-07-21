<?

namespace Ms\Main\Controllers;

use Bitrix\Main\Engine\ActionFilter\Csrf;
use \Bitrix\Main\Engine\Controller;
use \Bitrix\Main\Error;

class TestController extends Controller
{
	// Csrf
	public function configureActions(): array
    {
        return [
            'index' => [
                'prefilters' => [
                    new Csrf(false),
                ],
            ],
        ];
    }

	public function indexAction(){
		return 112;
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