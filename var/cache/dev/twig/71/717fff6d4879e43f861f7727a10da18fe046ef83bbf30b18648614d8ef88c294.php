<?php

/* @Admin/CtMotif/index.html.twig */
class __TwigTemplate_270bb5009ef6d9ecd32c4149cbc0b69e911539ea69130e3a7fa24c021de35231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotif/index.html.twig", 1);
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
        $__internal_b3820b982aef1e26c55e7b0ad2eb8ba71367e8ae93711c0e44c5c1d8d7cfbef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3820b982aef1e26c55e7b0ad2eb8ba71367e8ae93711c0e44c5c1d8d7cfbef4->enter($__internal_b3820b982aef1e26c55e7b0ad2eb8ba71367e8ae93711c0e44c5c1d8d7cfbef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/index.html.twig"));

        $__internal_7a43e95ffeb2b92e944825952e9e028d6c64097183a89d4ed6963decb3e8b185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a43e95ffeb2b92e944825952e9e028d6c64097183a89d4ed6963decb3e8b185->enter($__internal_7a43e95ffeb2b92e944825952e9e028d6c64097183a89d4ed6963decb3e8b185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/index.html.twig"));

        // line 5
        $context["menu_motif"] = true;
        // line 6
        $context["menu_motif_type"] = true;
        // line 7
        $context["menu_motif_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3820b982aef1e26c55e7b0ad2eb8ba71367e8ae93711c0e44c5c1d8d7cfbef4->leave($__internal_b3820b982aef1e26c55e7b0ad2eb8ba71367e8ae93711c0e44c5c1d8d7cfbef4_prof);

        
        $__internal_7a43e95ffeb2b92e944825952e9e028d6c64097183a89d4ed6963decb3e8b185->leave($__internal_7a43e95ffeb2b92e944825952e9e028d6c64097183a89d4ed6963decb3e8b185_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6191eb4ef45164fb19a15926387aa9f0c750aa4f3ba62e4f4a6d47e7c5177424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6191eb4ef45164fb19a15926387aa9f0c750aa4f3ba62e4f4a6d47e7c5177424->enter($__internal_6191eb4ef45164fb19a15926387aa9f0c750aa4f3ba62e4f4a6d47e7c5177424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_385f8d4e0371ef167f0e3312f271ecca364bda4718b1b4771d91e410f0651a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385f8d4e0371ef167f0e3312f271ecca364bda4718b1b4771d91e410f0651a37->enter($__internal_385f8d4e0371ef167f0e3312f271ecca364bda4718b1b4771d91e410f0651a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des motifs ";
        
        $__internal_385f8d4e0371ef167f0e3312f271ecca364bda4718b1b4771d91e410f0651a37->leave($__internal_385f8d4e0371ef167f0e3312f271ecca364bda4718b1b4771d91e410f0651a37_prof);

        
        $__internal_6191eb4ef45164fb19a15926387aa9f0c750aa4f3ba62e4f4a6d47e7c5177424->leave($__internal_6191eb4ef45164fb19a15926387aa9f0c750aa4f3ba62e4f4a6d47e7c5177424_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b304f22949b59c186215c40ebfb6575463d95e47c41e3240ade254f6d48ac4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b304f22949b59c186215c40ebfb6575463d95e47c41e3240ade254f6d48ac4e8->enter($__internal_b304f22949b59c186215c40ebfb6575463d95e47c41e3240ade254f6d48ac4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_503c51cec20f2d58db315a2a1dd866cff3b8a20854f78eb20150a93dabe85569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503c51cec20f2d58db315a2a1dd866cff3b8a20854f78eb20150a93dabe85569->enter($__internal_503c51cec20f2d58db315a2a1dd866cff3b8a20854f78eb20150a93dabe85569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un motif
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                     <th>Calculable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
            // line 59
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "mtfLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo (($this->getAttribute($context["motif"], "mtfIsCalculable", array())) ? ("Oui") : ("Non"));
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_edit", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_delete", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </tbody>
                        </table>

                        ";
        // line 81
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_503c51cec20f2d58db315a2a1dd866cff3b8a20854f78eb20150a93dabe85569->leave($__internal_503c51cec20f2d58db315a2a1dd866cff3b8a20854f78eb20150a93dabe85569_prof);

        
        $__internal_b304f22949b59c186215c40ebfb6575463d95e47c41e3240ade254f6d48ac4e8->leave($__internal_b304f22949b59c186215c40ebfb6575463d95e47c41e3240ade254f6d48ac4e8_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b86053a0df8fba509468a9aa0cb1cee6a2d06c92934894cc61fa9c0fc17ea46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b86053a0df8fba509468a9aa0cb1cee6a2d06c92934894cc61fa9c0fc17ea46->enter($__internal_3b86053a0df8fba509468a9aa0cb1cee6a2d06c92934894cc61fa9c0fc17ea46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_43fe7ec90384c196a48df46aeed23414aae9ee669aa796821e01d3258c823bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fe7ec90384c196a48df46aeed23414aae9ee669aa796821e01d3258c823bd9->enter($__internal_43fe7ec90384c196a48df46aeed23414aae9ee669aa796821e01d3258c823bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-motif').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_43fe7ec90384c196a48df46aeed23414aae9ee669aa796821e01d3258c823bd9->leave($__internal_43fe7ec90384c196a48df46aeed23414aae9ee669aa796821e01d3258c823bd9_prof);

        
        $__internal_3b86053a0df8fba509468a9aa0cb1cee6a2d06c92934894cc61fa9c0fc17ea46->leave($__internal_3b86053a0df8fba509468a9aa0cb1cee6a2d06c92934894cc61fa9c0fc17ea46_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotif/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 95,  241 => 94,  220 => 81,  215 => 77,  203 => 71,  196 => 67,  190 => 64,  186 => 63,  181 => 61,  177 => 59,  173 => 58,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des motifs {% endblock %}

{% set menu_motif           = true %}
{% set menu_motif_type      = true %}
{% set menu_motif_type_list = true %}

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
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('motif_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un motif
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('motif_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                     <th>Calculable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for motif in motifs %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ motif.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ motif.mtfLibelle }}</td>
                                        <td>{{ motif.mtfIsCalculable? \"Oui\" : \"Non\" }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('motif_edit', { 'id': motif.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('motif_delete', { 'id': motif.id }) }}\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-motif').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtMotif/index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotif\\index.html.twig");
    }
}