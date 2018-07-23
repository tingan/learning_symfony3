<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_49fc59007b09b68e41cdedf4e703cd99763fbbd2de17d4f1de84ed237ea4ce39 extends Twig_Template
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
        $__internal_02ea5712dfa8185fe6353c871205ca7d1db98b2b73cbe643d4cba44a678297b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ea5712dfa8185fe6353c871205ca7d1db98b2b73cbe643d4cba44a678297b5->enter($__internal_02ea5712dfa8185fe6353c871205ca7d1db98b2b73cbe643d4cba44a678297b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2a5c9f8b77d6bcdc0a8704037b5331a2213798943fa9fffd631a7291902803b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5c9f8b77d6bcdc0a8704037b5331a2213798943fa9fffd631a7291902803b4->enter($__internal_2a5c9f8b77d6bcdc0a8704037b5331a2213798943fa9fffd631a7291902803b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_02ea5712dfa8185fe6353c871205ca7d1db98b2b73cbe643d4cba44a678297b5->leave($__internal_02ea5712dfa8185fe6353c871205ca7d1db98b2b73cbe643d4cba44a678297b5_prof);

        
        $__internal_2a5c9f8b77d6bcdc0a8704037b5331a2213798943fa9fffd631a7291902803b4->leave($__internal_2a5c9f8b77d6bcdc0a8704037b5331a2213798943fa9fffd631a7291902803b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
