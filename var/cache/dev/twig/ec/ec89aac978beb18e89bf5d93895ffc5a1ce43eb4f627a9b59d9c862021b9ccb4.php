<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9f41c489c0f9619db71215f65da8a0dbd27ab37530557e139c3345dc3aa433fc extends Twig_Template
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
        $__internal_a86e43dd5c2fd641c942e41257035924a25aef24da731bd50d3902c9ded652b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86e43dd5c2fd641c942e41257035924a25aef24da731bd50d3902c9ded652b7->enter($__internal_a86e43dd5c2fd641c942e41257035924a25aef24da731bd50d3902c9ded652b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_df31721f0eba0b974d2da4bbe019683462165b8e1cdde2930056f59eb5ff3785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df31721f0eba0b974d2da4bbe019683462165b8e1cdde2930056f59eb5ff3785->enter($__internal_df31721f0eba0b974d2da4bbe019683462165b8e1cdde2930056f59eb5ff3785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a86e43dd5c2fd641c942e41257035924a25aef24da731bd50d3902c9ded652b7->leave($__internal_a86e43dd5c2fd641c942e41257035924a25aef24da731bd50d3902c9ded652b7_prof);

        
        $__internal_df31721f0eba0b974d2da4bbe019683462165b8e1cdde2930056f59eb5ff3785->leave($__internal_df31721f0eba0b974d2da4bbe019683462165b8e1cdde2930056f59eb5ff3785_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
