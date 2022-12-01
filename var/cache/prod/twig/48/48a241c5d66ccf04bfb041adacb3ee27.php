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
class __TwigTemplate_613a7bf76d13bf6a16f5f9bb36792405 extends Template
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
            <a href=\"#\" class=\"mapButton\">S'y rendre</a>
        </div>
        <div class=\"footerBox\">
            <h2>Le cube</h2>
            <hr>
            <p>20 Rue des Gayettes,<br /> 10000 Troyes</p>
            <a href=\"#\" class=\"mapButton\">S'y rendre</a>
        </div>
        <div class=\"footerBox\">
            <h2>Théâtre de Champagne</h2>
            <hr>
            <p>Boulevard Gambetta,<br /> 10000 Troyes
            </p>
            <a href=\"#\" class=\"mapButton\">S'y rendre</a>
        </div>
        <div class=\"footerBox\">
            <ul>
                <li><a href=\"#\">Programmation</a></li>
                <li><a href=\"#\">Nos salles</a></li>
                <li><a href=\"#\">Infos pratiques</a></li>
                <li><a href=\"#\">Contactez-nous</a></li>
            </ul>
        </div>
    </div>
    <p>&copy; 2022 - Tous droits réservés</p>
</footer>";
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
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__composants/footer.html.twig", "D:\\Desktop\\B.U.T_MMI\\COURS\\Semestre_3\\SAE\\SAE301\\SAE301-3event\\templates\\__composants\\footer.html.twig");
    }
}
