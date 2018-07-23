<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_9cacdb0caef4e72e3e848d231b6ee5fb142b648b8ba69a4de3949939d10d9807 extends Twig_Template
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
        $__internal_bf301647caf0fd01fea609ce793858eb5f7c3920f4caeb13a111bdd07de2dc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf301647caf0fd01fea609ce793858eb5f7c3920f4caeb13a111bdd07de2dc9f->enter($__internal_bf301647caf0fd01fea609ce793858eb5f7c3920f4caeb13a111bdd07de2dc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_983354938c72dbf9d1475a919072be25bb4aff3aee9ec9b8249332e629aa4dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983354938c72dbf9d1475a919072be25bb4aff3aee9ec9b8249332e629aa4dd1->enter($__internal_983354938c72dbf9d1475a919072be25bb4aff3aee9ec9b8249332e629aa4dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bf301647caf0fd01fea609ce793858eb5f7c3920f4caeb13a111bdd07de2dc9f->leave($__internal_bf301647caf0fd01fea609ce793858eb5f7c3920f4caeb13a111bdd07de2dc9f_prof);

        
        $__internal_983354938c72dbf9d1475a919072be25bb4aff3aee9ec9b8249332e629aa4dd1->leave($__internal_983354938c72dbf9d1475a919072be25bb4aff3aee9ec9b8249332e629aa4dd1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
