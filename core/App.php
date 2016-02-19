<?php
namespace core;


use Dotenv\Dotenv;
use general\library\traitlib\SingletonTrait;
use Illuminate\Container\Container;
use storage\model\schema\Schema;

class App extends Container
{
	use SingletonTrait;

    /**
     * @var Config
     */
    public $config;

    /**
     * @var array
     */
    protected $paths = [];

    /**
     * Initialize configuration.
     */
    public function __construct()
    {
        $this->setEnv();
		$this->setupDatabase();
    }



	private function setupEloquent(){

	}


    private function setEnv()
    {
        $this->setupPaths();
        $this->config = new Config();
        $this->config->loadConfigurationFiles(
            $this->paths['config_path'],
            $this->getEnvironment()
        );
    }

    /**
     * Initialize the paths.
     */
    private function setupPaths()
    {
        $this->paths['env_file_path'] = __DIR__ . '/../';
        $this->paths['env_file'] = '.env';
        $this->paths['config_path'] = __DIR__ . '/../config';
    }

    /**
     * Detect the environment. Defaults to `production`.
     *
     * @return string
     */
    private function getEnvironment()
    {
        if (is_file($this->paths['env_file'])) {

            (new Dotenv($this->paths['env_file_path'], $this->paths['env_file']))->load();
        }

        return getenv('ENVIRONMENT') ?: 'production';
    }

	private function setupDatabase(){
		$database    = new Schema();
		$connections = $this->config->get('database');
		foreach ($connections as $name => $config) {
			$database->addConnection($config, $name);
		}

		$database->setAsGlobal();
		$database->bootEloquent();
	}
}