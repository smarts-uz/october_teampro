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

/* D:\OpenServer\domains\localhost\team/themes/thebakerdev-zenii/partials/contact.htm */
class __TwigTemplate_9a55c43dea544c2f10a400466bf421549cf59126de5c4a0b6a826ccc67697e26 extends \Twig\Template
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
        $filters = array("escape" => 3, "media" => 22, "theme" => 22);
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
        echo "<section id=\"contact\" class=\"contact container section mx-auto\">
    <div class=\"contact__content\">
        <h2 class=\"section__title\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 3), "contact_title", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h2>
        <p class=\"mb-4 w-full md:w-3/4\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "contact_description", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</p>
        <form id=\"contact_form\" class=\"w-full md:w-3/4\" novalidate data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\" data-sal-delay=\"100\">
            <div class=\"input-group mb-2\">
                <label for=\"name\">Name</label>
                <input type=\"text\" id=\"name\" class=\"input\" name=\"name\">
            </div>
            <div class=\"input-group mb-2\">
                <label for=\"email\">Email</label>
                <input type=\"email\" id=\"email\" class=\"input\" name=\"email\">
            </div>
            <div class=\"input-group\">
                <label for=\"message\">Message</label>
                <textarea id=\"message\" class=\"h-20\" name=\"message\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn--primary mt-8\">Send</button>
        </form>
    </div>
    <div class=\"contact__image\">
        <img src=\"";
        // line 22
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 22), "contact_image", [], "any", false, false, true, 22)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 22), "contact_image", [], "any", false, false, true, 22), 22, $this->source))) : (call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/images/contact.svg"])));
        echo "\" class=\"mx-auto\" alt=\"Contact Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
    </div> 
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\" class=\"contact container section mx-auto\">
    <div class=\"contact__content\">
        <h2 class=\"section__title\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.contact_title }}</h2>
        <p class=\"mb-4 w-full md:w-3/4\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.contact_description }}</p>
        <form id=\"contact_form\" class=\"w-full md:w-3/4\" novalidate data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\" data-sal-delay=\"100\">
            <div class=\"input-group mb-2\">
                <label for=\"name\">Name</label>
                <input type=\"text\" id=\"name\" class=\"input\" name=\"name\">
            </div>
            <div class=\"input-group mb-2\">
                <label for=\"email\">Email</label>
                <input type=\"email\" id=\"email\" class=\"input\" name=\"email\">
            </div>
            <div class=\"input-group\">
                <label for=\"message\">Message</label>
                <textarea id=\"message\" class=\"h-20\" name=\"message\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn--primary mt-8\">Send</button>
        </form>
    </div>
    <div class=\"contact__image\">
        <img src=\"{{ this.theme.contact_image ? this.theme.contact_image|media : 'assets/dist/images/contact.svg'|theme }}\" class=\"mx-auto\" alt=\"Contact Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
    </div> 
</section>", "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/contact.htm", "");
    }
}
