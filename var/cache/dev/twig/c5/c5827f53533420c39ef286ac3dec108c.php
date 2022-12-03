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

/* panier/index.html.twig */
class __TwigTemplate_966db385a9b92f3f021b0946b0bbd393 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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

        echo "Panier";
        
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
        echo "    <div id=\"arianne\">
        <ul>
            <li><a href=\"#\">Panier</a></li>&gt
            <li><a href=\"#\">Connexion / Inscription</a></li>&gt
            <li><a href=\"#\">Paiement</a></li>&gt
            <li><a href=\"#\">Validation</a></li>
        </ul>
    </div>
    <table>
        <thead>
        <tr>
            <th>article</th>
            <th>quantite</th>
            <th>prix unitaire</th>
            <th>prix total</th>
        </tr>
        <thead>
        <tbody id=\"zone\">



        </tbody>
        <tfoot><tr><td id=\"bas\" colspan=\"3\"></td><td><span id=\"total\">0</span>€</td></tr></tfoot>
        <table/>
        <hr>
        <form action=\"finalisation.php\" method=\"post\">
            <input type=\"hidden\" name=\"liste\" id=\"liste\">
            <input type=\"submit\" value=\"Valider ma commande.\">
        </form>
    </table>

";
        // line 44
        echo "
";
        // line 46
        echo "
";
        // line 70
        echo "    </div>
    <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation");
        echo "\" class=\"command\">Continuer mes achats</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 71,  127 => 70,  124 => 46,  121 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}
    <div id=\"arianne\">
        <ul>
            <li><a href=\"#\">Panier</a></li>&gt
            <li><a href=\"#\">Connexion / Inscription</a></li>&gt
            <li><a href=\"#\">Paiement</a></li>&gt
            <li><a href=\"#\">Validation</a></li>
        </ul>
    </div>
    <table>
        <thead>
        <tr>
            <th>article</th>
            <th>quantite</th>
            <th>prix unitaire</th>
            <th>prix total</th>
        </tr>
        <thead>
        <tbody id=\"zone\">



        </tbody>
        <tfoot><tr><td id=\"bas\" colspan=\"3\"></td><td><span id=\"total\">0</span>€</td></tr></tfoot>
        <table/>
        <hr>
        <form action=\"finalisation.php\" method=\"post\">
            <input type=\"hidden\" name=\"liste\" id=\"liste\">
            <input type=\"submit\" value=\"Valider ma commande.\">
        </form>
    </table>

{#    <div class=\"panier-card\">#}
{#        <div class=\"panier-img\">#}
{#            <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"Affiche\">#}
{#        </div>#}
{#        <div class=\"panier-event-info\">#}
{#        </div>#}
{#        <div class=\"panier_place\">#}

{#        </div>#}

{#        <div class=\"topCart\">#}
{#            <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"\">#}
{#            <div class=\"details\">#}
{#                <h2>Rammstein</h2>#}
{#                <p>Samedi 22 juillet 2023</p>#}
{#                <p>Stade de l'Aube</p>#}
{#                <p>21h</p>#}
{#            </div>#}
{#            <div class=\"qte\">#}
{#                <div class=\"nbp\">#}
{#                    <label for=\"nbp\">Nombre de place : </label>#}
{#                    <input type=\"number\">#}
{#                </div>#}
{#                <div class=\"prix\">#}
{#                    <label for=\"#\">Prix à l'unité : </label>#}
{#                    <p>70 €</p>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#        <div class=\"prixTotal\">#}
{#            <p>Prix total : 140 €</p>#}
{#            <a href=\"#\" class=\"command\">Commander</a>#}
{#        </div>#}
    </div>
    <a href=\"{{ path('app_programmation') }}\" class=\"command\">Continuer mes achats</a>
{% endblock %}
", "panier/index.html.twig", "C:\\Users\\Evan\\Documents\\GitHub\\SAE301-3event\\templates\\panier\\index.html.twig");
    }
}
