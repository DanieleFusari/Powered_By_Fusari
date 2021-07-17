<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* 404.twig */
class __TwigTemplate_da77ca532bfd8fc85c9525730a7464eead66cc6ed280a890cf8bae7368051c3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php require __DIR__ . '/reusable/header.php' ?>
    <main>
      <video id=\"lostVidio\" muted autoplay loop>
        <source src=\"/public/video/lost.mp4\" type=\"video/mp4\">
      </video>
    </main>

<?php require __DIR__ . '/reusable/footer.php' ?>
";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "404.twig", "/Users/danielefusari/Desktop/Projects/Powered_By_Fusari/public/404.twig");
    }
}
