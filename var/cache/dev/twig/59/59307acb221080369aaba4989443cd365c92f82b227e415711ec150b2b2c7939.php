<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c3196fb8493b97663348aec843b7c29f1510b70244de8bfa63e04d1f42525894 extends Twig_Template
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
        $__internal_7e619b408ba0ed6d08b0fdac3cb6cd6c2ee976d6e54c7173d9e3fc1d4a8ec50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e619b408ba0ed6d08b0fdac3cb6cd6c2ee976d6e54c7173d9e3fc1d4a8ec50a->enter($__internal_7e619b408ba0ed6d08b0fdac3cb6cd6c2ee976d6e54c7173d9e3fc1d4a8ec50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bb23f1d2c1026bc0efcddb97cce17a02c23115dd1a7d7e566dcf8c2fc94ad202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb23f1d2c1026bc0efcddb97cce17a02c23115dd1a7d7e566dcf8c2fc94ad202->enter($__internal_bb23f1d2c1026bc0efcddb97cce17a02c23115dd1a7d7e566dcf8c2fc94ad202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7e619b408ba0ed6d08b0fdac3cb6cd6c2ee976d6e54c7173d9e3fc1d4a8ec50a->leave($__internal_7e619b408ba0ed6d08b0fdac3cb6cd6c2ee976d6e54c7173d9e3fc1d4a8ec50a_prof);

        
        $__internal_bb23f1d2c1026bc0efcddb97cce17a02c23115dd1a7d7e566dcf8c2fc94ad202->leave($__internal_bb23f1d2c1026bc0efcddb97cce17a02c23115dd1a7d7e566dcf8c2fc94ad202_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
