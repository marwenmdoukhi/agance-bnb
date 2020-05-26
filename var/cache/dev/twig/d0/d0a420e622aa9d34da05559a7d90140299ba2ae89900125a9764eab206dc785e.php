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

/* booking/show.html.twig */
class __TwigTemplate_e37d4d5c4a25611f09ba5483439c2dc0c1c113507d65222192d1141bfb2a3343 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
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

        echo " Réservation n° : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
    ";
        // line 7
        $context["ad"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 7, $this->source); })()), "ad", [], "any", false, false, false, 7);
        // line 8
        echo "    ";
        $context["author"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "author", [], "any", false, false, false, 8);
        // line 9
        echo "
    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation n°";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>

        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-info\">
                    <h2>Détails de votre réservation</h2>
                    <hr>
                    <dl class=\"row\">
                        <dt class=\"col-md-4\">N°</dt>
                        <dd class=\"col-md-8\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</dd>

                        <dt class=\"col-md-4\">Date d'arrivée</dt>
                        <dd class=\"col-md-8\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 23, $this->source); })()), "startDate", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo "</dd>

                        <dt class=\"col-md-4\">Date de départ</dt>
                        <dd class=\"col-md-8\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 26, $this->source); })()), "endDate", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
        echo "</dd>

                        <dt class=\"col-md-4\">Nombre de nuits</dt>
                        <dd class=\"col-md-8\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 29, $this->source); })()), "duration", [], "any", false, false, false, 29), "html", null, true);
        echo "</dd>

                        <dt class=\"col-md-4\">Montant total</dt>
                        <dd class=\"col-md-8\">";
        // line 32
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 32, $this->source); })()), "amount", [], "any", false, false, false, 32), 2, ".", " "), "html", null, true);
        echo " &euro; </dd>

                        <dt class=\"col-md-4\">Commentaire</dt>
                        <dd class=\"col-md-8\">";
        // line 35
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", false, false, false, 35), "Aucun commentaire")) : ("Aucun commentaire")), "html", null, true);
        echo "</dd>
                    </dl>

                    <hr>

                    <h2 class=\"alert-heading\">Détails de votre hôte</h2>
                    <div class=\"row mb-4\">
                        <div class=\"col-3\">
                            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 43, $this->source); })()), "avatar", [], "any", false, false, false, 43))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 43, $this->source); })()), "fullName", [], "any", false, false, false, 43), "html", null, true);
        echo "\" class=\"avatar avatar-medium\">
                        </div>
                        <div class=\"col-9\">
                            <h4>
                                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 47, $this->source); })()), "slug", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 47, $this->source); })()), "fullName", [], "any", false, false, false, 47), "html", null, true);
        echo "</a>
                            </h4>
                            <span class=\"badge badge-primary\">";
        // line 49
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 49, $this->source); })()), "ads", [], "any", false, false, false, 49)), "html", null, true);
        echo " annonce(s)</span>
                        </div>
                    </div>
                    <p class=\"text-justify\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 53, $this->source); })()), "slug", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">En savoir plus sur ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 53, $this->source); })()), "firstName", [], "any", false, false, false, 53), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-secondary\">
                    <h2>Votre hébergement</h2>
                    <hr>

                    <h4>
                        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad.show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 62, $this->source); })()), "slug", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 62, $this->source); })()), "title", [], "any", false, false, false, 62), "html", null, true);
        echo "</a>
                    </h4>

                    <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65))), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 65, $this->source); })()), "title", [], "any", false, false, false, 65), "html", null, true);
        echo "\" class=\"img-fluid\">

                    <p>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 67, $this->source); })()), "content", [], "any", false, false, false, 67), "html", null, true);
        echo "</p>

                    <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad.show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 69, $this->source); })()), "slug", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">En savoir plus sur cet hébergement</a>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-dark\" id=\"comment\">
                  
                        ";
        // line 77
        $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 77, $this->source); })()), "ad", [], "any", false, false, false, 77), "commentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)], "method", false, false, false, 77);
        // line 78
        echo "                        ";
        if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 78, $this->source); })()))) {
            // line 79
            echo "                            <h2 class=\"alert-heading\">Commentaire sur votre séjour</h2>
                            <blockquote>
                                ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 81, $this->source); })()), "content", [], "any", false, false, false, 81), "html", null, true);
            echo "
                            </blockquote>
                            <strong>Note : ";
            // line 83
            $this->loadTemplate("inc/rating.html.twig", "booking/show.html.twig", 83)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 83, $this->source); })()), "rating", [], "any", false, false, false, 83)]));
            echo "</strong>
                        ";
        } else {
            // line 85
            echo "                            <h2 class=\"alert-heading\">Donnez votre avis</h2>
                            ";
            // line 86
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_start');
            echo "
                            ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'widget');
            echo "
                            <button type=\"submit\" class=\"btn btn-success\">Envoyer votre avis</button>
                            ";
            // line 89
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
            echo "
                        ";
        }
        // line 91
        echo "              
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
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 91,  257 => 89,  252 => 87,  248 => 86,  245 => 85,  240 => 83,  235 => 81,  231 => 79,  228 => 78,  226 => 77,  215 => 69,  210 => 67,  203 => 65,  195 => 62,  181 => 53,  177 => 52,  171 => 49,  164 => 47,  155 => 43,  144 => 35,  138 => 32,  132 => 29,  126 => 26,  120 => 23,  114 => 20,  102 => 11,  98 => 9,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Réservation n° : {{ booking.id }} {% endblock %}

