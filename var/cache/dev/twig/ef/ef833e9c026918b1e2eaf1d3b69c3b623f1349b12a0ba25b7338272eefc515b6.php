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

/* ad/_list.html.twig */
class __TwigTemplate_aeff2954cdc89d9cc1292ef0e581eda4289f66834f70b1acc449946537e94c92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_list.html.twig"));

        // line 1
        $context["urlShow"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad.show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 1, $this->source); })()), "slug", [], "any", false, false, false, 1)]);
        // line 2
        echo "
<div class=\"col-12 col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 6, $this->source); })()), "rooms", [], "any", false, false, false, 6), "html", null, true);
        echo " chambres, <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 6, $this->source); })()), "price", [], "any", false, false, false, 6), 2, ".", " "), "html", null, true);
        echo " &euro; par nuit</strong> <br>

            ";
        // line 8
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "comments", [], "any", false, false, false, 8)) > 0)) {
            // line 9
            echo "                ";
            $this->loadTemplate("inc/rating.html.twig", "ad/_list.html.twig", 9)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 9, $this->source); })()), "avgRatings", [], "any", false, false, false, 9)]));
            // line 10
            echo "            ";
        } else {
            // line 11
            echo "                <small class=\"badge badge-dark\">Aucune note disponible</small>
            ";
        }
        // line 13
        echo "
        </div>

        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["urlShow"]) || array_key_exists("urlShow", $context) ? $context["urlShow"] : (function () { throw new RuntimeError('Variable "urlShow" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17))), "html", null, true);
        echo "\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block;\">
        </a>

        <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["urlShow"]) || array_key_exists("urlShow", $context) ? $context["urlShow"] : (function () { throw new RuntimeError('Variable "urlShow" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</a>
            </h4>
            <p class=\"card-text\">
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 25, $this->source); })()), "intro", [], "any", false, false, false, 25), "html", null, true);
        echo "
            </p>

            <div class=\"text-center\">
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["urlShow"]) || array_key_exists("urlShow", $context) ? $context["urlShow"] : (function () { throw new RuntimeError('Variable "urlShow" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary\">En savoir plus</a>
            </div>

            ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 32, $this->source); })()), "author", [], "any", false, false, false, 32)))) {
            // line 33
            echo "                <div class=\"text-center\">
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad.edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 34, $this->source); })()), "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-info mt-2\">Modifier cette annonce</a>
                </div>
                <div class=\"text-center\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad.delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 37, $this->source); })()), "slug", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-danger mt-2\" onClick=\"return confirm(`Voulez vous vraiment supprimer cette annonce ?`)\">Supprimer cette annonce</a>
                </div>
            ";
        }
        // line 40
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  119 => 37,  113 => 34,  110 => 33,  108 => 32,  102 => 29,  95 => 25,  87 => 22,  79 => 17,  75 => 16,  70 => 13,  66 => 11,  63 => 10,  60 => 9,  58 => 8,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set urlShow = path('ad.show', {'slug': ad.slug}) %}

<div class=\"col-12 col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
            {{ ad.rooms }} chambres, <strong>{{ ad.price | number_format(2, '.', ' ') }} &euro; par nuit</strong> <br>

            {% if ad.comments | length > 0 %}
                {% include 'inc/rating.html.twig' with {'rating': ad.avgRatings} %}
            {% else %}
                <small class=\"badge badge-dark\">Aucune note disponible</small>
            {% endif %}

        </div>

        <a href=\"{{ urlShow }}\">
            <img src=\"{{asset('images/'~ad.image)}}\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block;\">
        </a>

        <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"{{ urlShow }}\">{{ ad.title }}</a>
            </h4>
            <p class=\"card-text\">
                {{ ad.intro }}
            </p>

            <div class=\"text-center\">
                <a href=\"{{ urlShow }}\" class=\"btn btn-primary\">En savoir plus</a>
            </div>

            {% if app.user and app.user == ad.author %}
                <div class=\"text-center\">
                    <a href=\"{{ path('ad.edit', {'slug': ad.slug}) }}\" class=\"btn btn-info mt-2\">Modifier cette annonce</a>
                </div>
                <div class=\"text-center\">
                    <a href=\"{{ path('ad.delete', {'slug': ad.slug}) }}\" class=\"btn btn-danger mt-2\" onClick=\"return confirm(`Voulez vous vraiment supprimer cette annonce ?`)\">Supprimer cette annonce</a>
                </div>
            {% endif %}
        </div>
    </div>
</div>", "ad/_list.html.twig", "C:\\wamp64\\www\\dev\\agance\\templates\\ad\\_list.html.twig");
    }
}
