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

/* D:\OpenServer\domains\localhost\team/themes/thebakerdev-zenii/partials/pricing.htm */
class __TwigTemplate_1d38e68455b3f51d384ce1d1b6fe4c47081f9a05099560c05f145bc0d4b565ae extends \Twig\Template
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
        $tags = array("if" => 5, "for" => 6);
        $filters = array("escape" => 3, "length" => 5, "split" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 'split'],
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
        echo "<section id=\"pricing\" class=\"pricing section bg-gray\">
    <div class=\"container mx-auto\">
        <h2 class=\"section__title text-center mb-16\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 3), "pricing_title", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h2>
        <div class=\"pricing__items\">
            ";
        // line 5
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "pricing_plans", [], "any", false, false, true, 5)) > 0)) {
            // line 6
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "pricing_plans", [], "any", false, false, true, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 7
                echo "                    <div class=\"pricing__item ";
                echo ((twig_get_attribute($this->env, $this->source, $context["plan"], "highlighted", [], "any", false, false, true, 7)) ? ("pricing__item--active") : (""));
                echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                        <div class=\"pricing__item-content\">
                            <h3 class=\"pricing__item-title\">";
                // line 9
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plan"], "plan_title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "</h3>
                            <p class=\"pricing__item-price\"><span>";
                // line 10
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plan"], "currency", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "</span><span>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plan"], "price", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "</span>/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plan"], "plan_type", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "</p>
                            <ul class=\"pricing__item-features\">
                                ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "plan_features", [], "any", false, false, true, 12), ","));
                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                    // line 13
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["feature"], 13, $this->source), "html", null, true);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo " 
                            </ul>
                        </div>
                        <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plan"], "button_url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\" class=\"btn ";
                echo ((twig_get_attribute($this->env, $this->source, $context["plan"], "highlighted", [], "any", false, false, true, 17)) ? ("") : ("btn--primary"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plan"], "button_text", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "                <div class=\"pricing__item\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">Basic</h3>
                        <p class=\"pricing__item-price\"><span>\$</span><span>12</span>/mo</p>
                        <ul class=\"pricing__item-features\">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem, ipsum dolor.</li>
                        </ul>
                    </div>
                    <a href=\"#\" class=\"btn btn--primary\">Subscribe</a>
                </div>
                <div class=\"pricing__item pricing__item--active\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">Advanced</h3>
                        <p class=\"pricing__item-price\"><span>\$</span><span>30</span>/mo</p>
                        <ul class=\"pricing__item-features\">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem, ipsum dolor.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem, ipsum dolor.</li>
                        </ul>
                    </div>
                    <a href=\"#\" class=\"btn\">Subscribe</a>
                </div>
            ";
        }
        // line 47
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/pricing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 47,  131 => 21,  128 => 20,  115 => 17,  110 => 14,  101 => 13,  97 => 12,  88 => 10,  84 => 9,  78 => 7,  73 => 6,  71 => 5,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"pricing\" class=\"pricing section bg-gray\">
    <div class=\"container mx-auto\">
        <h2 class=\"section__title text-center mb-16\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.pricing_title }}</h2>
        <div class=\"pricing__items\">
            {% if (this.theme.pricing_plans|length > 0) %}
                {% for plan in this.theme.pricing_plans %}
                    <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                        <div class=\"pricing__item-content\">
                            <h3 class=\"pricing__item-title\">{{ plan.plan_title }}</h3>
                            <p class=\"pricing__item-price\"><span>{{ plan.currency }}</span><span>{{ plan.price }}</span>/{{ plan.plan_type }}</p>
                            <ul class=\"pricing__item-features\">
                                {% for feature in plan.plan_features|split(',') %}
                                    <li>{{ feature }}</li>
                                {% endfor %} 
                            </ul>
                        </div>
                        <a href=\"{{ plan.button_url }}\" class=\"btn {{ plan.highlighted ? '': 'btn--primary'}}\">{{ plan.button_text }}</a>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"pricing__item\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">Basic</h3>
                        <p class=\"pricing__item-price\"><span>\$</span><span>12</span>/mo</p>
                        <ul class=\"pricing__item-features\">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem, ipsum dolor.</li>
                        </ul>
                    </div>
                    <a href=\"#\" class=\"btn btn--primary\">Subscribe</a>
                </div>
                <div class=\"pricing__item pricing__item--active\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">Advanced</h3>
                        <p class=\"pricing__item-price\"><span>\$</span><span>30</span>/mo</p>
                        <ul class=\"pricing__item-features\">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem, ipsum dolor.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem, ipsum dolor.</li>
                        </ul>
                    </div>
                    <a href=\"#\" class=\"btn\">Subscribe</a>
                </div>
            {% endif %}
        </div>
    </div>
</section>", "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/pricing.htm", "");
    }
}
