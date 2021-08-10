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

/* play.twig */
class __TwigTemplate_b82d2c103fdaaa432b458ce01fc9d3da9ef81af78fcbb9b4273bedd9b50eb6d1 extends Template
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
        $this->parent = $this->loadTemplate("/layout.twig", "play.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\" href=\"/public/css/play.css\">
";
    }

    // line 6
    public function block_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<!-- ***** Welcome Area Start ***** -->
<main>




  <div class=\"welcome-area\" id=\"welcome\">
    <h1>Welcome ";
        // line 14
        echo twig_escape_filter($this->env, ($context["userName"] ?? null), "html", null, true);
        echo ",  to the test page </h1>

  </div>



</main>
";
    }

    public function getTemplateName()
    {
        return "play.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  60 => 7,  56 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "play.twig", "/Users/danielefusari/Desktop/Projects/Powered_By_Fusari/public/play.twig");
    }
}
