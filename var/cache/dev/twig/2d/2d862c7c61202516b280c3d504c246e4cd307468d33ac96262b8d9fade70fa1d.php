<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d94f0912a047d33a556eee67275389da604dc8fb9df590da35249fd8b6cba5f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77c1b561962b82bf544bb157e2c2ba558db43b6dbd07384b653ffca570966b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c1b561962b82bf544bb157e2c2ba558db43b6dbd07384b653ffca570966b9a->enter($__internal_77c1b561962b82bf544bb157e2c2ba558db43b6dbd07384b653ffca570966b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ef9490f9b94f1a364678ba957838f62c29bf0acd0936c75102ad2aa76c7b7aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9490f9b94f1a364678ba957838f62c29bf0acd0936c75102ad2aa76c7b7aa0->enter($__internal_ef9490f9b94f1a364678ba957838f62c29bf0acd0936c75102ad2aa76c7b7aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77c1b561962b82bf544bb157e2c2ba558db43b6dbd07384b653ffca570966b9a->leave($__internal_77c1b561962b82bf544bb157e2c2ba558db43b6dbd07384b653ffca570966b9a_prof);

        
        $__internal_ef9490f9b94f1a364678ba957838f62c29bf0acd0936c75102ad2aa76c7b7aa0->leave($__internal_ef9490f9b94f1a364678ba957838f62c29bf0acd0936c75102ad2aa76c7b7aa0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53e4621807b5d70a768703fba8bf00354fb88c169099a1f7b3e7c563e6398e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e4621807b5d70a768703fba8bf00354fb88c169099a1f7b3e7c563e6398e3a->enter($__internal_53e4621807b5d70a768703fba8bf00354fb88c169099a1f7b3e7c563e6398e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1904bac30405541939a43d374958ce7a48a1c48cace2be8aaeaf72365229df79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1904bac30405541939a43d374958ce7a48a1c48cace2be8aaeaf72365229df79->enter($__internal_1904bac30405541939a43d374958ce7a48a1c48cace2be8aaeaf72365229df79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1904bac30405541939a43d374958ce7a48a1c48cace2be8aaeaf72365229df79->leave($__internal_1904bac30405541939a43d374958ce7a48a1c48cace2be8aaeaf72365229df79_prof);

        
        $__internal_53e4621807b5d70a768703fba8bf00354fb88c169099a1f7b3e7c563e6398e3a->leave($__internal_53e4621807b5d70a768703fba8bf00354fb88c169099a1f7b3e7c563e6398e3a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3eade6977750f8d543ac733a112e20bb105650beca1c1259767212300fb4cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3eade6977750f8d543ac733a112e20bb105650beca1c1259767212300fb4cae->enter($__internal_f3eade6977750f8d543ac733a112e20bb105650beca1c1259767212300fb4cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f563ef5d298c4e81390bc7636a990d21e08f2537778c9b3fa96642265892e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f563ef5d298c4e81390bc7636a990d21e08f2537778c9b3fa96642265892e2d->enter($__internal_5f563ef5d298c4e81390bc7636a990d21e08f2537778c9b3fa96642265892e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5f563ef5d298c4e81390bc7636a990d21e08f2537778c9b3fa96642265892e2d->leave($__internal_5f563ef5d298c4e81390bc7636a990d21e08f2537778c9b3fa96642265892e2d_prof);

        
        $__internal_f3eade6977750f8d543ac733a112e20bb105650beca1c1259767212300fb4cae->leave($__internal_f3eade6977750f8d543ac733a112e20bb105650beca1c1259767212300fb4cae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
