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

/* home.twig */
class __TwigTemplate_4777e1051a2d15bd23a1d89e007fb5c4f8ac543fa5ab7bc1488fbfcacd807e31 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("/layout.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<!-- ***** Welcome Area Start ***** -->
<div class=\"welcome-area\" id=\"welcome\">

    <!-- ***** Header Text Start ***** -->
    <div class=\"header-text\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"left-text col-lg-6 col-md-6 col-sm-12 col-xs-12\" data-scroll-reveal=\"enter left move 30px over 0.6s after 0.4s\">
                    <h1>Powered_By_Fusari <strong>An Easy FrameWork</strong></h1>
                    <p>This is a simple FrameWork,  Created to standerdise all my projects.
                    <br>
                    <strong>Support packages </strong> Twig<br>
                    </p>
                    <a href=\"#about\" class=\"main-button-slider\">Find Out More ";
        // line 17
        (((array_key_exists("name", $context) &&  !(null === ($context["name"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true))) : (print ("Dan")));
        echo "</a>
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
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.twig", "/Users/danielefusari/Desktop/Projects/Powered_By_Fusari/public/home.twig");
    }
}
