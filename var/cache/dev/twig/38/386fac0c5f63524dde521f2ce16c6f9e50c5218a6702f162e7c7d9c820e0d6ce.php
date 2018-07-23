<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_92f277ff7d95af27380725fb4c068510b008352fe49e91c0da22c1c380250d1c extends Twig_Template
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
        $__internal_0e2a981964083c0e6f0703530e43b87366d91607d65785f8c846f0bf5b633a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2a981964083c0e6f0703530e43b87366d91607d65785f8c846f0bf5b633a52->enter($__internal_0e2a981964083c0e6f0703530e43b87366d91607d65785f8c846f0bf5b633a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b2cc5d2e6e97afe21a9abc85acca0d87a337a0d747a36f06b6b0d15afae3de66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cc5d2e6e97afe21a9abc85acca0d87a337a0d747a36f06b6b0d15afae3de66->enter($__internal_b2cc5d2e6e97afe21a9abc85acca0d87a337a0d747a36f06b6b0d15afae3de66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0e2a981964083c0e6f0703530e43b87366d91607d65785f8c846f0bf5b633a52->leave($__internal_0e2a981964083c0e6f0703530e43b87366d91607d65785f8c846f0bf5b633a52_prof);

        
        $__internal_b2cc5d2e6e97afe21a9abc85acca0d87a337a0d747a36f06b6b0d15afae3de66->leave($__internal_b2cc5d2e6e97afe21a9abc85acca0d87a337a0d747a36f06b6b0d15afae3de66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
