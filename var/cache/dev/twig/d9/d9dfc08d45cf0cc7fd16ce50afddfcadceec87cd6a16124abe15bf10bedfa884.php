<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_09e6a41125a4f59f7373167fa871068f2455e791b6f4fe139b546fb4d627bfe0 extends Twig_Template
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
        $__internal_fb7f1a0e2235a7437fbd84f12befdc3386df0d03bba38167e89e99b14ee16da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7f1a0e2235a7437fbd84f12befdc3386df0d03bba38167e89e99b14ee16da1->enter($__internal_fb7f1a0e2235a7437fbd84f12befdc3386df0d03bba38167e89e99b14ee16da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d9a2dcbbc4b9cf74422ca073735d4375f137a8b4b04ff4b1d7bdf27bf64a17d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a2dcbbc4b9cf74422ca073735d4375f137a8b4b04ff4b1d7bdf27bf64a17d2->enter($__internal_d9a2dcbbc4b9cf74422ca073735d4375f137a8b4b04ff4b1d7bdf27bf64a17d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fb7f1a0e2235a7437fbd84f12befdc3386df0d03bba38167e89e99b14ee16da1->leave($__internal_fb7f1a0e2235a7437fbd84f12befdc3386df0d03bba38167e89e99b14ee16da1_prof);

        
        $__internal_d9a2dcbbc4b9cf74422ca073735d4375f137a8b4b04ff4b1d7bdf27bf64a17d2->leave($__internal_d9a2dcbbc4b9cf74422ca073735d4375f137a8b4b04ff4b1d7bdf27bf64a17d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
