<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e3fb65ac65754b15880c41ae0fac6c97546e13f1da9af00004a62c56618db22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25df98a2680e13d95e230c98854ba469967ba0eea07db28d559c83056fbbe3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25df98a2680e13d95e230c98854ba469967ba0eea07db28d559c83056fbbe3dd->enter($__internal_25df98a2680e13d95e230c98854ba469967ba0eea07db28d559c83056fbbe3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bb92f8dba73847a1e278754fb4f505d6c32b4d6a34a6a85ca787d86d6eef9c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb92f8dba73847a1e278754fb4f505d6c32b4d6a34a6a85ca787d86d6eef9c96->enter($__internal_bb92f8dba73847a1e278754fb4f505d6c32b4d6a34a6a85ca787d86d6eef9c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25df98a2680e13d95e230c98854ba469967ba0eea07db28d559c83056fbbe3dd->leave($__internal_25df98a2680e13d95e230c98854ba469967ba0eea07db28d559c83056fbbe3dd_prof);

        
        $__internal_bb92f8dba73847a1e278754fb4f505d6c32b4d6a34a6a85ca787d86d6eef9c96->leave($__internal_bb92f8dba73847a1e278754fb4f505d6c32b4d6a34a6a85ca787d86d6eef9c96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4faa5ae0325e63612e6a3f6c274cf0ed83cd4dc2575e65acffa8f33511631b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4faa5ae0325e63612e6a3f6c274cf0ed83cd4dc2575e65acffa8f33511631b9->enter($__internal_c4faa5ae0325e63612e6a3f6c274cf0ed83cd4dc2575e65acffa8f33511631b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7f87af0d9fb5a4d7e39d4bb2ba200f4b6da5e7a571529a7e4d294efddf7520cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f87af0d9fb5a4d7e39d4bb2ba200f4b6da5e7a571529a7e4d294efddf7520cf->enter($__internal_7f87af0d9fb5a4d7e39d4bb2ba200f4b6da5e7a571529a7e4d294efddf7520cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7f87af0d9fb5a4d7e39d4bb2ba200f4b6da5e7a571529a7e4d294efddf7520cf->leave($__internal_7f87af0d9fb5a4d7e39d4bb2ba200f4b6da5e7a571529a7e4d294efddf7520cf_prof);

        
        $__internal_c4faa5ae0325e63612e6a3f6c274cf0ed83cd4dc2575e65acffa8f33511631b9->leave($__internal_c4faa5ae0325e63612e6a3f6c274cf0ed83cd4dc2575e65acffa8f33511631b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64698d4a6f7049622740f121af7e03b7c265c1b6949e043e6eb1cfb761d614b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64698d4a6f7049622740f121af7e03b7c265c1b6949e043e6eb1cfb761d614b4->enter($__internal_64698d4a6f7049622740f121af7e03b7c265c1b6949e043e6eb1cfb761d614b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4733d59fbdbc31e814152d761d1a7a116492fea99505c008edf0cc52a4ac73b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4733d59fbdbc31e814152d761d1a7a116492fea99505c008edf0cc52a4ac73b4->enter($__internal_4733d59fbdbc31e814152d761d1a7a116492fea99505c008edf0cc52a4ac73b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4733d59fbdbc31e814152d761d1a7a116492fea99505c008edf0cc52a4ac73b4->leave($__internal_4733d59fbdbc31e814152d761d1a7a116492fea99505c008edf0cc52a4ac73b4_prof);

        
        $__internal_64698d4a6f7049622740f121af7e03b7c265c1b6949e043e6eb1cfb761d614b4->leave($__internal_64698d4a6f7049622740f121af7e03b7c265c1b6949e043e6eb1cfb761d614b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51094246c8b9a622004e8e5d5674192c21be2b7ae6b11010849ff1679245489c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51094246c8b9a622004e8e5d5674192c21be2b7ae6b11010849ff1679245489c->enter($__internal_51094246c8b9a622004e8e5d5674192c21be2b7ae6b11010849ff1679245489c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5a03deb6f140bcd3aed1622fc7013753968f7d87aff701f4e8b85664c6681b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a03deb6f140bcd3aed1622fc7013753968f7d87aff701f4e8b85664c6681b8->enter($__internal_a5a03deb6f140bcd3aed1622fc7013753968f7d87aff701f4e8b85664c6681b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a5a03deb6f140bcd3aed1622fc7013753968f7d87aff701f4e8b85664c6681b8->leave($__internal_a5a03deb6f140bcd3aed1622fc7013753968f7d87aff701f4e8b85664c6681b8_prof);

        
        $__internal_51094246c8b9a622004e8e5d5674192c21be2b7ae6b11010849ff1679245489c->leave($__internal_51094246c8b9a622004e8e5d5674192c21be2b7ae6b11010849ff1679245489c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
