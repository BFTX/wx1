/**
 * js 公共函数扩展库
 */

window['File']={};
window['Show']={};

Show.alert=function($msg){
	alert($msg);
};

/*************************** 
 * 客户端判断文件大小，限制文件类型 ，通用过滤函数 
 * 兼容ie6，ie7，ie8 ，Google Chrome，ff等浏览器
 * **** ************************************ 
 * 使用方法 
 * <input type="file" onchange="checkFile(this,500)" />*** 
 * create by Mr.Wx 2016/01/27
 *****/

 /**
 * 检查文件大小 
 * @param object: target=this
 * @param int:max allow size 单位 k 
 */

function checkFile(target,filemaxsize) 
{
	var fileSize = 0;
	var filemaxsize = filemaxsize?filemaxsize:500;
	var filetypes =['.jpg','.jpeg','.gif','.png','.bmp',".rar",'.7z',".txt",".zip",'.doc','.xls','.pdf','.ppt','.docx','.xlsx','.pptx'];
	
	if(filepath){
		var is_ext = false;
		var fileend = filepath.substring(filepath.lastIndexOf("."));
		if(filetypes && filetypes.length>0)
		{   var f_length=filetypes.length;
			for(var i =0; i<f_length;i++)
			{
				if(filetypes[i]==fileend)
				{
					is_ext = true;
					break;
				}
			}
		}
		if(!is_ext)
		{
			Core.MinMessage.Show({text:"不接受此文件类型！",type:'err',timeout:1800});
			target.value ="";
			return false;
		}
	}else{
		Core.MinMessage.Show({text:"请选择文件！",type:'err',timeout:1800});
		return false;
	}
	
	if (isIE && !target.files) {
		var filePath = target.value;
		var fileSystem = new ActiveXObject("Scripting.FileSystemObject");
		if(!fileSystem.FileExists(filePath))
		{
			Core.MinMessage.Show({text:"请选择文件！",type:'err',timeout:1800});
			return false;
		}
		var file = fileSystem.GetFile (filePath);
		fileSize = file.Size;
	} else {
		fileSize = target.files[0].size;
	}

	var size = fileSize / 1024;
	if(size>filemaxsize)
	{
		Core.MinMessage.Show({text:"文件 大小不能大于"+filemaxsize+"k！",type:'err',timeout:1800});
		target.value ="";
		return false;
	}
	if(size<=0)
	{
		Core.MinMessage.Show({text:"文件大小不能为0k！",type:'err',timeout:1800});
		target.value ="";
		return false;
	}
} 