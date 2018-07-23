<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_29382dfc930f2bd70de7dba82f9ff80f93bfce90a715d03d61b78715d0e476dd extends Twig_Template
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
        $__internal_0b0c51401b3de5467274845128fd2c2a86ff2ecd8d7a8048d100653d65a89d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0c51401b3de5467274845128fd2c2a86ff2ecd8d7a8048d100653d65a89d18->enter($__internal_0b0c51401b3de5467274845128fd2c2a86ff2ecd8d7a8048d100653d65a89d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e7005169cdb781b3da7bd41bce6033ea87940327c61b1dea6cf26cc4b5bb09e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7005169cdb781b3da7bd41bce6033ea87940327c61b1dea6cf26cc4b5bb09e9->enter($__internal_e7005169cdb781b3da7bd41bce6033ea87940327c61b1dea6cf26cc4b5bb09e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0b0c51401b3de5467274845128fd2c2a86ff2ecd8d7a8048d100653d65a89d18->leave($__internal_0b0c51401b3de5467274845128fd2c2a86ff2ecd8d7a8048d100653d65a89d18_prof);

        
        $__internal_e7005169cdb781b3da7bd41bce6033ea87940327c61b1dea6cf26cc4b5bb09e9->leave($__internal_e7005169cdb781b3da7bd41bce6033ea87940327c61b1dea6cf26cc4b5bb09e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
