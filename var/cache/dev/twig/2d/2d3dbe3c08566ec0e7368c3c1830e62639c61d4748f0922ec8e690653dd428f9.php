<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a38ad3e925659b722cca877299a2a3d21dc23b8821f5c0d70f87832bc8a11077 extends Twig_Template
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
        $__internal_f399c6e9e82d4f444527fe3047413f498f9a62b9ea2cc0321b3365ff22407ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f399c6e9e82d4f444527fe3047413f498f9a62b9ea2cc0321b3365ff22407ced->enter($__internal_f399c6e9e82d4f444527fe3047413f498f9a62b9ea2cc0321b3365ff22407ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d7e4381219a2169165c94d4b6d6e15f1407d7704e939d1ae2af589dcfe29d682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e4381219a2169165c94d4b6d6e15f1407d7704e939d1ae2af589dcfe29d682->enter($__internal_d7e4381219a2169165c94d4b6d6e15f1407d7704e939d1ae2af589dcfe29d682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f399c6e9e82d4f444527fe3047413f498f9a62b9ea2cc0321b3365ff22407ced->leave($__internal_f399c6e9e82d4f444527fe3047413f498f9a62b9ea2cc0321b3365ff22407ced_prof);

        
        $__internal_d7e4381219a2169165c94d4b6d6e15f1407d7704e939d1ae2af589dcfe29d682->leave($__internal_d7e4381219a2169165c94d4b6d6e15f1407d7704e939d1ae2af589dcfe29d682_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
