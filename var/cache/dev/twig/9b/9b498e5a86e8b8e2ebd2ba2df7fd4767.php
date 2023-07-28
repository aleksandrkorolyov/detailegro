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

/* car/show.html.twig */
class __TwigTemplate_d5ae19ff706b3dd6c0cf79370c4e6c57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/show.html.twig", 1);
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

        echo "Car";
        
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
        echo "    <h1>Car</h1>

  <div class=\"mb-4\">
        <div class=\"text-2xl\">
            ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 10, $this->source); })()), "brand", [], "any", false, false, false, 10), "html", null, true);
        echo "
        </div>
        <div class=\"text-xl dark:text-gray-400\">
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 13, $this->source); })()), "model", [], "any", false, false, false, 13), "html", null, true);
        echo "
        </div>
        <div class=\"text-sm text-gray-500 dark:text-gray-400\">
            ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 16, $this->source); })()), "fuel", [], "any", false, false, false, 16), "html", null, true);
        echo "
        </div>
        <div class=\"flex\">
            <img class=\"object-scale-down h-48 w-48 rounded\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 19, $this->source); })()), "getImageUrl", [], "method", false, false, false, 19), "html", null, true);
        echo "\"\">
        </div>
    </div>

    <div>
        <a href=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_car_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo ">
            <button class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 my-2 rounded\">
                Edit
            </button>
        </a>
    </div>
    
    ";
        // line 31
        echo twig_include($this->env, $context, "car/_delete_form.html.twig");
        echo "

        <a href=";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_car_index");
        echo ">
            <button class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 my-2 rounded\">
                Back to list
            </button>
        </a>
        <div class=\"bg-gray-200\">
            <h1>Suitable parts for this car ( ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 39, $this->source); })()), "carParts", [], "any", false, false, false, 39), "count", [], "any", false, false, false, 39), "html", null, true);
        echo " )</h1>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 mt-2\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 41, $this->source); })()), "carParts", [], "any", false, false, false, 41));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 42
            echo "                    <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_car_part_show", ["id" => twig_get_attribute($this->env, $this->source, $context["part"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo ">
                        ";
            // line 43
            echo twig_include($this->env, $context, "car_part/_part_profile.html.twig", ["car_part" => $context["part"]]);
            echo "
                    </a>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </div>
        </div>
    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "car/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 46,  171 => 43,  166 => 42,  149 => 41,  144 => 39,  135 => 33,  130 => 31,  120 => 24,  112 => 19,  106 => 16,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Car{% endblock %}

{% block body %}
    <h1>Car</h1>

  <div class=\"mb-4\">
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
            <img class=\"object-scale-down h-48 w-48 rounded\" src=\"{{ car.getImageUrl() }}\"\">
        </div>
    </div>

    <div>
        <a href={{ path('app_car_edit', {'id': car.id}) }}>
            <button class=\"bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 my-2 rounded\">
                Edit
            </button>
        </a>
    </div>
    
    {{ include('car/_delete_form.html.twig') }}

        <a href={{ path('app_car_index') }}>
            <button class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 my-2 rounded\">
                Back to list
            </button>
        </a>
        <div class=\"bg-gray-200\">
            <h1>Suitable parts for this car ( {{car.carParts.count}} )</h1>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 mt-2\">
                {% for part in car.carParts %}
                    <a href={{ path('app_car_part_show', {id: part.id}) }}>
                        {{ include('car_part/_part_profile.html.twig', {car_part: part}) }}
                    </a>
                {% endfor %}
            </div>
        </div>
    

{% endblock %}
", "car/show.html.twig", "/home/alex/SE/data_warehouse/templates/car/show.html.twig");
    }
}
