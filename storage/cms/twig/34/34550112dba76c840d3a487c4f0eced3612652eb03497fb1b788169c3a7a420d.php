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

/* D:\OpenServer\domains\localhost\team/themes/thebakerdev-zenii/partials/meta.htm */
class __TwigTemplate_ceec0b1e3e1f8e7c447b6a39064fa2ea68afb5944bfb1ac10583e006cc0aa3ca extends \Twig\Template
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
        $tags = array("if" => 12);
        $filters = array("escape" => 4, "default" => 4, "theme" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'default', 'theme'],
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
        echo "<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 4), "meta_description", [], "any", true, true, true, 4)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 4), "meta_description", [], "any", false, false, true, 4), 4, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "description", [], "any", false, false, true, 4), 4, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "description", [], "any", false, false, true, 4))), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "keywords", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "website_author", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
<title>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</title>
<link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "website_url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" />
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/images/favicon.png"]);
        echo "\" />
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700|Rubik:400,700&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "disable_scroll_animation", [], "any", false, false, true, 12) != "1")) {
            // line 13
            echo "    <link rel=\"stylesheet\" href=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 13), "override_color", [], "any", false, false, true, 13)) ? (call_user_func_array($this->env->getFilter('theme')->getCallable(), [[0 => "assets/dist/css/style.css", 1 => "assets/dist/css/sal.css", 2 => "assets/src/scss/style.scss"]])) : (call_user_func_array($this->env->getFilter('theme')->getCallable(), [[0 => "assets/dist/css/style.css", 1 => "assets/dist/css/sal.css"]])));
            echo "\">
";
        } else {
            // line 15
            echo "    <link rel=\"stylesheet\" href=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 15), "override_color", [], "any", false, false, true, 15)) ? (call_user_func_array($this->env->getFilter('theme')->getCallable(), [[0 => "assets/dist/css/style.css", 1 => "assets/src/scss/style.scss"]])) : (call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/css/style.css"])));
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 15,  95 => 13,  93 => 12,  87 => 9,  83 => 8,  79 => 7,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
<meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
<meta name=\"author\" content=\"{{ this.theme.website_author }}\">
<title>{{ this.page.title }}</title>
<link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/dist/images/favicon.png'|theme }}\" />
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700|Rubik:400,700&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
{% if this.theme.disable_scroll_animation != '1' %}
    <link rel=\"stylesheet\" href=\"{{ this.theme.override_color ? ['assets/dist/css/style.css','assets/dist/css/sal.css','assets/src/scss/style.scss']|theme :['assets/dist/css/style.css','assets/dist/css/sal.css']|theme }}\">
{% else %}
    <link rel=\"stylesheet\" href=\"{{ this.theme.override_color ? ['assets/dist/css/style.css','assets/src/scss/style.scss']|theme :'assets/dist/css/style.css'|theme }}\">
{% endif %}", "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/meta.htm", "");
    }
}
