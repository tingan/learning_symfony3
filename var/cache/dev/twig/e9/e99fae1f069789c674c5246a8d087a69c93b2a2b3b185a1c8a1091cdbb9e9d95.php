<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ba78c969832ebbd770b6c07140d98093364b884a61f33dcf4b09bebcd7e9cf98 extends Twig_Template
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
        $__internal_17702417c0140f02f8dbc1790f7b09e181ca60457624fab2b6839069f23d57c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17702417c0140f02f8dbc1790f7b09e181ca60457624fab2b6839069f23d57c4->enter($__internal_17702417c0140f02f8dbc1790f7b09e181ca60457624fab2b6839069f23d57c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_0fd8ee14d41eb80f03db4361275adee80349c5b40f21e85c99b887366574f5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd8ee14d41eb80f03db4361275adee80349c5b40f21e85c99b887366574f5eb->enter($__internal_0fd8ee14d41eb80f03db4361275adee80349c5b40f21e85c99b887366574f5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_17702417c0140f02f8dbc1790f7b09e181ca60457624fab2b6839069f23d57c4->leave($__internal_17702417c0140f02f8dbc1790f7b09e181ca60457624fab2b6839069f23d57c4_prof);

        
        $__internal_0fd8ee14d41eb80f03db4361275adee80349c5b40f21e85c99b887366574f5eb->leave($__internal_0fd8ee14d41eb80f03db4361275adee80349c5b40f21e85c99b887366574f5eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
