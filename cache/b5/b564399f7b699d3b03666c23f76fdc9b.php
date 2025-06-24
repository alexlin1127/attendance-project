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
class __TwigTemplate_e50c5d09fc0b0652dccb8d7eb0c8f97f extends Template
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
        yield "<h3 class=\"mt-3\">學員資料</h3>
<div class=\"container\">
\t<div class=\"row mb-3 align-items-end\">

\t\t";
        // line 8
        if ((($context["role"] ?? null) == "admin")) {
            // line 9
            yield "\t\t<!-- 新增數據按鈕 -->
\t\t<div class=\"col-md-2 col-sm-4 mb-3\">
\t\t<a href=\"switch.php?mode=add_data\" class=\"btn btn-outline-secondary w-100\">新增數據</a>
\t\t</div>
\t\t";
        }
        // line 14
        yield "\t\t
\t\t<!-- 查詢表單 -->
\t\t<div class=\"col-md-10\">
\t\t<form method=\"get\" action=\"att_list.php\" class=\"row g-2\">
\t\t\t<div class=\"col-md-4\">
\t\t\t<label class=\"form-label\">學員姓名</label>
\t\t\t<select name=\"student_name\" class=\"form-select\">
\t\t\t\t<option value=\"\">全部學員</option>
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 23
            yield "\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 23), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 23) == ($context["selected_name"] ?? null))) ? ("selected") : (""));
            yield ">
