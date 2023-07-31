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

/* car/_car_profile.html.twig */
class __TwigTemplate_348d823e193ee1175faa2c85e4fe6578 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/_car_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/_car_profile.html.twig"));

        // line 1
        echo "<div class=\"mb-4\">
        <div class=\"text-2xl\">
            ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 3, $this->source); })()), "brand", [], "any", false, false, false, 3), "html", null, true);
        echo "
        </div>
        <div class=\"text-xl dark:text-gray-400\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 6, $this->source); })()), "model", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </div>
        <div class=\"text-sm text-gray-500 dark:text-gray-400\">
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 9, $this->source); })()), "fuel", [], "any", false, false, false, 9), "html", null, true);
        echo "
        </div>
        <div class=\"flex\">
            <img class=\"object-scale-down h-48 w-48 rounded\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, ((isset($context["car_images"]) || array_key_exists("car_images", $context) ? $context["car_images"] : (function () { throw new RuntimeError('Variable "car_images" does not exist.', 12, $this->source); })()) . twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 12, $this->source); })()), "getImageUrl", [], "method", false, false, false, 12)), "html", null, true);
        echo "\"\">
        </div>
        <div class=\"text-sm text-gray-500 dark:text-gray-400\">
            Avaliable parts: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 15, $this->source); })()), "carParts", [], "any", false, false, false, 15), "count", [], "any", false, false, false, 15), "html", null, true);
        echo "
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "car/_car_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  65 => 12,  59 => 9,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mb-4\">
        <div class=\"text-2xl\">
            {{ car.brand }}
        </div>
        <div class=\"text-xl dark:text-gray-400\">
            {{ car.model }}
        </div>
        <div class=\"text-sm text-gray-500 dark:text-gray-400\">
            {{ car.fuel }}
        </div>
        <div class=\"flex\">
            <img class=\"object-scale-down h-48 w-48 rounded\" src=\"{{ car_images ~ car.getImageUrl() }}\"\">
        </div>
        <div class=\"text-sm text-gray-500 dark:text-gray-400\">
            Avaliable parts: {{ car.carParts.count }}
        </div>
    </div>
", "car/_car_profile.html.twig", "/home/alex/SE/data_warehouse/templates/car/_car_profile.html.twig");
    }
}
