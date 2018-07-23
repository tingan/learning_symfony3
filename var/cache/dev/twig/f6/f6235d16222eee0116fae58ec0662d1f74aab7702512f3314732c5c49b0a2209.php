<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_9975ff1085fbeb62a7e9210f3a0048694bb3d27cae93b8712cc518ee2c1fce4e extends Twig_Template
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
        $__internal_de5bdcc42e9d2cc4be96831fe7471dd3a949e75fd51587317064a6712aca8e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5bdcc42e9d2cc4be96831fe7471dd3a949e75fd51587317064a6712aca8e70->enter($__internal_de5bdcc42e9d2cc4be96831fe7471dd3a949e75fd51587317064a6712aca8e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1db26cd146643509757a2a58e3012ff0976c98af17ed420fadd708eca7fb9970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db26cd146643509757a2a58e3012ff0976c98af17ed420fadd708eca7fb9970->enter($__internal_1db26cd146643509757a2a58e3012ff0976c98af17ed420fadd708eca7fb9970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_de5bdcc42e9d2cc4be96831fe7471dd3a949e75fd51587317064a6712aca8e70->leave($__internal_de5bdcc42e9d2cc4be96831fe7471dd3a949e75fd51587317064a6712aca8e70_prof);

        
        $__internal_1db26cd146643509757a2a58e3012ff0976c98af17ed420fadd708eca7fb9970->leave($__internal_1db26cd146643509757a2a58e3012ff0976c98af17ed420fadd708eca7fb9970_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
