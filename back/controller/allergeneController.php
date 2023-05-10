<?Php
require_once __DIR__ . '../../repository/repository.php';
require_once __DIR__ . '../../model/allergene.php';



class allergenesController
{
    public $repo; 
    function __construct()
    {
        $this->repo = new Repository();
    }
 
    public function GetAllAllergenes() {
        return $this->repo->getAllAllergenes();
        
    }

}