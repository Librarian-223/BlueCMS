<?php

/* BlueCMSBundle:Entry:index.html.twig */
class __TwigTemplate_72af34c606e2e0f0849b070132d3c981 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Entry list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created</th>
            <th>Iduser</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "        <tr>
            <td><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("entry_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id")));
            echo "\">";
            echo $this->getAttribute($this->getContext($context, "entity"), "id");
            echo "</a></td>
            <td>";
            // line 18
            echo $this->getAttribute($this->getContext($context, "entity"), "title");
            echo "</td>
            <td>";
            // line 19
            echo $this->getAttribute($this->getContext($context, "entity"), "content");
            echo "</td>
            <td>";
            // line 20
            if ($this->getAttribute($this->getContext($context, "entity"), "created")) {
                echo twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "created"), "Y-m-d H:i:s");
            }
            echo "</td>
            <td>";
            // line 21
            echo $this->getAttribute($this->getContext($context, "entity"), "iduser");
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("entry_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id")));
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("entry_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id")));
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("entry_new");
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BlueCMSBundle:Entry:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
