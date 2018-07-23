<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_12dc08a8f3d29899bbed9719bc7726f1a2c41ab8e1939f85c9fea31889b66d56 extends Twig_Template
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
        $__internal_f49495e16ac870bc649099461a005b11dfd75872da4d1572f0b00acacf6dfd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49495e16ac870bc649099461a005b11dfd75872da4d1572f0b00acacf6dfd36->enter($__internal_f49495e16ac870bc649099461a005b11dfd75872da4d1572f0b00acacf6dfd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_1ce31689035d9ae5808658e5ec06461b9ad7569f7077a6f3d91c8c31bd0b8b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce31689035d9ae5808658e5ec06461b9ad7569f7077a6f3d91c8c31bd0b8b86->enter($__internal_1ce31689035d9ae5808658e5ec06461b9ad7569f7077a6f3d91c8c31bd0b8b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f49495e16ac870bc649099461a005b11dfd75872da4d1572f0b00acacf6dfd36->leave($__internal_f49495e16ac870bc649099461a005b11dfd75872da4d1572f0b00acacf6dfd36_prof);

        
        $__internal_1ce31689035d9ae5808658e5ec06461b9ad7569f7077a6f3d91c8c31bd0b8b86->leave($__internal_1ce31689035d9ae5808658e5ec06461b9ad7569f7077a6f3d91c8c31bd0b8b86_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
