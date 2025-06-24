<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partial/backend/att_list.html.twig */
class __TwigTemplate_6e27175a2af64dc1825ad87b9a2f4ec0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<h3>學員資料</h3>
<div class=\"container\">
  <div class=\"row mb-3 align-items-end\">

    <!-- 新增數據按鈕 -->
    <div class=\"col-md-2 col-sm-4 mb-3\">
      <a href=\"switch.php?mode=add_data\" class=\"btn btn-info w-100\">新增數據</a>
    </div>

    <!-- 建立使用者按鈕 -->
    <div class=\"col-md-2 col-sm-4 mb-3\">
      <a href=\"switch.php?mode=add_user\" class=\"btn btn-secondary w-100\">建立使用者</a>
    </div>

    <!-- 查詢表單 -->
    <div class=\"col-md-8\">
      <form method=\"get\" action=\"att_list.php\" class=\"row g-2\">
        <div class=\"col-md-4\">
          <label class=\"form-label\">學員姓名</label>
          <select name=\"student_name\" class=\"form-select\">
            <option value=\"\">全部學員</option>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 26
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 26), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 26) == ($context["selected_name"] ?? null))) ? ("selected") : (""));
            yield ">
                ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 27), "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['student'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "          </select>
        </div>

        <div class=\"col-md-3\">
          <label class=\"form-label\">開始日期</label>
          <input type=\"date\" name=\"start_date\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("start_date", $context)) ? (Twig\Extension\CoreExtension::default(($context["start_date"] ?? null), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\">
        </div>

        <div class=\"col-md-3\">
          <label class=\"form-label\">結束日期</label>
          <input type=\"date\" name=\"end_date\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("end_date", $context)) ? (Twig\Extension\CoreExtension::default(($context["end_date"] ?? null), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control ";
        if ((($tmp = ($context["dateError"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\">
           ";
        // line 41
        if ((($tmp = ($context["dateError"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "          <div class=\"invalid-feedback\">開始日期不能晚於結束日期</div>
          ";
        }
        // line 44
        yield "        </div>

        <div class=\"col-md-2\">
          <label class=\"form-label d-block invisible\">搜尋</label>
          <button type=\"submit\" class=\"btn btn-primary w-100\">搜尋</button>
        </div>
      </form>
    </div>
    
  </div>
</div>
<div class=\"row mb-5\">
    <div class=\"col-12 col-sm-12 col-md-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-fixed text-center\">
                    <thead>
                        <tr>
                            <th>流水號</th>
                            <th>名字</th>
                            <th>日期</th>
                            <th>出席時數</th>
                            <th>早退時數</th>
                            <th>缺席時數</th>
                            <th>功能</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 73
            yield "                        <tr>
                            <td>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                            <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                            <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class_date", [], "any", false, false, false, 76), "html", null, true);
            yield " </td>
                            <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attended_hours", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                            <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "leave_early_hours", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                            <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "absent_hours", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                            <td>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"switch.php?mode=show&name=";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 82), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">查看</a>
                                <a href=\"switch.php?mode=edit&id=";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">編輯</a>
                                <a href=\"switch.php?mode=deldata&id=";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 84), "html", null, true);
            yield "\" class=\"btn btn-sm btn-danger\">刪除</a>
                            </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        // line 96
        yield "<nav class=\"d-flex align-items-center justify-content-center mb-5\">
  <ul class=\"pagination\">
  <li class=\"page-item\">
      <a class=\"page-link\" href=\"?page=1&";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\">至第一頁</a>
    </li>
   ";
        // line 102
        yield "    <li class=\"page-item ";
        if ((($context["currentPage"] ?? null) == 1)) {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" href=\"?page=";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prevpage"] ?? null), "html", null, true);
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\">上一頁</a>
    </li>
    ";
        // line 106
        yield "    ";
        $context["startPage"] = ((((($context["currentPage"] ?? null) - 2) > 0)) ? ((($context["currentPage"] ?? null) - 2)) : (1));
        // line 107
        yield "    ";
        $context["endPage"] = ((((($context["currentPage"] ?? null) + 2) < ($context["totalPages"] ?? null))) ? ((($context["currentPage"] ?? null) + 2)) : (($context["totalPages"] ?? null)));
        // line 108
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 109
            yield "      <li class=\"page-item ";
            if (($context["p"] == ($context["currentPage"] ?? null))) {
                yield "active";
            }
            yield "\">
        <a class=\"page-link\" href=\"?page=";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
            yield "&";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
            yield "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "    ";
        // line 114
        yield "    <li class=\"page-item ";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" href=\"?page=";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nextpage"] ?? null), "html", null, true);
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\">下一頁</a>
    </li>
    <li class=\"page-item\">
      <a class=\"page-link\" href=\"?page=";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\">至最終頁</a>
    </li>
    <li class=\"page-item disabled\">
      <span class=\"page-link\">第 ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
        yield " 頁 / 共 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
        yield " 頁</span>
    </li>
  </ul>
</nav>
";
        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/backend/att_list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  320 => 127,  313 => 126,  301 => 121,  293 => 118,  285 => 115,  278 => 114,  276 => 113,  263 => 110,  256 => 109,  251 => 108,  248 => 107,  245 => 106,  238 => 103,  231 => 102,  226 => 99,  221 => 96,  213 => 89,  202 => 84,  198 => 83,  194 => 82,  188 => 79,  184 => 78,  180 => 77,  176 => 76,  172 => 75,  168 => 74,  165 => 73,  161 => 72,  131 => 44,  127 => 42,  125 => 41,  117 => 40,  109 => 35,  102 => 30,  93 => 27,  86 => 26,  82 => 25,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block content %}
<h3>學員資料</h3>
<div class=\"container\">
  <div class=\"row mb-3 align-items-end\">

    <!-- 新增數據按鈕 -->
    <div class=\"col-md-2 col-sm-4 mb-3\">
      <a href=\"switch.php?mode=add_data\" class=\"btn btn-info w-100\">新增數據</a>
    </div>

    <!-- 建立使用者按鈕 -->
    <div class=\"col-md-2 col-sm-4 mb-3\">
      <a href=\"switch.php?mode=add_user\" class=\"btn btn-secondary w-100\">建立使用者</a>
    </div>

    <!-- 查詢表單 -->
    <div class=\"col-md-8\">
      <form method=\"get\" action=\"att_list.php\" class=\"row g-2\">
        <div class=\"col-md-4\">
          <label class=\"form-label\">學員姓名</label>
          <select name=\"student_name\" class=\"form-select\">
            <option value=\"\">全部學員</option>
            {% for student in students %}
              <option value=\"{{ student.name }}\" {{ student.name == selected_name ? 'selected' : '' }}>
                {{ student.name }}
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"col-md-3\">
          <label class=\"form-label\">開始日期</label>
          <input type=\"date\" name=\"start_date\" value=\"{{ start_date|default('') }}\" class=\"form-control\">
        </div>

        <div class=\"col-md-3\">
          <label class=\"form-label\">結束日期</label>
          <input type=\"date\" name=\"end_date\" value=\"{{ end_date|default('') }}\" class=\"form-control {% if dateError %}is-invalid{% endif %}\">
           {% if dateError %}
          <div class=\"invalid-feedback\">開始日期不能晚於結束日期</div>
          {% endif %}
        </div>

        <div class=\"col-md-2\">
          <label class=\"form-label d-block invisible\">搜尋</label>
          <button type=\"submit\" class=\"btn btn-primary w-100\">搜尋</button>
        </div>
      </form>
    </div>
    
  </div>
</div>
<div class=\"row mb-5\">
    <div class=\"col-12 col-sm-12 col-md-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-fixed text-center\">
                    <thead>
                        <tr>
                            <th>流水號</th>
                            <th>名字</th>
                            <th>日期</th>
                            <th>出席時數</th>
                            <th>早退時數</th>
                            <th>缺席時數</th>
                            <th>功能</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for item in results %}
                        <tr>
                            <td>{{item.id}}</td>
                            <td>{{item.name}}</td>
                            <td>{{item.class_date}} </td>
                            <td>{{item.attended_hours}}</td>
                            <td>{{item.leave_early_hours}}</td>
                            <td>{{item.absent_hours}}</td>
                            <td>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"switch.php?mode=show&name={{item.name}}\" class=\"btn btn-sm btn-primary\">查看</a>
                                <a href=\"switch.php?mode=edit&id={{item.id}}\" class=\"btn btn-sm btn-warning\">編輯</a>
                                <a href=\"switch.php?mode=deldata&id={{item.id}}\" class=\"btn btn-sm btn-danger\">刪除</a>
                            </div>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{# 頁碼 #}
<nav class=\"d-flex align-items-center justify-content-center mb-5\">
  <ul class=\"pagination\">
  <li class=\"page-item\">
      <a class=\"page-link\" href=\"?page=1&{{ queryString }}\">至第一頁</a>
    </li>
   {# 上一頁按鈕 #}
    <li class=\"page-item {% if currentPage == 1 %}disabled{% endif %}\">
      <a class=\"page-link\" href=\"?page={{ prevpage }}&{{ queryString }}\">上一頁</a>
    </li>
    {# 目前頁數為中心、前後最多 2 頁 #}
    {% set startPage = currentPage - 2 > 0 ? currentPage - 2 : 1 %}
    {% set endPage = currentPage + 2 < totalPages ? currentPage + 2 : totalPages%}
    {% for p in startPage..endPage %}
      <li class=\"page-item {% if p == currentPage %}active{% endif %}\">
        <a class=\"page-link\" href=\"?page={{ p }}&{{ queryString }}\">{{ p }}</a>
      </li>
    {% endfor %}
    {# 下一頁按鈕 #}
    <li class=\"page-item {% if currentPage == totalPages %}disabled{% endif %}\">
      <a class=\"page-link\" href=\"?page={{ nextpage }}&{{ queryString }}\">下一頁</a>
    </li>
    <li class=\"page-item\">
      <a class=\"page-link\" href=\"?page={{ totalPages }}&{{ queryString }}\">至最終頁</a>
    </li>
    <li class=\"page-item disabled\">
      <span class=\"page-link\">第 {{ currentPage }} 頁 / 共 {{ totalPages }} 頁</span>
    </li>
  </ul>
</nav>
{% endblock %}
{% block scripts %}


{% endblock %}", "partial/backend/att_list.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\att_list.html.twig");
    }
}
