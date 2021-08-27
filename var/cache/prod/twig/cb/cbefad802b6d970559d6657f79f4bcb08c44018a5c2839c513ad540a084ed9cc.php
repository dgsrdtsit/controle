<?php

/* AdminBundle:CtReception:view.html.twig */
class __TwigTemplate_f637ee584e1fff93d48679c908c943c1361953c8933c0e3b73944843995d8e1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtReception:view.html.twig", 1);
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
        // line 5
        $context["menu_reception"] = true;
        // line 6
        $context["menu_reception_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Detail Réception ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> RECEPTION </span>
                    </div>
                </div>
                <div class=\"box-body\">
                    <div class=\"table-responsive panel\">
                        <table class=\"table table-striped  table-reception\">
                            <tbody>

                            <tr>
                                <td class=\"text-success\"> Type</td>
                                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctTypeReception", array()), "tprcpLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Centre</td>
                                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctCentre", array()), "ctrNom", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro Serie</td>
                                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "vhcNumSerie", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro moteur</td>
                                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "vhcNumMoteur", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Immatriculation</td>
                                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reception"] ?? null), "rcpImmatriculation", array()), "html", null, true);
        echo "</td>
                            </tr>

                            <tr>
                                <td class=\"text-success\"> Genre</td>
                                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "ctGenre", array()), "grLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Marque</td>
                                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "ctMarque", array()), "mrqLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Cylindre</td>
                                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "vhcCylindre", array()), "html", null, true);
        echo " cm3</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Puissance</td>
                                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "vhcPuissance", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Charge Utile</td>
                                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "vhcChargeUtile", array()), "html", null, true);
        echo " Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Poids Vide</td>
                                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "vhcPoidsVide", array()), "html", null, true);
        echo " Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> PTAC</td>
                                <td>";
        // line 86
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "vhcPoidsVide", array()) + $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctVehicule", array()), "vhcChargeUtile", array())), "html", null, true);
        echo " Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Source</td>
                                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctSourceEnergie", array()), "sreLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Carosserie</td>
                                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctCarosserie", array()), "crsLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Motif</td>
                                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? null), "ctMotif", array()), "mtfLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"box-footer\">
                    <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv", array("id" => $this->getAttribute(($context["reception"] ?? null), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-primary\" target=\"_blank\" >
                        Generer PV
                    </a>
                    <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_index");
        echo "\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>

            </div>
        </div>
    </div>
";
    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        // line 122
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-reception').DataTable(
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
                        \"sEmptyTable\": \"Aucune reception trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
    <script>
        var _generate_pv_ajax_uri = \"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv_ajax");
        echo "\";
    </script>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:CtReception:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 149,  252 => 122,  249 => 121,  235 => 110,  228 => 106,  217 => 98,  210 => 94,  203 => 90,  196 => 86,  189 => 82,  182 => 78,  175 => 74,  168 => 70,  161 => 66,  154 => 62,  146 => 57,  139 => 53,  132 => 49,  125 => 45,  118 => 41,  100 => 25,  91 => 22,  86 => 21,  82 => 20,  79 => 19,  70 => 16,  67 => 15,  62 => 14,  53 => 11,  50 => 10,  45 => 9,  42 => 8,  35 => 3,  31 => 1,  29 => 6,  27 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:CtReception:view.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtReception/view.html.twig");
    }
}
