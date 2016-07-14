<?php
/**
 * User: dongww
 * Date: 2016/7/14
 * Time: 20:28
 */
namespace Dddml\Generator;

use Twig_Environment;
use Twig_Loader_Filesystem;

class Generator
{
    /** @var  Twig_Environment */
    private $twig;

    public function __construct(Twig_Environment $twig = null)
    {
        if($twig){
            $this->twig = $twig;
        }else{
            $loader = new Twig_Loader_Filesystem(__DIR__ . '/Template');
            $this->twig   = new Twig_Environment($loader, []);
        }
    }
    
    /**
     * @return Twig_Environment
     */
    public function getTwig()
    {
        return $this->twig;
    }

    /**
     * @param Twig_Environment $twig
     */
    public function setTwig($twig)
    {
        $this->twig = $twig;
    }
}
