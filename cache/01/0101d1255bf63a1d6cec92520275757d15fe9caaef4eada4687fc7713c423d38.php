<?php

/* adminLogin.twig */
class __TwigTemplate_feb06fca5f6a2594ed7d0125e91867582a9ffbf7ae09293771256ad9b0494216 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("login.twig", "adminLogin.twig", 1);
        $this->blocks = array(
            'admin' => array($this, 'block_admin'),
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
    public function block_admin($context, array $blocks = array())
    {
        // line 4
        echo "
<tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Administratorius"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Administratorius"]) {
            // line 7
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Administratorius"], "getName", array(), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Administratorius'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</tr>

";
    }

    public function getTemplateName()
    {
        return "adminLogin.twig";
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

{% block admin  %}

<tr>
{% for Administratorius in Administratorius %}
  {{ Administratorius.getName() }}
{% endfor %}
</tr>

{% endblock %}
", "adminLogin.twig", "C:\\xampp\\htdocs\\learning OOP\\duombazes paskutine\\templates\\adminLogin.twig");
    }
}
