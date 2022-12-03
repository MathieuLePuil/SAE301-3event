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

/* programmation/index.html.twig */
class __TwigTemplate_d25a1be7da839b02c50676ac9c9c62db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programmation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programmation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "programmation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Programmation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "
";
        // line 18
        echo "    <div class=\"concerts\">
        <h2>Concerts</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide1\">
                <div class=\"card-wrapper swiper-wrapper\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prog"]) || array_key_exists("prog", $context) ? $context["prog"] : (function () { throw new RuntimeError('Variable "prog" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                        <div class=\"card swiper-slide\">
                            <div class=\"image-content\">
                                <span class=\"overlay\"></span>

                                <div class=\"card-image\">
                                    <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
            echo "\" alt=\"\" class=\"card-img\">
                                </div>
                            </div>

                            <div class=\"card-content\">
                                <h2 class=\"name\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "manifTitre", [], "any", false, false, false, 34), "html", null, true);
            echo "</h2>
                                <p class=\"description\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "manifDescription", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>

                                <button class=\"button\">Réserver</button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </div>
            </div>

            <div class=\"swiper-button-next swiper-button-next1 swiper-navBtn\"></div>
            <div class=\"swiper-button-prev swiper-button-prev1 swiper-navBtn\"></div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </div>

    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/swiper.js"), "html", null, true);
        echo "\"></script>

    <input type=\"text\" id=\"search\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "programmation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 51,  146 => 50,  135 => 41,  123 => 35,  119 => 34,  111 => 29,  104 => 24,  100 => 23,  93 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Programmation{% endblock %}

{% block body %}
    {{ dump() }}
{#    <div class=\"prog_box\">#}
{#    {% for i in prog %}#}
{#            <div class=\"prog_card\">#}
{#                <img src=\"{{ asset('images/affiche/' ~ i.manifAffiche ) }}\" alt=\"\">#}
{#                <div class=\"prog_data\">#}
{#                    <p>Date : {{ i.manifDate }}</p>#}
{#                    <a href=\"#\">Réserver</a>#}
{#                </div>#}
{#            </div>#}
{#        {% endfor %}#}
{#    </div>#}
    <div class=\"concerts\">
        <h2>Concerts</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide1\">
                <div class=\"card-wrapper swiper-wrapper\">
                    {% for i in prog %}
                        <div class=\"card swiper-slide\">
                            <div class=\"image-content\">
                                <span class=\"overlay\"></span>

                                <div class=\"card-image\">
                                    <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"\" class=\"card-img\">
                                </div>
                            </div>

                            <div class=\"card-content\">
                                <h2 class=\"name\">{{ i.manifTitre }}</h2>
                                <p class=\"description\">{{ i.manifDescription }}</p>

                                <button class=\"button\">Réserver</button>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <div class=\"swiper-button-next swiper-button-next1 swiper-navBtn\"></div>
            <div class=\"swiper-button-prev swiper-button-prev1 swiper-navBtn\"></div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </div>

    <script src=\"{{ asset('js/swiper-bundle.min.js') }}\"></script>
    <script src=\"{{ asset('js/swiper.js') }}\"></script>

    <input type=\"text\" id=\"search\">
{#    <div id=\"result\"></div>#}
{#        <div class=\"prog_box\" id=\"filter\">#}
{#            {% for i in prog %}#}
{#                <div class=\"prog_card\">#}
{#                    <p><span class=\"\">{{ i.manifTitre }}</span></p>#}
{#                    <a href=\"{{ path('app_event') }}?id_event={{ i.id }}\"><img src=\"{{ asset('images/affiche/' ~ i.manifAffiche ) }}\" alt=\"\"></a>#}
{#                    <div class=\"prog_data\">#}
{#                        <p>Date : {{ i.manifDate }}</p>#}
{#                        <a href=\"{{ path('app_event') }}?id_event={{ i.id }}\">Réserver</a>#}
{#                    </div>#}
{#                </div>#}
{#            {% endfor %}#}
{#        </div>#}
{#</div>#}
{% endblock %}
", "programmation/index.html.twig", "C:\\Users\\Evan\\Documents\\GitHub\\SAE301-3event\\templates\\programmation\\index.html.twig");
    }
}
