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

/* layout/header.html.twig */
class __TwigTemplate_8f431fdc6859b8ee555162ce427c12d8e1dd30862e4e4fa67804936a0cf68886 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        // line 2
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Shine Consulting</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad.index");
        echo "\">Nos annonces </a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                        <img src=\" ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "avatar", [], "any", false, false, false, 21)))), "html", null, true);
            echo "\" class=\"avatar avatar-mini\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "fullName", [], "any", false, false, false, 21), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "fullName", [], "any", false, false, false, 21), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <a class=\"dropdown-item\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">Mon Compte</a>
                        ";
            // line 25
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 26
                echo "
                        <a class=\"dropdown-item\" href=\"";
                // line 27
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.bookings");
                echo "\">Mes réservations</a>
                        ";
            }
            // line 29
            echo "                        <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.profile");
            echo "\">Modifier mes données</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.password");
            echo "\">Modifier mon mot de passe</a>
                        <div class=\"dropdown-divider\"></div>
                        ";
            // line 32
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "
                        <a class=\"dropdown-item\" href=\"";
                // line 34
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad.create");
                echo "\">Ajouter une annonce</a>
                        ";
            }
            // line 36
            echo "                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.logout");
            echo "\">Se Déconnecter</a>
                    </div>
                </li>


            ";
        } else {
            // line 43
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.login");
            echo "\">Mon Compte</a>
                </li>
            ";
        }
        // line 47
        echo "        </ul>
    </div>
</nav>

";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "flashes", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["types"] => $context["messages"]) {
            // line 53
            echo "    <div class=\"container\">
        <div class=\"alert alert-";
            // line 54
            echo twig_escape_filter($this->env, $context["types"], "html", null, true);
            echo "\">
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 56
                echo "                <p class=\"m-0\">";
                echo $context["message"];
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['types'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 58,  162 => 56,  158 => 55,  154 => 54,  151 => 53,  147 => 52,  141 => 47,  135 => 44,  132 => 43,  123 => 37,  120 => 36,  115 => 34,  112 => 33,  110 => 32,  105 => 30,  100 => 29,  95 => 27,  92 => 26,  90 => 25,  86 => 24,  76 => 21,  72 => 19,  70 => 18,  63 => 14,  57 => 11,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Navigation #}
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Shine Consulting</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('home') }}\">Accueil </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('ad.index') }}\">Nos annonces </a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            {% if app.user %}
                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                        <img src=\" {{absolute_url(asset('images/' ~app.user.avatar))}}\" class=\"avatar avatar-mini\" alt=\"{{ app.user.fullName }}\"> {{ app.user.fullName }}
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                        <a class=\"dropdown-item\" href=\"{{ path('user.show', {'slug': app.user.slug}) }}\">Mon Compte</a>
                        {% if  not is_granted   ('ROLE_ADMIN') %}

                        <a class=\"dropdown-item\" href=\"{{ path('user.bookings') }}\">Mes réservations</a>
                        {% endif %}
                        <a class=\"dropdown-item\" href=\"{{ path('user.profile') }}\">Modifier mes données</a>
                        <a class=\"dropdown-item\" href=\"{{ path('user.password') }}\">Modifier mon mot de passe</a>
                        <div class=\"dropdown-divider\"></div>
                        {% if  is_granted   ('ROLE_ADMIN') %}

                        <a class=\"dropdown-item\" href=\"{{ path('ad.create') }}\">Ajouter une annonce</a>
                        {% endif %}
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"{{ path('user.logout') }}\">Se Déconnecter</a>
                    </div>
                </li>


            {% else %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('user.login') }}\">Mon Compte</a>
                </li>
            {% endif %}
        </ul>
    </div>
</nav>

{# Messages Flash #}
{% for types, messages in app.flashes %}
    <div class=\"container\">
        <div class=\"alert alert-{{ types }}\">
            {% for message in messages %}
                <p class=\"m-0\">{{ message | raw }}</p>
            {% endfor %}
        </div>
    </div>
{% endfor %}", "layout/header.html.twig", "C:\\wamp64\\www\\dev\\agance\\templates\\layout\\header.html.twig");
    }
}
