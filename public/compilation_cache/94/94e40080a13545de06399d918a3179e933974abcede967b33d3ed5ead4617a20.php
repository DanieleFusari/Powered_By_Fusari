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

/* /home.twig */
class __TwigTemplate_4777e1051a2d15bd23a1d89e007fb5c4f8ac543fa5ab7bc1488fbfcacd807e31 extends Template
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
        $this->parent = $this->loadTemplate("/layout.twig", "/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\" href=\"/public/css/home.css\">
";
    }

    // line 5
    public function block_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<!-- ***** Welcome Area Start ***** -->

<div class=\"welcome-area\" id=\"welcome\">

    <!-- ***** Header Text Start ***** -->
    <div class=\"header-text\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"left-text col-lg-6 col-md-6 col-sm-12 col-xs-12\" data-scroll-reveal=\"enter left move 30px over 0.6s after 0.4s\">
                  ";
        // line 15
        if (($context["auth"] ?? null)) {
            // line 16
            echo "                      <h3 class=\"logwell\">Welcome ";
            echo twig_escape_filter($this->env, ($context["userName"] ?? null), "html", null, true);
            echo "</h3>
                  ";
        } else {
            // line 18
            echo "                      <h3 class=\"logwell\">Please Log In</h3>
                  ";
        }
        // line 20
        echo "                    <h1>Powered_By_Fusari <strong>An Easy FrameWork</strong></h1>
                    <p>This is a simple FrameWork,  Created to standerdise all my projects.
                    <br>
                    <strong> Support packages </strong> Twig <br>
                    </p>
                    <a href=\"https://danielefusari.co.uk/#about\" class=\"main-button-slider\">Find Out More</a>
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" data-scroll-reveal=\"enter right move 30px over 0.6s after 0.4s\">
                    <img src=\"/public/images/slider-icon.png\" class=\"rounded img-fluid d-block mx-auto\" alt=\"First Vector Graphic\">
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->
";
    }

    public function getTemplateName()
    {
        return "/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  79 => 18,  73 => 16,  71 => 15,  60 => 6,  56 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home.twig", "/Users/danielefusari/Desktop/Projects/Powered_By_Fusari/public/home.twig");
    }
}
