<?php

/* /Users/hewoo/colorchipsprojects/animatecafe/plugins/acme/demo/components/todo/tasks.htm */
class __TwigTemplate_516e8e295c7033874a3db006e9af41f70e8494e0c7417593165767c93bf9cde5 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 2
            echo "
<li class=\"list-group-item\">
    ";
            // line 4
            echo twig_escape_filter($this->env, $context["task"], "html", null, true);
            echo "

    <button class=\"close pull-right\">&times;</button>

</li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Users/hewoo/colorchipsprojects/animatecafe/plugins/acme/demo/components/todo/tasks.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for task in tasks %}

<li class=\"list-group-item\">
    {{task}}

    <button class=\"close pull-right\">&times;</button>

</li>

{% endfor %}
", "/Users/hewoo/colorchipsprojects/animatecafe/plugins/acme/demo/components/todo/tasks.htm", "");
    }
}
