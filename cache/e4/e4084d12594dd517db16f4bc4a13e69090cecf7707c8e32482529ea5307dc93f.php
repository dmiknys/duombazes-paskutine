<?php

/* loginData.twig */
class __TwigTemplate_034e2fa8ff332505f533c72ca2841069260757fcc67c2448151abcbaf90cf591 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("login.twig", "loginData.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admin"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["admins"]) {
            // line 6
            echo "  <tr>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admins"], "name", array()), "html", null, true);
            echo "</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admins'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "loginData.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"login.twig\" %}

{% block content  %}

{% for admins in admin %}
  <tr>{{ admins.name }}</tr>
{% endfor %}

{% endblock %}
", "loginData.twig", "C:\\xampp\\htdocs\\learning OOP\\duombazes paskutine\\templates\\loginData.twig");
    }
}
