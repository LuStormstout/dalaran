<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>后端学习资源导航</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography,forms"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Noto+Sans+SC:wght@400;500;700&display=swap"
          rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', 'Noto Sans SC', sans-serif;
            scroll-behavior: smooth; /* 平滑滚动 */
        }

        .tutorial-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .tutorial-card:hover {
            transform: translateY(-6px) scale(1.02); /* 更明显的上移和放大 */
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); /* 更深的阴影 */
        }

        /* 定义不同区域的强调色 */
        .section-mall .tutorial-card:hover {
            border-color: #3B82F6;
        }

        /* blue-500 */
        .section-mall h3 a:hover {
            color: #2563EB;
        }

        /* blue-600 */
        .section-mall h2 {
            border-color: #3B82F6;
        }

        .section-mall .card-icon {
            color: #3B82F6;
        }

        .section-php .tutorial-card:hover {
            border-color: #10B981;
        }

        /* emerald-500 */
        .section-php h3 a:hover {
            color: #059669;
        }

        /* emerald-600 */
        .section-php h2 {
            border-color: #10B981;
        }

        .section-php .card-icon {
            color: #10B981;
        }

        .section-laravel .tutorial-card:hover {
            border-color: #EF4444;
        }

        /* red-500 */
        .section-laravel h3 a:hover {
            color: #DC2626;
        }

        /* red-600 */
        .section-laravel h2 {
            border-color: #EF4444;
        }

        .section-laravel .card-icon {
            color: #EF4444;
        }
    </style>
</head>
<body class="bg-slate-50 text-gray-900 antialiased">

<header class="bg-white/95 backdrop-blur-lg shadow-md sticky top-0 z-50 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center">
                <i class="bi bi-compass-fill text-3xl text-indigo-600 mr-3"></i>
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">
                    后端学习导航
                </h1>
            </div>
            <nav class="hidden sm:flex space-x-6">
                <a href="#php" class="text-gray-600 hover:text-indigo-600 font-medium">PHP 基础</a>
                <a href="#laravel-basics" class="text-gray-600 hover:text-indigo-600 font-medium">Laravel 基础</a>
                <a href="#online-mall"
                   class="text-gray-600 hover:text-indigo-600 font-medium">商城项目</a>
                <a href="{{ route('lectures.interview-guide') }}"
                   class="text-gray-600 hover:text-indigo-600 font-medium">面试资料</a>
            </nav>
        </div>
    </div>
