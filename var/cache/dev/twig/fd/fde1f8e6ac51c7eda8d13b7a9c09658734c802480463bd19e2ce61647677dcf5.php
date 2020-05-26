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

/* ad/show.html.twig */
class __TwigTemplate_64fdb1520a0ec9eb91305e2b1521fe4529489b401091beea4691b2cc3666115e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
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

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
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
    <div class=\"container-fluid p-0\">
        <div class=\"ad-title\" style=\"background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8)))), "html", null, true);
        echo ")\">

            <div class=\"container\">
                <h1 class=\"my-4\"> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo " </h1>
                <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 12, $this->source); })()), "intro", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                <p class=\"h2\">
                   <strong>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 14, $this->source); })()), "rooms", [], "any", false, false, false, 14), "html", null, true);
        echo " chambres</strong> pour <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), 2, ".", " "), "html", null, true);
        echo " &euro; </strong> par nuit
                </p>

                ";
        // line 17
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking.create", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Réserver</a>
                ";
        }
        // line 20
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 20, $this->source); })()), "author", [], "any", false, false, false, 20)))) {
            // line 21
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad.edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 21, $this->source); })()), "slug", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-info ml-2\">Modifier cette annonce</a>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad.delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 22, $this->source); })()), "slug", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"btn btn-danger ml-2\" onClick=\"return confirm(`Voulez vous vraiment supprimer cette annonce ?`)\">Supprimer cette annonce</a>
                ";
        }
        // line 24
        echo "            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-8 my-3\">
                ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 31, $this->source); })()), "content", [], "any", false, false, false, 31), "html", null, true);
        echo "

                ";
        // line 34
        echo "                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 36, $this->source); })()), "pictures", [], "any", false, false, false, 36));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 37
            echo "                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 37), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 37)) {
                echo " class=\"active\" ";
            }
            echo "></li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </ol>
                    <div class=\"carousel-inner\">
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 41, $this->source); })()), "pictures", [], "any", false, false, false, 41));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 42
            echo "                        <div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 42)) {
                echo " active ";
            }
            echo "\">
                            <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "url", [], "any", false, false, false, 43), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
                            <div class=\"carousel-caption d-none d-md-block\">
                                <h5>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45), "html", null, true);
            echo "</h5>
                                <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "caption", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>

                ";
        // line 62
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 62, $this->source); })()), "comments", [], "any", false, false, false, 62)) > 0)) {
            // line 63
            echo "                    <h2 class=\"my-3\">Commentaires :</h2>

                    <div class=\"alert alert-info\">
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                <strong>Note globale de l'annonce :</strong>

                            </div>
                            <div class=\"col text-right\">
                                ";
            // line 72
            $this->loadTemplate("inc/rating.html.twig", "ad/show.html.twig", 72)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 72, $this->source); })()), "avgRatings", [], "any", false, false, false, 72)]));
            echo "  <br>
                                <small class=\"font-italic\">note calculée sur ";
            // line 73
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 73, $this->source); })()), "comments", [], "any", false, false, false, 73)), "html", null, true);
            echo " avis</small>
                            </div>
                        </div>
                    </div>

                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 78, $this->source); })()), "comments", [], "any", false, false, false, 78));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 79
                echo "                        <div class=\"bg-light rounded mb-3 py-3 px-3\">
                            <strong>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 80), "firstName", [], "any", false, false, false, 80), "html", null, true);
                echo "</strong>, le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
                echo "
                            <blockquote>
                                ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 82), "html", null, true);
                echo "
                            </blockquote>
                            <strong>Note : </strong>

                            ";
                // line 86
                $this->loadTemplate("inc/rating.html.twig", "ad/show.html.twig", 86)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 86)]));
                // line 87
                echo "
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                ";
        } else {
            // line 91
            echo "                    <div class=\"alert alert-dark my-3\">Aucun commentaire pour cette annonce</div>
                ";
        }
        // line 93
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 96
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 96, $this->source); })()), "author", [], "any", false, false, false, 96);
        // line 97
        echo "                <div class=\"row\">
                    <div class=\"col-4\">
                        <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "slug", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "avatar", [], "any", false, false, false, 100))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "fullName", [], "any", false, false, false, 100), "html", null, true);
        echo "\" class=\"avatar avatar-medium\">
                        </a>
                    </div>
                    <div class=\"col\">
                        <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "slug", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\">
                            <h3>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "fullName", [], "any", false, false, false, 105), "html", null, true);
        echo " </h3>
                        </a>
                        <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "slug", [], "any", false, false, false, 107)]), "html", null, true);
        echo "\">
                            <span class=\"badge badge-primary\">";
        // line 108
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "ads", [], "any", false, false, false, 108)), "html", null, true);
        echo " annonces</span>
                        </a>
                    </div>
                </div>
                <p class=\"text-justify\">
                    ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "description", [], "any", false, false, false, 113), "html", null, true);
        echo "
                </p>

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 113,  384 => 108,  380 => 107,  375 => 105,  371 => 104,  362 => 100,  358 => 99,  354 => 97,  352 => 96,  347 => 93,  343 => 91,  340 => 90,  324 => 87,  322 => 86,  315 => 82,  308 => 80,  305 => 79,  288 => 78,  280 => 73,  276 => 72,  265 => 63,  262 => 62,  249 => 50,  231 => 46,  227 => 45,  222 => 43,  215 => 42,  198 => 41,  194 => 39,  173 => 37,  156 => 36,  152 => 34,  147 => 31,  138 => 24,  133 => 22,  128 => 21,  125 => 20,  119 => 18,  117 => 17,  109 => 14,  104 => 12,  100 => 11,  94 => 8,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ ad.title }} {% endblock %}

