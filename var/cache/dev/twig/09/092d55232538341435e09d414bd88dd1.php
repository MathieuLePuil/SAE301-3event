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

/* __composants/menu.html.twig */
class __TwigTemplate_fbc0e8cca750fc0bdc81c33239a87a7d extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__composants/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__composants/menu.html.twig"));

        // line 1
        echo "<nav>
    <div class=\"toggle\">
        <i class=\"fas fa-bars ouvrir\"></i>
        <i class=\"fas fa-times fermer\"></i>
    </div>
    <div id=\"menu_start\" >
        <ul class=\"menu\">
            <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/3event.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
            <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation");
        echo "\" class=\"nav_link\">Programmation</a></li>
            <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salles");
        echo "\" class=\"nav_link\">Nos salles</a></li>
            <li><a href=\"#\" class=\"nav_link\">Infos pratique</a></li>
            <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"nav_link\">Contactez-nous</a></li>
        </ul>
    </div>
    <div id=\"menu_end\">
        <ul class=\"menutest\">
            <li><input type=\"text\"></li>
            <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ico/panier.svg"), "html", null, true);
        echo "\" alt=\"Panier\"></a></li>
            <span id='panier'></span>
            <li><a href=\"#\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ico/profil.svg"), "html", null, true);
        echo "\" alt=\"Profil\"></a></li>
        </ul>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "__composants/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  76 => 18,  67 => 12,  62 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
    <div class=\"toggle\">
        <i class=\"fas fa-bars ouvrir\"></i>
        <i class=\"fas fa-times fermer\"></i>
    </div>
    <div id=\"menu_start\" >
        <ul class=\"menu\">
            <li><a href=\"{{ path('app_index') }}\"><img src=\"{{ asset('images/logo/3event.png') }}\" alt=\"\"></a></li>
            <li><a href=\"{{ path('app_programmation') }}\" class=\"nav_link\">Programmation</a></li>
            <li><a href=\"{{ path('app_salles') }}\" class=\"nav_link\">Nos salles</a></li>
            <li><a href=\"#\" class=\"nav_link\">Infos pratique</a></li>
            <li><a href=\"{{ path('app_contact') }}\" class=\"nav_link\">Contactez-nous</a></li>
        </ul>
    </div>
    <div id=\"menu_end\">
        <ul class=\"menutest\">
            <li><input type=\"text\"></li>
            <li><a href=\"{{ path('app_panier') }}\"><img src=\"{{ asset('images/ico/panier.svg') }}\" alt=\"Panier\"></a></li>
            <span id='panier'></span>
            <li><a href=\"#\"><img src=\"{{ asset('images/ico/profil.svg') }}\" alt=\"Profil\"></a></li>
        </ul>
    </div>
</nav>", "__composants/menu.html.twig", "C:\\Users\\Evan\\Documents\\GitHub\\SAE301-3event\\templates\\__composants\\menu.html.twig");
    }
}