</header>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20">

    <section id="php" class="mb-20 section-php">
        <h2 class="text-3xl font-bold text-gray-800 border-l-4 pl-4 mb-10 flex items-center">
            <i class="bi bi-filetype-php text-green-500 mr-3 text-4xl"></i> PHP 基础教程 (17 章 + 附录)
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/01-intro.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">01 - PHP 介绍</h3>
                        <i class="bi bi-info-circle-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">语言背景、特点与环境准备。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">入门</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/02-variables-and-types.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">02 - 变量与数据类型</h3>
                        <i class="bi bi-type text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">标量、复合与特殊类型详解。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">基础语法</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/03-operators.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">03 - 运算符</h3>
                        <i class="bi bi-plus-slash-minus text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">算术、赋值、比较、逻辑等运算符。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">基础语法</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/04-control-structures.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">04 - 控制结构</h3>
                        <i class="bi bi-diagram-3-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">if/else, switch, for, while 循环语句。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">流程控制</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/05-functions.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">05 - 函数</h3>
                        <i class="bi bi-puzzle-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">定义、调用、参数、作用域与匿名函数。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">代码组织</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/06-string-functions.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">06 - 字符串函数</h3>
                        <i class="bi bi-file-text-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">常用字符串查找、替换、格式化操作。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">常用函数</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/07-array-functions.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">07 - 数组函数</h3>
                        <i class="bi bi-list-nested text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">常用数组遍历、查找、排序、合并操作。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">常用函数</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/08-forms-and-superglobals.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">08 - 表单处理与超全局变量</h3>
                        <i class="bi bi-input-cursor-text text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">处理 GET/POST 请求，理解超全局变量。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">Web 交互</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/09-database-pdo.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">09 - 数据库交互 (PDO)</h3>
                        <i class="bi bi-database text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">使用 PDO 扩展安全地连接和操作数据库。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">数据库</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/10-cookies-and-sessions.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">10 - Cookie 与 Session</h3>
                        <i class="bi bi-hdd-stack-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">理解客户端与服务器端的状态管理机制。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">状态管理</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/11-oop-basics.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">11 - 面向对象基础 (OOP)</h3>
                        <i class="bi bi-box text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">类、对象、属性、方法、访问控制。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">面向对象</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/12-oop-inheritance.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">12 - OOP 继承与多态</h3>
                        <i class="bi bi-diagram-2-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">extends 关键字、接口、抽象类应用。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">面向对象</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/13-oop-traits-magic.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">13 - OOP Trait 与魔术方法</h3>
                        <i class="bi bi-magic text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">使用 Trait 复用代码及 PHP 魔术方法。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">面向对象</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/14-namespaces-autoload.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">14 - 命名空间与自动加载</h3>
                        <i class="bi bi-folder-symlink-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">避免命名冲突与 PSR-4 自动加载规范。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">代码组织</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/15-errors-exceptions.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">15 - 错误与异常处理</h3>
                        <i class="bi bi-exclamation-triangle-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">try/catch 块与 PHP 错误处理机制。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">健壮性</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/16-composer-and-ecosystem.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">16 - Composer 与生态</h3>
                        <i class="bi bi-box-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">使用 Composer 管理依赖与 Packagist。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">生态系统</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/17-security-and-advanced.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">17 - 安全与其他进阶</h3>
                        <i class="bi bi-shield-lock-fill text-2xl text-green-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">Web 安全基础（XSS, CSRF 等）与 JIT。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2.5 py-1 rounded-full">进阶</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/a-var-functions.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600">附录 A -
                            变量处理函数</h3>
                        <i class="bi bi-question-circle-fill text-2xl text-gray-400"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">isset, empty, is_* 等常用函数。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100"><span class="text-xs text-gray-400">附录</span></div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/b-math-functions.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600">附录 B -
                            数学函数</h3>
                        <i class="bi bi-calculator text-2xl text-gray-400"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">常用数学运算相关函数。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100"><span class="text-xs text-gray-400">附录</span></div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/c-date-time.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600">附录 C -
                            日期与时间</h3>
                        <i class="bi bi-calendar-week text-2xl text-gray-400"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">DateTime 对象与 date/time 函数。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100"><span class="text-xs text-gray-400">附录</span></div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/d-filesystem.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600">附录 D -
                            文件系统操作</h3>
                        <i class="bi bi-folder2-open text-2xl text-gray-400"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">文件读写、目录遍历等。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100"><span class="text-xs text-gray-400">附录</span></div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/e-json.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600">附录 E - JSON
                            操作</h3>
                        <i class="bi bi-braces text-2xl text-gray-400"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">编码与解码 JSON 数据。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100"><span class="text-xs text-gray-400">附录</span></div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/f-regex.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600">附录 F -
                            正则表达式</h3>
                        <i class="bi bi-regex text-2xl text-gray-400"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">PCRE 函数与模式匹配。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100"><span class="text-xs text-gray-400">附录</span></div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/php/g-curl.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600">附录 G - cURL
                            操作</h3>
                        <i class="bi bi-cloud-download-fill text-2xl text-gray-400"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">使用 cURL 发送 HTTP 请求。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100"><span class="text-xs text-gray-400">附录</span></div>
            </div>
        </div>
    </section>

    <section id="laravel-basics" class="mb-16 section-laravel">
        <h2 class="text-3xl font-bold text-gray-800 border-l-4 pl-4 mb-10 flex items-center">
            <i class="bi bi-box-arrow-in-up-right text-red-500 mr-3 text-4xl"></i> Laravel 基础教程 (17 章)
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/01-laravel-introduction-installation.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">01 - Laravel 介绍与安装</h3>
                        <i class="bi bi-rocket-takeoff-fill text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">框架背景、MVC 概念、安装与基本配置。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">入门</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/02-routing-request-lifecycle.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">02 - 路由与请求生命周期</h3>
                        <i class="bi bi-signpost-split-fill text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">定义路由规则，理解请求处理全过程。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">核心概念</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/03-controllers-middleware.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">03 - 控制器与中间件</h3>
                        <i class="bi bi-person-gear text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">组织业务逻辑，实现请求过滤与处理。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">请求处理</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/04-views-blade-template-engine.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">04 - 视图与 Blade 模板</h3>
                        <i class="bi bi-layout-text-sidebar-reverse text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">构建前端界面，利用 Blade 简化视图开发。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">前端</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/05-database-migrations-seeding.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">05 - 数据库：迁移与填充</h3>
                        <i class="bi bi-database-fill-gear text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">版本化管理数据库结构与生成测试数据。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">数据库</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/06-database-query-builder.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">06 - 数据库：查询构建器</h3>
                        <i class="bi bi-funnel-fill text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">使用流式接口进行数据库查询操作。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">数据库</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/07-eloquent-orm-basics.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">07 - Eloquent ORM 基础</h3>
                        <i class="bi bi-box-seam text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">模型定义、基础 CRUD 与属性修改器。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">数据库</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/08-eloquent-relationships.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">08 - Eloquent 关系</h3>
                        <i class="bi bi-link-45deg text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">定义和使用一对一/多、多对多等关联。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">数据库</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/09-frontend-asset-management-vite.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">09 - 前端资源管理 (Vite)</h3>
                        <i class="bi bi-lightning-charge-fill text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">使用 Vite 编译打包 CSS 和 JavaScript。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">前端</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/10-form-handling-validation.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">10 - 表单处理与验证</h3>
                        <i class="bi bi-ui-checks-grid text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">接收表单数据、CSRF 保护与数据验证规则。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">请求处理</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/11-authentication-authorization.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">11 - 用户认证与授权</h3>
                        <i class="bi bi-shield-check text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">实现登录注册与 Gates/Policies 权限控制。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">安全</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/12-artisan-console-commands.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">12 - Artisan 控制台命令</h3>
                        <i class="bi bi-terminal-fill text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">使用 Artisan 工具及创建自定义命令。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">工具</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/13-service-container-dependency-injection.html"
                   class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">13 - 服务容器与依赖注入</h3>
                        <i class="bi bi-box-arrow-in-down-left text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">理解 Laravel 核心的 IoC 容器与 DI 模式。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">核心概念</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/14-logging-exception-handling.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">14 - 日志与异常处理</h3>
                        <i class="bi bi-journal-text text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">配置日志通道与自定义异常处理逻辑。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">调试与维护</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/15-task-scheduling-queues.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">15 - 任务调度与队列</h3>
                        <i class="bi bi-clock-history text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">实现定时任务与后台异步任务处理。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">高级功能</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/16-testing-basics.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">16 - 测试基础</h3>
                        <i class="bi bi-clipboard-data text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">使用 PHPUnit 进行单元与特性测试入门。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">测试与质量</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/laravel/17-deployment-further-learning.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">17 - 部署与进阶学习</h3>
                        <i class="bi bi-cloud-upload-fill text-2xl text-red-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">基础部署流程与后续 Laravel 生态探索。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2.5 py-1 rounded-full">部署与生态</span>
                </div>
            </div>
        </div>
    </section>

    <section id="online-mall" class="mb-20 section-mall">
        <h2 class="text-3xl font-bold text-gray-800 border-l-4 pl-4 mb-10 flex items-center">
            <i class="bi bi-cart4 text-blue-500 mr-3 text-4xl"></i> 在线商城 MVP 项目讲义 (19 章)
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">
                        <a href="/lectures/backend/online-mall/01-project-setup-environment.html"
                           class="hover:text-blue-600 transition-colors duration-200">01 - 项目初始化与环境</a>
                    </h3>
                    <i class="bi bi-gear-fill text-2xl text-blue-500 opacity-75"></i></div>
                <p class="text-sm text-gray-600 leading-relaxed flex-grow">创建项目、配置
                    .env、Nginx、Git，奠定项目基础。</p>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">核心基础</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">
                        <a href="/lectures/backend/online-mall/02-auth-integration-breeze.html"
                           class="hover:text-blue-600 transition-colors duration-200">02 - 集成用户认证 (Breeze)</a>
                    </h3>
                    <i class="bi bi-person-lock text-2xl text-blue-500 opacity-75"></i>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed flex-grow">快速搭建登录注册系统，调整用户模型。</p>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">认证授权</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">
                        <a href="/lectures/backend/online-mall/03-db-migrations-seeding-db-cart.html"
                           class="hover:text-blue-600 transition-colors duration-200">03 - 核心数据表与填充
                            (含购物车)</a>
                    </h3>
                    <i class="bi bi-database-fill-add text-2xl text-blue-500 opacity-75"></i>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed flex-grow">创建 Product, Category, Cart, CartItem
                    表结构与数据。</p>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">数据库</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">
                        <a href="/lectures/backend/online-mall/04-product-display.html"
                           class="hover:text-blue-600 transition-colors duration-200">04 - 实现商品展示</a>
                    </h3>
                    <i class="bi bi-display text-2xl text-blue-500 opacity-75"></i>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed flex-grow">构建公开的商品列表与详情页面。</p>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">前台功能</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">
                        <a href="/lectures/backend/online-mall/05-admin-category-product-crud.html"
                           class="hover:text-blue-600 transition-colors duration-200">05 - 后台：分类与商品 CRUD</a>
                    </h3>
                    <i class="bi bi-pencil-square text-2xl text-blue-500 opacity-75"></i>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed flex-grow">实现管理员对分类和商品的基础管理。</p>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">后台管理</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">
                        <a href="/lectures/backend/online-mall/06-cart-implementation-db.html"
                           class="hover:text-blue-600 transition-colors duration-200">06 - 实现购物车 (数据库版)</a>
                    </h3>
                    <i class="bi bi-cart-check-fill text-2xl text-blue-500 opacity-75"></i>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed flex-grow">使用数据库持久化存储购物车数据。</p>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">核心功能</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">
                        <a href="/lectures/backend/online-mall/07-basic-checkout-flow.html"
                           class="hover:text-blue-600 transition-colors duration-200">07 - 基础下单流程 (无支付)</a>
                    </h3>
                    <i class="bi bi-clipboard-check-fill text-2xl text-blue-500 opacity-75"></i>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed flex-grow">创建 Order 表及基础下单逻辑。</p>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">核心功能</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">
                        <a href="/lectures/backend/online-mall/08-stripe-integration-basic.html"
                           class="hover:text-blue-600 transition-colors duration-200">08 - 集成 Stripe 支付 (基础)</a>
                    </h3>
                    <i class="bi bi-credit-card-2-front-fill text-2xl text-blue-500 opacity-75"></i>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed flex-grow">使用 Stripe Checkout 处理支付请求与回调。</p>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">支付集成</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/09-admin-order-viewing.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">09 - 后台管理：订单查看</h3>
                        <i class="bi bi-eye-fill text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">管理员查看订单列表与详情。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">后台管理</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/10-inventory-sku-implementation.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">10 - 库存管理与 SKU 实现</h3>
                        <i class="bi bi-boxes text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">添加 ProductSku 表支持多规格商品。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">核心功能</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/11-cart-checkout-sku-stock-update.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">11 - 购物车/下单支持 SKU/库存</h3>
                        <i class="bi bi-calculator-fill text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">修改逻辑以处理 SKU 购买与库存扣减。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">核心功能</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/12-user-review-system.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">12 - 实现用户评价系统</h3>
                        <i class="bi bi-star-half text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">允许购买用户提交和查看评价。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">扩展功能</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/13-admin-order-status-management.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">13 - 后台订单状态管理</h3>
                        <i class="bi bi-toggles text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">管理员修改订单状态与事件触发。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">后台管理</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/14-testing-application-part1.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">14 - 测试应用程序 (Part 1)</h3>
                        <i class="bi bi-clipboard-data-fill text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">为核心功能编写自动化测试。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">测试与质量</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/15-deploying-application.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">15 - 部署应用程序 (基础)</h3>
                        <i class="bi bi-server text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">生产环境部署基本流程。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">部署上线</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/16-basic-search-filtering.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">16 - 实现基础商品搜索</h3>
                        <i class="bi bi-search text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">添加按关键词搜索商品功能。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">扩展功能</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/17-admin-order-status-management-enhanced.html"
                   class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">17 - 后台订单状态管理 (增强)</h3>
                        <i class="bi bi-toggles2 text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">更完善的后台订单状态操作。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">后台管理</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/18-testing-application-part2.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">18 - 测试应用程序 (Part 2)</h3>
                        <i class="bi bi-check-circle-fill text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">完善测试覆盖，关注进阶场景。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">测试与质量</span>
                </div>
            </div>
            <div class="tutorial-card rounded-xl border border-gray-200 bg-white p-8 flex flex-col h-full shadow-sm">
                <a href="/lectures/backend/online-mall/19-deploying-application-final.html" class="block group flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">19 - 部署应用程序 (进阶/总结)</h3>
                        <i class="bi bi-cloud-arrow-up-fill text-2xl text-blue-500 opacity-75"></i>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">部署最佳实践、工具与课程总结。</p>
                </a>
                <div class="mt-5 pt-4 border-t border-gray-100">
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-medium px-2.5 py-1 rounded-full">部署上线</span>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="border-t border-gray-200 bg-white mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} LuStormstout · Lecture Navigation Portal
    </div>
</footer>

</body>
</html>
