/* 
* @Author: nic-tes
* @Date:   2014-03-12 16:58:42
* @Last Modified by:   nic-tes
* @Last Modified time: 2014-03-12 18:20:59
*/

$(document).ready(function(){
    //点击编辑标签效果
    $('.edit_tag').click(function() {
    	//原来显示标签名的隐藏
    	var tr = $(this).parents('tr');
    	tr.find('span.name').hide();

    	//显示input表单
    	tr.find('input[name=tagname]').show();

    	//把编辑变为保存
    	$(this).parents('tr').find('.submit_tag').show();
    	$(this).hide();
    	
    });
});