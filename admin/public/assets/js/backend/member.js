define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'member/index' + location.search,
                    add_url: 'member/add',
                    edit_url: 'member/edit',
                    del_url: 'member/del',
                    multi_url: 'member/multi',
                    import_url: 'member/import',
                    table: 'member',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'member_id',
                sortName: 'member_id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'member_id', title: __('Member_id')},
                        {field: 'tg_id', title: __('Tg_id')},
                        {field: 'username', title: __('Username'), operate: 'LIKE'},
                        {field: 'firstname', title: __('Firstname'), operate: 'LIKE'},
                        {field: 'lastname', title: __('Lastname'), operate: 'LIKE'},
                        {field: 'headimg', title: __('Headimg'), operate: 'LIKE'},
                        {field: 'money', title: __('Money'), operate:'BETWEEN'},
                        {field: 'coin', title: __('Coin')},
                        {field: 'up_member_id', title: __('Up_member_id')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});
