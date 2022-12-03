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
        echo "    <div class=\"ariane\">
        <div class=\"breadcrumb flat\">
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\" class=\"active\">Panier</a>
            <a href=\"#\">Connexion / Inscription</a>
            <a href=\"#\">Paiement</a>
            <a href=\"#\">Validation</a>
        </div>
    </div>
";
        // line 55
        echo "    <table>
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
        // line 85
        echo "
";
        // line 87
        echo "
";
        // line 111
        echo "    </div>
    <a href=\"";
        // line 112
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
        return array (  135 => 112,  132 => 111,  129 => 87,  126 => 85,  101 => 55,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}
    <div class=\"ariane\">
        <div class=\"breadcrumb flat\">
            <a href=\"{{ path('app_panier') }}\" class=\"active\">Panier</a>
            <a href=\"#\">Connexion / Inscription</a>
            <a href=\"#\">Paiement</a>
            <a href=\"#\">Validation</a>
        </div>
    </div>
{#    <div class=\"panier-card\">#}
{#        <div class=\"panier-img\">#}
{#            <img src=\"{{ asset('images/affiche/affiche.png') }}\" alt=\"Affiche\">#}
{#        </div>#}
{#        <div class=\"panier-event-info\">#}
{#            <h2>Rammstein</h2>#}
{#            <p>Samedi 22 juillet 2023</p>#}
{#            <p>Stade de l'Aube</p>#}
{#            <p>20h</p>#}
{#        </div>#}
{#        <div class=\"panier_place\">#}
{#            <div class=\"panier_quantite\">#}
{#                <div class=\"nbp\">#}
{#                    <label for=\"nbp\">Nombre de place : </label>#}
{#                    <select name=\"place\" id=\"nbplace-select\">#}
{#                        <option value=\"1\">1</option>#}
{#                        <option value=\"2\">2</option>#}
{#                        <option value=\"3\">3</option>#}
{#                        <option value=\"4\">4</option>#}
{#                        <option value=\"5\">5</option>#}
{#                        <option value=\"5\">6</option>#}
{#                    </select>#}
{#                </div>#}
{#                <div class=\"prix\">#}
{#                    <label for=\"#\">Prix à l'unité : 70 €</label>#}
{#                </div>#}
{#                <a href=\"#\"><img src=\"{{ asset('images/ico/poubelle.png') }}\" alt=\"Affiche\" width=\"20px\"></a>#}
{#            </div>#}
{#            <div class=\"prixTotal\">#}
{#                <p>Prix total : 140 €</p>#}
{#                <div class=\"bouton_commander\">#}
{#                    <a href=\"{{ path('app_login') }}\">COMMANDER</a>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#    </div>#}
{#    <div class=\"backhomebutton\">#}
{#        <div class=\"back_home\">#}
{#            <a href=\"{{ path('app_index') }}?id_event=1\">RETOUR À L'ACCUEIL</a>#}
{#        </div>#}
{#    </div>#}
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
