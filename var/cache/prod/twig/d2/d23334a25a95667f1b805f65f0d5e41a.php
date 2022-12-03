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
class __TwigTemplate_bb3176def8d62a346b61eae1c258268e extends Template
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
        // line 1
        echo "<nav>
    <div id=\"menu_start\">
        <ul>
            <li><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/3event.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
            <li><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation");
        echo "\">Programmation</a></li>
            <li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salles");
        echo "\">Nos salles</a></li>
            <li><a href=\"#\">Infos pratique</a></li>
            <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contactez-nous</a></li>
        </ul>
    </div>
    <div id=\"menu_end\">
        <ul>
            <li><input type=\"text\"></li>
            <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ico/panier.svg"), "html", null, true);
        echo "\" alt=\"Panier\"></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ico/profil.svg"), "html", null, true);
        echo "\" alt=\"Profil\"></a></li>
        </ul>
    </div>
</nav>";
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
        return array (  72 => 15,  66 => 14,  57 => 8,  52 => 6,  48 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__composants/menu.html.twig", "D:\\Desktop\\B.U.T_MMI\\COURS\\Semestre_3\\SAE\\SAE301\\SAE301-3event\\templates\\__composants\\menu.html.twig");
    }
}
