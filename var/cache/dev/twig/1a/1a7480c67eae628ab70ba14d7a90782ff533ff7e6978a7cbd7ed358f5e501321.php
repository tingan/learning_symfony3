<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_874b5099f1f0fb157a72a8d98a1320691e7f30c0d673d0668112a7f19962304d extends Twig_Template
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
        $__internal_f51bd55900a47bd746d72a485352f978cc82250540bc9c97b9d4f5a7920a680b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51bd55900a47bd746d72a485352f978cc82250540bc9c97b9d4f5a7920a680b->enter($__internal_f51bd55900a47bd746d72a485352f978cc82250540bc9c97b9d4f5a7920a680b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7bf09f3781a68466589abca0b4937b7317f31b835fea49b91153f885493d5171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf09f3781a68466589abca0b4937b7317f31b835fea49b91153f885493d5171->enter($__internal_7bf09f3781a68466589abca0b4937b7317f31b835fea49b91153f885493d5171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f51bd55900a47bd746d72a485352f978cc82250540bc9c97b9d4f5a7920a680b->leave($__internal_f51bd55900a47bd746d72a485352f978cc82250540bc9c97b9d4f5a7920a680b_prof);

        
        $__internal_7bf09f3781a68466589abca0b4937b7317f31b835fea49b91153f885493d5171->leave($__internal_7bf09f3781a68466589abca0b4937b7317f31b835fea49b91153f885493d5171_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
