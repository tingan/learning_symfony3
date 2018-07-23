<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7e7370f8308f3f006235f2f9ebac3dca3372dae12a2241fd77b97cd0fa5bdb20 extends Twig_Template
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
        $__internal_962035d6d9fbe05f97271f63ca2fd330c14cb73183d239256aeda03f78683578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962035d6d9fbe05f97271f63ca2fd330c14cb73183d239256aeda03f78683578->enter($__internal_962035d6d9fbe05f97271f63ca2fd330c14cb73183d239256aeda03f78683578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_5117a600bcf3917b60085fc5f1d4e34a08c14b152941b2f5eea8a8a2a3210610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5117a600bcf3917b60085fc5f1d4e34a08c14b152941b2f5eea8a8a2a3210610->enter($__internal_5117a600bcf3917b60085fc5f1d4e34a08c14b152941b2f5eea8a8a2a3210610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_962035d6d9fbe05f97271f63ca2fd330c14cb73183d239256aeda03f78683578->leave($__internal_962035d6d9fbe05f97271f63ca2fd330c14cb73183d239256aeda03f78683578_prof);

        
        $__internal_5117a600bcf3917b60085fc5f1d4e34a08c14b152941b2f5eea8a8a2a3210610->leave($__internal_5117a600bcf3917b60085fc5f1d4e34a08c14b152941b2f5eea8a8a2a3210610_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
