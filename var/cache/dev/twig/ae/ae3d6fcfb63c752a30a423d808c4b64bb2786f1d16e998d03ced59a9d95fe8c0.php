<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c2380f39024d6d0ac2c3581603c01c6698587deee0441150ee1f7d641d3dea73 extends Twig_Template
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
        $__internal_367fa924c1922399907ef679fc116ba3c5bd8732a50b9b6fba47957bc0ef7e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367fa924c1922399907ef679fc116ba3c5bd8732a50b9b6fba47957bc0ef7e5d->enter($__internal_367fa924c1922399907ef679fc116ba3c5bd8732a50b9b6fba47957bc0ef7e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0f54df62f3a2caa4a4bf44743d913759e01d480d4121dc12cdc98a4cfbc2f766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f54df62f3a2caa4a4bf44743d913759e01d480d4121dc12cdc98a4cfbc2f766->enter($__internal_0f54df62f3a2caa4a4bf44743d913759e01d480d4121dc12cdc98a4cfbc2f766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_367fa924c1922399907ef679fc116ba3c5bd8732a50b9b6fba47957bc0ef7e5d->leave($__internal_367fa924c1922399907ef679fc116ba3c5bd8732a50b9b6fba47957bc0ef7e5d_prof);

        
        $__internal_0f54df62f3a2caa4a4bf44743d913759e01d480d4121dc12cdc98a4cfbc2f766->leave($__internal_0f54df62f3a2caa4a4bf44743d913759e01d480d4121dc12cdc98a4cfbc2f766_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
