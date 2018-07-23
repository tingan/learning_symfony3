<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_15d0e26c69d00f020161e391654c6a45852c5091000276c6d071bd947c1715ee extends Twig_Template
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
        $__internal_06fb8224051bff2934bcaa37cf89213c9c76d7e250213c39b7e9924657769c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06fb8224051bff2934bcaa37cf89213c9c76d7e250213c39b7e9924657769c74->enter($__internal_06fb8224051bff2934bcaa37cf89213c9c76d7e250213c39b7e9924657769c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6529f8cc4c7c33b4c27e538de95cd7f99cc4d4ab4f663bdf7b92914612ec2e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6529f8cc4c7c33b4c27e538de95cd7f99cc4d4ab4f663bdf7b92914612ec2e02->enter($__internal_6529f8cc4c7c33b4c27e538de95cd7f99cc4d4ab4f663bdf7b92914612ec2e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_06fb8224051bff2934bcaa37cf89213c9c76d7e250213c39b7e9924657769c74->leave($__internal_06fb8224051bff2934bcaa37cf89213c9c76d7e250213c39b7e9924657769c74_prof);

        
        $__internal_6529f8cc4c7c33b4c27e538de95cd7f99cc4d4ab4f663bdf7b92914612ec2e02->leave($__internal_6529f8cc4c7c33b4c27e538de95cd7f99cc4d4ab4f663bdf7b92914612ec2e02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
