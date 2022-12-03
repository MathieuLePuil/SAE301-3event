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
        echo "    <input type=\"text\" id=\"search\">
    <div class=\"concerts\">
        <h2>Concerts</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide1\">
                <div class=\"card-wrapper swiper-wrapper\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concert"]) || array_key_exists("concert", $context) ? $context["concert"] : (function () { throw new RuntimeError('Variable "concert" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "                        <div class=\"card swiper-slide\">
                            <div class=\"image-content\">
                                <span class=\"overlay\"></span>

                                <div class=\"card-image\">
                                    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
            echo "\" alt=\"\" class=\"card-img\">
                                </div>
                            </div>

                            <div class=\"card-content\">
                                <h2 class=\"name\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "manifTitre", [], "any", false, false, false, 23), "html", null, true);
            echo "</h2>
                                <p class=\"description\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "manifDescription", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>

                                <button class=\"button\">Réserver</button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </div>
            </div>

            <div class=\"swiper-button-next swiper-button-next1 swiper-navBtn\"></div>
            <div class=\"swiper-button-prev swiper-button-prev1 swiper-navBtn\"></div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </div>
    <div class=\"spectacle\">
        <h2>Concerts</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide1\">
                <div class=\"card-wrapper swiper-wrapper\">
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spectacle"]) || array_key_exists("spectacle", $context) ? $context["spectacle"] : (function () { throw new RuntimeError('Variable "spectacle" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "                        <div class=\"card swiper-slide\">
                            <div class=\"image-content\">
                                <span class=\"overlay\"></span>

                                <div class=\"card-image\">
                                    <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
            echo "\" alt=\"\" class=\"card-img\">
                                </div>
                            </div>

                            <div class=\"card-content\">
                                <h2 class=\"name\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "manifTitre", [], "any", false, false, false, 54), "html", null, true);
            echo "</h2>
                                <p class=\"description\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "manifDescription", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>

                                <button class=\"button\">Réserver</button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </div>
            </div>

            <div class=\"swiper-button-next swiper-button-next1 swiper-navBtn\"></div>
            <div class=\"swiper-button-prev swiper-button-prev1 swiper-navBtn\"></div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </div>
    <div class=\"football\">
        <h2>Concerts</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide1\">
                <div class=\"card-wrapper swiper-wrapper\">
                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["football"]) || array_key_exists("football", $context) ? $context["football"] : (function () { throw new RuntimeError('Variable "football" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 75
            echo "                        <div class=\"card swiper-slide\">
                            <div class=\"image-content\">
                                <span class=\"overlay\"></span>

                                <div class=\"card-image\">
                                    <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
            echo "\" alt=\"\" class=\"card-img\">
                                </div>
                            </div>

                            <div class=\"card-content\">
                                <h2 class=\"name\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "manifTitre", [], "any", false, false, false, 85), "html", null, true);
            echo "</h2>
                                <p class=\"description\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "manifDescription", [], "any", false, false, false, 86), "html", null, true);
            echo "</p>

                                <button class=\"button\">Réserver</button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                </div>
            </div>

            <div class=\"swiper-button-next swiper-button-next1 swiper-navBtn\"></div>
            <div class=\"swiper-button-prev swiper-button-prev1 swiper-navBtn\"></div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </div>

    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/swiper.js"), "html", null, true);
        echo "\"></script>
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
        return array (  246 => 102,  242 => 101,  231 => 92,  219 => 86,  215 => 85,  207 => 80,  200 => 75,  196 => 74,  181 => 61,  169 => 55,  165 => 54,  157 => 49,  150 => 44,  146 => 43,  131 => 30,  119 => 24,  115 => 23,  107 => 18,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Programmation{% endblock %}

{% block body %}
    <input type=\"text\" id=\"search\">
    <div class=\"concerts\">
        <h2>Concerts</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide1\">
                <div class=\"card-wrapper swiper-wrapper\">
                    {% for i in concert %}
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
    <div class=\"spectacle\">
        <h2>Concerts</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide1\">
                <div class=\"card-wrapper swiper-wrapper\">
                    {% for i in spectacle %}
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
    <div class=\"football\">
        <h2>Concerts</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide1\">
                <div class=\"card-wrapper swiper-wrapper\">
                    {% for i in football %}
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
{% endblock %}
", "programmation/index.html.twig", "C:\\Users\\Evan\\Documents\\GitHub\\SAE301-3event\\templates\\programmation\\index.html.twig");
    }
}
