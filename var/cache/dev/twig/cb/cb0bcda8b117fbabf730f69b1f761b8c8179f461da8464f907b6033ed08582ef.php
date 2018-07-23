<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_777766c0019b624bdb75c21aa1c7c51f4534c0ba0b596f17140b42710fa7a7b1 extends Twig_Template
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
        $__internal_310daa3bd7ceb962c2c4a71d68653b9bdf30697f35c1155d7cca43cf8e0b845b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310daa3bd7ceb962c2c4a71d68653b9bdf30697f35c1155d7cca43cf8e0b845b->enter($__internal_310daa3bd7ceb962c2c4a71d68653b9bdf30697f35c1155d7cca43cf8e0b845b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_425246d6b333df33f56d0911f9defa2438e180a3268e6685d5794ec147d8c8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425246d6b333df33f56d0911f9defa2438e180a3268e6685d5794ec147d8c8a7->enter($__internal_425246d6b333df33f56d0911f9defa2438e180a3268e6685d5794ec147d8c8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_310daa3bd7ceb962c2c4a71d68653b9bdf30697f35c1155d7cca43cf8e0b845b->leave($__internal_310daa3bd7ceb962c2c4a71d68653b9bdf30697f35c1155d7cca43cf8e0b845b_prof);

        
        $__internal_425246d6b333df33f56d0911f9defa2438e180a3268e6685d5794ec147d8c8a7->leave($__internal_425246d6b333df33f56d0911f9defa2438e180a3268e6685d5794ec147d8c8a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
