<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f9f85e3e23ea6341fd4a2c830549f0159c5ec512460e27a062ae8f5870fe0cfb extends Twig_Template
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
        $__internal_955db07919f3b56941dd43c5f5002b63fecb03441cf5bf952ca493c9fc91b2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955db07919f3b56941dd43c5f5002b63fecb03441cf5bf952ca493c9fc91b2ff->enter($__internal_955db07919f3b56941dd43c5f5002b63fecb03441cf5bf952ca493c9fc91b2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_2fc0c0e2c5f7bc069da65358e9be97d13582e0215d19fd9ac7a54380e479d28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc0c0e2c5f7bc069da65358e9be97d13582e0215d19fd9ac7a54380e479d28e->enter($__internal_2fc0c0e2c5f7bc069da65358e9be97d13582e0215d19fd9ac7a54380e479d28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_955db07919f3b56941dd43c5f5002b63fecb03441cf5bf952ca493c9fc91b2ff->leave($__internal_955db07919f3b56941dd43c5f5002b63fecb03441cf5bf952ca493c9fc91b2ff_prof);

        
        $__internal_2fc0c0e2c5f7bc069da65358e9be97d13582e0215d19fd9ac7a54380e479d28e->leave($__internal_2fc0c0e2c5f7bc069da65358e9be97d13582e0215d19fd9ac7a54380e479d28e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
