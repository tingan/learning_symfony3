<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dc24f53e3c7194fc41d4f5e6c7ae4e0f92ec5f31c86a826e9a13d7b42d23371b extends Twig_Template
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
        $__internal_5b9218be328bd85076b707bab9b71dc24e29adc7c4fc80bb7689091e782bbf1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9218be328bd85076b707bab9b71dc24e29adc7c4fc80bb7689091e782bbf1f->enter($__internal_5b9218be328bd85076b707bab9b71dc24e29adc7c4fc80bb7689091e782bbf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8adac508fa9298c9621535e04083058366e287d221b57782e32bb01cc7f69f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adac508fa9298c9621535e04083058366e287d221b57782e32bb01cc7f69f0d->enter($__internal_8adac508fa9298c9621535e04083058366e287d221b57782e32bb01cc7f69f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5b9218be328bd85076b707bab9b71dc24e29adc7c4fc80bb7689091e782bbf1f->leave($__internal_5b9218be328bd85076b707bab9b71dc24e29adc7c4fc80bb7689091e782bbf1f_prof);

        
        $__internal_8adac508fa9298c9621535e04083058366e287d221b57782e32bb01cc7f69f0d->leave($__internal_8adac508fa9298c9621535e04083058366e287d221b57782e32bb01cc7f69f0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
