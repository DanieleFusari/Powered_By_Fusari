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

/* /layout.twig */
class __TwigTemplate_48f1a736e9b9f7dedcfaff322b87efda5d2e2de910f2ad827addda41007a1337 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'start' => [$this, 'block_start'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"Powered_By_Fusari\" content=\"\">
    <meta name=\"author\" content=\"Daniele Fusari\">
    <title>Powered_By_Fusari</title>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"/public/css/master.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/font-awesome.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/templatemo-art-factory.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/owl-carousel.css\">
  </head>
  <body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"#\" class=\"logo\">Daniele Fusari</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <li class=\"scroll-to-section\"><a href=\"#welcome\" class=\"active\">Home</a></li>
                            <li class=\"scroll-to-section\"><a href=\"https://danielefusari.co.uk/#about\">About</a></li>
                            <li class=\"scroll-to-section\"><a href=\"https://danielefusari.co.uk/#work\">Projects</a></li>
                            <li class=\"submenu\">
                                <a href=\"javascript:;\">Drop Down</a>
                                <ul>
                                    <li><a href=\"\">About Us</a></li>
                                    <li><a href=\"\">Features</a></li>
                                    <li><a href=\"\">FAQ's</a></li>
                                    <li><a href=\"\">Blog</a></li>
                                </ul>
                            </li>
                            <li class=\"scroll-to-section\"><a href=\"https://danielefusari.co.uk/#contact\">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

";
        // line 66
        $this->displayBlock('start', $context, $blocks);
        // line 68
        echo "

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-12 col-sm-12\">
                    <p class=\"copyright\">Copyright &copy; 2021 Powered_By_Fusari

                . Design: <a rel=\"nofollow\" href=\"https://templatemo.com\">Daniele Fusari</a></p>
                </div>
                <div class=\"col-lg-5 col-md-12 col-sm-12\">
                    <ul class=\"social\">
                        <li><a target=\"_blank\" href=\"https://www.linkedin.com/in/daniele-fusarid/\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a target=\"_blank\" href=\"https://github.com/DanieleFusari\"><i class=\"fa fa-rss\"></i></a></li>
                        <li><a target=\"_blank\" href=\"https://danielefusari.co.uk/\"><i class=\"fa fa-dribbble\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


<!-- My Javascript -->
  <script src=\"/public/js/script.js\" type=\"text/javascript\"></script>

  <!-- jQuery -->
  <script src=\"/public/js/jquery-2.1.0.min.js\"></script>

  <!-- Bootstrap -->
  <script src=\"/public/js/popper.js\"></script>
  <script src=\"/public/js/bootstrap.min.js\"></script>

  <!-- Plugins -->
  <script src=\"/public/js/owl-carousel.js\"></script>
  <script src=\"/public/js/scrollreveal.min.js\"></script>
  <script src=\"/public/js/waypoints.min.js\"></script>
  <script src=\"/public/js/jquery.counterup.min.js\"></script>
  <script src=\"/public/js/imgfix.min.js\"></script>

  <!-- Global Init -->
  <script src=\"/public/js/custom.js\"></script>

  </body>
</html>
";
    }

    // line 66
    public function block_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "/layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  156 => 66,  107 => 68,  105 => 66,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/layout.twig", "/Users/danielefusari/Desktop/Projects/Powered_By_Fusari/public/templates/layout.twig");
    }
}
