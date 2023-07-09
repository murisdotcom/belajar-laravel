$(document).ready(function(){
    $('#usersTable').DataTable({
        processing:true,
        serverSide:true,
        ajax:'/jsonUsers',
        columns:[
            {data:'noUrut',name:'noUrut'},
            {data:'username',name:'username'},
            {data:'section_cd',name:'section_cd'},
            {data:'nik',name:'nik'},
            {data:'email',name:'email'},
            {data:'action',name:'action'}
        ]
    })

    $('#menusTable').DataTable({
        processing:true,
        serverSide:true,
        ajax:'/jsonMenus',
        columns:[
            {data:'noUrut',name:'noUrut'},
            {data:'form_id',name:'form_id'},
            {data:'form_nm',name:'form_nm'},
            {data:'parent',name:'parent'},
            {data:'url',name:'url'},
            {data:'fa_icon',name:'fa_icon'},
            // {data:'allow_create',name:'allow_create'},
            // {data:'allow_update',name:'allow_update'},
            // {data:'allow_delete',name:'allow_delete'},
            // {data:'allow_print',name:'allow_print'},
            // {data:'allow_conf',name:'allow_conf'},
            // {data:'allow_open',name:'allow_open'},
            {data:'action',name:'action'}
        ]
    })
})
