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

/* D:\OpenServer\domains\localhost\team/themes/thebakerdev-zenii/partials/services.htm */
class __TwigTemplate_3d68c09e70f77b83779f2fa325dde113512a6a4787051f7546162c28578f04bb extends \Twig\Template
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
        $tags = array("if" => 5, "for" => 6, "set" => 7);
        $filters = array("escape" => 3, "length" => 5, "media" => 11, "theme" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'length', 'media', 'theme'],
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
        echo "<section id=\"services\" class=\"services container section mx-auto\">
    <div>
        <h2 class=\"section__title text-center mb-16\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 3), "service_title", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h2>
        <div class=\"services__items\">
            ";
        // line 5
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "services", [], "any", false, false, true, 5)) > 0)) {
            // line 6
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "services", [], "any", false, false, true, 6));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 7
                echo "                    ";
                $context["index"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 7);
                // line 8
                echo "                    ";
                $context["position"] = (((($context["index"] ?? null) % 2)) ? ("service--left") : ("service--right"));
                // line 9
                echo "                    ";
                $context["default_image"] = (("assets/dist/images/service" . $this->sandbox->ensureToStringAllowed(($context["index"] ?? null), 9, $this->source)) . ".svg");
                // line 10
                echo "                    <div class=\"service ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 10, $this->source), "html", null, true);
                echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                        <img src=\"";
                // line 11
                echo ((twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, true, 11)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, true, 11), 11, $this->source))) : (call_user_func_array($this->env->getFilter('theme')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["default_image"] ?? null), 11, $this->source)])));
                echo "\" class=\"service__image\" alt=\"Service Item\">
                        <h3 class=\"service__title text-primary\">";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "</h3>
                        <p>";
                // line 13
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "</p>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
        } else {
            // line 17
            echo "                <div class=\"service service--left\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <img src=\"";
            // line 18
            echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/images/service1.svg"]);
            echo "\" class=\"service__image\" alt=\"Service Item\">
                    <h3 class=\"service__title text-primary\">Service 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fuga exercitationem deserunt, at soluta aliquam?</p>
                </div>
                <div class=\"service service--right\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <img src=\"";
            // line 23
            echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/dist/images/service2.svg"]);
            echo "\" class=\"service__image\" alt=\"Service Item\">
                    <h3 class=\"service__title text-primary\">Service 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fuga exercitationem deserunt, at soluta aliquam?</p>
                </div>
            ";
        }
        // line 28
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 28,  144 => 23,  136 => 18,  133 => 17,  130 => 16,  113 => 13,  109 => 12,  105 => 11,  100 => 10,  97 => 9,  94 => 8,  91 => 7,  73 => 6,  71 => 5,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"services\" class=\"services container section mx-auto\">
    <div>
        <h2 class=\"section__title text-center mb-16\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.service_title }}</h2>
        <div class=\"services__items\">
            {% if this.theme.services|length > 0 %}
                {% for service in this.theme.services %}
                    {% set index = loop.index %}
                    {% set position = index % 2 ? 'service--left': 'service--right'  %}
                    {% set default_image = 'assets/dist/images/service'~index~'.svg' %}
                    <div class=\"service {{ position }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                        <img src=\"{{ service.image ? service.image|media : default_image | theme }}\" class=\"service__image\" alt=\"Service Item\">
                        <h3 class=\"service__title text-primary\">{{ service.title }}</h3>
                        <p>{{ service.description }}</p>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"service service--left\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <img src=\"{{ 'assets/dist/images/service1.svg'| theme }}\" class=\"service__image\" alt=\"Service Item\">
                    <h3 class=\"service__title text-primary\">Service 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fuga exercitationem deserunt, at soluta aliquam?</p>
                </div>
                <div class=\"service service--right\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <img src=\"{{ 'assets/dist/images/service2.svg'| theme }}\" class=\"service__image\" alt=\"Service Item\">
                    <h3 class=\"service__title text-primary\">Service 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fuga exercitationem deserunt, at soluta aliquam?</p>
                </div>
            {% endif %}
        </div>
    </div>
</section>", "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/services.htm", "");
    }
}
