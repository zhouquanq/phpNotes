$(function(){


//选择分类时生成属性与规格
	$('select[name=cid]').val(0).change(function () {
		var tid = $(':selected', this).attr('tid');
		if (tid == 0)
		{
			alert('顶级分类不能添加商品');
			return;
		}

		$('input[name=tid]').val(tid);
		$.post(getAttr, {'tid' : tid}, function (data) {
			if (data != 0)
			{
				var attr, spec, tmp;
					attr = spec = '';
				for (var i in data)
				{
					tmp = '';
					tmp += '<tr class="info">';
					tmp += '<td align="right">' + data[i].taname + '</td>';
					tmp += '<td>';
					
					if (data[i].tavalue == '')
					{
						tmp += '<input type="text" name="';

						if (data[i].class == 0)
						{
							tmp += 'attr[' + data[i].taid +']';
						}
						else
						{
							tmp += 'spec[' + data[i].taid + '][tavalue][]';
						}
						
						tmp += '"/>';
					}
					else
					{
						tmp += '<select name="';

						if (data[i].class == 0)
						{
							tmp += 'attr[' + data[i].taid +']';
						}
						else
						{
							tmp += 'spec[' + data[i].taid + '][tavalue][]';
						}

						tmp += '">';
						tmp += '<option value="0">-请选择-</option>';
						var opt = data[i].tavalue.split(',');
						var len = opt.length;
						for (var j = 0; j < len; ++j)
						{
							tmp += '<option value="' + opt[j] + '">' + opt[j] + '</option>';
						}
						tmp += '</select></td>';
					}
					if (data[i].class == 1)
					{
						tmp += '<td>附加价格 <input type="text" name="spec[' + data[i].taid +'][added][]"/></td>';
						tmp += '<td><span class="add-spec btn btn-success"><i class="icon-plus icon-white"></i>添加规格</span>';
					}
					tmp += '</td>';
					tmp += '</tr>';

					if (data[i].class == 0)
					{
						attr += tmp;
					}
					else
					{
						spec += tmp;
					}
				}
				$('#attr').empty().append(attr);
				$('#spec').empty().append(spec);
			}
			else
			{
				$('#attr').empty();
				$('#spec').empty();
			}
		}, 'json');
	});

	//添加一个规格
	$('.add-spec').live('click', function () {
		var tr = $(this).parents('tr');
		var obj = tr.clone();
		var del = '<span class="del-spec btn btn-info"><i class="icon-white icon-minus"></i>删除规格</span>';
		obj.find('td').eq(3).find('.add-spec').remove();
		obj.find('td').eq(3).append(del);
		tr.after(obj);
	});

	//删除一个规格
	$('.del-spec').live('click', function() {
		$(this).parents('tr').remove();
	});


	//百度编辑器
	window.UEDITOR_HOME_URL = root + '/Public/Ueditor';
	//百度编辑器不能用百分比设置宽度吗？？？对，不能,只能设置数字的像素值
	// window.UEDITOR_CONFIG.initialFrameWidth = 1101;
	//图片上传提交地址
    window.UEDITOR_CONFIG.imageUrl = handler; 
    //图片修正地址
    window.UEDITOR_CONFIG.imagePath = root + '/Uploads/Editor/';
    window.UEDITOR_CONFIG.toolbars = [
            ['fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe','insertcode', 'webapp', 'pagebreak', 'template', 'background', '|',
                'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', '|',
                'print', 'preview', 'searchreplace', 'help']
        ];                   
	UE.getEditor('intro');
	UE.getEditor('service');
	// 点击出现编辑器
	$('.next_show').click(function(){
		$(this).next().toggle(600);
	});


	//Uploadify 图片上传
	var upload = {
		fileTypeDesc : '请选择LOGO图片',
    	fileTypeExts : '*.gif; *.jpeg; *.jpg; *.png',
    	buttonImage : uploadify_path + '/btn.png',
    	// 'buttonText' : '浏览...',
    	width	: 120,
        height  : 30,
        swf		: uploadify_path + '/uploadify.swf',
        //解决某些浏览器丢失SESSION问题
        formData : {sess_name : sess_id}
	};
	//列表图上传地址
    upload.uploader = pic_uploader;
    //列表图回调函数
    upload.onUploadSuccess = function (file, data, response) {
    	eval('data=' + data);
    	img = '<img src="'+upload_path+'/Pic/' + data.name + '" width="100" height="100" />';
    	img += '<input type="hidden" name="pic" value="' + data.name + '"/>';
    	$('#pic-list').empty().append(img);

    }
	$("#pic").uploadify(upload);


	//商品图册上传地址
    upload.uploader = photo_uploader;
    //商品图册回调函数
    upload.onUploadSuccess = function (file, data, response) {
    	eval('data=' + data);
    	if (data.status == 0)
    	{
    		alert(data.msg);
    	}
    	else
    	{
    		var div = '<div style="float:left">';
    			div += '<img src="'+upload_path+'/Photo/' + data.medium + '" width="100" height="100" />';
    			div += '<input type="hidden" name="max[]" value="' + data.max + '"/>';
    			div += '<input type="hidden" name="medium[]" value="' + data.medium + '"/>';
    			div += '<input type="hidden" name="mini[]" value="' + data.mini + '"/>';
    			div += '<span class="del-pic btn btn-info">删除</span>';
    			$('#photo-list').append(div);
    	}
    }
	$("#photo").uploadify(upload);

	//商品图册 点删除 异步删除
	$('.del-pic').live('click', function () {
		var obj = $(this).parent('div');
		var del = {
			'mini' : $(this).prev().val(),
			'medium' : $(this).prev().prev().val(),
			'max' : $(this).prev().prev().prev().val()
		};
		$.post(delPic, del, function (data) {
			if (data == 0)
			{
				alert('删除失败');
			}
			else
			{
				obj.remove();
			}
		}, 'json');
	});



});