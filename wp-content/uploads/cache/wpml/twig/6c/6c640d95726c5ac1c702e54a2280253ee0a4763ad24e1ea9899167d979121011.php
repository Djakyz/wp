<?php

/* template.twig */
class __TwigTemplate_ec29618c536689ba8d003457030c6806ca4b3b61649731132466a3cc11d7aab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["css_classes"]) ? $context["css_classes"] : null), "html", null, true);
        echo "\" >
\t<ul>
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 4
            echo "\t\t\t<li ";
            if (($context["currency"] == (isset($context["selected_currency"]) ? $context["selected_currency"] : null))) {
                echo " class=\"wcml-cs-active-currency\" ";
            }
            echo " >
\t\t\t\t<a rel=\"";
            // line 5
            echo twig_escape_filter($this->env, $context["currency"], "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('get_formatted_price')->getCallable(), array($context["currency"], (isset($context["format"]) ? $context["format"] : null)));
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  36 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template.twig", "/var/www/wp/wp-content/plugins/woocommerce-multilingual/templates/currency-switchers/legacy-list-horizontal/template.twig");
    }
}
