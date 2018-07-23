<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9c91167e791af5b93629dd202fa06ff83e074233c5294aaaddd5900dc895e760 extends Twig_Template
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
        $__internal_1b6ca686fc0d5ab2d0dcfc28c44d5e00d463cc8d9570d196e25909ddc76f7eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6ca686fc0d5ab2d0dcfc28c44d5e00d463cc8d9570d196e25909ddc76f7eea->enter($__internal_1b6ca686fc0d5ab2d0dcfc28c44d5e00d463cc8d9570d196e25909ddc76f7eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c19574c3ab087bcb0d50e9901fc3dc5b6b70a493694ee326cedb117d78047d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19574c3ab087bcb0d50e9901fc3dc5b6b70a493694ee326cedb117d78047d51->enter($__internal_c19574c3ab087bcb0d50e9901fc3dc5b6b70a493694ee326cedb117d78047d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1b6ca686fc0d5ab2d0dcfc28c44d5e00d463cc8d9570d196e25909ddc76f7eea->leave($__internal_1b6ca686fc0d5ab2d0dcfc28c44d5e00d463cc8d9570d196e25909ddc76f7eea_prof);

        
        $__internal_c19574c3ab087bcb0d50e9901fc3dc5b6b70a493694ee326cedb117d78047d51->leave($__internal_c19574c3ab087bcb0d50e9901fc3dc5b6b70a493694ee326cedb117d78047d51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