{% block body %}

    <div class=\"container-fluid p-0\">
        <div class=\"ad-title\" style=\"background-image: url({{absolute_url(asset('images/' ~ad.image))}})\">

            <div class=\"container\">
                <h1 class=\"my-4\"> {{ ad.title }} </h1>
                <p>{{ ad.intro }}</p>
                <p class=\"h2\">
                   <strong>{{ ad.rooms }} chambres</strong> pour <strong>{{ ad.price | number_format(2, '.', ' ') }} &euro; </strong> par nuit
                </p>

                {% if  not is_granted   ('ROLE_ADMIN') %}
                <a href=\"{{ path('booking.create', {'slug': ad.slug}) }}\" class=\"btn btn-primary\">Réserver</a>
                {% endif %}
                {% if app.user and app.user == ad.author %}
                    <a href=\"{{ path('ad.edit', {'slug': ad.slug}) }}\" class=\"btn btn-info ml-2\">Modifier cette annonce</a>
                    <a href=\"{{ path('ad.delete', {'slug': ad.slug}) }}\" class=\"btn btn-danger ml-2\" onClick=\"return confirm(`Voulez vous vraiment supprimer cette annonce ?`)\">Supprimer cette annonce</a>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-8 my-3\">
                {{ ad.content }}

                {# Carousel #}
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        {% for picture in ad.pictures %}
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ loop.index0 }}\" {% if loop.first %} class=\"active\" {% endif %}></li>
                        {% endfor %}
                    </ol>
                    <div class=\"carousel-inner\">
                        {% for picture in ad.pictures %}
                        <div class=\"carousel-item {% if loop.first %} active {% endif %}\">
                            <img src=\"{{ picture.url }}\" class=\"d-block w-100\" alt=\"...\">
                            <div class=\"carousel-caption d-none d-md-block\">
                                <h5>{{ ad.title }}</h5>
                                <p>{{ picture.caption }}</p>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>

                {# Comments #}
                {% if ad.comments | length > 0 %}
                    <h2 class=\"my-3\">Commentaires :</h2>

                    <div class=\"alert alert-info\">
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                <strong>Note globale de l'annonce :</strong>

                            </div>
                            <div class=\"col text-right\">
                                {% include 'inc/rating.html.twig' with {'rating': ad.avgRatings} %}  <br>
                                <small class=\"font-italic\">note calculée sur {{ ad.comments | length }} avis</small>
                            </div>
                        </div>
                    </div>

                    {% for comment in ad.comments %}
                        <div class=\"bg-light rounded mb-3 py-3 px-3\">
                            <strong>{{ comment.author.firstName }}</strong>, le {{ comment.createdAt | date('d/m/Y') }}
                            <blockquote>
                                {{ comment.content }}
                            </blockquote>
                            <strong>Note : </strong>

                            {% include 'inc/rating.html.twig' with {'rating': comment.rating} %}

                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"alert alert-dark my-3\">Aucun commentaire pour cette annonce</div>
                {% endif %}

            </div>
            <div class=\"col\">
                {% set user = ad.author %}
                <div class=\"row\">
                    <div class=\"col-4\">
                        <a href=\"{{ path('user.show', {'slug': user.slug}) }}\">
                            <img src=\"{{asset('images/'~user.avatar)}}\" alt=\"{{ user.fullName }}\" class=\"avatar avatar-medium\">
                        </a>
                    </div>
                    <div class=\"col\">
                        <a href=\"{{ path('user.show', {'slug': user.slug}) }}\">
                            <h3>{{ user.fullName }} </h3>
                        </a>
                        <a href=\"{{ path('user.show', {'slug': user.slug}) }}\">
                            <span class=\"badge badge-primary\">{{ user.ads | length }} annonces</span>
                        </a>
                    </div>
                </div>
                <p class=\"text-justify\">
                    {{ user.description }}
                </p>

            </div>
        </div>
    </div>

{% endblock %}
", "ad/show.html.twig", "C:\\wamp64\\www\\dev\\agance\\templates\\ad\\show.html.twig");
    }
}
