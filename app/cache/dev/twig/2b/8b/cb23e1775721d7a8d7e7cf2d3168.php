<?php

/* EnsJobeetBundle:Default:index.html.twig */
class __TwigTemplate_2b8bcb23e1775721d7a8d7e7cf2d3168 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
