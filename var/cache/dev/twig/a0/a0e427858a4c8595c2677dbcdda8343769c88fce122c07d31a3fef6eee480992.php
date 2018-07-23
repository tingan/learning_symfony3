<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2d9473d5e2b2b05baadea3bb0ac22ae0752bf6f330d5b0901c30b4a021d50bfa extends Twig_Template
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
        $__internal_6288d509c6e6bdb47586800f746e7a00b54d828d727557007c5835f3efd05969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6288d509c6e6bdb47586800f746e7a00b54d828d727557007c5835f3efd05969->enter($__internal_6288d509c6e6bdb47586800f746e7a00b54d828d727557007c5835f3efd05969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7dc8d568decea56c6b7f30aee8efb97e9dcfd12c18981729db659772824d69dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc8d568decea56c6b7f30aee8efb97e9dcfd12c18981729db659772824d69dd->enter($__internal_7dc8d568decea56c6b7f30aee8efb97e9dcfd12c18981729db659772824d69dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6288d509c6e6bdb47586800f746e7a00b54d828d727557007c5835f3efd05969->leave($__internal_6288d509c6e6bdb47586800f746e7a00b54d828d727557007c5835f3efd05969_prof);

        
        $__internal_7dc8d568decea56c6b7f30aee8efb97e9dcfd12c18981729db659772824d69dd->leave($__internal_7dc8d568decea56c6b7f30aee8efb97e9dcfd12c18981729db659772824d69dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
