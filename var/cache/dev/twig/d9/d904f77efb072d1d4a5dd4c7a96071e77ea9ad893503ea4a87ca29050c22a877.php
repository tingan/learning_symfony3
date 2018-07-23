<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fff8fb04cd7d2ab5532618ec6086693bfc2d34c2abb2003ac2b4184c4b8d29f7 extends Twig_Template
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
        $__internal_ceae03176707437bc2073d43a028bfa82e777501b1317587fc57a3c2a7f7fda5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceae03176707437bc2073d43a028bfa82e777501b1317587fc57a3c2a7f7fda5->enter($__internal_ceae03176707437bc2073d43a028bfa82e777501b1317587fc57a3c2a7f7fda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e36723e71460b2a5aa7f87f6053704238bbd2a6148c8d766d047e339d148227e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36723e71460b2a5aa7f87f6053704238bbd2a6148c8d766d047e339d148227e->enter($__internal_e36723e71460b2a5aa7f87f6053704238bbd2a6148c8d766d047e339d148227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ceae03176707437bc2073d43a028bfa82e777501b1317587fc57a3c2a7f7fda5->leave($__internal_ceae03176707437bc2073d43a028bfa82e777501b1317587fc57a3c2a7f7fda5_prof);

        
        $__internal_e36723e71460b2a5aa7f87f6053704238bbd2a6148c8d766d047e339d148227e->leave($__internal_e36723e71460b2a5aa7f87f6053704238bbd2a6148c8d766d047e339d148227e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
