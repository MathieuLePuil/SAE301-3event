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

/* index/index.html.twig */
class __TwigTemplate_446ad6f2daf883d60425724f8e35053d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <div class=\"next-event\">
        <h2>PROCHAINS ÉVÉNEMENTS</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide4\">
                <div class=\"card-wrapper swiper-wrapper\">
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
        echo "\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">Rammstein</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
        echo "\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>
                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
        echo "\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
        echo "\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
        echo "\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/affiche/affiche.png"), "html", null, true);
        echo "\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"swiper-button-next swiper-button-next4 swiper-navBtn\"></div>
            <div class=\"swiper-button-prev swiper-button-prev4 swiper-navBtn\"></div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </div>
    <div class=\"backhomebutton\">
            <div class=\"back_home\">
                <a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation");
        echo "?id_event=1\">VOIR PLUS</a>
            </div>
    </div>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/swiper.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 120,  224 => 119,  218 => 116,  194 => 95,  175 => 79,  156 => 63,  137 => 47,  119 => 32,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <div class=\"next-event\">
        <h2>PROCHAINS ÉVÉNEMENTS</h2>
        <div class=\"slide-container swiper\">
            <div class=\"slide-content slide4\">
                <div class=\"card-wrapper swiper-wrapper\">
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">Rammstein</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>
                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                    <div class=\"card swiper-slide\">
                        <div class=\"image-content\">
                            <span class=\"overlay\"></span>

                            <div class=\"card-image\">
                                <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"\" class=\"card-img\">
                            </div>
                        </div>

                        <div class=\"card-content\">
                            <h2 class=\"name\">David Dell</h2>
                            <p class=\"description\">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class=\"button\">Réserver</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"swiper-button-next swiper-button-next4 swiper-navBtn\"></div>
            <div class=\"swiper-button-prev swiper-button-prev4 swiper-navBtn\"></div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </div>
    <div class=\"backhomebutton\">
            <div class=\"back_home\">
                <a href=\"{{ path('app_programmation') }}?id_event=1\">VOIR PLUS</a>
            </div>
    </div>
    <script src=\"{{ asset('js/swiper-bundle.min.js') }}\"></script>
    <script src=\"{{ asset('js/swiper.js') }}\"></script>
{% endblock %}
", "index/index.html.twig", "C:\\Users\\Evan\\Documents\\GitHub\\SAE301-3event\\templates\\index\\index.html.twig");
    }
}
