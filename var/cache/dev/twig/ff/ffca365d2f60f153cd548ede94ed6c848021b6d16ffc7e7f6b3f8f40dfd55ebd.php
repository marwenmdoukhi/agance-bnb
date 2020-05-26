<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/login.html.twig */
class __TwigTemplate_d237243ac6e7825432313b634d6833f826fe10fb15a17a3bc8203b6015d19387 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Identification Membre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
        <h1 class=\"my-4 text-center\">Mon Compte - Identification</h1>

        <div class=\"row\">
            <div class=\"col-12 col-md-6 mx-auto bg-secondary px-3 py-3\">

                ";
        // line 13
        if ((isset($context["authError"]) || array_key_exists("authError", $context) ? $context["authError"] : (function () { throw new RuntimeError('Variable "authError" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "                    <div class=\"alert alert-danger\">Nom d'utilisateur ou mot de passe invalide</div>
                ";
        }
        // line 16
        echo "
                <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.login");
        echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <label for=\"email\">E-mail</label>
                        <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <input type=\"text\" name=\"_password\" id=\"password\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success\"> Se Connecter </button>
                    </div>
                </form>

                <hr />

                <div class=\"text-center\">
                    <p>Pas encore inscrit ?</p>
                    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.register");
        echo "\" class=\"btn btn-primary\">Créer mon compte membre</a>
                </div>

            </div>
        </div>


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 35,  106 => 17,  103 => 16,  99 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Identification Membre{% endblock %}

{% block body %}

    <div class=\"container\">
        <h1 class=\"my-4 text-center\">Mon Compte - Identification</h1>

        <div class=\"row\">
            <div class=\"col-12 col-md-6 mx-auto bg-secondary px-3 py-3\">

                {% if authError %}
                    <div class=\"alert alert-danger\">Nom d'utilisateur ou mot de passe invalide</div>
                {% endif %}

                <form action=\"{{ path('user.login') }}\" method=\"POST\">
                    <div class=\"form-group\">
                        <label for=\"email\">E-mail</label>
                        <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <input type=\"text\" name=\"_password\" id=\"password\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success\"> Se Connecter </button>
                    </div>
                </form>

                <hr />

                <div class=\"text-center\">
                    <p>Pas encore inscrit ?</p>
                    <a href=\"{{ path('user.register') }}\" class=\"btn btn-primary\">Créer mon compte membre</a>
                </div>

            </div>
        </div>


    </div>

{% endblock %}", "user/login.html.twig", "C:\\wamp64\\www\\dev\\agance\\templates\\user\\login.html.twig");
    }
}
