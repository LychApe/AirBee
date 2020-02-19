<!--工具栏-主体代码-->
<header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
        <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">&#xe3e7;</i></span>
        <a href="" class="mdui-typo-title">FnB Air</a>
        <div class="mdui-toolbar-spacer">One</div>
<!--工具栏-用户小窗-->
        <button class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#FnB-E2'}"><i class="mdui-icon material-icons">account_circle</i></button>
          <ul class="mdui-menu mdui-menu-cascade" id="FnB-E2">
            <li class="mdui-menu-item">
              <a href="javascript:;" class="mdui-ripple">
                <i class="mdui-menu-item-icon mdui-icon material-icons">format_bold</i>
                Bold
                <span class="mdui-menu-item-helper">Ctrl+B</span>
              </a>
            </li>
            <li class="mdui-divider"></li>
          </ul>
    </div>