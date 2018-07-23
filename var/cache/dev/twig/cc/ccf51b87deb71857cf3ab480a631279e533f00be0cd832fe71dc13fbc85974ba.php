<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_451a87a25089fead143f0ca5456fdc0ad922f70e063d07f1f2a66169a1998267 extends Twig_Template
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
        $__internal_f2e336d94e9bbf3608be52b37b6652b0285c0ad97704977077a86269c9532d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e336d94e9bbf3608be52b37b6652b0285c0ad97704977077a86269c9532d36->enter($__internal_f2e336d94e9bbf3608be52b37b6652b0285c0ad97704977077a86269c9532d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ba0e89efd0f3df5901b5a367592eedd330fc85a808ebcb726dad327cc4c66953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0e89efd0f3df5901b5a367592eedd330fc85a808ebcb726dad327cc4c66953->enter($__internal_ba0e89efd0f3df5901b5a367592eedd330fc85a808ebcb726dad327cc4c66953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f2e336d94e9bbf3608be52b37b6652b0285c0ad97704977077a86269c9532d36->leave($__internal_f2e336d94e9bbf3608be52b37b6652b0285c0ad97704977077a86269c9532d36_prof);

        
        $__internal_ba0e89efd0f3df5901b5a367592eedd330fc85a808ebcb726dad327cc4c66953->leave($__internal_ba0e89efd0f3df5901b5a367592eedd330fc85a808ebcb726dad327cc4c66953_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
