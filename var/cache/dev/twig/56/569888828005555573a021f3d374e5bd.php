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

/* __composants/carrousel.html.twig */
class __TwigTemplate_041ea944a8b0d927334f165a58775414 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__composants/carrousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__composants/carrousel.html.twig"));

        // line 1
        echo "<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carrousel/banner.png"), "html", null, true);
        echo "\" alt=\"First slide\">
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carrousel/banner.png"), "html", null, true);
        echo "\" alt=\"Second slide\">
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carrousel/banner.png"), "html", null, true);
        echo "\" alt=\"Third slide\">
        </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "__composants/carrousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"{{ asset('images/carrousel/banner.png') }}\" alt=\"First slide\">
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"{{ asset('images/carrousel/banner.png') }}\" alt=\"Second slide\">
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"{{ asset('images/carrousel/banner.png') }}\" alt=\"Third slide\">
        </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>", "__composants/carrousel.html.twig", "D:\\Desktop\\B.U.T_MMI\\COURS\\Semestre_3\\SAE\\SAE301\\SAE301-3event\\templates\\__composants\\carrousel.html.twig");
    }
}
