<?php

/* AdminBundle:CtImprimeTechUse:index.html.twig */
class __TwigTemplate_e2a48626b8e8e750cab7c3926ba63ca6682c6dc5543d6acf377e5d13d988d3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtImprimeTechUse:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a3882acd0cff1650ca5e75bae11abcd2f685788f93e4d5a481b95fe4509e5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3882acd0cff1650ca5e75bae11abcd2f685788f93e4d5a481b95fe4509e5cc->enter($__internal_7a3882acd0cff1650ca5e75bae11abcd2f685788f93e4d5a481b95fe4509e5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:index.html.twig"));

        $__internal_24be34916b31eab2f166cae20c266bac0b609d73e21f9493ce5333fc62f435b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24be34916b31eab2f166cae20c266bac0b609d73e21f9493ce5333fc62f435b6->enter($__internal_24be34916b31eab2f166cae20c266bac0b609d73e21f9493ce5333fc62f435b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:index.html.twig"));

        // line 5
        $context["menu_imprime_tech_use"] = true;
        // line 6
        $context["menu_imprime_tech_use_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3882acd0cff1650ca5e75bae11abcd2f685788f93e4d5a481b95fe4509e5cc->leave($__internal_7a3882acd0cff1650ca5e75bae11abcd2f685788f93e4d5a481b95fe4509e5cc_prof);

        
        $__internal_24be34916b31eab2f166cae20c266bac0b609d73e21f9493ce5333fc62f435b6->leave($__internal_24be34916b31eab2f166cae20c266bac0b609d73e21f9493ce5333fc62f435b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7aaeca26691a72873c300b0552f1fbb7dbdc2fa8d3402556522e4587bdfc97b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aaeca26691a72873c300b0552f1fbb7dbdc2fa8d3402556522e4587bdfc97b3->enter($__internal_7aaeca26691a72873c300b0552f1fbb7dbdc2fa8d3402556522e4587bdfc97b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ffc8471c132278abb27d852c0368ecc115bbbdc76a1b4f4f87c63deabf7d63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffc8471c132278abb27d852c0368ecc115bbbdc76a1b4f4f87c63deabf7d63a->enter($__internal_7ffc8471c132278abb27d852c0368ecc115bbbdc76a1b4f4f87c63deabf7d63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisations des imprimés techniques ";
        
        $__internal_7ffc8471c132278abb27d852c0368ecc115bbbdc76a1b4f4f87c63deabf7d63a->leave($__internal_7ffc8471c132278abb27d852c0368ecc115bbbdc76a1b4f4f87c63deabf7d63a_prof);

        
        $__internal_7aaeca26691a72873c300b0552f1fbb7dbdc2fa8d3402556522e4587bdfc97b3->leave($__internal_7aaeca26691a72873c300b0552f1fbb7dbdc2fa8d3402556522e4587bdfc97b3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cd1560dd103f7b58b941a40c96d843e6e96ca0174bdaa467634a1f7b01d7a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd1560dd103f7b58b941a40c96d843e6e96ca0174bdaa467634a1f7b01d7a91->enter($__internal_3cd1560dd103f7b58b941a40c96d843e6e96ca0174bdaa467634a1f7b01d7a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c475ce14df62373fa1f90f39b51f778079e7fed76c33d9f2a8d0afd9ff26a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c475ce14df62373fa1f90f39b51f778079e7fed76c33d9f2a8d0afd9ff26a05->enter($__internal_8c475ce14df62373fa1f90f39b51f778079e7fed76c33d9f2a8d0afd9ff26a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Feuille d'utilisation des imprimés techniques</h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_fitu_date\">Séléctionner la date</label>
                                    <input required id=\"ct_fitu_date\" name=\"ct_fitu_date\" class=\"form-control datepicker\"
                                           value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\" />
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_fitu_centre\">Séléctionner le centre</label>
                                        <select id=\"ct_fitu_centre\" name=\"ct_fitu_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 57
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
        foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
            // line 58
            echo "                                                    ";
            // line 59
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
            echo "\">
                                                            ";
            // line 60
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
            echo "
                                                        </option>
                                                    ";
            // line 63
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                            ";
        // line 66
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\" id=\"btn-generate-utilisation-it\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-utilisation-it\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        ";
        // line 146
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Liste d'utilisation des imprimés techniques</h3>
                </div>

                <form action=\"#\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"list-count\">
                            <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                        </div>
                        <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Réf. utilisation</th>
                                <th>N° IT</th>
                                <th>Type IT</th>
                                <th>Motif utilisation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["itu_listes"] ?? $this->getContext($context, "itu_listes")));
        foreach ($context['_seq'] as $context["_key"] => $context["itu_liste"]) {
            // line 173
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "ctControle", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "ituNumero", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["itu_liste"], "ctImprimeTech", array()), "nomImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["itu_liste"], "ituMotifUsed", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_edit", array("id" => $this->getAttribute($context["itu_liste"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itu_liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_8c475ce14df62373fa1f90f39b51f778079e7fed76c33d9f2a8d0afd9ff26a05->leave($__internal_8c475ce14df62373fa1f90f39b51f778079e7fed76c33d9f2a8d0afd9ff26a05_prof);

        
        $__internal_3cd1560dd103f7b58b941a40c96d843e6e96ca0174bdaa467634a1f7b01d7a91->leave($__internal_3cd1560dd103f7b58b941a40c96d843e6e96ca0174bdaa467634a1f7b01d7a91_prof);

    }

    // line 198
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94cf46a5a1fab6d2a2692229a715d3acb596bf892b7a87647bde263d5089ede8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cf46a5a1fab6d2a2692229a715d3acb596bf892b7a87647bde263d5089ede8->enter($__internal_94cf46a5a1fab6d2a2692229a715d3acb596bf892b7a87647bde263d5089ede8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e319d29daef6a8d963136e2e10f30852460adf9630db590a8a64037e97bcd876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e319d29daef6a8d963136e2e10f30852460adf9630db590a8a64037e97bcd876->enter($__internal_e319d29daef6a8d963136e2e10f30852460adf9630db590a8a64037e97bcd876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 199
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('#liste-imprime-tech-bl').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });

        var _generate_used_it_ajax_uri = \"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_generate_used_ajax");
        echo "\";
        var _generate_stock_it_ajax_uri = \"";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_stock_generate_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/index.imprimes.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e319d29daef6a8d963136e2e10f30852460adf9630db590a8a64037e97bcd876->leave($__internal_e319d29daef6a8d963136e2e10f30852460adf9630db590a8a64037e97bcd876_prof);

        
        $__internal_94cf46a5a1fab6d2a2692229a715d3acb596bf892b7a87647bde263d5089ede8->leave($__internal_94cf46a5a1fab6d2a2692229a715d3acb596bf892b7a87647bde263d5089ede8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtImprimeTechUse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 231,  354 => 229,  350 => 228,  322 => 203,  314 => 199,  305 => 198,  288 => 189,  276 => 183,  270 => 180,  266 => 179,  262 => 178,  258 => 177,  253 => 175,  249 => 173,  245 => 172,  217 => 146,  195 => 66,  193 => 64,  187 => 63,  182 => 60,  177 => 59,  175 => 58,  170 => 57,  156 => 46,  148 => 41,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Liste des utilisations des imprimés techniques {% endblock %}

{% set menu_imprime_tech_use      = true %}
{% set menu_imprime_tech_use_list = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Feuille d'utilisation des imprimés techniques</h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_fitu_date\">Séléctionner la date</label>
                                    <input required id=\"ct_fitu_date\" name=\"ct_fitu_date\" class=\"form-control datepicker\"
                                           value=\"{{ \"now\"|date(\"d/m/Y\") }}\" />
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_fitu_centre\">Séléctionner le centre</label>
                                        <select id=\"ct_fitu_centre\" name=\"ct_fitu_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            {# {% for province in provinces %}
                                            <optgroup label=\"{{ province.prvNom }}\"> #}
                                                {% for centre in centres %}
                                                    {# {% if province.id == centre.ctProvince.id %} #}
                                                        <option value=\"{{ centre.id }}\">
                                                            {{ centre.ctrNom|upper }}
                                                        </option>
                                                    {# {% endif %} #}
                                                {% endfor %}
                                            {# </optgroup>
                                            {% endfor %} #}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\" id=\"btn-generate-utilisation-it\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-utilisation-it\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {# <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Situation de stock des imprimés techniques</h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_situ_date\">Séléctionner la date</label>
                                    <input required id=\"ct_situ_date\" name=\"ct_situ_date\" class=\"form-control datepicker\"
                                           value=\"{{ \"now\"|date(\"d/m/Y\") }}\" />
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_situ_centre\">Séléctionner le centre</label>
                                        <select id=\"ct_situ_centre\" name=\"ct_situ_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            {% for province in provinces %}
                                            <optgroup label=\"{{ province.prvNom }}\">
                                                {% for centre in centres %}
                                                    {% if province.id == centre.ctProvince.id %}
                                                        <option value=\"{{ centre.id }}\">
                                                            {{ centre.ctrNom|upper }}
                                                        </option>
                                                    {% endif %}
                                                {% endfor %}
                                            </optgroup>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\" id=\"btn-generate-stock-it\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-stock-it\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> #}
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Liste d'utilisation des imprimés techniques</h3>
                </div>

                <form action=\"#\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"list-count\">
                            <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                        </div>
                        <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Réf. utilisation</th>
                                <th>N° IT</th>
                                <th>Type IT</th>
                                <th>Motif utilisation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for itu_liste in itu_listes %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ itu_liste.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ itu_liste.ctControle }}</td>
                                    <td>{{ itu_liste.ituNumero }}</td>
                                    <td>{{ itu_liste.ctImprimeTech.nomImprimeTech }}</td>
                                    <td>{{ itu_liste.ituMotifUsed }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('imprime_tech_use_edit', { 'id': itu_liste.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('#liste-imprime-tech-bl').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });

        var _generate_used_it_ajax_uri = \"{{ path('imprimes_tech_generate_used_ajax') }}\";
        var _generate_stock_it_ajax_uri = \"{{ path('imprimes_tech_stock_generate_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/index.imprimes.js') }}\"></script>
{% endblock %}
", "AdminBundle:CtImprimeTechUse:index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\index.html.twig");
    }
}
