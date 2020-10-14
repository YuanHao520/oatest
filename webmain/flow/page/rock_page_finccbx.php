<?php
/**
*	模块：finccbx.出差报销
*	说明：自定义区域内可写你想要的代码
*	来源：流程模块→表单元素管理→[模块.出差报销]→生成列表页
*/
defined('HOST') or die ('not access');
?>
<script>
$(document).ready(function(){
	{params}
	var modenum = 'finccbx',modename='出差报销',isflow=1,modeid='25',atype = params.atype,pnum=params.pnum,modenames='报销明细',listname='ZmluaW5mb20:';
	if(!atype)atype='';if(!pnum)pnum='';
	var fieldsarr = [{"name":"\u7533\u8bf7\u4eba","fields":"base_name"},{"name":"\u7533\u8bf7\u4eba\u90e8\u95e8","fields":"base_deptname"},{"name":"\u5355\u53f7","fields":"sericnum"},{"fields":"applydt","name":"\u7533\u8bf7\u65e5\u671f","fieldstype":"text","ispx":"0","isalign":"0","islb":"1"},{"fields":"bills","name":"\u9644\u5355\u636e(\u5f20)","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"purpose","name":"\u51fa\u5dee\u76ee\u7684","fieldstype":"text","ispx":"0","isalign":"0","islb":"1"},{"fields":"purresult","name":"\u51fa\u5dee\u6210\u679c","fieldstype":"text","ispx":"0","isalign":"0","islb":"1"},{"fields":"fullname","name":"\u6536\u6b3e\u4eba\u5168\u79f0","fieldstype":"text","ispx":"0","isalign":"0","islb":"0"},{"fields":"paytype","name":"\u4ed8\u6b3e\u65b9\u5f0f","fieldstype":"rockcombo","ispx":"0","isalign":"0","islb":"0"},{"fields":"cardid","name":"\u6536\u6b3e\u5e10\u53f7","fieldstype":"text","ispx":"0","isalign":"0","islb":"0"},{"fields":"openbank","name":"\u5f00\u6237\u884c","fieldstype":"text","ispx":"0","isalign":"0","islb":"0"},{"fields":"money","name":"\u62a5\u9500\u91d1\u989d","fieldstype":"text","ispx":"0","isalign":"0","islb":"1"},{"fields":"moneycn","name":"\u5927\u5199\u91d1\u989d","fieldstype":"text","ispx":"0","isalign":"0","islb":"0"},{"fields":"explain","name":"\u8bf4\u660e","fieldstype":"textarea","ispx":"0","isalign":"0","islb":"1"},{"fields":"type","name":"\u5355\u636e\u7c7b\u578b","fieldstype":"fixed","ispx":"0","isalign":"0","islb":"0"}],fieldsselarr= [],chufarr= [];
	
	<?php
	include_once('webmain/flow/page/rock_page.php');
	?>
	
//[自定义区域start]



//[自定义区域end]

	js.initbtn(c);
	var a = $('#view'+modenum+'_{rand}').bootstable(bootparams);
	c.init();
	
});
</script>
<!--SCRIPTend-->
<!--HTMLstart-->
<div>
	<table width="100%">
	<tr>
		<td style="padding-right:10px;" id="tdleft_{rand}" nowrap><button id="addbtn_{rand}" class="btn btn-primary" click="clickwin,0" disabled type="button"><i class="icon-plus"></i> 新增</button></td>
		<td>
			<input class="form-control" style="width:160px" id="key_{rand}" placeholder="关键字/申请人/单号">
		</td>
		<td style="padding-left:10px"><select class="form-control" style="width:120px" id="selstatus_{rand}"><option value="">-全部状态-</option><option style="color:blue" value="0">待处理</option><option style="color:green" value="1">已审核</option><option style="color:red" value="2">不同意</option><option style="color:#888888" value="5">已作废</option><option style="color:#17B2B7" value="23">退回</option></select></td>
		<td style="padding-left:10px">
			<div style="white-space:nowrap">
			<button style="border-right:0;border-top-right-radius:0;border-bottom-right-radius:0" class="btn btn-default" click="searchbtn" type="button">搜索</button><button class="btn btn-default" id="downbtn_{rand}" type="button" style="padding-left:8px;padding-right:8px;border-top-left-radius:0;border-bottom-left-radius:0"><i class="icon-angle-down"></i></button> 
			</div>
		</td>
		<td  width="90%" style="padding-left:10px"><div id="changatype{rand}" class="btn-group"></div></td>
	
		<td align="right" id="tdright_{rand}" nowrap>
			<button class="btn btn-default" style="display:none" id="daobtn_{rand}" disabled click="daochu" type="button">导出 <i class="icon-angle-down"></i></button> 
		</td>
	</tr>
	</table>
</div>
<div class="blank10"></div>
<div id="viewfinccbx_{rand}"></div>
<!--HTMLend-->