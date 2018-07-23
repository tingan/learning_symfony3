<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_19d89d34018237bead9c1c7e96e2c0dbc1bf92de186cedc72cc4357f8aea9072 extends Twig_Template
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
        $__internal_af6c01fb495da3314a1c3e0d846df830a344b7bd3e3a87748bdb6101657a256d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6c01fb495da3314a1c3e0d846df830a344b7bd3e3a87748bdb6101657a256d->enter($__internal_af6c01fb495da3314a1c3e0d846df830a344b7bd3e3a87748bdb6101657a256d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d13c9fabac7c5866fdddfd939735d83351c44a935248b6a64cecac1e78a45c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13c9fabac7c5866fdddfd939735d83351c44a935248b6a64cecac1e78a45c33->enter($__internal_d13c9fabac7c5866fdddfd939735d83351c44a935248b6a64cecac1e78a45c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_af6c01fb495da3314a1c3e0d846df830a344b7bd3e3a87748bdb6101657a256d->leave($__internal_af6c01fb495da3314a1c3e0d846df830a344b7bd3e3a87748bdb6101657a256d_prof);

        
        $__internal_d13c9fabac7c5866fdddfd939735d83351c44a935248b6a64cecac1e78a45c33->leave($__internal_d13c9fabac7c5866fdddfd939735d83351c44a935248b6a64cecac1e78a45c33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
