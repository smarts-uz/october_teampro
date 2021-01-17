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

/* D:\OpenServer\domains\localhost\team/themes/thebakerdev-zenii/partials/hero.htm */
class __TwigTemplate_e62c718898540a4b038bf32316fa726d274cddb892df392633566dd3c060f413 extends \Twig\Template
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
        $filters = array("escape" => 4, "media" => 11, "theme" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'media', 'theme'],
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
        echo "<section class=\"hero container section mx-auto\">
    <div class=\"hero__tagline\">
        <div class=\"hero__tagline-content-wrap\">
            <h2 class=\"hero__tagline-title\" data-sal=\"fade\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "hero_title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
            <p class=\"hero__tagline-subtitle\" data-sal=\"fade\" data-sal-delay=\"100\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "hero_subtitle", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</p>
            <p class=\"hero__tagline-text\" data-sal=\"fade\" data-sal-delay=\"200\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "hero_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "hero_button_url", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\"><button class=\"btn btn--primary mt-8\" data-sal=\"fade\" data-sal-delay=\"300\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "hero_button_text", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</button></a>
        </div>
    </div>
    <div class=\"hero__image\">
        <img src=\"";
        // line 11
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "hero_image", [], "any", false, false, true, 11)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "hero_image", [], "any", false, false, true, 11), 11, $this->source))) : (call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/images/hero.svg"])));
        echo "\" class=\"mx-auto\" alt=\"Hero Image\" data-sal=\"slide-right\" data-sal-delay=\"400\" data-sal-duration=\"500\">
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 7,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero container section mx-auto\">
    <div class=\"hero__tagline\">
        <div class=\"hero__tagline-content-wrap\">
            <h2 class=\"hero__tagline-title\" data-sal=\"fade\">{{ this.theme.hero_title }}</h2>
            <p class=\"hero__tagline-subtitle\" data-sal=\"fade\" data-sal-delay=\"100\">{{ this.theme.hero_subtitle }}</p>
            <p class=\"hero__tagline-text\" data-sal=\"fade\" data-sal-delay=\"200\">{{ this.theme.hero_description }}</p>
            <a href=\"{{ this.theme.hero_button_url }}\"><button class=\"btn btn--primary mt-8\" data-sal=\"fade\" data-sal-delay=\"300\">{{ this.theme.hero_button_text }}</button></a>
        </div>
    </div>
    <div class=\"hero__image\">
        <img src=\"{{ this.theme.hero_image ? this.theme.hero_image|media : 'assets/dist/images/hero.svg'|theme }}\" class=\"mx-auto\" alt=\"Hero Image\" data-sal=\"slide-right\" data-sal-delay=\"400\" data-sal-duration=\"500\">
    </div>
</section>", "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/hero.htm", "");
    }
}
