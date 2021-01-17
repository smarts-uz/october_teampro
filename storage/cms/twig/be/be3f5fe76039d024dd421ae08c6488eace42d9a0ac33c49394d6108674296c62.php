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

/* D:\OpenServer\domains\localhost\team/themes/thebakerdev-zenii/partials/testimonial.htm */
class __TwigTemplate_49d1684530bd923aa34dd3a66dd4b1a202d8fc733e3d1329b4253efc3a0d729f extends \Twig\Template
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
        $tags = array("if" => 9, "for" => 10);
        $filters = array("escape" => 3, "length" => 9, "media" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 'media'],
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
        echo "<section id=\"testimonials\" class=\"testimonials container section mx-auto\">
    <div class=\"w-full md:w-1/2 pl-0 md:pl-16 text-center md:text-left\">
        <h2 class=\"w-full md:w-3/4 font-bold text-5xl leading-none mb-6\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 3), "testimonial_title", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h2>
        <p class=\"w-full md:w-3/4\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "testimonial_description", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</p>
    </div>
    <div class=\"w-full md:w-1/2 pt-12 md:pt-0\">
        <div class=\"testimonial__slider\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
            <div class=\"glider\">
                ";
        // line 9
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "testimonials", [], "any", false, false, true, 9)) > 0)) {
            // line 10
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "testimonials", [], "any", false, false, true, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                echo " 
                    <div class=\"testimonial\">
                        <div class=\"testimonial__content\">
                            <img src=\"";
                // line 13
                echo ((twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, true, 13)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, true, 13), 13, $this->source))) : ("https://i.pravatar.cc/100?img=8"));
                echo "\" alt=\"Customer Testimonial Image\" class=\"testimonial__image\">
                            <strong class=\"testimonial__name\">";
                // line 14
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</strong>
                            <p class=\"testimonial__company text-secondary mb-4\">";
                // line 15
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "company", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "</p>
                            <em class=\"testimonial__comment text-sm\">";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "comment", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</em>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                ";
        } else {
            // line 21
            echo "                    <div class=\"testimonial\">
                        <div class=\"testimonial__content\">
                            <img src=\"";
            // line 23
            echo ((twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "image", [], "any", false, false, true, 23)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "image", [], "any", false, false, true, 23), 23, $this->source))) : ("https://i.pravatar.cc/100?img=8"));
            echo "\" alt=\"Customer Testimonial Image\" class=\"testimonial__image\">
                            <strong class=\"testimonial__name\">John Doe</strong>
                            <p class=\"testimonial__company text-secondary mb-4\">The Company</p>
                            <em class=\"testimonial__comment text-sm\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis debitis assumenda iure ad voluptatibus cum dicta iusto iste est eveniet.</em>
                        </div>
                    </div>
                ";
        }
        // line 30
        echo "            </div>
            <button class=\"glider-prev material-icons\">keyboard_arrow_left</button>
            <button class=\"glider-next material-icons\">keyboard_arrow_right</button> 
            <div class=\"glider__dots\"></div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/testimonial.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  118 => 23,  114 => 21,  111 => 20,  101 => 16,  97 => 15,  93 => 14,  89 => 13,  80 => 10,  78 => 9,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"testimonials\" class=\"testimonials container section mx-auto\">
    <div class=\"w-full md:w-1/2 pl-0 md:pl-16 text-center md:text-left\">
        <h2 class=\"w-full md:w-3/4 font-bold text-5xl leading-none mb-6\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.testimonial_title }}</h2>
        <p class=\"w-full md:w-3/4\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.testimonial_description }}</p>
    </div>
    <div class=\"w-full md:w-1/2 pt-12 md:pt-0\">
        <div class=\"testimonial__slider\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
            <div class=\"glider\">
                {% if (this.theme.testimonials|length > 0) %}
                    {% for testimonial in this.theme.testimonials %} 
                    <div class=\"testimonial\">
                        <div class=\"testimonial__content\">
                            <img src=\"{{ testimonial.image ? testimonial.image|media : 'https://i.pravatar.cc/100?img=8' }}\" alt=\"Customer Testimonial Image\" class=\"testimonial__image\">
                            <strong class=\"testimonial__name\">{{ testimonial.name }}</strong>
                            <p class=\"testimonial__company text-secondary mb-4\">{{ testimonial.company }}</p>
                            <em class=\"testimonial__comment text-sm\">{{ testimonial.comment }}</em>
                        </div>
                    </div>
                    {% endfor %}
                {% else %}
                    <div class=\"testimonial\">
                        <div class=\"testimonial__content\">
                            <img src=\"{{ testimonial.image ? testimonial.image|media : 'https://i.pravatar.cc/100?img=8' }}\" alt=\"Customer Testimonial Image\" class=\"testimonial__image\">
                            <strong class=\"testimonial__name\">John Doe</strong>
                            <p class=\"testimonial__company text-secondary mb-4\">The Company</p>
                            <em class=\"testimonial__comment text-sm\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis debitis assumenda iure ad voluptatibus cum dicta iusto iste est eveniet.</em>
                        </div>
                    </div>
                {% endif %}
            </div>
            <button class=\"glider-prev material-icons\">keyboard_arrow_left</button>
            <button class=\"glider-next material-icons\">keyboard_arrow_right</button> 
            <div class=\"glider__dots\"></div>
        </div>
    </div>
</section>", "D:\\OpenServer\\domains\\localhost\\team/themes/thebakerdev-zenii/partials/testimonial.htm", "");
    }
}
