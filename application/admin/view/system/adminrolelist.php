<div class="bjui-pageHeader">
    <a href="{:url('System/adminRoleAdd')}" class="btn btn-green" data-toggle="dialog" data-width="520" data-height="188" data-mask="true">添加角色</a>
</div>
<div class="bjui-pageContent tableContent">
    <table data-toggle="tablefixed" data-width="100%" data-nowrap="true">
        <thead>
            <tr>
                <th width="50">ID</th>
                <th width="150">角色名</th>
                <th>描述</th>
                <th width="120" align="center">启用</th>
                <th width="200" align="center">管理</th>
            </tr>
        </thead>
        <tbody>
            {foreach name="page_list" item="item" }
            <tr data-id="{$item.roleid}">
                <td>{$item.roleid}</td>
                <td>{$item.rolename}</td>
                <td>{$item.description}</td>
                <td align="center">
                    <a class="btn btn-green" data-confirm-msg="确认启用或禁用该角色吗？" data-toggle="doajax" href="{:url('System/adminRoleForbid?roleid='.$item['roleid'])}">
                        {eq name="item.status" value="1"}是{else /}否{/eq}
                    </a>
                </td>
                <td align="center">
                    {gt name="item.roleid" value="1"}
                        <a class="btn btn-green" href="{:url('System/adminPrivSetting?roleid='.$item['roleid'])}" data-toggle="dialog" mask="true" data-width="520" data-height="450"><span>权限设置</span></a> | <a class="btn btn-green" href="{:url('System/adminRoleEdit?roleid='.$item['roleid'])}" data-toggle="dialog" mask="true" data-width="520" data-height="188"><span>修改</span></a> | <a class="btn btn-red" href="{:url('System/adminRoleDelete?roleid='.$item['roleid'])}" data-toggle="doajax" data-confirm-msg="确定要删除该角色吗？"><span>删除</span></a>
                    {else /}
                        <button class="btn btn-default"><span>权限设置</span></button> | <button  class="btn btn-default"><span>修改</span></button> | <button class="btn btn-default"><span>删除</span></button>
                    {/gt}
                </td>
            </tr>
            {/foreach}
            
        </tbody>
    </table>
</div>
<div class="bjui-pageFooter">
    <div class="pages">
        <span>每页&nbsp;</span>
        <div class="selectPagesize">
            <select data-toggle="selectpicker" data-toggle-change="changepagesize">
                <option value="30">30</option>
                <option value="60">60</option>
                <option value="120">120</option>
                <option value="150">150</option>
            </select>
        </div>
        <span>&nbsp;条，共 {$page.totalCount} 条</span>
    </div>
    <div class="pagination-box" data-toggle="pagination" data-total="{$page.totalCount}" data-page-size="{$page.pageSize}" data-page-current="{$page.pageCurrent}"></div>
</div>