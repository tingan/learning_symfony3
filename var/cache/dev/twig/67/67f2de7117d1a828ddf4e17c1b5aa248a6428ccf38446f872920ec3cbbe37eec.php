<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d5d7819c46bd20eb22438c02eecaaa95d40280c45e79bf66f574ebc29c5045a4 extends Twig_Template
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
        $__internal_fb7dc57c04fe2a00c71d8c5e0ed9baad3d73fecd9fbe0c2b3bbb57d719cfa92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7dc57c04fe2a00c71d8c5e0ed9baad3d73fecd9fbe0c2b3bbb57d719cfa92d->enter($__internal_fb7dc57c04fe2a00c71d8c5e0ed9baad3d73fecd9fbe0c2b3bbb57d719cfa92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_eb322789603e62ef65c90c617e75c071ea846050ab755a6a63a2611bf781ced4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb322789603e62ef65c90c617e75c071ea846050ab755a6a63a2611bf781ced4->enter($__internal_eb322789603e62ef65c90c617e75c071ea846050ab755a6a63a2611bf781ced4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fb7dc57c04fe2a00c71d8c5e0ed9baad3d73fecd9fbe0c2b3bbb57d719cfa92d->leave($__internal_fb7dc57c04fe2a00c71d8c5e0ed9baad3d73fecd9fbe0c2b3bbb57d719cfa92d_prof);

        
        $__internal_eb322789603e62ef65c90c617e75c071ea846050ab755a6a63a2611bf781ced4->leave($__internal_eb322789603e62ef65c90c617e75c071ea846050ab755a6a63a2611bf781ced4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
