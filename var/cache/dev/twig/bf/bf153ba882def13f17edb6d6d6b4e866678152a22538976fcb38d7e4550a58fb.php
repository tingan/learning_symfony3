<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_0bc631b9aaf9be3f71a067dd0153a487b7909ba83472232ed711d27b2b16f8a9 extends Twig_Template
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
        $__internal_03a298b1d9151fc6974b9dc89d55468c90c70c09c5e5d9a019d0e934dffaa142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a298b1d9151fc6974b9dc89d55468c90c70c09c5e5d9a019d0e934dffaa142->enter($__internal_03a298b1d9151fc6974b9dc89d55468c90c70c09c5e5d9a019d0e934dffaa142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_b51b6307240b07d9c36240018f4f4e32d23245d9e6f177cc3d97d42ce3452cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51b6307240b07d9c36240018f4f4e32d23245d9e6f177cc3d97d42ce3452cc1->enter($__internal_b51b6307240b07d9c36240018f4f4e32d23245d9e6f177cc3d97d42ce3452cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_03a298b1d9151fc6974b9dc89d55468c90c70c09c5e5d9a019d0e934dffaa142->leave($__internal_03a298b1d9151fc6974b9dc89d55468c90c70c09c5e5d9a019d0e934dffaa142_prof);

        
        $__internal_b51b6307240b07d9c36240018f4f4e32d23245d9e6f177cc3d97d42ce3452cc1->leave($__internal_b51b6307240b07d9c36240018f4f4e32d23245d9e6f177cc3d97d42ce3452cc1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
