<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_0da79165bd3ea6f04d97644b243f8d8d25f9db65fdd4e27a3e2e9d5cda640893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3f8c3ccbb4c9fb748eb7a1a547d6b43274145cf9ef13278e0ea965422508f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f8c3ccbb4c9fb748eb7a1a547d6b43274145cf9ef13278e0ea965422508f2f->enter($__internal_c3f8c3ccbb4c9fb748eb7a1a547d6b43274145cf9ef13278e0ea965422508f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_012aa3bdf5f0d7789ae81e6b208222722b096a03c86aa9b52226d741459f637d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012aa3bdf5f0d7789ae81e6b208222722b096a03c86aa9b52226d741459f637d->enter($__internal_012aa3bdf5f0d7789ae81e6b208222722b096a03c86aa9b52226d741459f637d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f8c3ccbb4c9fb748eb7a1a547d6b43274145cf9ef13278e0ea965422508f2f->leave($__internal_c3f8c3ccbb4c9fb748eb7a1a547d6b43274145cf9ef13278e0ea965422508f2f_prof);

        
        $__internal_012aa3bdf5f0d7789ae81e6b208222722b096a03c86aa9b52226d741459f637d->leave($__internal_012aa3bdf5f0d7789ae81e6b208222722b096a03c86aa9b52226d741459f637d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_09c45915c922d5a4309f7f79e2abffcdbabd5392d84f60a668ae2f06f2e0ba12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c45915c922d5a4309f7f79e2abffcdbabd5392d84f60a668ae2f06f2e0ba12->enter($__internal_09c45915c922d5a4309f7f79e2abffcdbabd5392d84f60a668ae2f06f2e0ba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f05d5cb4437d4e17512330031a73aea261f6bd9725617e1693581890b913d8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05d5cb4437d4e17512330031a73aea261f6bd9725617e1693581890b913d8f3->enter($__internal_f05d5cb4437d4e17512330031a73aea261f6bd9725617e1693581890b913d8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f05d5cb4437d4e17512330031a73aea261f6bd9725617e1693581890b913d8f3->leave($__internal_f05d5cb4437d4e17512330031a73aea261f6bd9725617e1693581890b913d8f3_prof);

        
        $__internal_09c45915c922d5a4309f7f79e2abffcdbabd5392d84f60a668ae2f06f2e0ba12->leave($__internal_09c45915c922d5a4309f7f79e2abffcdbabd5392d84f60a668ae2f06f2e0ba12_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c5e97fed7709246431532f71326e1b09916aac6c2563af9ae4db1f821692b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5e97fed7709246431532f71326e1b09916aac6c2563af9ae4db1f821692b16->enter($__internal_3c5e97fed7709246431532f71326e1b09916aac6c2563af9ae4db1f821692b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9becf87e74d2019954822cf677ee904ac40a98c0a650c763f1cd4188e9364f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9becf87e74d2019954822cf677ee904ac40a98c0a650c763f1cd4188e9364f25->enter($__internal_9becf87e74d2019954822cf677ee904ac40a98c0a650c763f1cd4188e9364f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9becf87e74d2019954822cf677ee904ac40a98c0a650c763f1cd4188e9364f25->leave($__internal_9becf87e74d2019954822cf677ee904ac40a98c0a650c763f1cd4188e9364f25_prof);

        
        $__internal_3c5e97fed7709246431532f71326e1b09916aac6c2563af9ae4db1f821692b16->leave($__internal_3c5e97fed7709246431532f71326e1b09916aac6c2563af9ae4db1f821692b16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
