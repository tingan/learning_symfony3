<?php

/* clients/index.html.twig */
class __TwigTemplate_714dbe811080fcec9f940c669b742dd6cc126b7d96ff9e9d51e53ad98f30981b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94143aabfe158e0624f47c3230ce7d0f01740edd6cc15d361b5271bb40278800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94143aabfe158e0624f47c3230ce7d0f01740edd6cc15d361b5271bb40278800->enter($__internal_94143aabfe158e0624f47c3230ce7d0f01740edd6cc15d361b5271bb40278800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_fa99c3f7e7a503ac6558f77781592aaf82043e7a7eefd166178c770d5421a1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa99c3f7e7a503ac6558f77781592aaf82043e7a7eefd166178c770d5421a1b5->enter($__internal_fa99c3f7e7a503ac6558f77781592aaf82043e7a7eefd166178c770d5421a1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94143aabfe158e0624f47c3230ce7d0f01740edd6cc15d361b5271bb40278800->leave($__internal_94143aabfe158e0624f47c3230ce7d0f01740edd6cc15d361b5271bb40278800_prof);

        
        $__internal_fa99c3f7e7a503ac6558f77781592aaf82043e7a7eefd166178c770d5421a1b5->leave($__internal_fa99c3f7e7a503ac6558f77781592aaf82043e7a7eefd166178c770d5421a1b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72cff70277d545b230d7c4598613197d7d544343e77218fd9639cd49236bfcd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72cff70277d545b230d7c4598613197d7d544343e77218fd9639cd49236bfcd2->enter($__internal_72cff70277d545b230d7c4598613197d7d544343e77218fd9639cd49236bfcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd72ba9e2fca167e503a4043ed90702266e325c4a162bf398b1d4de919241d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd72ba9e2fca167e503a4043ed90702266e325c4a162bf398b1d4de919241d72->enter($__internal_dd72ba9e2fca167e503a4043ed90702266e325c4a162bf398b1d4de919241d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_dd72ba9e2fca167e503a4043ed90702266e325c4a162bf398b1d4de919241d72->leave($__internal_dd72ba9e2fca167e503a4043ed90702266e325c4a162bf398b1d4de919241d72_prof);

        
        $__internal_72cff70277d545b230d7c4598613197d7d544343e77218fd9639cd49236bfcd2->leave($__internal_72cff70277d545b230d7c4598613197d7d544343e77218fd9639cd49236bfcd2_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/app/Resources/views/clients/index.html.twig");
    }
}
