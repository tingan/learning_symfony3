<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4f20c864c3ae70f1502fdf7314b2b60ab9b790f695f60ab037919efa157a79f0 extends Twig_Template
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
        $__internal_6520d2de7f2e9eb3c27f2645f3e7aa61b1a8d1e848bf3099413bbc35f0d6fa15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6520d2de7f2e9eb3c27f2645f3e7aa61b1a8d1e848bf3099413bbc35f0d6fa15->enter($__internal_6520d2de7f2e9eb3c27f2645f3e7aa61b1a8d1e848bf3099413bbc35f0d6fa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_cf2e36d223bbe71a54c4b2f7f403fa1c41a2c34fd9030f082210aebea2b957be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2e36d223bbe71a54c4b2f7f403fa1c41a2c34fd9030f082210aebea2b957be->enter($__internal_cf2e36d223bbe71a54c4b2f7f403fa1c41a2c34fd9030f082210aebea2b957be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6520d2de7f2e9eb3c27f2645f3e7aa61b1a8d1e848bf3099413bbc35f0d6fa15->leave($__internal_6520d2de7f2e9eb3c27f2645f3e7aa61b1a8d1e848bf3099413bbc35f0d6fa15_prof);

        
        $__internal_cf2e36d223bbe71a54c4b2f7f403fa1c41a2c34fd9030f082210aebea2b957be->leave($__internal_cf2e36d223bbe71a54c4b2f7f403fa1c41a2c34fd9030f082210aebea2b957be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
