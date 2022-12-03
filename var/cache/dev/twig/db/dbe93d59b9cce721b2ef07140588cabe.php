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

/* __composants/footer.html.twig */
class __TwigTemplate_d674962e0103170d3ca01754ebdc9afe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__composants/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__composants/footer.html.twig"));

        // line 1
        echo "<footer>
    <div id=\"topFooter\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/3event.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"footerBox\">
            <h2>Stade de l'aube</h2>
            <hr>
            <p>42 Av. Robert Schumann,<br /> 10000 Troyes</p>
            <a href=\"https://www.google.fr/maps/place/42+Av.+Robert+Schumann,+10000+Troyes/@48.3073049,4.0969567,17z/data=!3m1!4b1!4m5!3m4!1s0x47ee98bfc0876bd3:0x69071ed37e4ac599!8m2!3d48.3073049!4d4.0991454\" target=\"_blank\" class=\"mapButton\">S'y rendre</a>
        </div>
        <div class=\"footerBox\">
            <h2>Le cube</h2>
            <hr>
            <p>20 Rue des Gayettes,<br /> 10000 Troyes</p>
            <a href=\"https://www.google.fr/maps/place/20+Rue+des+Gayettes,+10000+Troyes/@48.2893688,4.0685298,17z/data=!3m1!4b1!4m5!3m4!1s0x47ee98550b4a9593:0xcd8735cdb397a44e!8m2!3d48.2893688!4d4.0707185\" target=\"_blank\" class=\"mapButton\">S'y rendre</a>
        </div>
        <div class=\"footerBox\">
            <h2>Théâtre de Champagne</h2>
            <hr>
            <p>Boulevard Gambetta,<br /> 10000 Troyes
            </p>
            <a href=\"https://www.google.fr/maps/place/Th%C3%A9%C3%A2tre+de+Champagne/@48.3003527,4.0730024,17z/data=!3m1!4b1!4m5!3m4!1s0x47ee98f63f6b402b:0x73bbf3f8ea11d487!8m2!3d48.3004778!4d4.0750667\" target=\"_blank\" class=\"mapButton\">S'y rendre</a>
        </div>
        <div class=\"footerBox\">
            <ul>
                <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation");
        echo "\">Programmation</a></li>
                <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salles");
        echo "\">Nos salles</a></li>
                <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\">Infos pratiques</a></li>
                <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contactez-nous</a></li>
            </ul>
        </div>
    </div>
    <p>&copy; 2022 - Tous droits réservés</p>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "__composants/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  80 => 27,  76 => 26,  72 => 25,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div id=\"topFooter\">
        <img src=\"{{ asset('images/logo/3event.png') }}\" alt=\"\">
        <div class=\"footerBox\">
            <h2>Stade de l'aube</h2>
            <hr>
            <p>42 Av. Robert Schumann,<br /> 10000 Troyes</p>
            <a href=\"https://www.google.fr/maps/place/42+Av.+Robert+Schumann,+10000+Troyes/@48.3073049,4.0969567,17z/data=!3m1!4b1!4m5!3m4!1s0x47ee98bfc0876bd3:0x69071ed37e4ac599!8m2!3d48.3073049!4d4.0991454\" target=\"_blank\" class=\"mapButton\">S'y rendre</a>
        </div>
        <div class=\"footerBox\">
            <h2>Le cube</h2>
            <hr>
            <p>20 Rue des Gayettes,<br /> 10000 Troyes</p>
            <a href=\"https://www.google.fr/maps/place/20+Rue+des+Gayettes,+10000+Troyes/@48.2893688,4.0685298,17z/data=!3m1!4b1!4m5!3m4!1s0x47ee98550b4a9593:0xcd8735cdb397a44e!8m2!3d48.2893688!4d4.0707185\" target=\"_blank\" class=\"mapButton\">S'y rendre</a>
        </div>
        <div class=\"footerBox\">
            <h2>Théâtre de Champagne</h2>
            <hr>
            <p>Boulevard Gambetta,<br /> 10000 Troyes
            </p>
            <a href=\"https://www.google.fr/maps/place/Th%C3%A9%C3%A2tre+de+Champagne/@48.3003527,4.0730024,17z/data=!3m1!4b1!4m5!3m4!1s0x47ee98f63f6b402b:0x73bbf3f8ea11d487!8m2!3d48.3004778!4d4.0750667\" target=\"_blank\" class=\"mapButton\">S'y rendre</a>
        </div>
        <div class=\"footerBox\">
            <ul>
                <li><a href=\"{{ path('app_programmation') }}\">Programmation</a></li>
                <li><a href=\"{{ path('app_salles') }}\">Nos salles</a></li>
                <li><a href=\"{{ path('app_panier') }}\">Infos pratiques</a></li>
                <li><a href=\"{{ path('app_contact') }}\">Contactez-nous</a></li>
            </ul>
        </div>
    </div>
    <p>&copy; 2022 - Tous droits réservés</p>
</footer>", "__composants/footer.html.twig", "C:\\Users\\Evan\\Documents\\GitHub\\SAE301-3event\\templates\\__composants\\footer.html.twig");
    }
}
