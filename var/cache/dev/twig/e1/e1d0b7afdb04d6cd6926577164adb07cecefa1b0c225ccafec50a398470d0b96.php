<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6d8f60a10ad954f728b21c095fbb3a34afeff0a36471c0ea4d44542bb21fecec extends Twig_Template
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
        $__internal_1c21c4b0c67e49d852b795909a2a6a2d4e247a5cfdcfaafa8988f51c9800746f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c21c4b0c67e49d852b795909a2a6a2d4e247a5cfdcfaafa8988f51c9800746f->enter($__internal_1c21c4b0c67e49d852b795909a2a6a2d4e247a5cfdcfaafa8988f51c9800746f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_00ba4045f85f093bead193fb733cdbd1cac56ced69932f1a29e865c845cb08ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ba4045f85f093bead193fb733cdbd1cac56ced69932f1a29e865c845cb08ae->enter($__internal_00ba4045f85f093bead193fb733cdbd1cac56ced69932f1a29e865c845cb08ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1c21c4b0c67e49d852b795909a2a6a2d4e247a5cfdcfaafa8988f51c9800746f->leave($__internal_1c21c4b0c67e49d852b795909a2a6a2d4e247a5cfdcfaafa8988f51c9800746f_prof);

        
        $__internal_00ba4045f85f093bead193fb733cdbd1cac56ced69932f1a29e865c845cb08ae->leave($__internal_00ba4045f85f093bead193fb733cdbd1cac56ced69932f1a29e865c845cb08ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
