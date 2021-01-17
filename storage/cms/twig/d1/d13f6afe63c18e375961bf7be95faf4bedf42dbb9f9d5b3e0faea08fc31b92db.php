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

/* D:\OpenServer\domains\localhost\team/themes/thebakerdev-zenii/partials/footer.htm */
class __TwigTemplate_a20cfd1334faf9a5aeb82a0d9f59325e63ab8aebbc78d243514758d13ca70f58 extends \Twig\Template
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
        $filters = array("escape" => 4, "theme" => 45);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'theme'],
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
        echo "<footer class=\"footer bg-tertiary text-white\">
    <div class=\"container section mx-auto py-10\">
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "company_contact_title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "company_address_icon", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "company_address", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</p>
                        </div> 
                    </div>
                </li>
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 16), "company_contact_number_icon", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 18), "company_contact_number", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 24), "company_email_icon", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 26), "company_email", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">Menu Links</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"#about\">About</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"#services\">Services</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"#contact\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 41), "social_title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "</h4>
            <ul class=\"flex text-sm\">
                <li class=\"mb-2 mr-4\">
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 44), "social_facebook", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"";
        // line 45
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/images/facebook.svg"]);
        echo "\" alt=\"Twitter Icon\">
                    </a>
                </li>
                <li class=\"mb-2 mr-4\">
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 49), "social_twitter", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"";
        // line 50
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/images/twitter.svg"]);
        echo "\" alt=\"Twitter Icon\">
                    </a>
                </li>
                <li class=\"mb-2 mr-4\">
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 54), "social_instagram", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"";
        // line 55
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/images/instagram.svg"]);
        echo "\" alt=\"Instagram Icon\">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 55,  153 => 54,  146 => 50,  142 => 49,  135 => 45,  131 => 44,  125 => 41,  107 => 26,  102 => 24,  93 => 18,  88 => 16,  79 => 10,  74 => 8,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer bg-tertiary text-white\">
    <div class=\"container section mx-auto py-10\">
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">{{this.theme.company_contact_title }}</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">{{ this.theme.company_address_icon }}</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">{{ this.theme.company_address }}</p>
                        </div> 
                    </div>
                </li>
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">{{ this.theme.company_contact_number_icon }}</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">{{ this.theme.company_contact_number }}</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">{{ this.theme.company_email_icon }}</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">{{ this.theme.company_email }}</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">Menu Links</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"#about\">About</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"#services\">Services</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"#contact\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">{{ this.theme.social_title }}</h4>
            <ul class=\"flex text-sm\">
                <li class=\"mb-2 mr-4\">
                    <a href=\"{{ this.theme.social_facebook }}\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"{{ 'assets/dist/images/facebook.svg'|theme }}\" alt=\"Twitter Icon\">
                    </a>
                </li>
                <li class=\"mb-2 mr-4\">
                    <a href=\"{{ this.theme.social_twitter }}\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"{{ 'assets/dist/images/twitter.svg'|theme }}\" alt=\"Twitter Icon\">
                    </a>
                </li>
                <li class=\"mb-2 mr-4\">
                    <a href=\"{{ this.theme.social_instagram }}\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"{{ 'assets/dist/images/instagram.svg'|theme }}\" alt=\"Instagram Icon\">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>", "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/footer.htm", "");
    }
}
