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

/* login.twig */
class __TwigTemplate_c2eaff85faac7729a422b3e2e6ab82d41772c145775c9611ffe6b178d41512f8 extends Template
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
        $this->parent = $this->loadTemplate("/layout.twig", "login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\" href=\"/public/css/login.css\">
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
      <form class=\"form\" action=\"login\" method=\"post\">

        <label for=\"name\">User Name</label>
        <input id=\"name\" type=\"text\" name=\"userName\" value=\"DanieleFusari\">

        <label for=\"email\">Email</label>
        <input id=\"email\" type=\"email\" name=\"email\" value=\"daniele@fusari.co.uk\">

        <label for=\"password\">Password</label>
        <input id=\"password\" type=\"password\" name=\"password\" value=\"Fitty\">

        <input type=\"submit\" value=\"Login\">
      </form>
  </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.twig", "/Users/danielefusari/Desktop/Projects/Powered_By_Fusari/public/login.twig");
    }
}
