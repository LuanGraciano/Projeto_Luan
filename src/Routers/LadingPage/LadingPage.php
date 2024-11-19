namespace Luan\Clube\Controllers\LandingPage;

use Luan\Clube\Helpers\Template\Loader;
use Luan\Clube\Models\Clubes\Clubes;

class LandingPage
{
    private Loader $template;

    private Clubes $clubes;
    public function __construct() {
        $this->template = new Loader();
        $this->clubes = new Clubes();
    }

    public function execute()
    {
        $this->template->render("ladingPage/ladingPage", false);
        $clubes = $this->clubes->findAll([],"*", 6);
        $this->template->render("ladingPage/ladingPage", false, [
            "clubes" => $clubes
        ]);
    }
}