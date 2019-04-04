    // 栏目多级显示效果
    $('.x-show').click(function () {
        if($(this).attr('status')=='true'){
            $(this).html('&#xe600;'); 
            $(this).attr('status','false');
            cateId = $(this).parents('tr').attr('cid'); 

            $("tbody tr[fid="+cateId+"]").fadeOut().find('.x-show').attr('status','false');
            $("tbody tr[ppid="+cateId+"]").fadeOut();
       }else{
            cateIds = [];
            $(this).html('&#xe6a1;');
            $(this).attr('status','true');
            cateId = $(this).parents('tr').attr('cid');
            getCateId(cateId);
            for (var i in cateIds) {
                $("tbody tr[cid="+cateIds[i]+"]").fadeIn().find('.x-show').html('&#xe6a1;').attr('status','true');
            }
       }
    })

var cateIds = [];
function getCateId(cateId) {
    
    $("tbody tr[fid="+cateId+"]").each(function(index, el) {
        id = $(el).attr('cid');
        cateIds.push(id);
        getCateId(id);
    });
}