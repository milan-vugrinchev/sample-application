<?php

namespace App\Factories\ErrorHandlers;

class RepositoryNotFoundException
{
    public function __construct($repositoryName)
    {
        // excetipn for developers
        echo sprintf("<br />\n<b>Fatal Error</b>: Repository not found!<br />\nPlease check the <b>'app/config/factories.php'</b> file for missing key: <b>'%s'</b> under the <b>[repositories]</b> section", $repositoryName);
        echo '<br /><br /><b>app/config/factories.php</b><br /><pre>';
        print_r(include(ROOT . 'app\config\factories.php'));
        exit;
    }
}
