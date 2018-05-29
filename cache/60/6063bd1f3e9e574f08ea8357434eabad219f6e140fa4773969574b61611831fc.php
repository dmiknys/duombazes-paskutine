<?php

/* vadovasLogin.twig */
class __TwigTemplate_d435941c638f82eec1100b8e3d539b42e58705592c8593373314aa52a4a32859 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("login.twig", "vadovasLogin.twig", 1);
        $this->blocks = array(
            'vadovas' => array($this, 'block_vadovas'),
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
    public function block_vadovas($context, array $blocks = array())
    {
        // line 4
        echo "
<tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Vadovas"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Vadovas"]) {
            // line 7
            echo "<tr> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Vadovas"], "getName", array(), "method"), "html", null, true);
            echo " </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Vadovas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</tr>

";
    }

    public function getTemplateName()
    {
        return "vadovasLogin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  43 => 7,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"login.twig\" %}

{% block vadovas  %}

<tr>
{% for Vadovas in Vadovas %}
<tr> {{ Vadovas.getName() }} </tr>
{% endfor %}
</tr>

{% endblock %}
", "vadovasLogin.twig", "C:\\xampp\\htdocs\\learning OOP\\duombazes paskutine\\templates\\vadovasLogin.twig");
    }
}
