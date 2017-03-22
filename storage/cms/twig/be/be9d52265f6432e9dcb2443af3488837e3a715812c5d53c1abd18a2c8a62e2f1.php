<?php

/* /Users/hewoo/colorchipsprojects/animatecafe/plugins/acme/demo/components/todo/default.htm */
class __TwigTemplate_6a91a700b8b85c6353b020f75303ed0c8d641563af79248fc79b38c2e71c59b8 extends Twig_Template
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
        $context["tasks"] = $this->getAttribute(($context["__SELF__"] ?? null), "tasks", array());
        // line 2
        echo "
<form 
    data-request=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onAddItem\" 
    data-request-success=\"\$( '#inputItem' ).val( ' ' )\" 
    data-request-update=\" '";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::tasks' : '#result' \"
>


    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Tasks assigned to: <strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "name", array()), "html", null, true);
        echo "</strong></h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"task\" id=\"inputItem\" class=\"form-control\"/>
                <span class=\"input-group-btn\">
                    <button type=\"submit\" class=\"btn btn-primary\">Add</button>
                </span>
            </div>
        </div>


        <ul class=\"list-group\" id=\"result\">
            ";
        // line 25
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['tasks'] = $this->getAttribute(($context["__SELF__"] ?? null), "tasks", array())        ;
        echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::tasks")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "        </ul> 
    </div>


</form>";
    }

    public function getTemplateName()
    {
        return "/Users/hewoo/colorchipsprojects/animatecafe/plugins/acme/demo/components/todo/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 26,  55 => 25,  39 => 12,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tasks = __SELF__.tasks %}

<form 
    data-request=\"{{ __SELF__ }}::onAddItem\" 
    data-request-success=\"\$( '#inputItem' ).val( ' ' )\" 
    data-request-update=\" '{{ __SELF__ }}::tasks' : '#result' \"
>


    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Tasks assigned to: <strong>{{ __SELF__.name }}</strong></h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"task\" id=\"inputItem\" class=\"form-control\"/>
                <span class=\"input-group-btn\">
                    <button type=\"submit\" class=\"btn btn-primary\">Add</button>
                </span>
            </div>
        </div>


        <ul class=\"list-group\" id=\"result\">
            {% partial __SELF__ ~ '::tasks' tasks=__SELF__.tasks %}
        </ul> 
    </div>


</form>", "/Users/hewoo/colorchipsprojects/animatecafe/plugins/acme/demo/components/todo/default.htm", "");
    }
}
