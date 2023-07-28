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

/* car_part/_part_profile.html.twig */
class __TwigTemplate_4b989c23d4edeb9b680596b49fb9d57c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car_part/_part_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car_part/_part_profile.html.twig"));

        // line 1
        echo "  <div class=\"mb-4\">
        <div class=\"text-2xl\">
            ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car_part"]) || array_key_exists("car_part", $context) ? $context["car_part"] : (function () { throw new RuntimeError('Variable "car_part" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "
        </div>
        <div class=\"text-xl dark:text-gray-400\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car_part"]) || array_key_exists("car_part", $context) ? $context["car_part"] : (function () { throw new RuntimeError('Variable "car_part" does not exist.', 6, $this->source); })()), "describrtion", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </div>
        <div class=\"flex\">
            <img class=\"object-scale-down h-48 w-48 rounded\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car_part"]) || array_key_exists("car_part", $context) ? $context["car_part"] : (function () { throw new RuntimeError('Variable "car_part" does not exist.', 9, $this->source); })()), "getImageUrl", [], "method", false, false, false, 9), "html", null, true);
        echo "\"\">
        </div>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "car_part/_part_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <div class=\"mb-4\">
        <div class=\"text-2xl\">
            {{ car_part.name }}
        </div>
        <div class=\"text-xl dark:text-gray-400\">
            {{ car_part.describrtion }}
        </div>
        <div class=\"flex\">
            <img class=\"object-scale-down h-48 w-48 rounded\" src=\"{{ car_part.getImageUrl() }}\"\">
        </div>
    </div>", "car_part/_part_profile.html.twig", "/home/alex/SE/data_warehouse/templates/car_part/_part_profile.html.twig");
    }
}
