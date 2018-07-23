<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c448ed72e5d137a5ff8f125ee8840dfcae3488e2cae06b849f156c12a0159205 extends Twig_Template
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
        $__internal_8beb0b8befbb1359f8b5fb3a711e566c3fa78a2e86343c5a21cc095e895abfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8beb0b8befbb1359f8b5fb3a711e566c3fa78a2e86343c5a21cc095e895abfb5->enter($__internal_8beb0b8befbb1359f8b5fb3a711e566c3fa78a2e86343c5a21cc095e895abfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_9226230e2a70f09c90c4a2f8ddd2727b0245fca2fe8eebb957360cd93ddc46e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9226230e2a70f09c90c4a2f8ddd2727b0245fca2fe8eebb957360cd93ddc46e5->enter($__internal_9226230e2a70f09c90c4a2f8ddd2727b0245fca2fe8eebb957360cd93ddc46e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8beb0b8befbb1359f8b5fb3a711e566c3fa78a2e86343c5a21cc095e895abfb5->leave($__internal_8beb0b8befbb1359f8b5fb3a711e566c3fa78a2e86343c5a21cc095e895abfb5_prof);

        
        $__internal_9226230e2a70f09c90c4a2f8ddd2727b0245fca2fe8eebb957360cd93ddc46e5->leave($__internal_9226230e2a70f09c90c4a2f8ddd2727b0245fca2fe8eebb957360cd93ddc46e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
