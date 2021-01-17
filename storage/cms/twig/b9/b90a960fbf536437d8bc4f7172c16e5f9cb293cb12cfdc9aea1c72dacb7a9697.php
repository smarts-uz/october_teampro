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

/* D:\OpenServer\domains\localhost\team/themes/thebakerdev-zenii/partials/header.htm */
class __TwigTemplate_c045974a6097d39124323c4f39216914fdead3121a07abcb616f5041f90765a6 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("theme" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"header container\">
    <a href=\"/\"><img src=\"";
        // line 2
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/images/logo.svg"]);
        echo "\" alt=\"logo\" class=\"logo\"></a>
    <nav class=\"nav\">
        <h2 class=\"hidden\">Top navigation</h2>
        <ul id=\"nav_menu\" class=\"nav__menu\">
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#services\">Services</a></li>
            <li><a href=\"#pricing\">Pricing</a></li>
            <li><a href=\"#contact\">Contact</a></li>
        </ul>
        <button id=\"nav_menu_button\" class=\"nav__menu-button\">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header container\">
    <a href=\"/\"><img src=\"{{ 'assets/dist/images/logo.svg'|theme }}\" alt=\"logo\" class=\"logo\"></a>
    <nav class=\"nav\">
        <h2 class=\"hidden\">Top navigation</h2>
        <ul id=\"nav_menu\" class=\"nav__menu\">
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#services\">Services</a></li>
            <li><a href=\"#pricing\">Pricing</a></li>
            <li><a href=\"#contact\">Contact</a></li>
        </ul>
        <button id=\"nav_menu_button\" class=\"nav__menu-button\">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
</header>", "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/header.htm", "");
    }
}
