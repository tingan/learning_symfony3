<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bd75b7b3f248ee3a5bc58e383e633b9e23f4daad3033e34e62b3cde4b8290762 extends Twig_Template
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
        $__internal_bdf1e655d94aa872a47f2089e33667f93292ddef0549064ea8727de2143ec30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf1e655d94aa872a47f2089e33667f93292ddef0549064ea8727de2143ec30d->enter($__internal_bdf1e655d94aa872a47f2089e33667f93292ddef0549064ea8727de2143ec30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4ae34969ad7ebece11b7e44b94dc33fd47e853cdfbb876630324c76dd2c28a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae34969ad7ebece11b7e44b94dc33fd47e853cdfbb876630324c76dd2c28a09->enter($__internal_4ae34969ad7ebece11b7e44b94dc33fd47e853cdfbb876630324c76dd2c28a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bdf1e655d94aa872a47f2089e33667f93292ddef0549064ea8727de2143ec30d->leave($__internal_bdf1e655d94aa872a47f2089e33667f93292ddef0549064ea8727de2143ec30d_prof);

        
        $__internal_4ae34969ad7ebece11b7e44b94dc33fd47e853cdfbb876630324c76dd2c28a09->leave($__internal_4ae34969ad7ebece11b7e44b94dc33fd47e853cdfbb876630324c76dd2c28a09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
