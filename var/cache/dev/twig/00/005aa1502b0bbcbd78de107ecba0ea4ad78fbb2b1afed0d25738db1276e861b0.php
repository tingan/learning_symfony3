<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_bbca5fed057699ebca2ccf94753c50751ba942f1c14ded896086e1d9ceeb1886 extends Twig_Template
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
        $__internal_968b44b82aa619308155f48dceef7d3cc4b7b23ec38c7782fb7eba6af6d6cf6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968b44b82aa619308155f48dceef7d3cc4b7b23ec38c7782fb7eba6af6d6cf6c->enter($__internal_968b44b82aa619308155f48dceef7d3cc4b7b23ec38c7782fb7eba6af6d6cf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c764975694eaf003c746399e75337a2d32a2ef759dbe744f448584ad1f3e8aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c764975694eaf003c746399e75337a2d32a2ef759dbe744f448584ad1f3e8aa6->enter($__internal_c764975694eaf003c746399e75337a2d32a2ef759dbe744f448584ad1f3e8aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_968b44b82aa619308155f48dceef7d3cc4b7b23ec38c7782fb7eba6af6d6cf6c->leave($__internal_968b44b82aa619308155f48dceef7d3cc4b7b23ec38c7782fb7eba6af6d6cf6c_prof);

        
        $__internal_c764975694eaf003c746399e75337a2d32a2ef759dbe744f448584ad1f3e8aa6->leave($__internal_c764975694eaf003c746399e75337a2d32a2ef759dbe744f448584ad1f3e8aa6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
