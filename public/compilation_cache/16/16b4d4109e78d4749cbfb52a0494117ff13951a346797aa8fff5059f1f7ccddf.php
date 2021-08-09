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

/* /test.twig */
class __TwigTemplate_42a58b85ac45da388fd7b312ef20e0a4144c028d9838a8a2e5c75fb5adc9d18d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'start' => [$this, 'block_start'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/layout.twig", "/test.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<link rel=\"stylesheet\" type=\"text/css\"  href=\"/public/css/test.css\">
";
    }

    // line 7
    public function block_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<p class=\"red\"> Hello word </p>  
";
    }

    public function getTemplateName()
    {
        return "/test.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/test.twig", "/Users/danielefusari/Desktop/Projects/Powered_By_Fusari/public/test.twig");
    }
}
