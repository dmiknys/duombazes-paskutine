<?php

/* login.twig */
class __TwigTemplate_a9a358ee056e08d2f9405ab774ba18838c56d0adb122ee479298b9e4af4ba56b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'vadovas' => array($this, 'block_vadovas'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">

\t<title>Lankomumo sistema</title>
</head>
<body>
\t<div class=\"container\">
\t\t<h2>Prisijungti:</h2>
\t\t<table class=\"table table-bordered\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Administratorius</th>
\t\t\t\t\t<th>Login</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<!-- <table class=\"table table-bordered\">
\t\t<thead>
\t\t<tr>
\t\t<th>Vadovas</th>
\t\t<th>Login</th>
\t</tr>
</thead>
<tbody>
";
        // line 37
        $this->displayBlock('vadovas', $context, $blocks);
        // line 40
        echo "</tbody>
</table> -->
</div>

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
\t\t\t\t";
    }

    // line 37
    public function block_vadovas($context, array $blocks = array())
    {
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  86 => 37,  81 => 25,  78 => 24,  66 => 40,  64 => 37,  52 => 27,  50 => 24,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">

\t<title>Lankomumo sistema</title>
</head>
<body>
\t<div class=\"container\">
\t\t<h2>Prisijungti:</h2>
\t\t<table class=\"table table-bordered\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Administratorius</th>
\t\t\t\t\t<th>Login</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% block content %}

\t\t\t\t{% endblock %}
\t\t\t</tbody>
\t\t</table>
\t\t<!-- <table class=\"table table-bordered\">
\t\t<thead>
\t\t<tr>
\t\t<th>Vadovas</th>
\t\t<th>Login</th>
\t</tr>
</thead>
<tbody>
{% block vadovas %}

{% endblock %}
</tbody>
</table> -->
</div>

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "login.twig", "C:\\xampp\\htdocs\\duombazes-paskutine\\templates\\login.twig");
    }
}
