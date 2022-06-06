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

/* @ContaoCore/Frontend/preview_toolbar_base_js.html.twig */
class __TwigTemplate_c522cf1380e6eeed7667c9fb498e03fbd5b450d0bcdc85ee6351fe18f73df8f9 extends \Twig\Template
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
        // line 1
        echo "<style>
    .cto-toolbar {
        font-family: -apple-system,system-ui,\"Segoe UI\",Roboto,Oxygen-Sans,Ubuntu,Cantarell,\"Helvetica Neue\",sans-serif;
        font-weight: 400;
        font-size: 14px;
        line-height: 1;
        color: #444;
    }

    @media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi) {
        .cto-toolbar {
            font-weight: 300;
            color: #222;
        }
    }

    .cto-toolbar__open {
        width: 36px;
        height: 36px;
        position: fixed;
        right: 0;
        top: 0;
        background: #222;
        border-radius: 0 0 0 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 99999;
    }

    .cto-toolbar--visible .cto-toolbar__open {
        display: none;
    }

    .cto-toolbar__open a {
        opacity: .7;
    }

    .cto-toolbar__inside {
        display: grid;
        grid-template: auto / 1fr auto;
        width: 100%;
        background: #f2f2f2;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 99999;
        border-bottom: 1px solid #ccc;
    }

    .cto-toolbar--hidden .cto-toolbar__inside {
        display: none;
    }

    .cto-toolbar__close {
        border-left: 1px solid #ccc;
    }

    .cto-toolbar__close a {
        font-weight: 600;
        font-size: 29px;
        color: #444;
        text-decoration: none;
        display: block;
        padding: 3px 8px 7px 9px;
    }

    .cto-toolbar__close a:hover {
        color: #666;
        background: rgba(0, 0, 0, 0.03);
    }

    .cto-toolbar__clear {
        height: 40px;
        display: none;
    }

    .cto-toolbar--visible .cto-toolbar__clear {
        display: block;
    }

    .cto-toolbar input, .cto-toolbar select, .cto-toolbar button {
        font: inherit;
        color: inherit;
        line-height: 18px;
    }

    .cto-toolbar.ajax-loading .formbody {
        pointer-events: none;
        opacity: .5;
    }

    .cto-toolbar .formbody {
        display: flex;
        align-items: baseline;
        justify-content: flex-end;
        padding: 5px 0;
        margin-right: .5em;
    }

    .cto-toolbar .formbody > div {
        display: flex;
        align-items: baseline;
        margin-left: 1em;
    }

    @media only screen and (max-width: 676px) {
        .cto-toolbar .formbody {
            display: block;
            text-align: right;
        }

        .cto-toolbar .formbody > div {
            justify-content: flex-end;
            padding: 3px 0;
        }
    }

    .cto-toolbar label {
        width: auto;
        margin: 0 3px 0 0;
    }

    .cto-toolbar input[type=\"text\"] {
        margin: 0;
        width: auto;
        box-sizing: border-box;
        padding: 4px 6px 5px;
        border: 1px solid #aaa;
        border-radius: 2px;
        background-color: #fff;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .cto-toolbar .tl_select {
        margin: 0;
        width: auto;
        box-sizing: border-box;
        border: 1px solid #aaa;
        padding: 4px 22px 5px 6px;
        border-radius: 2px;
        background: #fff url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDUwMCA1MDAiPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxMzEuNTIzIiB5MT0iNDIuNjMiIHgyPSIzNjguNDc4IiB5Mj0iMjc5LjU4NCI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjYjNiM2IzIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjOTk5Ii8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBmaWxsPSJ1cmwoI2EpIiBkPSJNMjUwIDM5Ni42NjZjLTEuMTU1IDAtNC4xMS0xLjgzMi03LjExMy02Ljc1bC0xNjkuNi0yNzcuNDU1Yy0yLjUxNy00LjExNC0zLjE5LTYuOTgtMy4yOC04LjMxNC44MjctLjMzIDIuNTY1LS44MTIgNS42MjctLjgxMmgzNDguNzMzYzMuMDYzIDAgNC43OTguNDgyIDUuNjI3LjgxMi0uMDkgMS4zMzQtLjc2NiA0LjItMy4yOCA4LjMxNWwtMTY5LjYgMjc3LjQ1N2MtMy4wMDUgNC45MTctNS45NiA2Ljc1LTcuMTE0IDYuNzV6Ii8+PC9zdmc+) right -16px center no-repeat;
        background-origin: content-box;
        cursor: pointer;
        text-transform: none;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .cto-toolbar .tl_submit {
        margin: 0 0 0 6px;
        padding: 4px 10px 5px;
        border: 1px solid #aaa;
        border-radius: 2px;
        box-sizing: border-box;
        cursor: pointer;
        background: #eee;
        transition: background .2s ease;
        font-family: inherit;
        font-size: inherit;
    }

    @media only screen and (max-width: 676px) {
        .cto-toolbar .tl_submit {
            margin-top: 3px;
            margin-bottom: 1px;
        }
    }

    .cto-toolbar .tl_submit:hover {
        color: inherit;
        background-color: #f6f6f6;
    }

    .cto-toolbar .tl_submit:active {
        color: #aaa;
    }
</style>
<script>
    (function () {
        const toolbar = document.createElement('div');
        toolbar.classList.add('cto-toolbar');
        document.querySelector('body').prepend(toolbar);

        function request(method, uri, body, callback, addClass = true) {
            body = body || null;
            const request = new XMLHttpRequest();
            request.open(method, uri, true);
            request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            if (body instanceof URLSearchParams) {
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;charset=UTF-8');
            }

            if (addClass) {
                toolbar.classList.add('ajax-loading');
            }

            request.onload = function () {
                toolbar.classList.remove('ajax-loading');

                callback.apply(this);
            };
            request.send(body)
        }

        // Initialize toolbar
        if ('hidden' === localStorage.getItem('contao/previewBar/displayState')) {
            toolbar.classList.add('cto-toolbar--hidden');
        } else {
            toolbar.classList.add('cto-toolbar--visible');
        }

        // Fetch toolbar
        request('GET', '";
        // line 216
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "', null, function () {
            if (200 === this.status) {
                toolbar.innerHTML = this.responseText;

                const event = new Event('cto-toolbar-loaded');
                window.dispatchEvent(event);
            } else {
                toolbar.innerHTML = '<p>Error while loading the preview bar.</p>';
            }
        });

        // Js for the authenticator
        window.addEventListener(\"cto-toolbar-loaded\", function () {
            const form = toolbar.querySelector('input[name=\"FORM_SUBMIT\"][value=\"tl_switch\"]').form;
            if (!form) {
                return;
            }
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                const formData = new FormData(form);

                request('POST', form.action, formData, function () {
                    if (204 === this.status) {
                        location.reload();
                    } else {
                        location.reload();
                    }
                });
            });

            if (document.createElement('datalist') && window.HTMLDataListElement) {
                const userField = form.querySelector('input[name=\"user\"]');
                const userList = form.querySelector('datalist[id=\"userlist\"]');

                userField.addEventListener('keyup', function () {
                    if (userField.value.length < 2) {
                        return;
                    }

                    const body = {
                        FORM_SUBMIT: 'datalist_members',
                        REQUEST_TOKEN: form.querySelector('input[name=\"REQUEST_TOKEN\"]').value,
                        value: userField.value
                    };

                    request('POST', form.action, new URLSearchParams(body), function () {
                        userList.innerHTML = '';
                        JSON.parse(this.response).forEach(item => {
                            const option = document.createElement('option');
                            option.value = item;
                            userList.appendChild(option);
                        });
                    }, false);
                });
            }

            // Collapse toolbar
            Array.from([toolbar.querySelector('.cto-toolbar__close'), toolbar.querySelector('.cto-toolbar__open')]).forEach(toggle => {
                toggle.addEventListener('click', function (event) {
                    event.preventDefault();

                    const toolbar = event.currentTarget.closest('.cto-toolbar');
                    if (toolbar.classList.contains('cto-toolbar--hidden')) {
                        localStorage.setItem('contao/previewBar/displayState', 'visible');
                        toolbar.classList.replace('cto-toolbar--hidden', 'cto-toolbar--visible');
                    } else {
                        localStorage.setItem('contao/previewBar/displayState', 'hidden');
                        toolbar.classList.replace('cto-toolbar--visible', 'cto-toolbar--hidden');
                    }

                });
            });
        });
    })();
</script>
";
    }

    public function getTemplateName()
    {
        return "@ContaoCore/Frontend/preview_toolbar_base_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 216,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Frontend/preview_toolbar_base_js.html.twig", "C:\\xampp\\htdocs\\be_eco.local\\vendor\\contao\\core-bundle\\src\\Resources\\views\\Frontend\\preview_toolbar_base_js.html.twig");
    }
}
