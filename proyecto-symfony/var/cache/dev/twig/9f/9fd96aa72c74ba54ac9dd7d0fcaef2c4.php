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

/* includes/task-list.html.twig */
class __TwigTemplate_b2ebaee5fecb048c07292b1271772b71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/task-list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/task-list.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 1, $this->source); })())) >= 1)) {
            // line 2
            echo "<table>
        <tr>
            <th>Tarea</th>
            <th>Prioridad</th>
            <th>Horas presupuestadas</th>
            <th>Acciones</th>
        </tr>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 10
                echo "            <tr>
            <td>";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 11), "html", null, true);
                echo "</td>
            ";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 12) == "high")) {
                    // line 13
                    echo "                <td>";
                    echo "Alta";
                    echo "</td>
            ";
                }
                // line 15
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 15) == "medium")) {
                    // line 16
                    echo "                <td>";
                    echo "Media";
                    echo "</td>
            ";
                }
                // line 18
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 18) == "low")) {
                    // line 19
                    echo "                <td>";
                    echo "Baja";
                    echo "</td>
            ";
                }
                // line 21
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "hours", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
            <td class=\"buttons\">
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" class=\"btn-show\">Ver</a>
                
                ";
                // line 25
                if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)))) {
                    // line 26
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                    echo "\" class=\"btn-edit\">Editar</a> 
                    <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                    echo "\" class=\"btn-delete\">Borrar</a>
                ";
                }
                // line 29
                echo "            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </table>
    ";
        } else {
            // line 34
            echo "    <strong>No hay tareas disponibles en este momento</strong>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "includes/task-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 34,  122 => 32,  114 => 29,  109 => 27,  104 => 26,  102 => 25,  97 => 23,  91 => 21,  85 => 19,  82 => 18,  76 => 16,  73 => 15,  67 => 13,  65 => 12,  61 => 11,  58 => 10,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if tasks|length >=1 %}
<table>
        <tr>
            <th>Tarea</th>
            <th>Prioridad</th>
            <th>Horas presupuestadas</th>
            <th>Acciones</th>
        </tr>
        {% for task in tasks %}
            <tr>
            <td>{{ task.title }}</td>
            {% if task.priority == 'high' %}
                <td>{{ 'Alta' }}</td>
            {% endif %}
            {% if task.priority == 'medium' %}
                <td>{{ 'Media' }}</td>
            {% endif %}
            {% if task.priority == 'low' %}
                <td>{{ 'Baja' }}</td>
            {% endif %}
            <td>{{ task.hours }}</td>
            <td class=\"buttons\">
                <a href=\"{{ path('task_detail',{'id':task.id}) }}\" class=\"btn-show\">Ver</a>
                
                {% if app.user != null and task.user.id  == app.user.id %}
                    <a href=\"{{ path('task_edit',{'id':task.id}) }}\" class=\"btn-edit\">Editar</a> 
                    <a href=\"{{ path('task_delete',{'id':task.id}) }}\" class=\"btn-delete\">Borrar</a>
                {% endif %}
            </td>
        </tr>
        {% endfor %}
    </table>
    {% else %}
    <strong>No hay tareas disponibles en este momento</strong>
    {% endif %}", "includes/task-list.html.twig", "C:\\xampp\\htdocs\\master-php2\\master-php\\proyecto-symfony\\templates\\includes\\task-list.html.twig");
    }
}