\t\t\t\t\t";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "
\t\t\t\t</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['student'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "\t\t\t</select>
\t\t\t</div>

\t\t\t<div class=\"col-md-3\">
\t\t\t<label class=\"form-label\">開始日期</label>
\t\t\t<input type=\"date\" name=\"start_date\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("start_date", $context)) ? (Twig\Extension\CoreExtension::default(($context["start_date"] ?? null), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\">
\t\t\t</div>

\t\t\t<div class=\"col-md-3\">
\t\t\t<label class=\"form-label\">結束日期</label>
\t\t\t<input type=\"date\" name=\"end_date\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("end_date", $context)) ? (Twig\Extension\CoreExtension::default(($context["end_date"] ?? null), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control ";
        if ((($tmp = ($context["dateError"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\">
\t\t\t";
        // line 38
        if ((($tmp = ($context["dateError"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "\t\t\t<div class=\"invalid-feedback\">開始日期不能晚於結束日期</div>
\t\t\t";
        }
        // line 41
        yield "\t\t\t</div>

\t\t\t<div class=\"col-md-2\">
\t\t\t<label class=\"form-label d-block invisible\">搜尋</label>
\t\t\t<button type=\"submit\" class=\"btn btn-dark w-100\">搜尋</button>
\t\t\t</div>
\t\t</form>
\t\t</div>
\t\t
\t</div>
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
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 70
            yield "                        <tr>
                            <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
                            <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                            <td>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class_date", [], "any", false, false, false, 73), "html", null, true);
            yield " </td>
                            <td>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attended_hours", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                            <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "leave_early_hours", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                            <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "absent_hours", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                            <td>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"switch.php?mode=show&name=";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 79), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">查看</a>
                                ";
            // line 80
            if ((($context["role"] ?? null) == "admin")) {
                // line 81
                yield "                                <a href=\"switch.php?mode=edit&id=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 81), "html", null, true);
                yield "\" class=\"btn btn-sm btn-warning\">編輯</a>
                                <a class=\"btn btn-sm btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmDeleteModal\" data-id=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 82), "html", null, true);
                yield "\">刪除</a>
                                ";
            }
            // line 84
            yield "                            </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        // line 95
        yield "<nav class=\"d-flex align-items-center justify-content-center mb-5\">
\t<ul class=\"pagination\">
\t<li class=\"page-item\">
\t\t<a class=\"page-link\" href=\"?page=1&";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\">至第一頁</a>
\t\t</li>
\t\t";
        // line 101
        yield "\t\t<li class=\"page-item ";
        if ((($context["currentPage"] ?? null) == 1)) {
            yield "disabled";
        }
        yield "\">
\t\t<a class=\"page-link\" href=\"?page=";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prevpage"] ?? null), "html", null, true);
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\">上一頁</a>
\t\t</li>
\t\t";
        // line 105
        yield "\t\t";
        $context["startPage"] = ((((($context["currentPage"] ?? null) - 2) > 0)) ? ((($context["currentPage"] ?? null) - 2)) : (1));
        // line 106
        yield "\t\t";
        $context["endPage"] = ((((($context["currentPage"] ?? null) + 2) < ($context["totalPages"] ?? null))) ? ((($context["currentPage"] ?? null) + 2)) : (($context["totalPages"] ?? null)));
        // line 107
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 108
            yield "\t\t<li class=\"page-item ";
            if (($context["p"] == ($context["currentPage"] ?? null))) {
                yield "active";
            }
            yield "\">
\t\t\t<a class=\"page-link\" href=\"?page=";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
            yield "&";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
            yield "</a>
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "\t\t";
        // line 113
        yield "\t\t<li class=\"page-item ";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            yield "disabled";
        }
        yield "\">
\t\t\t<a class=\"page-link\" href=\"?page=";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nextpage"] ?? null), "html", null, true);
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\">下一頁</a>
\t\t</li>
\t\t<li class=\"page-item\">
\t\t\t<a class=\"page-link\" href=\"?page=";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\">至最終頁</a>
\t\t</li>
\t\t<li class=\"page-item disabled\">
\t\t\t<span class=\"page-link\">第 ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
        yield " 頁 / 共 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
        yield " 頁</span>
\t\t</li>
\t</ul>
</nav>

";
        // line 126
        yield "<div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t<form method=\"get\" action=\"switch.php\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"confirmModalLabel\">確認刪除</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"關閉\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t確定要刪除這筆資料嗎？
\t\t\t</div>
\t\t\t";
        // line 138
        yield "\t\t\t<input type=\"hidden\" name=\"mode\" value=\"deldata\">
\t\t\t";
        // line 140
        yield "\t\t\t<input type=\"hidden\" name=\"id\" id=\"delete-id\">
\t\t\t<div class=\"modal-footer\">
\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">取消</button>
\t\t\t<button type=\"submit\" class=\"btn btn-danger\">確定刪除</button>
\t\t\t</div>
\t\t</form>
\t\t</div>
\t</div>
</div>

";
        yield from [];
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 152
        yield "<script>
";
        // line 154
        yield "document.getElementById('confirmDeleteModal').addEventListener('show.bs.modal', function (event) {
\tconst button = event.relatedTarget;
\tconst id = button.getAttribute('data-id');
\tdocument.getElementById('delete-id').value = id;
});
</script>

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
        return array (  360 => 154,  357 => 152,  350 => 151,  335 => 140,  332 => 138,  319 => 126,  309 => 120,  301 => 117,  293 => 114,  286 => 113,  284 => 112,  271 => 109,  264 => 108,  259 => 107,  256 => 106,  253 => 105,  246 => 102,  239 => 101,  234 => 98,  229 => 95,  221 => 88,  212 => 84,  207 => 82,  202 => 81,  200 => 80,  196 => 79,  190 => 76,  186 => 75,  182 => 74,  178 => 73,  174 => 72,  170 => 71,  167 => 70,  163 => 69,  133 => 41,  129 => 39,  127 => 38,  119 => 37,  111 => 32,  104 => 27,  95 => 24,  88 => 23,  84 => 22,  74 => 14,  67 => 9,  65 => 8,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block content %}
<h3 class=\"mt-3\">學員資料</h3>
<div class=\"container\">
\t<div class=\"row mb-3 align-items-end\">

\t\t{% if role == 'admin' %}
\t\t<!-- 新增數據按鈕 -->
\t\t<div class=\"col-md-2 col-sm-4 mb-3\">
\t\t<a href=\"switch.php?mode=add_data\" class=\"btn btn-outline-secondary w-100\">新增數據</a>
\t\t</div>
\t\t{% endif %}
\t\t
\t\t<!-- 查詢表單 -->
\t\t<div class=\"col-md-10\">
\t\t<form method=\"get\" action=\"att_list.php\" class=\"row g-2\">
\t\t\t<div class=\"col-md-4\">
\t\t\t<label class=\"form-label\">學員姓名</label>
\t\t\t<select name=\"student_name\" class=\"form-select\">
\t\t\t\t<option value=\"\">全部學員</option>
\t\t\t\t{% for student in students %}
\t\t\t\t<option value=\"{{ student.name }}\" {{ student.name == selected_name ? 'selected' : '' }}>
\t\t\t\t\t{{ student.name }}
\t\t\t\t</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t</div>

\t\t\t<div class=\"col-md-3\">
\t\t\t<label class=\"form-label\">開始日期</label>
\t\t\t<input type=\"date\" name=\"start_date\" value=\"{{ start_date|default('') }}\" class=\"form-control\">
\t\t\t</div>

\t\t\t<div class=\"col-md-3\">
\t\t\t<label class=\"form-label\">結束日期</label>
\t\t\t<input type=\"date\" name=\"end_date\" value=\"{{ end_date|default('') }}\" class=\"form-control {% if dateError %}is-invalid{% endif %}\">
\t\t\t{% if dateError %}
\t\t\t<div class=\"invalid-feedback\">開始日期不能晚於結束日期</div>
\t\t\t{% endif %}
\t\t\t</div>

\t\t\t<div class=\"col-md-2\">
\t\t\t<label class=\"form-label d-block invisible\">搜尋</label>
\t\t\t<button type=\"submit\" class=\"btn btn-dark w-100\">搜尋</button>
\t\t\t</div>
\t\t</form>
\t\t</div>
\t\t
\t</div>
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
                                {% if role == 'admin'%}
                                <a href=\"switch.php?mode=edit&id={{item.id}}\" class=\"btn btn-sm btn-warning\">編輯</a>
                                <a class=\"btn btn-sm btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmDeleteModal\" data-id=\"{{ item.id }}\">刪除</a>
                                {% endif %}
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
\t<ul class=\"pagination\">
\t<li class=\"page-item\">
\t\t<a class=\"page-link\" href=\"?page=1&{{ queryString }}\">至第一頁</a>
\t\t</li>
\t\t{# 上一頁按鈕 #}
\t\t<li class=\"page-item {% if currentPage == 1 %}disabled{% endif %}\">
\t\t<a class=\"page-link\" href=\"?page={{ prevpage }}&{{ queryString }}\">上一頁</a>
\t\t</li>
\t\t{# 目前頁數為中心、前後最多 2 頁 #}
\t\t{% set startPage = currentPage - 2 > 0 ? currentPage - 2 : 1 %}
\t\t{% set endPage = currentPage + 2 < totalPages ? currentPage + 2 : totalPages%}
\t\t{% for p in startPage..endPage %}
\t\t<li class=\"page-item {% if p == currentPage %}active{% endif %}\">
\t\t\t<a class=\"page-link\" href=\"?page={{ p }}&{{ queryString }}\">{{ p }}</a>
\t\t</li>
\t\t{% endfor %}
\t\t{# 下一頁按鈕 #}
\t\t<li class=\"page-item {% if currentPage == totalPages %}disabled{% endif %}\">
\t\t\t<a class=\"page-link\" href=\"?page={{ nextpage }}&{{ queryString }}\">下一頁</a>
\t\t</li>
\t\t<li class=\"page-item\">
\t\t\t<a class=\"page-link\" href=\"?page={{ totalPages }}&{{ queryString }}\">至最終頁</a>
\t\t</li>
\t\t<li class=\"page-item disabled\">
\t\t\t<span class=\"page-link\">第 {{ currentPage }} 頁 / 共 {{ totalPages }} 頁</span>
\t\t</li>
\t</ul>
</nav>

{# modal #}
<div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t<form method=\"get\" action=\"switch.php\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"confirmModalLabel\">確認刪除</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"關閉\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t確定要刪除這筆資料嗎？
\t\t\t</div>
\t\t\t{# 將mode=deldata傳url #}
\t\t\t<input type=\"hidden\" name=\"mode\" value=\"deldata\">
\t\t\t{# 將id=選擇的id傳入，以js寫入 #}
\t\t\t<input type=\"hidden\" name=\"id\" id=\"delete-id\">
\t\t\t<div class=\"modal-footer\">
\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">取消</button>
\t\t\t<button type=\"submit\" class=\"btn btn-danger\">確定刪除</button>
\t\t\t</div>
\t\t</form>
\t\t</div>
\t</div>
</div>

{% endblock %}
{% block scripts %}
<script>
{# bs提供 Modal 彈出前觸發事件show.bs.modal，觸發元素relatedTarget#}
document.getElementById('confirmDeleteModal').addEventListener('show.bs.modal', function (event) {
\tconst button = event.relatedTarget;
\tconst id = button.getAttribute('data-id');
\tdocument.getElementById('delete-id').value = id;
});
</script>

{% endblock %}", "partial/backend/att_list.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\att_list.html.twig");
    }
}
