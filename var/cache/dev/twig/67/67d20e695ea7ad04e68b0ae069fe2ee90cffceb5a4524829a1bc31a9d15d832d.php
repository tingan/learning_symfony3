<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_51fabddc949e40b2db7bd4d4507b49bc3b9015fd3a1ccea37e4ab9458ac64be1 extends Twig_Template
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
        $__internal_03c6c8ca1468fae9bb8a188aa71855200c104c638594dc8d902fbcc9e8c74754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c6c8ca1468fae9bb8a188aa71855200c104c638594dc8d902fbcc9e8c74754->enter($__internal_03c6c8ca1468fae9bb8a188aa71855200c104c638594dc8d902fbcc9e8c74754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_575010b8954880f842e88f511de6f55213be7f9e6fc9e4c2220a5aa0e4ff96f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575010b8954880f842e88f511de6f55213be7f9e6fc9e4c2220a5aa0e4ff96f7->enter($__internal_575010b8954880f842e88f511de6f55213be7f9e6fc9e4c2220a5aa0e4ff96f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_03c6c8ca1468fae9bb8a188aa71855200c104c638594dc8d902fbcc9e8c74754->leave($__internal_03c6c8ca1468fae9bb8a188aa71855200c104c638594dc8d902fbcc9e8c74754_prof);

        
        $__internal_575010b8954880f842e88f511de6f55213be7f9e6fc9e4c2220a5aa0e4ff96f7->leave($__internal_575010b8954880f842e88f511de6f55213be7f9e6fc9e4c2220a5aa0e4ff96f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