{% block body %}

    {% set ad = booking.ad %}
    {% set author = ad.author %}

    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation n°{{ booking.id }}</h1>

        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-info\">
                    <h2>Détails de votre réservation</h2>
                    <hr>
                    <dl class=\"row\">
                        <dt class=\"col-md-4\">N°</dt>
                        <dd class=\"col-md-8\">{{ booking.id }}</dd>

                        <dt class=\"col-md-4\">Date d'arrivée</dt>
                        <dd class=\"col-md-8\">{{ booking.startDate | date('d/m/Y') }}</dd>

                        <dt class=\"col-md-4\">Date de départ</dt>
                        <dd class=\"col-md-8\">{{ booking.endDate | date('d/m/Y') }}</dd>

                        <dt class=\"col-md-4\">Nombre de nuits</dt>
                        <dd class=\"col-md-8\">{{ booking.duration }}</dd>

                        <dt class=\"col-md-4\">Montant total</dt>
                        <dd class=\"col-md-8\">{{ booking.amount | number_format(2, '.', ' ') }} &euro; </dd>

                        <dt class=\"col-md-4\">Commentaire</dt>
                        <dd class=\"col-md-8\">{{ booking.comment | default('Aucun commentaire') }}</dd>
                    </dl>

                    <hr>

                    <h2 class=\"alert-heading\">Détails de votre hôte</h2>
                    <div class=\"row mb-4\">
                        <div class=\"col-3\">
                            <img src=\"{{asset('images/'~author.avatar)}}\" alt=\"{{ author.fullName }}\" class=\"avatar avatar-medium\">
                        </div>
                        <div class=\"col-9\">
                            <h4>
                                <a href=\"{{ path('user.show', {'slug': author.slug}) }}\">{{ author.fullName }}</a>
                            </h4>
                            <span class=\"badge badge-primary\">{{ author.ads | length }} annonce(s)</span>
                        </div>
                    </div>
                    <p class=\"text-justify\">{{ author.description }}</p>
                    <a href=\"{{ path('user.show', {'slug': author.slug}) }}\" class=\"btn btn-primary\">En savoir plus sur {{ author.firstName }}</a>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-secondary\">
                    <h2>Votre hébergement</h2>
                    <hr>

                    <h4>
                        <a href=\"{{ path('ad.show', {'slug': ad.slug}) }}\">{{ ad.title }}</a>
                    </h4>

                    <img src=\"{{asset('images/'~ad.image)}}\"  alt=\"{{ ad.title }}\" class=\"img-fluid\">

                    <p>{{ ad.content }}</p>

                    <a href=\"{{ path('ad.show', {'slug': ad.slug}) }}\" class=\"btn btn-primary\">En savoir plus sur cet hébergement</a>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-dark\" id=\"comment\">
                  
                        {% set comment = booking.ad.commentFromAuthor(app.user) %}
                        {% if comment is not null %}
                            <h2 class=\"alert-heading\">Commentaire sur votre séjour</h2>
                            <blockquote>
                                {{ comment.content }}
                            </blockquote>
                            <strong>Note : {% include 'inc/rating.html.twig' with {'rating': comment.rating} %}</strong>
                        {% else %}
                            <h2 class=\"alert-heading\">Donnez votre avis</h2>
                            {{ form_start(form) }}
                            {{ form_widget(form) }}
                            <button type=\"submit\" class=\"btn btn-success\">Envoyer votre avis</button>
                            {{ form_end(form) }}
                        {% endif %}
              
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "booking/show.html.twig", "C:\\wamp64\\www\\dev\\agance\\templates\\booking\\show.html.twig");
    }
}
