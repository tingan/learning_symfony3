<?php

/* clients/form.html.twig */
class __TwigTemplate_2fd69ca472423858c5c480336bc73433862cf38110d737a933cd7b7dbcbd2b8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_f5064a9744aeff272ec03fed81bc04b4f9a95d509f2153a7833a5b0838fa811e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5064a9744aeff272ec03fed81bc04b4f9a95d509f2153a7833a5b0838fa811e->enter($__internal_f5064a9744aeff272ec03fed81bc04b4f9a95d509f2153a7833a5b0838fa811e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_6caa02f3057c045798e57b131d1fdeb55a6ef417cea7a3d103d168fc0acf77c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6caa02f3057c045798e57b131d1fdeb55a6ef417cea7a3d103d168fc0acf77c3->enter($__internal_6caa02f3057c045798e57b131d1fdeb55a6ef417cea7a3d103d168fc0acf77c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5064a9744aeff272ec03fed81bc04b4f9a95d509f2153a7833a5b0838fa811e->leave($__internal_f5064a9744aeff272ec03fed81bc04b4f9a95d509f2153a7833a5b0838fa811e_prof);

        
        $__internal_6caa02f3057c045798e57b131d1fdeb55a6ef417cea7a3d103d168fc0acf77c3->leave($__internal_6caa02f3057c045798e57b131d1fdeb55a6ef417cea7a3d103d168fc0acf77c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58b266761bc1f2fb0c0b2f0c4f64e15ba37be399f05264d4f7853d2d12946086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b266761bc1f2fb0c0b2f0c4f64e15ba37be399f05264d4f7853d2d12946086->enter($__internal_58b266761bc1f2fb0c0b2f0c4f64e15ba37be399f05264d4f7853d2d12946086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3772d41dd57cb73069eb8eaaf6c667467f8a5e8cd10cba44d23f3631b2260ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3772d41dd57cb73069eb8eaaf6c667467f8a5e8cd10cba44d23f3631b2260ebf->enter($__internal_3772d41dd57cb73069eb8eaaf6c667467f8a5e8cd10cba44d23f3631b2260ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>New Client</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

";
        
        $__internal_3772d41dd57cb73069eb8eaaf6c667467f8a5e8cd10cba44d23f3631b2260ebf->leave($__internal_3772d41dd57cb73069eb8eaaf6c667467f8a5e8cd10cba44d23f3631b2260ebf_prof);

        
        $__internal_58b266761bc1f2fb0c0b2f0c4f64e15ba37be399f05264d4f7853d2d12946086->leave($__internal_58b266761bc1f2fb0c0b2f0c4f64e15ba37be399f05264d4f7853d2d12946086_prof);

    }

    public function getTemplateName()
    {
        return "clients/form.html.twig";
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
        <h4>New Client</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

{% endblock %}
", "clients/form.html.twig", "/Users/brucetang/Documents/SourceCode/LyndaLearningSymfony3/CH02/02_02/final/app/Resources/views/clients/form.html.twig");
    }
}
