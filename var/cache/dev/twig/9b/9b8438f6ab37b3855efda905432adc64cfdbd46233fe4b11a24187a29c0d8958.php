<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f3fb7f681d3a9c4815ebe0273b2bf07d5a79f00f2db350eca25e1967b09bfb00 extends Twig_Template
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
        $__internal_f06ea6e8158ff0019d8b69571faad21d4e4da4387218dc5bc6690fbe8544639c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06ea6e8158ff0019d8b69571faad21d4e4da4387218dc5bc6690fbe8544639c->enter($__internal_f06ea6e8158ff0019d8b69571faad21d4e4da4387218dc5bc6690fbe8544639c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_406c38b4f9cad38e5189a6f3d494e1d831a2b6ec517192f3a4db6300698f7eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406c38b4f9cad38e5189a6f3d494e1d831a2b6ec517192f3a4db6300698f7eaf->enter($__internal_406c38b4f9cad38e5189a6f3d494e1d831a2b6ec517192f3a4db6300698f7eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f06ea6e8158ff0019d8b69571faad21d4e4da4387218dc5bc6690fbe8544639c->leave($__internal_f06ea6e8158ff0019d8b69571faad21d4e4da4387218dc5bc6690fbe8544639c_prof);

        
        $__internal_406c38b4f9cad38e5189a6f3d494e1d831a2b6ec517192f3a4db6300698f7eaf->leave($__internal_406c38b4f9cad38e5189a6f3d494e1d831a2b6ec517192f3a4db6300698f7eaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
