<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_40483b1defef48f49453fa20462d17cb9f10c49a15d9dc28ead77f603cc78419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_248eac5dd3925d060f4c04a033291d46aa6d32e7cb15f3264be97418a355d82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248eac5dd3925d060f4c04a033291d46aa6d32e7cb15f3264be97418a355d82b->enter($__internal_248eac5dd3925d060f4c04a033291d46aa6d32e7cb15f3264be97418a355d82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_f060f5ac0d8d9ddc3506fd4b00b73ac010ce0aa29a2a953db0387e7cf37ec078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f060f5ac0d8d9ddc3506fd4b00b73ac010ce0aa29a2a953db0387e7cf37ec078->enter($__internal_f060f5ac0d8d9ddc3506fd4b00b73ac010ce0aa29a2a953db0387e7cf37ec078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_248eac5dd3925d060f4c04a033291d46aa6d32e7cb15f3264be97418a355d82b->leave($__internal_248eac5dd3925d060f4c04a033291d46aa6d32e7cb15f3264be97418a355d82b_prof);

        
        $__internal_f060f5ac0d8d9ddc3506fd4b00b73ac010ce0aa29a2a953db0387e7cf37ec078->leave($__internal_f060f5ac0d8d9ddc3506fd4b00b73ac010ce0aa29a2a953db0387e7cf37ec078_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}